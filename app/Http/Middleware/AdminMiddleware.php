<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $userEmail = auth()->check() ? strtolower(auth()->user()->email) : '';
        
        // Memeriksa apakah user login dan merupakan admin atau menggunakan email khusus admin
        if (auth()->check() && (auth()->user()->is_admin || $userEmail === 'zoyaideveloper@gmail.com')) {
            return $next($request);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Akses ditolak! Khusus Admin.'
        ], 403);
    }
}

