<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function listAll(): JsonResponse;
}
