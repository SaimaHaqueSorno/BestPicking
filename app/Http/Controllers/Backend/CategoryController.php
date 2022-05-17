<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categoryList(){

        $categories=Category::all();
        //dd($request->all());
    return view('backend.pages.categorylist',compact('categories'));

    }
    public function categoryForm(){
        return view('backend.pages.categoryform');
    }
    public function categoryPost(Request $request){
        // dd($request->all());

        $filename= null;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename=date('ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        Category::create([
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'details'=>$request->details,
            'image'=>$filename,
           
        ]);
        return redirect()->route('category.list');

    }
    public function categoryDelete($id){

        $category=Category::find($id);
        if($category){
            $category->delete();
            return redirect()->back();
        } 
        else{
        return redirect()->back();
        }
 
 }

}
