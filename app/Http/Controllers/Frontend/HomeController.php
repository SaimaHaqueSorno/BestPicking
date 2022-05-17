<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;



class HomeController extends Controller
{
    public function home(){
        $products=Product::all();
        return view('frontend.pages.home',compact('products'));
    }
   
    public function showProduct($product_id){
        $product=Product::find($product_id);
          return view('frontend.pages.product',compact('product'));

    }

    public function updateQuantity(Request $request,$product_id)
    {
       
        $product=Product::find($product_id);
        if($product)
        {
            $product->update([
            'quantity'=>$request->quantity,

            ]);
            return redirect()->back()->with('message','Product Quantity Updated');
        }
    }
    public function userlogout(){
        auth()->logout();
   
        return redirect()->route('home')->with('message','Logout Successfully');
       }

}