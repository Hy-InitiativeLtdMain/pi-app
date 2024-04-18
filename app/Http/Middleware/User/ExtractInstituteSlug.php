<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExtractInstituteSlug
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $instituteSlug = auth()->user()->institute_slug;
        // dd($instituteSlug);
        $request->merge(['institute_slug' => $instituteSlug]);
        // dd($request);
        return $next($request);
    }
}
