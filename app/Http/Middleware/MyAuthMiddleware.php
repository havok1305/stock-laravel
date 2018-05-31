<?php

namespace Stock\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MyAuthMiddleware
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
        if(Auth::guest() && !$request->is('login')) {
            return redirect('login');
        }
        return $next($request);
    }
}
