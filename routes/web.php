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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//product
Route::get('/product',[
	'uses' => 'ShopController@index',
	'as'   => 'product'
]);

Route::get('/product/{slug}', [
	'uses' 	=> 'ShopController@show',
	'as' 	=> 'product-detail'
]);

//cart 
Route::get('cart',[
	'uses' => 'CartController@index',
	'as'   => 'cart'
]);
Route::get('cart/add/{id}', 'CartController@addItem');
Route::delete('/cart/{id}', [
	'uses'  => 'CartController@destroy',
	'as' 	=> 'cart.destroy'
]);
Route::get('cart/update/','CartController@update');

//checkout
Route::get('checkout', [
	'uses' 	=> 'CartController@checkout',
	'as' 	=> 'checkout'
]);

Route::post('placeOrder', [
	'uses' 	=> 'CheckoutController@store',
	'as' 	=> 'placeOrder'
]);

Route::get('checkout/item', [
	'uses' => 'CheckoutController@index',
	'as' 	=> 'checkout.index'
]);

Route::get('product/filter', [
	'uses' => 'LandingPageController@filter',
	'as' => 'product.filter'
]);
