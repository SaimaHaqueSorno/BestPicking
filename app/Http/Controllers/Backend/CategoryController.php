<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categoryList(){

        $categories=Category::all();
        //dd($request->all());
    return view('backend.pages.category',compact('categories'));

    }
}
