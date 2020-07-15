<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;


class AdminCheck
{
    /**
     * Handle an incoming request.
     * Checks is user is Admin or Not.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            
            $user = Auth::user();
            if($user->isAdmin != 1) {
                return redirect(url('/home'));
            } else {
                return $next($request);
            }

        } else {
            return redirect(url('/login'));
        }
        
    }
}
