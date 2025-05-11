<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\employee;
use App\Models\teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Read Courses
    function index()
    {
        $courses = Course::with('teacher')->get();
        return view('Course.Read', compact('courses'));
    }

    // Create The course add form
    function create()
    {
        $teachers = employee::where('position', '=', 'استاد')->get();
        return view('Course.Add', compact('teachers'));
    }

    // Save Data into course Table
    function insert(Request $request)
    {
        $course = new course();
        $course->course_name = $request->course_name;
        $course->teacher_id = $request->teacher_id;
        $course->fees = $request->fees;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $course->save();
        return redirect()->route('course.read');
    }

    // Create Edit course form
    function edit($id)
    {
        $course = course::findOrFail($id);
        $teachers = employee::all();
        return view('Course.Edit', compact('course', 'teachers'));
    }

    // Update the selected data
    function update(Request $request, $id)
    {
        $course = course::findOrFail($id);
        $course->course_name = $request->course_name;
        $course->teacher_id = $request->teacher_id;
        $course->fees = $request->fees;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $course->save();
        return redirect()->route('course.read');
    }

    // Delete the Selected course
    function delete($id)
    {
        course::find($id)->delete();
        return redirect()->route('course.read');
    }


}
