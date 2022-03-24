<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function customerlist(){
        $customers=Customer::all();
     return view('backend.pages.customer',compact('customers'));

    }
}
