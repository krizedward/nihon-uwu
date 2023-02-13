<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Talent
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
        if (Auth::user()->role == 'talent') {
            
            return $next($request);

        } elseif (Auth::user()->role != 'talent') {
            
            return redirect('/home');
        }

        // return $next($request);
    }
}
