<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == 'admin') {
            
            return $next($request);

        } elseif (Auth::user()->role != 'admin') {
            
            return redirect('/home');
        }

        // return $next($request);
    }
}
