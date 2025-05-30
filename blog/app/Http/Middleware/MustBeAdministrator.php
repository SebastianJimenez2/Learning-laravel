<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()?->username !== 'rory2') {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
