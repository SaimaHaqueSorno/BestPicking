<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
//        dd($request->product);
//        dd(request()->product);


        $products=Product::where('name','like','%'.$request->product.'%')->get();

        return view('frontend.layouts.search',compact('products'));
    }
}
