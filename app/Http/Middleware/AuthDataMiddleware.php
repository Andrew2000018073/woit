<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        // Access authenticated user data
        $user = auth()->user();

        view()->share("user", $user);
        // You can now use $user as needed throughout your routes

        return $next($request);
    }
}
