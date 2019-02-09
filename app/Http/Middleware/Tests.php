<?php

namespace App\Http\Middleware;

use Closure;

class Tests
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
        echo "Hai Middleware";
        // return $next($request);
    }
}
