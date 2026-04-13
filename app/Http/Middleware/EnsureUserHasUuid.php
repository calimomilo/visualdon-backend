<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasUuid
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $header_parts = explode(' ', $request->header('Authorization'));
        
        if ($header_parts[0] === 'UUID') {
            $uuid = $header_parts[1];
            $user = User::where('uuid', $uuid)->firstOrFail();

            if ($user) {
                $request['user_uuid'] = $uuid;
            }
            return $next($request);
        } else {
            abort(401);
        }
    }
}
