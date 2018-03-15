<?php

namespace App\Http\Middleware;

use Closure;

class myRouteWare
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
        dd('这是一个路由的中间件');
        return $next($request);
    }
}
