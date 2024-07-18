<?php

use App\Http\Controllers\Auth\AuthController;
use App\Livewire\Companies;
use App\Livewire\Dashboard;
use App\Livewire\RegisterWizard;
use App\Livewire\Roadmaps;
use App\Livewire\Technologies;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/mingle-demo', 'mingle-demo');


Route::get('register', RegisterWizard::class)->name('register');

Route::middleware('auth')->group(function (){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('roadmaps', Roadmaps::class)->name('roadmaps');
    Route::get('roadmaps', Roadmaps::class)->name('roadmaps');
    Route::get('technologies', Technologies::class)->name('technologies');
    Route::get('companies', Companies::class)->name('companies');

});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::view('about','/about')->name('about');

require __DIR__ . '/auth.php';
