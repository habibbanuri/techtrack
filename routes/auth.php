<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\RegisterWizard;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('register', RegisterWizard::class)->name('register');

Route::middleware('guest')->group(function () {
    // Volt::route('register', 'livewire:register-wizard')
    //     ->name('register');

    Volt::route('login', 'pages.auth.login')
        ->name('login');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');
});
