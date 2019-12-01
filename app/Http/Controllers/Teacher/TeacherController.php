<?php

namespace ProjectG\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProjectG\Http\Controllers\Controller;

class TeacherController extends Controller
{
    protected $authTeacher;

    public function __construct()
    {
        $this->middleware('auth:teacher');

        $this->middleware(function ($request, $next) {
            $this->authTeacher = Auth::guard('teacher')->user();
            return $next($request);
        });
    }

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

    public function getTaskModelo() 
    {
        return view('teacher.taskModelo');
    }

    public function getTaskGrupo() 
    {
        return view('teacher.taskGrupo');
    }
    
    public function getCalendar()
    {
        return view('teacher.calendar');
    }
}
