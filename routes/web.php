<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ContactSettingsController;
use App\Models\Partner;
use App\Models\ContactSetting;

Route::get('/', function () {
    $partners = Partner::orderBy('display_order')->get();

    return view('home', compact('partners'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    $contactSettings = ContactSetting::first();

    return view('contact', compact('contactSettings'));
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Route::get('/application', [App\Http\Controllers\ApplicationController::class, 'show'])->name('application');
Route::post('/application', [App\Http\Controllers\ApplicationController::class, 'store'])->name('application.submit');

Route::get('/apply', [App\Http\Controllers\ApplicationController::class, 'show'])->name('apply');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');

    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::resource('partners', PartnerController::class)->names('admin.partners')->except(['show']);
        Route::get('contact-settings', [ContactSettingsController::class, 'edit'])->name('admin.contact.edit');
        Route::put('contact-settings', [ContactSettingsController::class, 'update'])->name('admin.contact.update');
    });
});
