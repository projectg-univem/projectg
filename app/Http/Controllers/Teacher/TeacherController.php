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

    public function getTasks() 
    {
    	return view('teacher.tasks');
    }

	public function getProfile() 
    {
    	return view('teacher.profile');
    }

    public function getQuestions() 
    {
    	return view('teacher.questions');
    }
}
