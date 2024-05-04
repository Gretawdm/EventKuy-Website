<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !(auth()->user()->jabatan === 'admin' || auth()->user()->jabatan === 'pembuat')) {
        return redirect()->route('login');
    }

        return $next($request);
    }
}