<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/application', [App\Http\Controllers\ApplicationController::class, 'show'])->name('application');
Route::post('/application', [App\Http\Controllers\ApplicationController::class, 'store'])->name('application.submit');

Route::get('/apply', [App\Http\Controllers\ApplicationController::class, 'show'])->name('apply');
