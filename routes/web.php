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


Route::middleware('auth')->prefix('profile')->group(function() {
    Route::get('/complete', [ProfileController::class, 'complete'])->name('profile.complete');
    Route::post('/complete', [ProfileController::class, 'store'])->name('profile.complete.update');
});
