<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Teacher Routes

// Teacher List
Route::get('/read/teachers', [TeacherController::class, 'index'])->name('teacher.read');

// Add Teacher
Route::get('/add/teacher', [TeacherController::class, 'create'])->name('teacher.create');
// Save The Data of Teacher
Route::post('/add/teacher', [TeacherController::class, 'insert'])->name('teacher.insert');

// Create the edit Teacher form
Route::get('/edit/teacher/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');

// Update the teacher
Route::post('/edit/teacher/{id}', [TeacherController::class, 'update'])->name('teacher.update');

// Delete the teacher
Route::get('/delete/teacher/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');
