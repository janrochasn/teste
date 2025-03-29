<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $categoryService) {
        //
    }

    public function listAll()
    {
        $categories = $this->categoryService->listAll();
        return $categories;
    }
}
