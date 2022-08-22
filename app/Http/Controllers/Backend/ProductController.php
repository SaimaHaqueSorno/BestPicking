<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function productlist(){

        $products = Product::with('category')->paginate(10);
        // dd($products);
        return view('backend.pages.productlist',compact('products'));
    } 

    public function productForm(){
        $categories=Category::all();
    
        return view('backend.pages.product',compact('categories'));
    }

    public function productPost(Request $request){
       
  
        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'quantity'=>'required | integer',
            'price'=>'required | numeric',
            'details'=>'required',
            'feature_product'=>'required | boolean'
        ]);
        
        // dd($request->all());
      
        $filename= null;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename=date('ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'image'=>$filename,
            'details'=>$request->details,
            'feature_product'=>$request->feature_product,
        ]);
      
       

        return redirect()->route('product.list');
    
    }
        
       public function productdelete($id){

           $products=Product::find($id);
           if($products){
               $products->delete();
               return redirect()->back();
           } 
           else{
           return redirect()->back();
           }
    
    }

public function productEdit($id){
    $categories=Category::all();
    $product =Product::find($id);
    // dd($product);
    if ($product){
    return view('backend.pages.productedit',compact('product','categories'));
    }else{
        return redirect()->back();
    }
}



public function productUpdate(Request $request,$id){
    $product=Product::find($id);
    
    $filename = $product->image;
    if($product){
        $product->update([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'image'=>$filename,
            'details'=>$request->details,
            'feature_product'=>$request->feature_product,
        ]);
        return redirect()->route('product.list');
    }
    else{
        return redirect()->back();
    }
}
}
