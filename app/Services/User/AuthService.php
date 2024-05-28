<?php

namespace App\Services\User;

use App\Events\Admin\NewUser;
use App\Jobs\User\AuthJobManager;
use App\Models\AdminFeature;
use App\Models\FcmToken;
use App\Models\User;
use App\Models\VerificationToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login($input)
{
    $user = User::where('email', $input['email'])->first();

    if ($user && Hash::check($input['password'], $user->password)) {
        // Check if user is admin or learner
        $userType = $user->is_admin ? 'Creator' : 'Learner';
            // check if user->admin is true

            if ($user->admin) {
                $userType = 'Admin';

                // Fetch admin features
                $adminFeatures = AdminFeature::where('user_id', $user->id)->get();
                // dd($adminFeatures);

                // If admin features are empty, create default features
                if ($adminFeatures->isEmpty()) {
                    // Check if there is another admin with the same institute_slug
                    $adminWithSameInstitute = User::where('institute_slug', $user->institute_slug)
                        ->where('admin', true)
                        ->get()->pluck('id')->toArray();

                    // dd($adminWithSameInstitute);
                    // If another admin with the same institute_slug exists, get their features
                    if ($adminWithSameInstitute) {
                        $adminFeatures = AdminFeature::whereIn('user_id', $adminWithSameInstitute)->get();
                        // dd($adminFeatures);
                    }
                    if ($adminFeatures->isEmpty()){
                    $features = ['mentorship', 'course', 'analytics', 'transaction'];

                    foreach ($features as $feature) {
                        AdminFeature::create([
                            'user_id' => $user->id,
                            'feature' => $feature,
                            'enabled' => true, // All features are initially enabled
                        ]);
                    }

                    // Fetch admin features again after creating defaults
                    $adminFeatures = AdminFeature::where('user_id', $user->id)->get();
                    }
                }
            } else {
                // If user is not admin, send admin features of admin that shares the same institute
                $adminWithSameInstitute = User::where('institute_slug', $user->institute_slug)
                ->where('admin', true)
                ->get();

                $adminIds = $adminWithSameInstitute->pluck('id')->toArray();

                if ($adminIds) {
                    $adminFeatures = AdminFeature::whereIn('user_id', $adminIds)->get();
                } else {
                    $adminFeatures = collect(); // Return an empty collection if no admin found
                }
            }

            // If user is not admin send adminfeature of admin that shares the same institute


        // Include institute slug in token payload
        $token = $user->createToken('user_auth_token', ['server:user'])
            ->plainTextToken;

            // Build token payload
            $tokenPayload = [
                    'token' => $token,
                    'tokenType' => $userType == 'Admin' ? 'admin' : 'user',
                    'user' => $userType,
                    'institute_slug' => $user->institute_slug,
                ];

            // Add admin features if user is admin or learner
            if ($userType == 'Admin' || !$user->admin) {
                $tokenPayload['adminFeatures'] = $adminFeatures;
            }

            // Check if user is mentor or mentee
            if ($user->is_admin && $user->mentor) {
                $tokenPayload['is_mentor'] = true;
            } elseif (!$user->is_admin && $user->mentee) {
                $tokenPayload['is_mentee'] = true;
            }

            return [
                'data' => $tokenPayload,
                'code' => 200
            ];
    } else {
        $response = ['message' => 'Invalid email or password'];
        return [
            'data' => $response,
            'code' => 422
        ];
    }
}

    public function register($input)
    {

        if(isset($input['referrer_code'] )){
            $referrer = User::where('referral_code', $input['referrer_code'] )->firstOrFail();
            $input['referrer_user_id'] = $referrer->id;
        }

        $user = User::create($input);

        $user->verifications()->create([
            'token' => mt_rand(1000, 9999)
        ]);

        $user->save();


        $emailJob = (new AuthJobManager($user, "new_user"))->delay(Carbon::now()->addSeconds(2));
        dispatch($emailJob);

        $data['message'] = 'Check your email for verification code';
        $data['email'] = $user->email;
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
