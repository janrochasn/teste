<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function register($request)
    {
        return User::create($request);
    }
}