<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admins
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
        if(Auth::user() && Auth::user()->role == 'admins'){
            return $next($request);
        }
        return redirect('/login');
     
    }
}
