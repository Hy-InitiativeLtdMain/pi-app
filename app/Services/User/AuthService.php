<?php

namespace App\Services\User;

use App\Events\Admin\NewUser;
use App\Jobs\User\AuthJobManager;
use App\Models\AdminFeature;
use App\Models\FcmToken;
use App\Models\User;
use App\Jobs\User\SendOtpSmsJob;
use App\Models\VerificationToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login($input)
    {
        $user = User::where('email', $input['email'])->first();

        if ($user && Hash::check($input['password'], $user->password)) {
            // Determine user type
            $userType = $this->determineUserType($user);

            // Handle admin features if the user is an admin
            $adminFeatures = $user->admin ? $this->handleAdminFeatures($user) : collect();

            // Generate the token and payload
            $tokenPayload = $this->generateTokenPayload($user, $userType, $adminFeatures);

            return [
                'data' => $tokenPayload,
                'code' => 200
            ];
        } else {
            return [
                'data' => ['message' => 'Invalid email or password'],
                'code' => 422
            ];
        }
    }

    private function determineUserType($user)
    {
        if ($user->admin) {
            return 'Admin';
        } elseif ($user->is_admin) {
            return 'Creator';
        } else {
            return 'Learner';
        }
    }

    private function handleAdminFeatures($user)
    {
        // Fetch existing admin features
        $adminFeatures = AdminFeature::where('user_id', $user->id)->pluck('feature')->toArray();

        // Define all possible features
        $defaultFeatures = ['mentorship', 'course', 'analytics', 'transaction', 'events'];

        // Identify missing features
        $missingFeatures = array_diff($defaultFeatures, $adminFeatures);

        if (empty($adminFeatures)) {
            // Attempt to fetch features from another admin with the same institute_slug
            $adminFeatures = $this->fetchFeaturesFromSameInstitute($user);

            if (empty($adminFeatures)) {
                // Create default features if none exist
                $this->createAdminFeatures($user->id, $defaultFeatures);
            }
        } elseif (!empty($missingFeatures)) {
            // Add any missing features to the current admin
            $this->createAdminFeatures($user->id, $missingFeatures);
        }

        return AdminFeature::where('user_id', $user->id)->get();
    }

    private function fetchFeaturesFromSameInstitute($user)
    {
        $adminWithSameInstitute = User::where('institute_slug', $user->institute_slug)
            ->where('admin', true)
            ->pluck('id')
            ->toArray();

        if (!empty($adminWithSameInstitute)) {
            return AdminFeature::whereIn('user_id', $adminWithSameInstitute)->pluck('feature')->toArray();
        }

        return [];
    }

    private function createAdminFeatures($userId, $features)
    {
        foreach ($features as $feature) {
            AdminFeature::create([
                'user_id' => $userId,
                'feature' => $feature,
                'enabled' => true,
            ]);
        }
    }

    private function generateTokenPayload($user, $userType, $adminFeatures)
    {
        // Generate the token
        $token = $user->createToken('user_auth_token', ['server:user'])->plainTextToken;

        // Build token payload
        $tokenPayload = [
            'token' => $token,
            'tokenType' => $userType == 'Admin' ? 'admin' : 'user',
            'user' => $userType,
            'institute_slug' => $user->institute_slug,
        ];

        // Add admin features if user is admin
        if ($userType == 'Admin') {
            $tokenPayload['adminFeatures'] = $adminFeatures;
        }

        // Check if user is mentor or mentee and add to the payload
        if ($user->is_admin && $user->mentor) {
            $tokenPayload['is_mentor'] = true;
        } elseif (!$user->is_admin && $user->mentee) {
            $tokenPayload['is_mentee'] = true;
        }

        return $tokenPayload;
    }

    public function register($input)
    {

        if(isset($input['referrer_code'])){
            $referrer = User::where('referral_code', $input['referrer_code'])->firstOrFail();
            $input['referrer_user_id'] = $referrer->id;
        }

        $user = User::create($input);

        // Generate OTP and save it to verifications table
        $otp = 1234;
        $user->verifications()->create([
            'token' => $otp
        ]);

        $user->save();

        // Prepare and dispatch the email job
        $emailJob = (new AuthJobManager($user, "new_user"))->delay(Carbon::now()->addSeconds(2));
        dispatch($emailJob);

        $phoneNumber = $user->phone;
        dispatch(new SendOtpSmsJob($phoneNumber, $otp));

        // Prepare the response data
        $data['message'] = 'Check your email and phone for verification code';
        $data['email'] = $user->email;
        $data['phone'] = $phoneNumber;

        return [
            'data' => $data,
            'code' => 201
        ];
    }

    public function forgot($input)
    {

        $user = User::where('email', $input['email'])->first();

        $user->verifications()->create([
            'user_id' => $user->id,
            'token' => mt_rand(1000, 9999)
        ]);
        $emailJob = (new AuthJobManager($user, 'forgot_password'))->delay(Carbon::now()->addSeconds(2));
        dispatch($emailJob);


        $data['message'] = 'Check your email for RESET link';

        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function resetPassword($input, User $user, $token)
    {
        $verify = $user->verifications()->whereToken($token)->first();
        if ($verify === null) {
            $response = ['message' => 'Invalid Token'];
            return [
                'data' => $response,
                'code' => 422
            ];
        }

        $user->update($input);
        $verify->delete();
        $data['message'] = 'Password reset successfully';

        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function completeRegistration(User $user, $token, $fcm_token)
    {

        $verify = $user->verifications()->whereToken($token)->first();
        if ($verify === null) {
            $response = ['message' => 'Invalid Token'];
            return [
                'data' => $response,
                'code' => 422
            ];
        }
        $user->email_verified_at = Carbon::now();
        $user->save();
        $verify->delete();

        $token = $user->createToken('user_auth_token', ['server:user'])->plainTextToken;
        $data = ['token' => $token, 'tokenType' => 'user',];

        $data['message'] = 'Registration was completed successfully';
        event(new NewUser($user, $user->institute_slug));
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function regenerateToken($input)
    {

        $user = User::where('email', $input['email'])->firstOrFail();
        if ($user->email_verified_at != null) {
            $data['message'] = 'Account Already Comfirmed';
            return [
                'data' => $data,
                'code' => 403
            ];
        }

        $user->verifications()->create([
            'token' => mt_rand(1000, 9999)
        ]);

        $emailJob = (new AuthJobManager($user, "new_user"))->delay(Carbon::now()->addSeconds(2));
        dispatch($emailJob);

        $data['message'] = 'Check your email for confirmation email';
        return [
            'data' => $data,
            'code' => 200
        ];
    }
}
