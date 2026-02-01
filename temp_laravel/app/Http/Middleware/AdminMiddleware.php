<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->usertype === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, arahkan ke home atau dashboard dengan pesan error
        return redirect('/')->with('error', 'Anda tidak memiliki hak akses untuk halaman tersebut.');
    }
}
