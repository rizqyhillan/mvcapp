<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('patients', PatientController::class);
});

Route::get('/hero', function () {
    return view('sections.hero');
})->name('hero');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/departementDetails', function () {
    return view('pages.departementDetails');
})->name('departementDetails');

Route::get('/doctors', function () {
    return view('pages.doctors');
})->name('doctors');

Route::get('/appointment', function () {
    return view('pages.appointment');
})->name('appointment');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/departements', function () {
    return view('pages.departements');
})->name('departements');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/serviceDetails', function () {
    return view('pages.serviceDetails');
})->name('serviceDetails');

Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/404', function () {
    return view('pages.404');
})->name('404');

Route::get('/departementDetails', function () {
    return view('pages.departementDetails');
})->name('departementDetails');
