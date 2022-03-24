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
    return view('backend.pages.categorylist',compact('categories'));

    }
    public function categoryForm(){
        return view('backend.pages.categoryform');
    }
    public function categoryPost(Request $request){
        // dd($request->all());
        Category::create([
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'details'=>$request->details,
        ]);
        return redirect()->route('category.list');

    }
}
