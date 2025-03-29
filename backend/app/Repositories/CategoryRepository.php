<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function listAll(): JsonResponse
    {
        return response()->json(Category::select('name')->orderBy('name', 'asc')->get());
    }
}