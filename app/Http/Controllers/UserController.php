<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserServiceInterface;
use App\Http\Resources\UserResource;
use Exception;

class UserController extends Controller
{
    public function __construct(private UserServiceInterface $userService)
    {
    }

    public function clientes()
    {
        try {
            $users = $this->userService->getClientes();
        } catch (Exception $e) {
            return $this->responseError($e->getMessage(), $e->getCode());
        }

        return UserResource::collection($users);
    }
}
