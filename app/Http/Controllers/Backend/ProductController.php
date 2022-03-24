<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function productlist(){

        $products = Product::with('category')->get();
        // dd($products);
        return view('backend.pages.productlist',compact('products'));
    } 

    public function productForm(){
        $categories=Category::all();
        return view('backend.pages.product',compact('categories'));
    }

    public function productPost(Request $request){
        //dd($request->all());
        Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'details'=>$request->details,
        ]);

        return redirect()->route('product.list');
    }

}
