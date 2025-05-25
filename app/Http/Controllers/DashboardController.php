<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\employee;
use App\Models\salary;
use App\Models\student;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Read All data
    function index()
    {
        $total_student = student::count();
        $total_course = course::count();
        $total_teacher = employee::count();
        $total_salary = salary::sum('amount');
        $total_fee = DB::table('student_class')
            ->join('course', 'student_class.course_id', '=', 'course.id')
            ->sum('course.fees');
        return view('dashboard', compact('total_student', 'total_course', 'total_teacher', 'total_salary', 'total_fee'));

    }

    // Filter the data
    function filter(Request $request)
    {
        $date = $request->date;
        $total_student = student::where('created_at', '>=', $date)->count();
        $total_course = course::where('created_at', '>=', $date)->count();
        $total_teacher = employee::where('created_at', '>=', $date)->count();
        $total_salary = salary::where('created_at', '>=', $date)->sum('amount');
        $total_fee = DB::table('student_class')
            ->join('course', 'student_class.course_id', '=', 'course.id')->where('student_class.created_at', '>=', $date)
            ->sum('course.fees');
        return view('dashboard', compact('total_student', 'total_course', 'total_teacher', 'total_salary', 'total_fee'));

    }
}
