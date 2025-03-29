<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ProductService
{
    public function __construct(protected ProductRepositoryInterface $productRepository)
    {
        //
    }

    public function listAll() : JsonResponse
    {
        return $this->productRepository->listAll();
    }

    public function listByProductId(int $product_id) : JsonResponse
    {
        return $this->productRepository->listByProductId($product_id);
    }

    public function listByCategoryId(int $category_id) : JsonResponse
    {
        return $this->productRepository->listByCategoryId($category_id);
    }

    public function listByQuery(string $query_search) : JsonResponse
    {
        return $this->productRepository->listByQuery($query_search);
    }
}