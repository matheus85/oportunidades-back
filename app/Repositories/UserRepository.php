<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(private User $user)
    {
    }

    public function getClientes(): Collection
    {
        return $this->user->where('perfil_id', 1)->get();
    }
}
