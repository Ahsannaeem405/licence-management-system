<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(Auth::User() && Auth::User()->role =='superadmin')
                {
                    return redirect('/superadmin/dashboard');
                }
                elseif(Auth::User() && Auth::User()->role =='customer')
                {
                    return redirect('/customer/dashboard');
                }
                elseif(Auth::User() && Auth::User()->role =='manager' || Auth::user()->role == 'owner')
                {
                    return redirect('/manager/dashboard');
                }

            }
        }

        return $next($request);
    }
}
