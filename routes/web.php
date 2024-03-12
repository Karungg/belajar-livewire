<?php

use App\Livewire\Clicker;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::view('clicker', 'dashboard')->name('clicker');
});

require __DIR__ . '/auth.php';
