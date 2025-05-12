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
        $student->birthday = $request->birthday;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $student->image = 'images/' . $fileName;
        }
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
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists (optional, if you want to clean up old images)
            if ($student->image && file_exists(public_path($student->image))) {
                unlink(public_path($employee->image));
            }

            // Get the uploaded image and generate a unique name
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the images directory
            $file->move(public_path('images'), $filename);

            // Update the image path in the database
            $student->image = 'images/' . $filename;
        }

        $student->save();
        return redirect()->route('student.read');
    }
}
