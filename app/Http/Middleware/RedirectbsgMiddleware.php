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
        $exp_name = explode(".", $_SERVER['SERVER_NAME']);
        if($exp_name[0] != "www" && $exp_name[1] != "bjsthkgroup") {
            return redirect('http://www.bjsthkgroup.com');
        }

        //check server addr not dev and contain old domain name beijingsecgroup
        $ips = array('127.0.0.1', '192.168.10.30');
        if(!in_array($_SERVER['SERVER_ADDR'], $ips) && strpos($_SERVER['SERVER_NAME'], 'bjsthkgroup.com') === FALSE) {
            throw new HttpException(301);
        }

        //        echo $_SERVER['SERVER_NAME'];

        //Power Outage Message
        /*if(!session()->get('power_outage_notice')) {
            session(['power_outage_notice' => TRUE]);
            throw new HttpException(302);
        }*/

        return $next($request);
    }
}
