<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// new addition
use Illuminate\Support\Facades\Auth;
use Session;


class SetAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    

        
        $path = $request->path();
        

       
        return $next($request);

        
    }
}
