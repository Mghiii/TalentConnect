<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfWrongRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->check() && auth()->user()->role !== $role) {
            return redirect()->route('page-not-found')->withErrors([
                'role' => 'You are not authorized to access this page.'
            ]);
        }
    
        return $next($request);
    }
}
