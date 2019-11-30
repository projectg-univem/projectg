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
                    return redirect()->route('teacher.dashboard');
                    break;
                case 'user':
                    return redirect()->route('user.dashboard');
                    break;

            }
        }

        return $next($request);
    }
}
