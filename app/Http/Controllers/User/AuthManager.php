<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\User;
use App\Models\FcmToken;
use Illuminate\Http\Request;
use App\Jobs\User\AuthJobManager;
use App\Jobs\User\SendOtpSmsJob;
use App\Models\VerificationToken;
use App\Services\User\AuthService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Services\User\AuthAppleService;
use App\Http\Requests\User\LoginRequest;
use App\Services\User\AuthGoogleService;
use App\Http\Requests\User\RegisterRequest;

class AuthManager extends Controller
{
    private $authService;

    function __construct(AuthService $authService )
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        $loginData = $this->authService->login($request->validated());
        return response($loginData['data'], $loginData['code']);
    }


    public function register(RegisterRequest $request)
    {
        $registerData = $this->authService->register($request->validated());
        return response($registerData['data'], $registerData['code']);
    }

    public function forgot(Request $request)
    {
        $validated = $request->validate(RegisterRequest::$_forgotRules);

        $_data = $this->authService->forgot($validated);
        return response($_data['data'], $_data['code']);
    }

    public function resetPassword(Request $request, User $user, $token)
    {
        $validated = $request->validate(RegisterRequest::$_resetRules);

        $_data = $this->authService->resetPassword($validated, $user, $token);
        return response($_data['data'], $_data['code']);
    }

    public function completeRegistration(Request $request, User $user, $token)
    {
        $_data = $this->authService->completeRegistration($user, $token, $request->input('fcm_token'));
        return response($_data['data'], $_data['code']);
    }

    public function regenerateToken(Request $request)
    {
        $validated = $request->validate(RegisterRequest::$_forgotRules);
        $_data = $this->authService->regenerateToken($validated);
        return response($_data['data'], $_data['code']);
    }

    public function logout(Request $request)
    {
        $response = array('message' => $request->user()->currentAccessToken()->delete());
        return response()->json($response, 200);
    }
}
