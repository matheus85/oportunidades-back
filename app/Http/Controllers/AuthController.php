<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Resources\AuthResource;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $input = $request->all();

        if (
            !Auth::attempt([
            'email'    => $input['email'],
            'password' => $input['password']])
        ) {
            return $this->responseError('Unauthorized', 401);
        }

        $user = User::find(Auth::id());

        return new AuthResource($user);
    }
}
