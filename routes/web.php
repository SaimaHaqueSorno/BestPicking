<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\UserController as frontendUser;

use App\Http\Controllers\Frontend\HomeController;

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
 Route::get('/customer/registration/form',[frontendUser::class,'registrationForm'])->name('registration.form');
 Route::post('/customer/registration',[frontendUser::class,'customerRegistration'])->name('customer.registration');

 Route::post('/customer/login',[frontendUser::class,'login'])->name('customer.login');





//Backend


  Route::get('/',[UserController::class,'login'])->name('admin.login');
  Route::post('/admin/do-login',[UserController::class,'doLogin'])->name('admin.do.login');




  Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
    
    Route::get('/order',function() {
        return view('backend.pages.order');    
    });
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

Route::get('/user/list',[UserController::class,'userList'])->name('user.list');

});