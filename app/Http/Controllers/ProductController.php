<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function product ($category, $subcategory, $product_slug)
    {
        $product = Product::where('slug', '=', $product_slug)->first();

        $data = [
            'product' => $product
        ];

        return view('product', $data);
    }
}
