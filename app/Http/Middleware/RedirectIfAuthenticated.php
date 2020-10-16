<?php

namespace ProjectG\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch($guard) {
                case 'teacher':
                    return redirect()->route('get.teacher.dashboard');
                    break;
                case 'student':
                    return redirect()->route('get.student.dashboard');
                    break;
                case 'admin':
                    return redirect()->route('get.admin.dashboard');
                    break;
            }
        }

        return $next($request);
    }
}
