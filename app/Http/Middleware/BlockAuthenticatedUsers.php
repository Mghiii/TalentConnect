<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlockAuthenticatedUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // User is authenticated, redirect them to a different route or show an error message
            return redirect()->route('/page-not-found')->with('error', 'You are already logged in.');
        }

        return $next($request);
    }
}