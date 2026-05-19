<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');
Route::get('/cv/download', [ProfileController::class, 'downloadCv'])->name('cv.download');

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{slug}', [PostController::class, 'show'])->name('show');
});
