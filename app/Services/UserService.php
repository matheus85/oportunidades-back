<?php

namespace App\Services;

use App\Models\User;
use App\Services\UserServiceInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserService implements UserServiceInterface
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    public function getClientes(): Collection
    {
        return $this->userRepository->getClientes();
    }
}
