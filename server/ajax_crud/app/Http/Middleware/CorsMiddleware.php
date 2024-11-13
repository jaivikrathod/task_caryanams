<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    public function handle($request, Closure $next)
    {
        // Add CORS headers
        return $next($request)
            ->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5501')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With')
            ->header('Access-Control-Allow-Credentials', 'true');
    }
}
