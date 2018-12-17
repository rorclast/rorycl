<?php

namespace App\Http\Middleware;

use Closure;
use App\IpAddress;

class StoreIPs
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
        IpAddress::create([
            'ip_address' => getenv('REMOTE_ADDR'),
        ]);

        return $next($request);
    }
}
