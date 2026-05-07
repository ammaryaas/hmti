<?php

use App\Livewire\AboutUsKabinet;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/about-us')->name('about-us')->group(function() {
    Route::view('/', 'about-us');
    Route::view('/ikati', 'about-us-ikati')->name('-ikati');
    Route::get('/kabinet', AboutUsKabinet::class)->name('-kabinet');
});
    
Route::view('/artery', 'artery')->name('artery');
Route::view('/corner', 'corner')->name('corner');
Route::view('/seminar', 'seminar')->name('seminar');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
