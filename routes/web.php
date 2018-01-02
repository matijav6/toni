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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']], function () {

    Route::resource('admin/users', 'Admin\\UsersController');
    Route::resource('admin/colors', 'Admin\\ColorsController');
    Route::resource('admin/suppliers', 'Admin\\SuppliersController');
    Route::resource('admin/offices', 'Admin\\OfficesController');
    Route::resource('admin/flowers', 'Admin\\FlowersController');
    Route::resource('admin/flowers-and-suppliers', 'Admin\\FlowersAndSuppliersController');

});

Route::group(['middleware' => ['admin']], function () {
    Route::resource('orders', 'OrdersController');
    Route::resource('order-delivery', 'OrderDeliveryController');
});