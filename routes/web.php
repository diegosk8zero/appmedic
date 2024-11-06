<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicController;
use App\Http\Controllers\ClinicController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medics', MedicController::class);
Route::resource('clinics', ClinicController::class);