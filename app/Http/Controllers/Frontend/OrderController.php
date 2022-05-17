<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;


class OrderController extends Controller
{
    public function viewCart()
    {
        return view('frontend.pages.cart');
    }

    public function addToCart($product_id){
        $product=Product::find($product_id);

        $getCart=session()->get('cart');

        if($getCart==null)
        {
            
            if($product->quantity>=1)
            {
                $newCart=[
                    $product->id=>[
                        'name'=>$product->name,
                        'quantity'=>1,
                        'price'=>$product->price,
                        'image'=>$product->image,
                        'subtotal'=>$product->price,
                    
                    ]
            ];

             session()->put('cart',$newCart);
                    return redirect()->back()->with('message','Product Added to Cart');
                }
                return redirect()->back()->with('message','Product stock out.');
        }

        if(array_key_exists($product_id,$getCart)){

            ++$getCart[$product_id]['quantity'];
            if($product->quantity>=$getCart[$product_id]['quantity'])
            {
          $getCart[$product_id]['subtotal']=$getCart[$product_id]['quantity']*$getCart[$product_id]['price'];
          session()->put('cart',$getCart);
          return redirect()->back()->with('message','Product Quantity Updated');
        }
        return redirect()->back()->with('message','Product Stock out.');
    }else
        {   if($product->quantity>=1)
            {
            $getCart[$product->id]=[
                'name'=>$product->name,
                'price'=>$product->price,
                'quantity'=>1,
                'image'=>$product->image,
                'subtotal'=>$product->price,
                'discount'=>5,
        ];
        session()->put('cart',$getCart);
        return redirect()->back()->with('message','Product Added to Cart.');
    }
    return redirect()->back()->with('massege','Product Stock out.');
}
    
}
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart Clear');
    }
        
    public function deleteCart($product_id)
    {
         $updatedCart=session()->get('cart');
         unset($updatedCart[$product_id]);
         session()->put('cart',$updatedCart);

         return redirect()->back()->with('message','Item Deleted');
    }
    public function updateCart(Request $request,$product_id)
    {
        $getCart=session()->get('cart');
        $product=Product::find($product_id);
        if($product->quantity>=$request->quantity)
        {
            $getCart[$product_id]['quantity']=$request->quantity;
            $getCart[$product_id]['subtotal']=$request->quantity *$getCart[$product_id]['price'];

            session()->put('cart',$getCart);
            return redirect()->back()->with('message','Product Quantity Updated');
        }
        return redirect()->back()->with('message','Product Stock Out.');
    }


    public function checkout()
    {
        $products=Product::all();
        return view('frontend.pages.checkout',compact('products'));
    }


}