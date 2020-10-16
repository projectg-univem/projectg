<?php

namespace ProjectG\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ProjectG\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getDashboard()
    {
        return view('admin.dashboard');
    }
}
