<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request){
        $search = $request['search']??"";
        if($search !=""){
            $product = Product::where('name','LIKE',"%$search%")->get();
        }
        else{
            $product = Product::all();
        }
        return view('frontend.pages.search',compact('product'));
    }
}
