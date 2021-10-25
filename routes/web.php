<?php

use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\universalController;
use Illuminate\Support\Facades\Route;


Route::get('/', [universalController::class,'index'])->name('home');
Route::get('blog', [universalController::class,'blog'])->name('blog');
Route::get('courses', [universalController::class,'courses'])->name('courses');
Route::get('videos', [universalController::class,'videos'])->name('videos');
Route::get('contact', [contactcontroller::class,'contact'])->name('contact');
Route::get('about', function () {
    return view('about');
})->name('about');
