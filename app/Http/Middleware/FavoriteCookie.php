<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class FavoriteCookie
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

        if(Cookie::get('user_id') === null) {
            Cookie::queue('user_id', rand(100000, 999999));
        }

        return $next($request);
    }
}
