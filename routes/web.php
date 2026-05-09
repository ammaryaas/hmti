<?php

use App\Livewire\AboutUsKabinet;
use App\Livewire\NewsDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/about-us')->name('about-us')->group(function() {
    Route::view('/', 'about-us');
    Route::view('/ikati', 'about-us-ikati')->name('-ikati');
    Route::get('/kabinet', AboutUsKabinet::class)->name('-kabinet');
});

Route::prefix('/corner')->name('corner')->group(function() {
    Route::view('/', 'corner');
    Route::get('/{slug}', NewsDetail::class)->name('.show');
});

Route::view('/seminar', 'seminar')->name('seminar');
Route::view('/wisuda', 'wisuda')->name('wisuda');
Route::view('/artery', 'artery')->name('artery');

require __DIR__.'/auth.php';
