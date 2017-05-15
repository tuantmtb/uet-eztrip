<?php

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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('tours/create', 'TourController@create')->name('tour.create');
Route::post('tours/store', 'TourController@store')->name('tour.store');
Route::get('tours/lists', 'TourController@lists')->name('tour.lists');
Route::get('tours/{id}', 'TourController@show')->name('tour.show');

Route::get('orders/create', 'OrderController@create')->name('order.create');
Route::post('orders/store', 'OrderController@store')->name('order.store');

Route::get('cart', 'CartController@cart')->name('cart');
Route::get('cart/payment', 'CartController@payment')->name('cart.payment');
Route::post('cart/payment', 'CartController@checkout')->name('cart.checkout');
Route::post('cart/delete', 'CartController@delete')->name('cart.delete');
Route::post('cart/add', 'CartController@add')->name('cart.add');
Route::get('cart/finish', 'CartController@finish')->name('cart.finish');

Route::resource('user', 'UserController');
