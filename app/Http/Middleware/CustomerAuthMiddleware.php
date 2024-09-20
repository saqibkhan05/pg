<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class CustomerAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = Cookie::get('customer_jwt_token');
        if (!$token || !auth()->guard('customer')->setToken($token)->check()) {
            return redirect()->route('signin')->with('error', 'Please login as client.');
        }
        return $next($request);
    }
}
