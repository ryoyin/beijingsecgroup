<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

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
        //check server addr not dev and contain old domain name beijingsecgroup
        if($_SERVER['SERVER_ADDR'] != '127.0.0.1' && strpos($_SERVER['SERVER_NAME'], 'www.bjsthkgroup.com') !== FALSE) {
            throw new HttpException(301);
        }

        return $next($request);
    }
}
