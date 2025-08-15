<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $bookings = auth()->user()->bookingsAsCustomer;
        return view('landing.landing-page', compact('bookings'));
    }

    public function guides(Request $request)
    {
        $query = User::where('role', 'guide')->whereHas('guideProfile');

        // Filter level (junior/intermediate/profesional)
        if ($request->level) {
            $query->whereHas('guideProfile', fn($q) => $q->where('level', $request->level));
        }

        // Filter tanggal
        if ($request->date) {
            $date = $request->date;
            $query->whereDoesntHave('bookingsAsGuide', function ($q) use ($date) {
                $q->where('status', '!=', 'cancelled')
                    ->whereDate('start_time', '<=', $date)
                    ->whereDate('end_time', '>=', $date);
            });
        }

        // Filter bahasa
        if ($request->languages) {
            $languages = (array) $request->languages;
            $query->whereHas('guideProfile', function ($q) use ($languages) {
                foreach ($languages as $lang) {
                    $q->whereJsonContains('languages', $lang);
                }
            });
        }

        // Filter skills
        if ($request->skills) {
            $skills = (array) $request->skills;
            $query->whereHas('guideProfile', function ($q) use ($skills) {
                foreach ($skills as $skill) {
                    $q->whereJsonContains('skills', $skill);
                }
            });
        }

        // Sort harga
        if ($request->sort_price == 'low') {
            $query->orderBy('guideProfile->daily_rate', 'asc');
        } elseif ($request->sort_price == 'high') {
            $query->orderBy('guideProfile->daily_rate', 'desc');
        }

        $guides = $query->with('guideProfile')->get();

        return view('landing.guide-list', compact('guides'));
    }
}
