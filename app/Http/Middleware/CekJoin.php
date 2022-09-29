<?php

namespace App\Http\Middleware;

use Closure;

class CekJoin
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
        if(session()->has('username')){
            return $next($request);
        } else {
            return redirect('/join')->with('pesan', "Maaf silahkan join terlebih dahulu");
        }
      
    }
}
