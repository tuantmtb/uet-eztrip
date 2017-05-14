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

Route::get('/', 'HomeController@index')->name('home');

Route::get('tours/create', 'TourController@create')->name('tour.create');
Route::post('tours/store', 'TourController@store')->name('tour.store');
Route::get('tours/{id}', 'TourController@show')->name('tour.show');

Route::get('orders/create', 'OrderController@create')->name('order.create');
Route::post('orders/store', 'OrderController@store')->name('order.store');