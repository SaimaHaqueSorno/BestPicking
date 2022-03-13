<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;

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

Route::get('/', function () {
    return view('backend.pages.dashboard');
});

Route::get('/order',function() {
    return view('backend.pages.order');    
});
Route::get('/product',function() {
    return view('backend.pages.product');
});
Route::get('/category',function() {
    return view('backend.pages.category');
});



//Backend
Route::get('/product/form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product/post',[ProductController::class,'productPost'])->name('product.post');

Route::get('/category/list',[ CategoryController::class,'categoryList'])->name('category.list');