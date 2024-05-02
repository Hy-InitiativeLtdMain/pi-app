<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use App\Services\User\AuthService;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    private $authService;

    function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    // register
    public function register(Request $request)
    {
        $validated = $request->validate(RegisterRequest::$_adminRules);
        $registerData = $this->authService->register($validated);
        return response($registerData['data'], $registerData['code']);
    }

    
}
