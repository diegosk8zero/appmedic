<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ExpertiseController;

 

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medics', MedicController::class);
Route::resource('clinics', ClinicController::class);
Route::resource('expertises', ExpertiseController::class);