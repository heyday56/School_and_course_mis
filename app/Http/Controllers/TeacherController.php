<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // The teacher list 
    function index()
    {
        return view('Teacher.Teacher');
    }
}
