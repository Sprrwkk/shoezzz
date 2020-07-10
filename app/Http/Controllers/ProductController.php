<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showProducts() {
        $products = Product::with('category', 'brand')->get();

        return response($products, 200);
    }
}
