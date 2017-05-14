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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login');
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('tours/create', 'TourController@create')->name('tour.create');
Route::post('tours/store', 'TourController@store')->name('tour.store');
Route::get('tours/lists', 'TourController@lists')->name('tour.lists');
Route::get('tours/{id}', 'TourController@show')->name('tour.show');

Route::get('orders/create', 'OrderController@create')->name('order.create');
Route::post('orders/store', 'OrderController@store')->name('order.store');