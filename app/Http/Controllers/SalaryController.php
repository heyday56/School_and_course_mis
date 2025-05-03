<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    // Read All Salaries
    function index()
    {
        $salaries = salary::all();
        return view('Salary.Read', compact('salaries'));
    }
    // Create Add salary form
    function create()
    {
        $employees = employee::all();
        return view('Salary.Add', compact('employees'));
    }

    // Save The data of salary
    function insert(Request $request)
    {
        $salary = new salary();
        $salary->amount = $request->amount;
        $salary->date = $request->date;
        $salary->employee_id = $request->employee_id;
        $salary->status = $request->status;
        $salary->save();
        return redirect()->route('salary.read');
    }

    // Create the Edit form
    function edit($id)
    {
        $employees = employee::all();
        $salary = salary::findOrFail($id);
        return view('Salary.Edit', compact('salary', 'employees'));
    }

    // Update the selected salary
    function update(Request $request, $id)
    {
        $salary = salary::findOrFail($id);
        $salary->amount = $request->amount;
        $salary->date = $request->date;
        $salary->employee_id = $request->employee_id;
        $salary->status = $request->status;
        $salary->save();
        return redirect()->route('salary.read');
    }

    // Delete salary
    function delete($id)
    {
        salary::find($id)->delete();
        return redirect()->back();
    }
}
