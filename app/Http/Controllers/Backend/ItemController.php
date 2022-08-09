<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemList(Request $request, $cate_id){

// dd($cate_id);
        $items = Category::find($cate_id);
        $products = Product::where('category_id', $cate_id)->get();
      
       
        return view('backend.pages.Item.itemlist',compact('items','products',));
    }

    public function itemForm(Request $request, $id)
    {
        $allCategory = Category::all();
        $categories= Category::find($id);
        // dd($categories);
       return view('backend.pages.Item.itemcreate',compact('categories', 'allCategory'));
    }
}

