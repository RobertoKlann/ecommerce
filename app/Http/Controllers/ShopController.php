<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = cache()->remember('products', 600, function () use ($request) {
            return ProductResource::collection(
                Product::query()
                    ->withCategories($request->category ?? '')
                    ->withMinPrice($request->min_price ?? '')
                    ->withMaxPrice($request->max_price ?? '')
                    ->withSearch($request->search ?? '')
                    ->withSortBy($request->sortBy ?? '')
                    ->with('category')
                    ->where('available_quantity', '>', 0)
                    ->paginate(16)
                    ->withQueryString()
            );
        });

        $categories = cache()->remember('categories', 600, function () {
            return CategoryResource::collection(Category::withCount('products')->get());
        });

        $users = cache()->remember('users', 600, function () {
            return User::all()->toArray();
        });

        return inertia('Home', [
            'products' => $products,
            'categories' => $categories,
            'category' => $request->category ?? '',
            'users' => $users ?? ''
        ]);
    }


    public function index(Request $request)
    {
        $products = cache()->remember('products', 600, function () use ($request) {
            return ProductResource::collection(
                Product::query()
                    ->withCategories($request->category ?? '')
                    ->withMinPrice($request->min_price ?? '')
                    ->withMaxPrice($request->max_price ?? '')
                    ->withSearch($request->search ?? '')
                    ->withSortBy($request->sortBy ?? '')
                    ->with('category')
                    ->where('available_quantity', '>', 0)
                    ->paginate(16)
                    ->withQueryString()
            );
        });

        $categories = cache()->remember('categories', 600, function () {
            return CategoryResource::collection(Category::withCount('products')->get());
        });

        // dd($request->category);

        return Inertia('Search', [
            'products' => $products,
            'categories' => $categories,
            'category' => $request->category ?? '',
            'min_price' => $request->min_price ?? '',
            'max_price' => $request->max_price ?? '',
            'sortBy' => $request->sortBy ?? '',
            'search' => $request->search
        ]);
    }
}
