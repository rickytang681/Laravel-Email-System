<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {

        }
        if ($guard == "author" && Auth::guard($guard)->check()) {

        }
        if ($guard == "web" && Auth::guard($guard)->check()) {

        }
        return $next($request);
    }
}