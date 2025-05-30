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
        $key = env('JWT_SECRET');

        if (!$jwt) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        try {
            $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
            
            // Check for required claims
            $userId = $decoded->user_id ?? null;
            $email = $decoded->email ?? null;
            $role = $decoded->role ?? null;

            // Validate required claims
            if (!$userId || !$email) {
                return response()->json(['error' => 'Invalid token payload: missing required claims'], 401);
            }

            // Check if role is Mentor
            if ($role !== 'Mentor') {
                return response()->json(['error' => 'Access denied. Only Mentors can access this resource'], 403);
            }

            // Attempt to find user using UUID from Django
            $user = User::where('email', $email)->first();
            
            if (!$user) {
                // Create new user if not exists
                $user = User::create([
                    'user_uuid' => $userId,
                    'email' => $email,
                    'password' => "SecretKey010",
                    'role' => $role
                    // Add any other required default fields here
                ]);
            }

            Auth::login($user);
            return $next($request);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unauthorized - ' . $e->getMessage()], 401);
        }
    }
}
