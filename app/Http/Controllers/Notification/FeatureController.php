<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\FeatureNotification;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function notifyFeature(Request $request)
    {
        // get the user institute_slug
        // get the feature_title from the request
        $institute_slug = auth()->user()->institute_slug;

        $request->validate([
            'feature_title' => 'required|string|max:255',
            'feature_url' => 'nullable|string',
        ]);

        $featureTitle = $request->input('feature_title');
        $featureUrl = $request->input('feature_url') ;
        // dd($featureUrl);
        $users = User::where('institute_slug', $institute_slug)->get();

        foreach ($users as $user) {
            $user->notify(new FeatureNotification($featureTitle, $featureUrl, $institute_slug, $user));
        }

        return response()->json(['message' => 'Feature notifications sent successfully!']);
    }
}
