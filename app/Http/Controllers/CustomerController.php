<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $bookings = auth()->user()->bookingsAsCustomer;
        return view('customer.dashboard', compact('bookings'));
    }

    public function guides(Request $request)
    {
        $query = User::where('role', 'guide')->whereHas('guideProfile');

        // Filter berdasarkan level
        if ($request->level) {
            $query->whereHas('guideProfile', fn($q) => $q->where('level', $request->level));
        }

        // Filter berdasarkan tanggal
        if ($request->date) {
            $date = $request->date;
            $query->whereDoesntHave('bookingsAsGuide', function ($q) use ($date) {
                $q->where('status', '!=', 'cancelled')
                    ->whereDate('start_time', '<=', $date)
                    ->whereDate('end_time', '>=', $date);
            });
        }

        $guides = $query->with('guideProfile')->get();
        return view('customer.guides.index', compact('guides'));
    }
}
