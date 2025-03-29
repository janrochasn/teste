<?php

namespace App\Services;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CategoryService
{
    public function __construct(protected CategoryRepositoryInterface $categoryRepository)
    {
        //
    }

    public function listAll() : JsonResponse
    {
        return $this->categoryRepository->listAll();
    }
}
