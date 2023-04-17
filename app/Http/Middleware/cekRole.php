<?php

namespace App\Http\Middleware;

use Closure;

class cekRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (! $request->user() || ! in_array($request->user()->role, $roles)) {
            abort(403, 'Anda tidak mempunyai hak untuk mengakses halaman ini');
        }
        return $next($request);
    }

    
}