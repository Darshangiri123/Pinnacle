<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     */
    public function handle(Request $request, Closure $next)
    {
        // dd($request->user('admin'));
        if (empty($request->user('admin'))) {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
