<?php

use App\Http\Controllers\pages\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/', [HomeController::class, 'index'])->name('homepage');

