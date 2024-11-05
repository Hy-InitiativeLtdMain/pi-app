<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the middleware is being triggered
        dd('AdminAccess Middleware Triggered');

        // Check if the user is authenticated
        if (!auth()->check()) {
            dd('Unauthenticated request');
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        // Check if the user is an admin
        if (!auth()->user()->is_admin) {
            dd('Unauthorized access attempt by user: ' . auth()->user()->id);
            return response(['message' => 'This resource is only available for admins'], 403);
        }

        // If all checks pass, proceed with the request
        return $next($request);
    }
}
