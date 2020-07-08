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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signin', 'AuthController@SignIn')->name('signin');
Route::get('/product', 'ProductController@ShowProduct')->name('product');
Route::get('/order', 'OrderController@ShowOrder')->name('order');
Route::get('/user', 'UserController@ShowUser')->name('user');

