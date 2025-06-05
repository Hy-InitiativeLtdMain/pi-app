<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class JWTMentorshipAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $jwt = $request->bearerToken();
        $key = config('jwt.mentorship_secret');

        if (!is_string($key) || trim($key) === '') {
            return response()->json(['error' => 'JWT secret key is not properly configured.'], 500);
        }

        try {
            $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

            $userId = $decoded->user_id ?? null;
            $email = $decoded->email ?? null;
            $role = $decoded->role ?? null;

            if (!$userId || !$email) {
                return response()->json(['error' => 'Invalid token payload: missing required claims'], 401);
            }

            if ($role !== 'Mentor') {
                return response()->json(['error' => 'Access denied. Only Mentors can access this resource'], 403);
            }

            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'user_uuid' => $userId,
                    'password' => bcrypt('SecretKey010'),
                    'role' => $role,
                ]
            );

            Auth::login($user);
            return $next($request);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unauthorized - ' . $e->getMessage()], 401);
        }
    }
}
