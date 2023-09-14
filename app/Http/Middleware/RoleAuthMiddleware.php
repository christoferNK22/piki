<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = "web"): Response
    {
        if (auth($guard)->check()) {
            return $next($request);
        } else {
            return redirect(route($guard  == "web" ? "login" : 'member.login'))->with('error', 'Kamu tidak memiliki akses');
        }
    }
}
