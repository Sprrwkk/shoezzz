<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    //
    function getCategories() {
        $categories = Category::all();

        return response($categories, 200);
    }



    function getCategoryById($category_id) {

        $category = Category::findOrFail($category_id);

        return response($category, 200);
    }



    function createCategory(Request $request) {

        $category = new Category;

        $category->category_name = $request->category_name;
        $category->save();

        return response($category, 200);
    }



    function editCategory($category_id, Request $request) {

        $category = Category::findOrFail($category_id);


        $category->category_name = $request->category_name;

        $category->save();

        return response($category, 200);
    }



    function removeCategory($category_id) {

        $category = Category::findOrFail($category_id);

        $category->delete();

        return response(200);
    }
}


