<?php

namespace ProjectG\Http\Controllers\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProjectG\Http\Controllers\Controller;

class StudentController extends Controller
{
    protected $authStudent;

    public function __construct()
    {
        $this->middleware('auth:student');

        $this->middleware(function ($request, $next) {
            $this->authStudent = Auth::guard('student')->user();
            return $next($request);
        });
    }

    public function getDashboard()
    {
        return view('student.dashboard');
    }

    public function getTasks()
    {
    	return view('student.tasks');
    }

	public function getProfile()
    {
    	return view('student.profile');
    }

    public function getQuestions()
    {
    	return view('student.questions');
    }

    public function getCalendar() 
    {
        return view('student.calendar');
    }
}
