<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Models\AdminFeature;
use App\Models\User;
use App\Services\Media\CloudinaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    // Admin Update
    public function update(Request $request)
    {
        $userId = auth()->user()->id;
        $user = User::findOrFail($userId);
        // dd($user);
        // if image is in the request
        if ($request->hasFile('image')) {
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->store($request->file('image'), "user-images");
            $user->image = $resp[0];
            $user->image_id = $resp[1];
        }

        // if request has institute_slug change institute slug for all users with similar slugs
        if ($request->has('institute_slug') && $user->institute_slug !== $request->institute_slug) {
            User::where('institute_slug', $user->institute_slug)->update(['institute_slug' => $request->institute_slug]);
            $user->institute_slug = $request->institute_slug;
        }

        // Check if request has specific fields and update accordingly
        $fieldsToUpdate = ['first_name', 'last_name', 'gender', 'email', 'phone'];
        foreach ($fieldsToUpdate as $field) {
            if ($request->has($field)) {
                $user->$field = $request->$field;
            }
        }

        $user->save();
        return response()->json('Profile Updated Successfully');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->first();

        // Check if the old password matches the user's current password
        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json(['old_password' => 'The old password is incorrect.']);
        }

        // Update the user's password
        $user->password = $request->new_password;
        $user->save();

        return response()->json('Password changed successfully!');
    }

    // Feature management
    // features can only use the following keywords currently accessable
    // - mentorship
    // - course
    // - analytics
    // - transaction
    public function features()
    {
        $adminId = auth()->user()->id;

        // Check if admin features already exist
        $adminFeatures = AdminFeature::where('user_id', $adminId)->pluck('feature')->toArray();

        // List of all possible features
        $defaultFeatures = ['mentorship', 'course', 'analytics', 'transaction', 'events'];

        // Find out which features are missing
        $missingFeatures = array_diff($defaultFeatures, $adminFeatures);

        // If there are missing features, add them
        if (!empty($missingFeatures)) {
            foreach ($missingFeatures as $feature) {
                AdminFeature::create([
                    'user_id' => $adminId,
                    'feature' => $feature,
                    'enabled' => true, // All features are initially enabled
                ]);
            }
        }

        // Find and delete any feature that is not in the default features list
        AdminFeature::where('user_id', $adminId)
            ->whereNotIn('feature', $defaultFeatures)
            ->delete();

        // Fetch admin features again after creating defaults
        $adminFeatures = AdminFeature::where('user_id', $adminId)->get();

        return response()->json($adminFeatures, 200);
    }

    public function createOrUpdateFeatures(Request $request)
    {
        // Validate the request data
        $request->validate([
            '*.feature' => 'required|in:mentorship,course,analytics,transaction,events',
            '*.enabled' => 'required|boolean',
        ]);

        $adminId = auth()->user()->id;
        // check if adminId is has a feature
        $adminFeature = AdminFeature::where('user_id', $adminId)->first();
        if (!$adminFeature) {
            // check if admin institute has other admins
            $featureAdminIds = AdminFeature::get()->pluck('user_id')->toArray();
            // dd($featureAdminIds);
            $adminId = User::where('institute_slug', auth()->user()->institute_slug)
                            ->where('admin', true)
                            ->whereIn('id', $featureAdminIds)
                            ->first()->id;


        }

        // Process each feature object in the request array
        foreach ($request->all() as $featureData) {
            // Check if the admin already has features defined
            $adminFeature = AdminFeature::where('user_id', $adminId)
                ->where('feature', $featureData['feature'])
                ->first();

            if ($adminFeature) {
                // Update existing features
                $adminFeature->update([
                    'enabled' => $featureData['enabled'],
                ]);
            } else {
                // Create new features if none exist
                AdminFeature::create([
                    'user_id' => auth()->user()->id,
                    'feature' => $featureData['feature'],
                    'enabled' => $featureData['enabled'],
                ]);
            }
        }

        return response()->json('Features updated successfully', 200);
    }


}
