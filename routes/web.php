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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/categories', 'CategoryController');

/** Products */
Route::resource('/products', 'ProductController');
Route::resource('/bookings', 'BookingController');
Route::get('/home', 'HomeController@index')->name('home');