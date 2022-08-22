<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\If_;

class ItemController extends Controller
{
    public function itemList(Request $request, $cate_id){

// dd($cate_id);
        $items = Category::find($cate_id);
        $products = Product::where('category_id', $cate_id)->get();
        return view('backend.pages.Item.itemlist',compact('items','products',));
    }
    
}
