<?php

namespace App\Http\Middleware;

// app/Http/Middleware/AdminMiddleware.php

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Mengecek apakah pengguna telah login dan memiliki peran admin
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }

        // Jika tidak, redirect ke halaman login dengan pesan error
        return redirect('/login')->with('error', 'Unauthorized access. You need admin privileges.');
    }
}