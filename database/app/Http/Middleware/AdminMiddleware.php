<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
class AdminMiddleware
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
        if($request->user() && $request->user()->hasRole('admin')){

            return $next($request);

        } else {
            return redirect()->guest('/');

        };

    }
}
