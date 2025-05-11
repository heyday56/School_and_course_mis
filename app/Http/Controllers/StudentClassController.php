<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\student;
use App\Models\student_class;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    // Create Add form of Student to classes
    function create()
    {
        $courses = course::all();
        $students = student::all();
        return view('Student_class.Add', compact('courses', 'students'));
    }

    // Insert data into student_class table
    function insert(Request $request)
    {
        $student_class = new student_class();
        $student_class->student_id = $request->student_id;
        $student_class->course_id = $request->course_id;
        $student_class->date_join = $request->date_join;
        $student_class->save();
        return redirect()->route('student_class.read');

    }

    // Read All classes
    function index()
    {
        $student_classes = student_class::with(['student', 'course'])->get();
        return view('Student_class.Read', compact('student_classes'));
    }

    // Create the Edit form
    function edit($id)
    {
        $student_class = student_class::findOrFail($id);
        $courses = course::all();
        $students = student::all();
        return view('Student_class.Edit', compact('student_class', 'courses', 'students'));
    }

    // Update the data of Selected class
    function update(Request $request, $id)
    {
        $student_class = student_class::findOrFail($id);
        $student_class->student_id = $request->student_id;
        $student_class->course_id = $request->course_id;
        $student_class->date_join = $request->date_join;
        $student_class->save();
        return redirect()->route('student_class.read');
    }

    // Delete the select data
    function delete($id)
    {
        student_class::find($id)->delete();
        return redirect()->back();
    }

    // View The selected Student
    function print($id)
    {
        $student_classes = student_class::where('id', '=', $id)->get();
        $student = student::findOrFail($id);
        return view('Student.View', compact('student', 'student_classes'));
    }
}
