<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $usuario=\Auth::user();
            if($usuario->rol_id==1)
            {
                return redirect()->route('users.index');
            }
            elseif($usuario->rol_id==2)
            {
                return redirect()->route('admins.index');
            }
        }

        return $next($request);
    }
}
