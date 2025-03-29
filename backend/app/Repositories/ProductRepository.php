<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function listAll(): JsonResponse
    {
        return response()->json(
            Product::select('name', 'description', 'price','image_url')
            ->orderBy('name', 'asc')
            ->paginate(10)
        );
    }

    public function listByProductId(int $product_id): JsonResponse
    {
        return response()->json(
            Product::select('name', 'description', 'price','image_url')
            ->where('id', '=', $product_id)
            ->orderBy('name', 'asc')
            ->get()
        );
    }

    public function listByCategoryId(int $category_id): JsonResponse
    {
        return response()->json(
            Product::select('name', 'description', 'price','image_url')
            ->where('category_id', '=', $category_id)
            ->orderBy('name', 'asc')
            ->get()
        );
    }

    public function listByQuery(string $query_search): JsonResponse
    {
        return response()->json(
            Product::select('name', 'description', 'price','image_url')
            ->whereAny([
                'name',
                'description',
            ], 'like', "%$query_search%")
            ->orderBy('name', 'asc')
            ->get()
        );
    }
}