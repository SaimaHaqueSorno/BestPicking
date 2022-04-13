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

        if(array_key_exists($product_id,$getCart)){

          ++$getCart[$product_id]['quantity'];
          $getCart[$product_id]['subtotal']=$getCart[$product_id]['quantity']*$getCart[$product_id]['price'];
          session()->put('cart',$getCart);
          return redirect()->back()->with('message','Product Quantity Updated');
        }else
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
        $getCart[$product_id]['quantity']=$request->quantity;
        $getCart[$product_id]['subtotal']=$request->quantity*$getCart[$product_id]['price'];
        session()->put('cart',$getCart);

        return redirect()->back()->with('message','Product Quantity Updated');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
    
    public function placeOrder(Request $request)
    {
        // dd($request->all());
        $order=Order::create([
          
                       'user_id' =>1,
                       'receiver_first_name' =>$request->first_name,
                       'receiver_last_name' =>$request->last_name,
                       'receiver_email' =>$request->email,
                       'receiver_address' =>$request->address,
                       'total' =>array_sum(array_column(session()->get('cart'),'subtotal')),
                    ]);


         foreach(session()->get('cart') as $key=>$cartData)
        {
            OrderDetails::create([
                'order_id'=>$order->id,
                'item_id'=>$key,
                'quantity'=>$cartData['quantity'],
                'unit_price'=>$cartData['price'],
                'subtotal'=>$cartData['subtotal'],
            ]);
        }
        session()->forget('cart');
        return redirect()->route('home')->with('message','Order Placed Successfully');
            
    }
}
