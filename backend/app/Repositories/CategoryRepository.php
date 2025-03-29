<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function listAll()
    {
        return Category::select('name')->orderBy('name', 'asc')->get();
    }
}