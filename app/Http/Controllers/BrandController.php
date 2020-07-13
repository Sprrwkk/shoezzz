<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function showBrands() {

        $brands = Brand::all();

        return response($brands, 200);
    }


    public function showBrandById($brand_id) {
        $brand = Brand::findOrFail($brand_id);

        return response($brand, 200);
    }


    public function createBrand(Request $request) {
        $brand = new Brand;

        $input = $request->all();

        foreach ($input as $key=>$value) {
            $brand -> $key = $input[$key];
        }

        $brand -> save();

        return response($brand, 200);
    }


    public function editBrand($brand_id, Request $request) {
        $brand = Brand::findOrFail($brand_id);

        $input = $request->all();

        foreach ($input as $key=>$value) {
            $brand->$key = $input[$key];
        }

        $brand -> save();

        return response($brand, 200);
    }


    public function removeBrandById($brand_id) {
        $brand = Brand::findOrFail($brand_id);

        $brand->delete();

        return response(200);
    }

}
