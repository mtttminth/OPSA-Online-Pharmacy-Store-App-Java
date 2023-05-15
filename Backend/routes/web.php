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

//category
Route::resource('category','CategoryController')->middleware('auth');


//products
Route::resource('products','ProductsController')->middleware('auth');

//users
Route::resource('users','UserController')->middleware('auth');

//stock
Route::resource('stock','StockController');

//ordre_items
Route::resource('orderitems','OrderitemsController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('aboutus');
});
