<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
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
        // dd("working");
        // if(session()->get('User_Signup')['email'] == 'kigo@mailinator.com'){
        //     dd("dd");
        //     return redirect()->route('AmeaToday_user-dashboard');
        // }

        if(Auth::check() && Auth::user()->type == 1) {
            return $next($request);
        }

        if(Auth::check() && Auth::user()->type != 1) {
            return redirect()->back();
        }

        return redirect()->route('login');
    }
}
