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

}
