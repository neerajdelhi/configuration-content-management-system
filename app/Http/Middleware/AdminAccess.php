<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminAccess
{   
    public function handle(Request $request, Closure $next)
    {
        Log::info('AdminAccess middleware called');
        
        if (!$request->user()) {
            Log::info('No authenticated user');
            abort(403, 'Unauthorized action.');
        }

        Log::info('User: ' . $request->user()->email);
        Log::info('User roles: ' . json_encode($request->user()->roles->pluck('name')));
        
        if (!$request->user()->hasRole('admin')) {
            Log::info('User does not have admin role');
            abort(404, 'Unauthorized action.');
        }

        Log::info('Admin access granted');
        return $next($request);
    }
}
