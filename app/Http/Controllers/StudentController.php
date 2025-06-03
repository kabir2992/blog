<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudent()
    {
        $students = \App\Models\Student::all();
        return view('students', ['data'=>$students]);
    }
}
