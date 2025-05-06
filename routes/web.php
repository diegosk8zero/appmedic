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



//rotas que serao utilizadas 
/**
 * // Rotas para Médicos (Medic)
Route::get('medic', [MedicController::class, 'index'])->name('medic.index');
Route::get('medic/create', [MedicController::class, 'create'])->name('medic.create');
Route::post('medic', [MedicController::class, 'store'])->name('medic.store');
Route::get('medic/{medic}', [MedicController::class, 'show'])->name('medic.show');
Route::get('medic/{medic}/edit', [MedicController::class, 'edit'])->name('medic.edit');
Route::put('medic/{medic}', [MedicController::class, 'update'])->name('medic.update');
Route::patch('medic/{medic}', [MedicController::class, 'update']);
Route::delete('medic/{medic}', [MedicController::class, 'destroy'])->name('medic.destroy');

// Rotas para Clínicas (Clinic)
Route::get('clinic', [ClinicController::class, 'index'])->name('clinic.index');
Route::get('clinic/create', [ClinicController::class, 'create'])->name('clinic.create');
Route::post('clinic', [ClinicController::class, 'store'])->name('clinic.store');
Route::get('clinic/{clinic}', [ClinicController::class, 'show'])->name('clinic.show');
Route::get('clinic/{clinic}/edit', [ClinicController::class, 'edit'])->name('clinic.edit');
Route::put('clinic/{clinic}', [ClinicController::class, 'update'])->name('clinic.update');
Route::patch('clinic/{clinic}', [ClinicController::class, 'update']);
Route::delete('clinic/{clinic}', [ClinicController::class, 'destroy'])->name('clinic.destroy');

// Rotas para Especialidades (Expertise)
Route::get('expertise', [ExpertiseController::class, 'index'])->name('expertise.index');
Route::get('expertise/create', [ExpertiseController::class, 'create'])->name('expertise.create');
Route::post('expertise', [ExpertiseController::class, 'store'])->name('expertise.store');
Route::get('expertise/{expertise}', [ExpertiseController::class, 'show'])->name('expertise.show');
Route::get('expertise/{expertise}/edit', [ExpertiseController::class, 'edit'])->name('expertise.edit');
Route::put('expertise/{expertise}', [ExpertiseController::class, 'update'])->name('expertise.update');
Route::patch('expertise/{expertise}', [ExpertiseController::class, 'update']);
Route::delete('expertise/{expertise}', [ExpertiseController::class, 'destroy'])->name('expertise.destroy');

// Rotas para Agendamentos (Schedule)
Route::get('schedule', [ScheduleController::class, 'index'])->name('schedule.index');
Route::get('schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::post('schedule', [ScheduleController::class, 'store'])->name('schedule.store');
Route::get('schedule/{schedule}', [ScheduleController::class, 'show'])->name('schedule.show');
Route::get('schedule/{schedule}/edit', [ScheduleController::class, 'edit'])->name('schedule.edit');
Route::put('schedule/{schedule}', [ScheduleController::class, 'update'])->name('schedule.update');
Route::patch('schedule/{schedule}', [ScheduleController::class, 'update']);
Route::delete('schedule/{schedule}', [ScheduleController::class, 'destroy'])->name('schedule.destroy');

// Rotas para Doenças (Sickness)
Route::get('sickness', [SicknessController::class, 'index'])->name('sickness.index');
Route::get('sickness/create', [SicknessController::class, 'create'])->name('sickness.create');
Route::post('sickness', [SicknessController::class, 'store'])->name('sickness.store');
Route::get('sickness/{sickness}', [SicknessController::class, 'show'])->name('sickness.show');
Route::get('sickness/{sickness}/edit', [SicknessController::class, 'edit'])->name('sickness.edit');
Route::put('sickness/{sickness}', [SicknessController::class, 'update'])->name('sickness.update');
Route::patch('sickness/{sickness}', [SicknessController::class, 'update']);
Route::delete('sickness/{sickness}', [SicknessController::class, 'destroy'])->name('sickness.destroy');

// Rotas para Tratamentos (Treatment)
Route::get('treatment', [TreatmentController::class, 'index'])->name('treatment.index');
Route::get('treatment/create', [TreatmentController::class, 'create'])->name('treatment.create');
Route::post('treatment', [TreatmentController::class, 'store'])->name('treatment.store');
Route::get('treatment/{treatment}', [TreatmentController::class, 'show'])->name('treatment.show');
Route::get('treatment/{treatment}/edit', [TreatmentController::class, 'edit'])->name('treatment.edit');
Route::put('treatment/{treatment}', [TreatmentController::class, 'update'])->name('treatment.update');
Route::patch('treatment/{treatment}', [TreatmentController::class, 'update']);
Route::delete('treatment/{treatment}', [TreatmentController::class, 'destroy'])->name('treatment.destroy');

// Rotas para Fotos (Photo)
Route::get('photo', [PhotoController::class, 'index'])->name('photo.index');
Route::get('photo/create', [PhotoController::class, 'create'])->name('photo.create');
Route::post('photo', [PhotoController::class, 'store'])->name('photo.store');
Route::get('photo/{photo}', [PhotoController::class, 'show'])->name('photo.show');
Route::get('photo/{photo}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
Route::put('photo/{photo}', [PhotoController::class, 'update'])->name('photo.update');
Route::patch('photo/{photo}', [PhotoController::class, 'update']);
Route::delete('photo/{photo}', [PhotoController::class, 'destroy'])->name('photo.destroy');

// Rotas para Fotos da Clínica (ClinicPhoto)
Route::get('clinicphoto', [ClinicPhotoController::class, 'index'])->name('clinicphoto.index');
Route::get('clinicphoto/create', [ClinicPhotoController::class, 'create'])->name('clinicphoto.create');
Route::post('clinicphoto', [ClinicPhotoController::class, 'store'])->name('clinicphoto.store');
Route::get('clinicphoto/{clinicphoto}', [ClinicPhotoController::class, 'show'])->name('clinicphoto.show');
Route::get('clinicphoto/{clinicphoto}/edit', [ClinicPhotoController::class, 'edit'])->name('clinicphoto.edit');
Route::put('clinicphoto/{clinicphoto}', [ClinicPhotoController::class, 'update'])->name('clinicphoto.update');
Route::patch('clinicphoto/{clinicphoto}', [ClinicPhotoController::class, 'update']);
Route::delete('clinicphoto/{clinicphoto}', [ClinicPhotoController::class, 'destroy'])->name('clinicphoto.destroy');
 * 
 * 
 */