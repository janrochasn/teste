<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function listAll()
    {
        return Category::select('id', 'name')->orderBy('name', 'asc')->get();
    }
}