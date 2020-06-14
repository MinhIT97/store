<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CheckCartMiddeware
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
        $CartCookie = Cookie::get('lionCart');
        if ($CartCookie) {
            return $next($request);
        }
        $response = $next($request);
        $id       = (string) Str::uuid();

        return $response->withCookie(cookie()->forever('lionCart', $id));
    }
}
