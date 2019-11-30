<?php

namespace ProjectG\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use ProjectG\Http\Controllers\Controller;

class TeacherLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'ra'       => 'required|string|size:6|regex:/^[0-9]*$/',
            'password' => 'required|string|size:4'
        ],
        [
            'ra.required'       => 'Insira um número de RA.',
            'ra.size'           => 'O RA deve conter 6 dígitos.',
            'ra.regex'          => 'O RA deve conter apenas números.',
            'password.required' => 'Insira uma senha.',
            'password.string'   => 'Insira uma senha válida.',
            'password.size'     => 'A senha deve conter 4 dígitos.'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $credentials = $request->only('ra', 'password');

        dd($credentials);

        if (Auth::guard('teacher')->attempt($credentials)) {
            return redirect()->intended(route('get.teacher.dashboard'));
        }

        dd('chegou');
        return back()->withErrors(['ra' => 'Credenciais incorretas.']);
    }

    public function showLoginForm()
    {
        return view('auth.teacher.login');
    }
}
