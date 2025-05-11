<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\student_class;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // Read Students
    function index()
    {
        $students = student::all();
        return view('Student.read', compact('students'));
    }

    

    // Create Student Add Form
    function create()
    {
        return view('Student.add');
    }

    // Insert Data into student table
    function insert(Request $request)
    {
        $student = new student();
        $student->name = $request->name;
        $student->lastName = $request->lastName;
        $student->family_phone = $request->family_phone;
        $student->fatherName = $request->fatherName;
        $student->idCard = $request->idCard;
        $student->image = $request->image;
        $student->birthday = $request->birthday;
        $student->save();
        return redirect()->route('student.read');
    }

    // Delete Student Form
    function delete($id)
    {
        student::findOrFail($id)->delete();
        return redirect()->back();
    }

    // Create Edit form for Student
    function edit($id)
    {

        $student = student::findOrFail($id);
        return view('Student.Edit', compact('student'));
    }

    // Update the data of student
    function update(Request $request, $id)
    {
        $student = student::find($id)->first();
        $student->name = $request->name;
        $student->lastName = $request->lastName;
        $student->family_phone = $request->family_phone;
        $student->fatherName = $request->fatherName;
        $student->idCard = $request->idCard;
        $student->birthday = $request->birthday;
        $student->image = $request->image;
        $student->save();
        return redirect()->route('student.read');
    }
}
