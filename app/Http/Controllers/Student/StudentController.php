<?php

namespace ProjectG\Http\Controllers\Student;

use Illuminate\Http\Request;
use ProjectG\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function getDashboard()
    {
        return view('student.dashboard');
    }
}
