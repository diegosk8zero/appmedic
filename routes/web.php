<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SicknessController;

 

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medics', MedicController::class);
Route::resource('clinics', ClinicController::class);
Route::resource('expertises', ExpertiseController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('sicknesses', SicknessController::class);