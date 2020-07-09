<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductController@ListProduct');

Route::post('/signin', 'AuthController@SignIn')->name('signin');

Route::get('/loginPage', function () {
    return view('login');
})->name('loginPage');

Route::get('/logout', 'AuthController@LogOut')->name('logout');


//Product Route
Route::get('/product', 'ProductController@ShowProduct')->name('product')->middleware('auth');
Route::get('/addProductView', function () {
    return view('addProduct');
})->name('addProductView')->middleware('auth');
Route::post('/addproduct', 'ProductController@AddProduct')->name('addProduct')->middleware('auth');
Route::get('/showEditProduct/{product_id}', 'ProductController@ShowEditProduct')->name('showEditProduct')->middleware('auth');
Route::post('/editProduct/{product_id}', 'ProductController@editProduct')->name('editProduct')->middleware('auth');
Route::get('/deleteProduct/{product_id}', 'ProductController@DeleteProduct')->name('deleteProduct')->middleware('auth');
Route::get('/productImage/{filename}', 'ProductController@ProductImage')->name('productImage');

//User Route
Route::get('/user', 'UserController@ShowUser')->name('user')->middleware('auth');
Route::get('/deleteUser/{user_id}', 'UserController@DeleteUser')->name('deleteUser')->middleware('auth');

//Order Route
Route::get('/showOrderInfo/{product}/{total}', 'OrderController@ShowOrderInfo')->name('showOrderInfo');
Route::post('/submitOrder/{product}/{total}', 'OrderController@SubmitOrder')->name('submitOrder');
Route::get('/order', 'OrderController@ShowOrder')->name('order')->middleware('auth');
Route::get('/deleteOrder/{order_id}', 'OrderController@DeleteOrder')->name('deleteOrder')->middleware('auth');