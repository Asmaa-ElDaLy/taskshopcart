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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::Post('/Additem', [
    'uses' => 'ProductController@store',
    'as' => 'product.addproduct'
]);

Route::get('/add', [
    'uses' => 'ProductController@addform',
    'as' => 'product.additem'
]);

Route::get('/Normal items', [
    'uses' => 'ProductController@showitemn',
    'as' => 'product.showitemn'
]);
Route::get('/Sale items', [
    'uses' => 'ProductController@showitems',
    'as' => 'product.showitems'
]);
///////////////// Order Controller Routes/////////////

Route::Post('/AddOrder', [
    'uses' => 'Ordercontroller@addtorder',
    'as' => 'order.addtorder'
]);

Route::get('/Delete', [
    'uses' => 'Ordercontroller@remove',
    'as' => 'order.remove'
]);
Route::get('/Delete All', [
    'uses' => 'Ordercontroller@removeAll',
    'as' => 'order.removeall'
]);
///////////////////////////////////////wishlist///////////////
Route::Post('/AddWishList', [
    'uses' => 'wishlistcontroller@addtorder',
    'as' => 'wishlist.addtorder'
]);

Route::get('/Delete', [
    'uses' => 'wishlistcontroller@remove',
    'as' => 'wishlist.remove'
]);
Route::get('/Delete All', [
    'uses' => 'wishlistcontroller@removeAll',
    'as' => 'wishlist.removeall'
]);
Route:: get('/Show Order',[

    'uses'=>'wishlistcontroller@showitems',
    'as'=>'product.items'
]);

