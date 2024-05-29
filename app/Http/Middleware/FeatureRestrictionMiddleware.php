<?php

namespace App\Http\Middleware;

use App\Models\AdminFeature;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class FeatureRestrictionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$features): Response
    {
        $user = Auth::user();
        // dd($user);
        // dd($user);

        if (!$user) {
            // If the user is not authenticated or not an admin, deny access
            return response()->json(['error' => 'Unauthorized.'], 401);
        }


        // dd($userAdminIds);
        // Get the admin user for the user's institute
        $adminUser = User::where('institute_slug', $user->institute_slug)
            ->where('admin', 1)
            ->first();

        if (!$adminUser) {
            // If no admin user found for the institute, deny access
            return response()->json(['error' => 'Admin not found for this institute.'], 403);
        }

        $featureAdminIds = AdminFeature::get()->pluck('user_id')->toArray();
        // dd($featureAdminIds);
        $userAdminIds = User::where('institute_slug', $user->institute_slug)->where('admin', true)->whereIn('id', $featureAdminIds)->first();


        // Check each feature
        foreach ($features as $feature) {
            // Check if the feature is enabled for the admin's institute
            $featureEnabled = AdminFeature::where('user_id', $userAdminIds->id)
                ->where('feature', $feature)
                ->where('enabled', true)
                ->exists();
                // dd($featureEnabled, $feature);

            if (!$featureEnabled) {
                // If the feature is not enabled for the admin's institute, deny access
                return response()->json(['error' => 'Feature is restricted for this institute.'], 403);
            }
        }

        // If all features are enabled, allow the request to proceed
        return $next($request);
    }
}
