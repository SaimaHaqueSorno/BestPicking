<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productlist(){
        $products = Product::all();
        return view('backend.pages.productlist',compact('products'));
    } 

    public function productForm(){
        return view('backend.pages.product');
    }

    public function productPost(Request $request){
        // dd($request->all());
        Product::create([
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'details'=>$request->details,
        ]);

        return redirect()->route('product.list');
    }

}
