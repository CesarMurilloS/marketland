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
    'uses' => 'StoreController@getIndex',
    'as' => 'store.index',
]);

/*
Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index',
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart',
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'shop.shopping-cart',
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
]);
*/
