<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookings()
    {
        $bookings = Booking::where('customer_id', auth()->id())
            ->with(['guide', 'guide.guideProfile'])
            ->latest()
            ->get();

        return view('customer.bookings.index', compact('bookings'));
    }
    
    public function create($guideId)
    {
        $guide = User::findOrFail($guideId);
        return view('customer.bookings.create', compact('guide'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guide_id' => 'required|exists:users,id,role,guide',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'number_of_travelers' => 'required|integer|min:1',
            'destination' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $guide = User::findOrFail($request->guide_id);
        $profile = $guide->guideProfile;

        // Cek kapasitas
        if ($request->number_of_travelers > $profile->max_travelers) {
            return back()->withErrors(['number_of_travelers' => "Maksimal {$profile->max_travelers} orang."]);
        }

        // Cek ketersediaan (sederhana: cek konflik booking)
        $conflict = Booking::where('guide_id', $guide->id)
            ->where('status', '!=', 'cancelled')
            ->where(function ($q) use ($request) {
                $q->whereBetween('start_time', [$request->start_time, $request->end_time])
                    ->orWhereBetween('end_time', [$request->start_time, $request->end_time])
                    ->orWhere(function ($q) use ($request) {
                        $q->where('start_time', '<=', $request->start_time)
                            ->where('end_time', '>=', $request->end_time);
                    });
            })->exists();

        if ($conflict) {
            return back()->withErrors(['start_time' => 'Guide tidak tersedia di tanggal tersebut.']);
        }

        // Hitung harga
        $start = Carbon::parse($request->start_time);
        $end = Carbon::parse($request->end_time);
        $totalDays = $start->diffInDays($end) + 1;

        $subTotal = $profile->daily_rate * $totalDays;
        $feeType = Setting::getValue('platform_fee_type') ?? 'percentage';
        $feeValue = (float) Setting::getValue('platform_fee_value') ?? 15;

        $platformFee = $feeType === 'percentage'
            ? ($subTotal * $feeValue / 100)
            : $feeValue;

        $totalPrice = $subTotal + $platformFee;

        Booking::create([
            'customer_id' => auth()->id(),
            'guide_id' => $guide->id,
            'guide_profile_id' => $profile->id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'total_days' => $totalDays,
            'number_of_travelers' => $request->number_of_travelers,
            'destination' => $request->destination,
            'notes' => $request->notes,
            'status' => 'pending',
            'guide_daily_rate' => $profile->daily_rate,
            'sub_total' => $subTotal,
            'platform_fee' => $platformFee,
            'total_price' => $totalPrice,
            'fee_type' => $feeType,
            'fee_value' => $feeValue,
        ]);

        return redirect('/customer/bookings')->with('success', 'Booking berhasil dibuat!');
    }
}
