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

Route::get('/', 'LandingPageController@index')->name('home');
//product
Route::get('/product',[
	'uses' => 'ShopController@index',
	'as'   => 'product'
]);

Route::get('/product/{slug}', [
	'uses' 	=> 'ShopController@show',
	'as' 	=> 'product-detail'
]);
