<?php

namespace App\Repositories;

use Illuminate\Http\JsonResponse;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function listAll()
    {
        return  Product::select('id', 'name', 'description', 'price','image_url')
                ->orderBy('name', 'asc')
                ->paginate(10);
    }

    public function listByProductId(int $product_id)
    {
        return Product::select('id', 'name', 'description', 'price','image_url')
                ->where('id', '=', $product_id)
                ->orderBy('name', 'asc')
                ->get();
    }

    public function listByCategoryId(int $category_id)
    {
        return Product::select('id', 'name', 'description', 'price','image_url')
                ->where('category_id', '=', $category_id)
                ->orderBy('name', 'asc')
                ->get();
    }

    public function listByQuery(string $query_search)
    {
        return Product::select('id', 'name', 'description', 'price','image_url')
                ->whereAny([
                    'name',
                    'description',
                ], 'like', "%$query_search%")
                ->orderBy('name', 'asc')
                ->get();
    }
}