<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SicknessController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\ClinicPhotoController;
use App\Http\Controllers\PhotoController;

 

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medic', MedicController::Class);
Route::resource('clinic', ClinicController::Class);
Route::resource('expertise', ExpertiseController::Class);
Route::resource('schedule', ScheduleController::Class);
Route::resource('sickness', SicknessController::Class);
Route::resource('treatment', TreatmentController::Class);
route::resource('photo', PhotoController::Class);
route::resource('clinicphoto', ClinicPhotoController::Class);