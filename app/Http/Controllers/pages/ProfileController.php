<?php

namespace App\Http\Controllers\pages;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function renderProfileComplete(): View
    {
        return view('pages.complete-profile');
    }
}
