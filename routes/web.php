<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

// Student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/prediction/history', [StudentController::class, 'history'])->name('students.prediction.history');

// Prediction
Route::post('/students', [StudentController::class, 'predict'])->name('students.predict');

// Result
Route::get('/students/prediction/result', [StudentController::class, 'show'])->name('students.show.prediction.results');