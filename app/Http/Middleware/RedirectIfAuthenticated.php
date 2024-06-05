<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/');
        // }

        if ($guard == "vendor" && Auth::guard($guard)->check()) {
            return redirect('/vendor-home');
        }
        if ($guard == "customer" && Auth::guard($guard)->check()) {
            return redirect('/customer-home');
        }

        return $next($request);
    }
}