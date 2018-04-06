<?php

namespace App\Http\Middleware;

use Closure;

class Checkroute
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
        ///print_r($request);die;
        return $next($request);
    }
}
