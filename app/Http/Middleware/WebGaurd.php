<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WebGaurd
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
        // echo "Hello";
        if($request->age <18) {
            echo 'tou are not allow to access the page';
            die;
        }
        return $next($request);
    }
}
