<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // The teacher list 
    function index()
    {
        return view('Teacher.Read');
    }

    // Add the Teacher
    function insert()
    {
        return view('Teacher.Add');
    }
}
