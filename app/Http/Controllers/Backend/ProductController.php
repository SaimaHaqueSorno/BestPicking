<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productForm(){
        return view('backend.pages.product');
} 
public function ProductPost(Request $request){
    // dd($request->all());
    Product::create([
        'name'=>$request->product_name,
        'details'=>$request->product_details
    ]);

    return redirect()->back();
}

}
