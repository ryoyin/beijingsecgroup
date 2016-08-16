<?php

namespace App\Http\Middleware;

use Closure;

class RedirectbsgMiddleware
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
//        echo $_SERVER['SERVER_ADDR'];
        if($_SERVER['SERVER_ADDR'] != '127.0.0.1' && strpos($_SERVER['SERVER_NAME'], 'beijingsecgroup') !== FALSE) {
            echo 'redirect';
        }

        return $next($request);
    }
}
