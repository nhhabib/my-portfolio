<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 🚀 Home page route (Portfolio)
Route::get('/', function () {
    return view('home'); // this will load resources/views/home.blade.php
})->name('home');

// Dashboard (optional)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile (optional)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes (Breeze)
require __DIR__.'/auth.php';

