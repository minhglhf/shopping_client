<?php

use App\Category;
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

//Route::get('/', 'LoginController@index')->name('login');

//Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/products/checkout', 'ProductController@checkout')->name('checkout');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/login', 'Auth\LoginController@login')->middleware('guest')->name('login');

Route::get('/login', function () {
    $categories = Category::where('parent_id', 0)->get();
    return view('auth/login', compact('categories'));
})->middleware('guest')->name('login');

Route::get('/register', function () {
    $categories = Category::where('parent_id', 0)->get();
    return view('auth/register', compact('categories'));
})->middleware('guest')->name('register');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
})->name('logout');
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
