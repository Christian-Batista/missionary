<?php

use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('profile', function() {
    return view('livewire.profile.complete-profile');
});


Route::middleware('auth')->prefix('profile')->group(function() {
    Route::get('/complete', [ProfileController::class, 'renderProfileComplete'])->name('profile.complete');
});
