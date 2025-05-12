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
        $employee = new employee();
        $employee->name = $request->name;
        $employee->lastName = $request->lastName;
        $employee->phone = $request->phone;
        $employee->fatherName = $request->fatherName;
        $employee->idCard = $request->idCard;
        $employee->position = $request->position;
        $employee->salary = $request->salary;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $employee->image = 'images/' . $fileName;
        }
        $employee->save();
        return redirect()->route('employee.read');
    }

    // Create the edit employee
    function edit($id)
    {
        $employee = employee::find($id)->first();
        return view('Employee.Edit', compact('employee'));
    }

    // Edit the employee

    public function update(Request $request, $id)
    {
        // Find the employee record by ID
        $employee = employee::find($id);

        // Update other fields
        $employee->name = $request->name;
        $employee->lastName = $request->lastName;
        $employee->phone = $request->phone;
        $employee->fatherName = $request->fatherName;
        $employee->idCard = $request->idCard;

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists (optional, if you want to clean up old images)
            if ($employee->image && file_exists(public_path($employee->image))) {
                unlink(public_path($employee->image));
            }

            // Get the uploaded image and generate a unique name
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the images directory
            $file->move(public_path('images'), $filename);

            // Update the image path in the database
            $employee->image = 'images/' . $filename;
        }

        // Update other fields
        $employee->position = $request->position;
        $employee->salary = $request->salary;

        // Save the updated employee record
        $employee->save();

        return redirect()->route('employee.read');
    }


    // Delete the employee 
    function delete($id)
    {

        employee::find($id)->delete();
        return redirect()->back();
    }
}
