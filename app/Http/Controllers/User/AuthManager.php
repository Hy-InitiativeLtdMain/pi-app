<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\LoginRequest;
use App\Jobs\User\AuthJobManager;
use App\Models\FcmToken;
use App\Models\User;
use App\Models\VerificationToken;
use App\Services\User\AuthAppleService;
use App\Services\User\AuthGoogleService;
use App\Services\User\AuthService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
