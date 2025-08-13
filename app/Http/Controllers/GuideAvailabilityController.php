<?php

namespace App\Http\Controllers;

use App\Models\GuideAvailability;
use Illuminate\Http\Request;

class GuideAvailabilityController extends Controller
{
    public function index()
    {
        $availabilities = GuideAvailability::where('guide_id', auth()->id())
            ->orderBy('date')
            ->get();

        return view('guide.availability.index', compact('availabilities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date|unique:guide_availabilities,date,NULL,id,guide_id,' . auth()->id(),
            'status' => 'required|in:available,unavailable',
        ]);

        GuideAvailability::create([
            'guide_id' => auth()->id(),
            'date' => $request->date,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $availability = GuideAvailability::where('id', $id)
            ->where('guide_id', auth()->id())
            ->firstOrFail();

        $availability->delete();

        return back()->with('success', 'Jadwal berhasil dihapus.');
    }
}
