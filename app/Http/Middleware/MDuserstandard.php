<?php

namespace App\Http\Middleware;

use Closure;

class MDuserstandard
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
        $usuario=\Auth::user();
        if($usuario->rol_id!=1)
        {
            return redirect()->route('admins.index');
        }
        return $next($request);
    }
}
