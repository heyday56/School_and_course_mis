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
Route::get('/add/teacher', [TeacherController::class, 'insert'])->name('teacher.insert');