<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;


class OrderController extends Controller
{
    public function orderlist(){
        $orders=Order::all();
        return view('backend.pages.order',compact('orders'));
    }
    public function viewOrder($id)
    {
        // dd($id);
        $order=Order::with('details','details.item')->find($id);
        return view('backend.pages.invoice',compact('order'));
    }

    public function orderDelete($id){

        $order=Order::find($id);
        if($order){
            $order->delete();
            return redirect()->back();
        } 
        else{
        return redirect()->back();
        }
    }
}
