<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class TeacherMiddleware
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
        if($request->user() && $request->user()->hasRole('teacher')){

            return $next($request);

        } else {
            return redirect()->guest('/');

        };
    }
}
