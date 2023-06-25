<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;

class LoginState
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->user()->email_verified_at == null) {
            $reponse = ['message' => 'Visit your email to complete your registration'];
            return response($reponse, 401);
        }

        return $next($request);
    }
}
