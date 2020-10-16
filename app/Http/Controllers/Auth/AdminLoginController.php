<?php

namespace ProjectG\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use ProjectG\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin.login');
    }

    public function login(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'email'    => 'required|email',
                'password' => 'required|string|size:4'
            ],
            [
                'email.required'    => 'Insira seu email.',
                'email.email'       => 'Insira um email válido.',
                'password.required' => 'Insira uma senha.',
                'password.string'   => 'Insira uma senha válida.',
                'password.size'     => 'A senha deve conter 4 dígitos.'
            ]
        );

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('get.admin.dashboard'));
        }

        return back()->withErrors(['email' => 'Credenciais incorretas.']);
    }
}
