<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderlist(){
        $orders=Order::all();
        return view('backend.pages.order',compact('orders'));
    }
}
