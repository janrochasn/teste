<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function __construct(protected ProductService $productService) {
        //
    }

    public function list(Request $request) : JsonResponse
    {
        if ($request->has('category')) {
            $products = $this->productService->listByCategoryId($request['category']);
        } else if($request->has('search')) {
            $products = $this->productService->listByQuery($request['search']);
        } else {
            $products = $this->productService->listAll();
        }

        return response()->json($products);
    }

    public function listByProductId(int $product_id)
    {
        $products = $this->productService->listByProductId($product_id);
        return $products;
    }
}
