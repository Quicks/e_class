<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

//        foreach ($this->roles as $role)
//        {
//            if ($role == 'admin')
//            {
//                Redirect::to(route('admin.roles.update_user_role'));
//            }
//        }
        if ($request->user()->hasAnyRole($role)) {
            return $next($request);
        } else {
            return response('Insufficient permission', 401);
        }

    }
}
