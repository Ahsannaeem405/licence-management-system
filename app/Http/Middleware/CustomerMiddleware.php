<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::User()->role =='customer')
        {
            if(Auth::user()->is_verified == 3)
            {
                return $next($request);
            }
            else if(Auth::user()->is_verified == 2)
            {
                return redirect('/stripe-payment')->with('error','Please Complete Your Payment');
                
            }
            else if(Auth::user()->is_verified == 1)
            {
                return redirect('/customer-profile')->with('error','Please Complete Your Profile');
            }
            else if(Auth::user()->is_verified == 0)
            {
                return redirect('/verify-code')->with('error','Please Verify Your Email');
            }

        }
        else
        {
            return '/login';

            // return redirect('verify-code')->with('error','Please verify email to proceed');
        }
            
    }
}
