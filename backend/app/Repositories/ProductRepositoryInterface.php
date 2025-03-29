<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Product;

interface ProductRepositoryInterface
{
    public function listAll();

    public function listByProductId(int $product_id);

    public function listByCategoryId(int $category_id);

    public function listByQuery(string $query_search);
}