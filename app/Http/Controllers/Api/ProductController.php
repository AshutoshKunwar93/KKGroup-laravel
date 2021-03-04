<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function list()
    {
        $produts = Product::orderBy('name', 'asc')
            ->select(['id', 'name', 'details', 'price', 'availability', 'rating'])
            ->get();

        return response()->json([
            'products' => $produts,
        ]);
    }
}
