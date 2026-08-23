<?php

use App\Livewire\AboutUsKabinet;
use App\Livewire\DataCenter;
use App\Livewire\HomeStudentInfo;
use App\Livewire\EventPage;
use App\Livewire\NewsDetail;
use Illuminate\Support\Facades\Route;
// use Spatie\Sitemap\SitemapGenerator;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/about-us')->name('about-us')->group(function() {
    Route::view('/', 'about-us');
    Route::view('/struktur', 'about-us-struktur-page')->name('-struktur');
    Route::view('/ikati', 'about-us-ikati')->name('-ikati');
    Route::get('/kabinet', AboutUsKabinet::class)->name('-kabinet');
});

Route::prefix('/corner')->name('corner')->group(function() {
    Route::view('/', 'corner');
    Route::view('/apresiasi', 'apresiasi')->name('-apresiasi');
    Route::get('/{slug}', NewsDetail::class)->name('-show');
});

Route::view('/seminar', 'seminar')->name('seminar');
Route::view('/wisuda', 'wisuda')->name('wisuda');
Route::get('/event', EventPage::class)->name('event');
Route::view('/data-center', 'data-center-page')->name('data-center');

// route buat tracking klik link data center
Route::get('/data-center/{id}', [DataCenter::class, 'visit'])->name('data-center.visit');

// route buat tracking klik link student info
Route::get('student-info/{id}', [HomeStudentInfo::class, 'visit'])->name('student-info.visit');

require __DIR__.'/auth.php';
