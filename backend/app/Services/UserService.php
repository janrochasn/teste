<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;

class UserService
{
    public function __construct(protected UserRepositoryInterface $userRepository)
    {
        //
    }

    public function register($request)
    {
        return $this->userRepository->register($request);
    }
}
