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

    public function updateUserRole(Request $request, User $user)
    {
        $validated = $request->validate([
            'is_admin' => 'required|boolean'
        ]);

        $user->update($validated);

        return response()->json("User Role has been Updated", 200);
    }

    public function updateUsersRoles(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:users,id',
            'is_admin' => 'required|boolean'
        ]);

        // Retrieve the list of IDs from the request
        $ids = $request->input('ids');

        $users = User::whereIn('id', $ids)->update([
            'is_admin' => $request->input('is_admin')
        ]);

        return response()->json('Users Roles have been updated.', 200);
    }
}
