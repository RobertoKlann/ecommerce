<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product = cache()->remember('product_slug_' . $product->slug, 600, function () use ($product) {
            return new ProductResource($product->load('category'));
        });

        return Inertia('Product/Show', [
            'product' => $product
        ]);
    }
}
