<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Product;

interface ProductRepositoryInterface
{
    public function listAll(): JsonResponse;

    public function listByProductId(int $product_id): JsonResponse;

    public function listByCategoryId(int $category_id): JsonResponse;

    public function listByQuery(string $query_search): JsonResponse;
}