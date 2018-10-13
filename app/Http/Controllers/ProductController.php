<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;

    function __construct(
        ProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }

    public function addProduct(Request $request)
    {

        if (!$request->has(['name', 'price', 'description', 'stock'])) {
            return response()->json(['bad request' => ['name', 'price', 'description', 'stock']], 400);
        }

        $product = $this->productRepository->addProduct($request);

        return response()->json($product);

    }
}
