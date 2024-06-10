<?php

namespace App\Http\Middleware;

use Closure;

class AdminRouteMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->user() && ! $request->user()->role == 'admin') {
            abort(403, 'Nepovolená akce.');
        }

        return $next($request);
    }
}
