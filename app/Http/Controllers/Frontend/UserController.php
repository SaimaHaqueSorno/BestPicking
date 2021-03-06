<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetails;

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
       public function userProfile($id){
         
     
        //    $user=User::find($id);
        //    $orders=Order::where('user_id',auth()->user()->id);
           $order=Order::where('user_id',$id)->get();
           return view('frontend.pages.profile',compact('order'));
     
           
       }

       public function editProfile($id){
           $user=User::find($id);
           if($user){
               return view('frontend.pages.editprofile',compact('user'));
           }else{
               return redirect()->back();
           }
       }

       public function updateProfile(Request $request,$id){       
           $user=User::find($id);
          
           $filename=$user->image;
            if($request->hasfile('image')){
                $file=$request->file('image');
                $filename=date('ymdhms').'.'.$file->getClientOriginalExtension();
                // dd($filename);
                $file->storeAs('/uploads',$filename);
            }
          
           if($user){
               $user->update([
                   'name'=>$request->name,
                   'address'=>$request->address,
                   'email'=>$request->email,
                   'image'=>$filename,

               ]);
               return redirect()->route('user.profile',$user->id);
           }
           else{
               return redirect()->back();
           }

       }

     
       public function detailsView($id){
        $order=Order::with('details')->find($id);
    // dd($order->details);

           return view('frontend.pages.orderDetails',compact('order'));
       }



 

}
