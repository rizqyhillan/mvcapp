<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;

Route::resource('patients', PatientController::class);

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/hero', function () {
    return view('sections.hero');
})->name('hero');
