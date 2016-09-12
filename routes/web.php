<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');




//---------ShopController -------------

Route::get('/', 'ShopController@Index');
Route::get('add', 'ShopController@addproduct');
Route::post('add', 'ShopController@postproduct');
Route::get('cat/{id}', 'ShopController@showcategory');
Route::get('product/{id}', 'ShopController@singleproduct');
Route::post('/cart', 'ShopController@cart');

