<?php

namespace App\Http\Controllers\pages;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function renderProfileComplete(): View
    {
        $user = auth()->user();
        $profile = Profile::where('user_id', $user->id)->first();
        $isProfileComplete = false;
        if ($profile) {
            $isProfileComplete = true;
        }
        
        return view('pages.complete-profile', [
            'isProfileComplete' => $isProfileComplete,
            'profile' => $profile,
        ]);
    }
}
