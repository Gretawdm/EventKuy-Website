<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isPembuat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if(!auth()->check() || auth()->user()->jabatan !== 'pembuat'){
             return redirect()->route('login');
        }

         if (auth()->user()->jabatan === 'admin') {
        return redirect()->route('login'); // Ubah 'home' dengan rute yang sesuai
    }
        return $next($request);
    }
}