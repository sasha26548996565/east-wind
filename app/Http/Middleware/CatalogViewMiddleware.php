<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CatalogViewMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('view')) {
            $request->session()->put('view', $request->get('view'));
        }

        return $next($request);
    }
}
