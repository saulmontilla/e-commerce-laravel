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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/{category}/{subcategory}/{product_slug}', 'ProductController@product')->name('product');
Route::get('/cart', 'ShoppingCartController@index')->name('cart');
Route::post('/cart/add-product', 'ShoppingCartController@addProduct')->name('cart.addProduct');
