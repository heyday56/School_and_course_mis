<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // The teacher list 
    function index()
    {
        $teachers = teacher::all();
        return view('Teacher.Read', compact('teachers'));
    }

    // The teacher insert form
    function create()
    {
        return view('Teacher.Add');
    }

    // Add the teacher
    function insert(Request $request)
    {
        $teacher = new teacher();
        $teacher->name = $request->name;
        $teacher->lastName = $request->lastName;
        $teacher->phone = $request->phone;
        $teacher->fatherName = $request->fatherName;
        $teacher->idCard = $request->idCard;
        $teacher->image = $request->image;
        $teacher->save();
        return redirect()->route('teacher.read');
    }

    // Create the edit teacher
    function edit($id)
    {
        $teacher = teacher::find($id)->first();
        return view('Teacher.Edit', compact('teacher'));
    }

    // Edit the teacher
    function update(Request $request, $id)
    {

        $teacher = teacher::find($id)->first();
        $teacher->name = $request->name;
        $teacher->lastName = $request->lastName;
        $teacher->phone = $request->phone;
        $teacher->fatherName = $request->fatherName;
        $teacher->idCard = $request->idCard;
        $teacher->image = $request->image;
        $teacher->save();
        return redirect()->route('teacher.read');
    }

    // Delete the teacher 
    function delete($id)
    {

        teacher::find($id)->delete();
        return redirect()->back();
    }
}
