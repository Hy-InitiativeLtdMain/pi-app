<?php

namespace App\Services\User;

use App\Jobs\User\AuthJobManager;
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
        }


        // Include institute slug in token payload
        $token = $user->createToken('user_auth_token', ['server:user'])
            ->plainTextToken;
        $tokenPayload = [
            'token' => $token,
            'tokenType' => 'user',
            'user' => $userType,
            'institute_slug' => $user->institute_slug,
        ];

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
