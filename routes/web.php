<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\SearchController;



use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Backend\OrderController as backendOrder;
use App\Http\Controllers\Frontend\UserController as frontendUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 //Frontend
 Route::get('/home',[HomeController::class,'home'])->name('home');
 Route::get('/product/view/{id}',[HomeController::class,'showProduct'])->name('product.view');

 //product search by name
 Route::get('/search/product/by/name',[ SearchController::class,'search'])->name('search');

 Route::get('/customer/registration/form',[frontendUser::class,'registrationForm'])->name('registration.form');
 Route::post('/customer/registration',[frontendUser::class,'customerRegistration'])->name('customer.registration');

 Route::post('/customer/login',[frontendUser::class,'login'])->name('customer.login');


 
 Route::get('/cart/view',[OrderController::class,'viewCart'])->name('cart.view');
 Route::get('/cart/add/{id}',[OrderController::class,'addToCart'])->name('cart.add');
 Route::get('/cart/clear',[OrderController::class,'clearCart'])->name('cart.clear');
 Route::get('/cart/delete/{id}',[OrderController::class,'deleteCart'])->name('cart.delete');
 Route::post('/cart/update/{id}',[OrderController::class,'updateCart'])->name('cart.update');


 
Route::group(['middleware'=>'auth'],function (){
 Route::get('/user/profile',[frontendUser::class,'userProfile'])->name('user.profile');
 Route::get('/user/logout',[HomeController::class,'userlogout'])->name('user.logout');
//  Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');
//  Route::post('/order/place',[OrderController::class,'placeOrder'])->name('order.place');
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout'); //form dekhbo
Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay'); // submit korbo

});





//Backend


  Route::get('/',[UserController::class,'login'])->name('admin.login');
  Route::post('/admin/do-login',[UserController::class,'doLogin'])->name('admin.do.login');




  Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){

    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/', [UserController::class,'dashboard'])->name('dashboard');
    
    

    Route::get('/product',function() {
        return view('backend.pages.product');
    });
    Route::get('/category',function() {
        return view('backend.pages.categorylist');
    });
    Route::get('/customer',function(){
        return view('backend.pages.customer');
    });

Route::get('/category/list',[CategoryController::class,'categoryList'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::post('/category/post',[CategoryController::class,'categoryPost'])->name('category.post');

Route::get('/product/list',[ProductController::class,'productlist'])->name('product.list');
Route::get('/product/form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product/post',[ProductController::class,'productPost'])->name('product.post');
Route::get('/product/delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'productUpdate'])->name('product.update');

Route::get('/order/list',[backendOrder::class,'orderlist'])->name('order.list');
Route::get('/order/view/{id}',[backendOrder::class,'viewOrder'])->name('order.view');
Route::get('/order/delete/{id}',[backendOrder::class,'orderDelete'])->name('order.delete');

Route::get('/user/list',[UserController::class,'userList'])->name('user.list');

});