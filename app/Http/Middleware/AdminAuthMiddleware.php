<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // check if the user has the role as admin
        if (!auth()->user() || auth()->user()->role !== 'admin') {
            abort(403, 'HORA !!');
        }

        return $next($request);
    }
}
