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



    public function showProductById($product_id) {

        $product = Product::with('brand')->findOrFail($product_id);

        return response($product, 200);
    }



    public function createProduct(Request $request) {

        $product = new Product;

        $product->product_name = $request->product_name;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->brand = $request->brand;
        $product->color = $request->color;

        $product->save();

        return response($product, 200);
    }



    public function editProduct($product_id, Request $request) {

        $product = Product::findOrFail($product_id);

        $input = $request->all();

        foreach ($input as $key => $value) {
            $product->$key = $input[$key];
        }

        $product->save();

        return response($product, 200);
    }



    public function removeProductById($product_id) {

        $product = Product::findOrFail($product_id);

        $product->delete();

        return response(200);

    }
}
