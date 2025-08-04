<?php

namespace App\Http\Middleware;

use App\Models\Mentee;
use App\Models\User;
use App\Models\Mentor;
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
        $key = config('jwt.secret');

        if (!is_string($key) || trim($key) === '') {
            return response()->json(['error' => 'JWT secret key is not properly configured.'], 500);
        }

        try {
            $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

            $userId = $decoded->user_id ?? null;
            $email = $decoded->email ?? null;
            $role = $decoded->role ?? null;
            $track = $decoded->track ?? null;
            $institute = $decoded->institute ?? "3mtt";
            $image = $decoded->profile_picture ?? null;

            if (!$userId || !$email) {
                return response()->json(['error' => 'Invalid token payload: missing required claims'], 401);
            }
            if (!in_array($role, ['Mentor', 'Student', 'Mentee'])) {
                return response()->json(['error' => 'Access denied. Only Mentors or Students can access this resource'], 403);
            }

            // Helper to create or update user
            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'user_uuid' => $userId,
                    'password' => bcrypt('SecretKey010'),
                    'role' => $role,
                    'institute_slug' => $institute,
                    'track' => $track,
                    'image' => $image,
                ]
            );

            if ($role === 'Mentee' || $role === 'Student') {
                // Create or update mentee
                $mentee = Mentee::firstOrCreate(
                    ['user_id' => $user->id],
                    [
                        'email' => $email,
                        'level' => 'Unknown',
                        'track' => $track,
                        'course' => $track,
                        'institute' => $institute,
                        'name' => $decoded->name ?? null,
                        
                    ]
                );
                // Update track, course, or name if needed
                $updated = false;
                if ($mentee && $track && $mentee->track !== $track) {
                    $mentee->track = $track;
                    $updated = true;
                }
                if ($mentee && $track && $mentee->course !== $track) {
                    $mentee->course = $track;
                    $updated = true;
                }
                if ($mentee && isset($decoded->name) && $mentee->name !== $decoded->name) {
                    $mentee->name = $decoded->name;
                    $updated = true;
                }
                if ($updated) {
                    $mentee->save();
                }
                Auth::login($user);
                return $next($request);
            } elseif ($role === 'Mentor') {
                // Create or update mentor
                $mentor = Mentor::firstOrCreate(
                    ['user_id' => $user->id],
                    [
                        'first_name' => $decoded->name ?? null,
                        'email' => $email,
                        'track' => $track,
                        'institute' => $institute,
                    ]);
                // Update mentor's track if needed
                if ($mentor && $track && $mentor->track !== $track) {
                    $mentor->track = $track;
                    $mentor->save();
                }
                Auth::login($user);
                return $next($request);
            }

        } catch (\Exception $e) {
            return response()->json(['error' => 'Unauthorized - ' . $e->getMessage()], 401);
        }
    }
}
