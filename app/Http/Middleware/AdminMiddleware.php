<?php

namespace App\Http\Middleware;
use Auth;
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
        if ( Auth::check()) {
            if ($request->user() && $request->user()->hasRole('admin')) {
                return $next($request);
            }
            else {
                if ($request->user()->hasRole('teacher') || $request->user()->hasRole('student')) {
                    return redirect()->guest('/');
                }
            }
        }
        else return redirect('/login');
    }
}
