<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentController;
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


// Employee Routes

// Employee List
Route::get('/read/employees', [EmployeeController::class, 'index'])->name('employee.read');

// Add Employee
Route::get('/add/employee', [EmployeeController::class, 'create'])->name('employee.create');
// Save The Data of Employee
Route::post('/add/employee', [EmployeeController::class, 'insert'])->name('employee.insert');

// Create the edit Employee form
Route::get('/edit/employee/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');

// Update the Employee
Route::post('/edit/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');

// Delete the Employee
Route::get('/delete/employee/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');


// Student Routes

// Student List
Route::get('/read/students', [StudentController::class, 'index'])->name('student.read');

// Add Student
Route::get('/add/student', [StudentController::class, 'create'])->name('student.create');
// Save The Data of Teacher
Route::post('/add/student', [StudentController::class, 'insert'])->name('student.insert');

// Create the edit Student form
Route::get('/edit/student/{id}', [StudentController::class, 'edit'])->name('student.edit');

// Update the Student
Route::post('/edit/student/{id}', [StudentController::class, 'update'])->name('student.update');

// Delete the Student
Route::get('/delete/student/{id}', [StudentController::class, 'delete'])->name('student.delete');


// Course Routes

// Course List
Route::get('/read/courses', [CourseController::class, 'index'])->name('course.read');

// Add Course
Route::get('/add/course', [CourseController::class, 'create'])->name('course.create');
// Save The Data of Course
Route::post('/add/course', [CourseController::class, 'insert'])->name('course.insert');

// Create the edit Course form
Route::get('/edit/course/{id}', [CourseController::class, 'edit'])->name('course.edit');

// Update the Course
Route::post('/edit/course/{id}', [CourseController::class, 'update'])->name('course.update');

// Delete the Course
Route::get('/delete/course/{id}', [CourseController::class, 'delete'])->name('course.delete');


// Salary Routes

// Salary List
Route::get('/read/salaries', [SalaryController::class, 'index'])->name('salary.read');

// Add salary
Route::get('/add/salary', [SalaryController::class, 'create'])->name('salary.create');

// Save The Data of salary
Route::post('/add/salary', [SalaryController::class, 'insert'])->name('salary.insert');

// Create the edit salary form
Route::get('/edit/salary/{id}', [SalaryController::class, 'edit'])->name('salary.edit');

// Update the salary
Route::post('/edit/salary/{id}', [SalaryController::class, 'update'])->name('salary.update');

// Delete the salary
Route::get('/delete/salary/{id}', [SalaryController::class, 'delete'])->name('salary.delete');



// Student Class Routes

// Student Class List
Route::get('/read/student_classes', [StudentClassController::class, 'index'])->name('student_class.read');

// Add Student Class
Route::get('/add/student_class', [StudentClassController::class, 'create'])->name('student_class.create');

// Save The Data of Student Class
Route::post('/add/student_class', [StudentClassController::class, 'insert'])->name('student_class.insert');

// Create the edit Student Class form
Route::get('/edit/student_class/{id}', [StudentClassController::class, 'edit'])->name('student_class.edit');

// Update the Student Class
Route::post('/edit/student_class/{id}', [StudentClassController::class, 'update'])->name('student_class.update');

// Delete the Student Class
Route::get('/delete/student_class/{id}', [StudentClassController::class, 'delete'])->name('student_class.delete');