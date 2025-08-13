<?php

namespace App\Http\Controllers;

use App\Models\GuideProfile;
use Illuminate\Http\Request;

class GuideProfileController extends Controller
{
        public function edit()
    {
        $profile = auth()->user()->guideProfile ?? new GuideProfile();
        return view('guide.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'bio' => 'nullable|string',
            'experience' => 'nullable|string',
            'languages' => 'required|array',
            'skills' => 'required|array',
            'daily_rate' => 'required|numeric|min:100000',
            'max_travelers' => 'required|integer|min:1|max:20',
            'level' => 'required|in:junior,intermediate,expert',
        ]);

        $guide = auth()->user();
        $profile = $guide->guideProfile ?? $guide->guideProfile()->make();

        $profile->fill($request->all());
        $profile->status = 'active';
        $guide->guideProfile()->save($profile);

        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}
