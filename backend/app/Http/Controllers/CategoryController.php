<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $categoryService) {
        //
    }

    public function listAll() : JsonResponse
    {
        $categories = $this->categoryService->listAll();
        return response()->json($categories);
    }
}
