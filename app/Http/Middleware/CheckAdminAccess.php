<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $header = $request->header('Authorization');
        $expected_header = "Admin Token " . env('ADMIN_PASSWORD');

        if ($header === $expected_header) {
            return $next($request);
        } else {
            abort(401);
        }
    }
}
