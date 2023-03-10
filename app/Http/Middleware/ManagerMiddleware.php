<?php

namespace App\Http\Middleware;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ManagerMiddleware
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
        if(Auth::User())
        {
            if(Auth::User()->role =='manager' || Auth::User()->role =='owner')
            {
                $company=User::find(Auth::user()->company_id);
                if ($company->active!=1){
                    abort(403);
                }

                return $next($request);
            }
            else
            {
                Auth::logout();
                Session::flush();
                Session::flash('error','Something went wrong');
                return '/login';
            }
        }
        else
        {
            Auth::logout();
            Session::flush();
            Session::flash('error','Something went wrong');
            return '/login';
        }
    }
}
