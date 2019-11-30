<?php

namespace ProjectG\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use ProjectG\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function getDashboard()
    {
        return view('teacher.dashboard');
    }
}
