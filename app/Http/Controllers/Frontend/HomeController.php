<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;



class HomeController extends Controller
{
    public function home(){
        $products=Product::all();
        $categories=Category::all();
        return view('frontend.pages.home',compact('products','categories'));
    }
   
    public function showProduct($product_id){
        $product=Product::find($product_id);
          return view('frontend.pages.product',compact('product'));

    }

    public function userlogout(){
        auth()->logout();
   
        return redirect()->route('home')->with('message','Logout Successfully');
       }

}