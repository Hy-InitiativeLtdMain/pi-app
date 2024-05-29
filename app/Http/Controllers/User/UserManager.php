<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Http\Request;

class UserManager extends Controller
{

    private $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $_data = $this->userService->index($request->all());
        return response($_data['data'], $_data['code']);
    }


    public function view(User $user)
    {
        $_data = $this->userService->view($user);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate(UserRequest::$_updateRules);
        // dd($validated);
        $_data = $this->userService->update($user, $validated);
        return response($_data['data'], $_data['code']);
    }





    public function delete(User $user)
    {
        $_data = $this->userService->deleteAccount($user);
        return response($_data['data'], $_data['code']);
    }
}
