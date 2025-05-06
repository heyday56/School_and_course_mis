<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // The employee list 
    function index()
    {
        $employees = employee::all();
        return view('Employee.Read', compact('employees'));
    }

    // The employee insert form
    function create()
    {
        return view('Employee.Add');
    }

    // Add the employee
    function insert(Request $request)
    {
        $teacher = new employee();
        $teacher->name = $request->name;
        $teacher->lastName = $request->lastName;
        $teacher->phone = $request->phone;
        $teacher->fatherName = $request->fatherName;
        $teacher->idCard = $request->idCard;
        $teacher->image = $request->image;
        $teacher->position = $request->position;
        $teacher->salary = $request->salary;
        $teacher->save();
        return redirect()->route('employee.read');
    }

    // Create the edit employee
    function edit($id)
    {
        $employee = employee::find($id)->first();
        return view('Employee.Edit', compact('employee'));
    }

    // Edit the employee
    function update(Request $request, $id)
    {

        $teacher = employee::find($id)->first();
        $teacher->name = $request->name;
        $teacher->lastName = $request->lastName;
        $teacher->phone = $request->phone;
        $teacher->fatherName = $request->fatherName;
        $teacher->idCard = $request->idCard;
        $teacher->image = $request->image;
        $teacher->position = $request->position;
        $teacher->salary = $request->salary;
        $teacher->save();
        return redirect()->route('employee.read');
    }

    // Delete the employee 
    function delete($id)
    {

        employee::find($id)->delete();
        return redirect()->back();
    }
}
