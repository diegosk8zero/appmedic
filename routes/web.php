<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SicknessController;
use App\Http\Controllers\TreatmentController;

 

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medics', MedicController::Class);
Route::resource('clinics', ClinicController::Class);
Route::resource('expertises', ExpertiseController::Class);
Route::resource('schedules', ScheduleController::Class);
Route::resource('sicknesses', SicknessController::Class);
Route::resource('treatments', TreatmentController::Class);