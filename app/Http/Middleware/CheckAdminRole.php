<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->can('administrator')) {
            return $next($request);
        }elseif(Auth::check() && Auth::user()->can('merchants')) {
            return redirect()->route('merchants.dashboard');
        }
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('login');
        
    }
    
}


