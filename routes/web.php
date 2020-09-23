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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{slug}/{id}',[
   'as' => 'category.product',
    'uses' => 'CategoryController@index'
]);

Route::get('/product/{id}',[
    'as' => 'product.product_detail',
    'uses' => 'ProductController@index'
]);

Route::get('/product/add-to-cart/{id}', 'ProductController@addToCart')->name('addToCart');
Route::get('/products/clear-cart', 'ProductController@clearCart')->name('clearCart');
Route::get('/products/update-cart', 'ProductController@updateCart')->name('updateCart');
Route::get('/products/delete-cart', 'ProductController@deleteCart')->name('deleteCart');


Route::get('/products/show-cart', 'ProductController@showCart')->name('showCart');
