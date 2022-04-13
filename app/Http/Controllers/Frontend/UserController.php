<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function registrationForm(){
        
        return view('frontend.pages.registration');
    }
    public function customerRegistration(Request $request){
        $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'customer',

        ]);
        return redirect()->route('home');

    }
    public function login(Request $request){
        //  dd($request->all());
         $request->validate([
            'email'=>'required|email',
            'password'=>'required',
         ]);
    
         $credentials=$request->except('_token');
        //  dd(auth()->attempt($credentials));
         if(auth()->attempt($credentials))
         {
            //  dd(auth()->user());
            return redirect()->back();
         }
         return redirect()->back()->with('message','Invalid Credentials.');

}
}