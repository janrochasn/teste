<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\User;

interface UserRepositoryInterface
{
    public function register($request);
}