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


/*
login
register
recover
profile
edit_profile
store
orders
order_details
product
cart
checkout
*/

/*Product Index Catalog Routes */
/*Login Routes */
/*Register Routes */
/*Recover Routes */
/*Profile Routes */
/*Edit Profile Routes */
/*Orders Routes */
/*Order Details Routes */
/*Product Routes */
/*Cart Routes */
/*Checkout Routes */


Route::get('/', [
    'uses' => 'StoreController@getIndex',
    'as' => 'store.index',
]);

Route::get('/terms', [
    'uses' => 'StoreController@getTermsOfService',
    'as' => 'store.termsOfService',
]);




Route::get('/search', [
    'uses' => 'StoreController@getSearch',
    'as' => 'store.search',
]);

Route::get('/orders', [
    'uses' => 'StoreController@getOrders',
    'as' => 'store.orders',
]);

Route::get('/order/{id}', [
    'uses' => 'StoreController@getOrder',
    'as' => 'store.orderDetails',
]);



Route::get('/cart', [
    'uses' => 'StoreController@getCart',
    'as' => 'store.cart',
]);


Route::get('/add_cart/{id}', [
    'uses' => 'StoreController@getAddToCart',
    'as' => 'store.addTocart',
]);


Route::get('/checkout', [
    'uses' => 'StoreController@getCheckout',
    'as' => 'store.checkout',
]);

Route::post('/checkout', [
    'uses' => 'StoreController@postCheckout',
    'as' => 'store.checkout',
]);


Route::group(['prefix' => 'user'], function(){
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup',
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup',
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin',
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin',
        ]);


        Route::get('/forgotpassword', [
            'uses' => 'UserController@getForgotPassword',
            'as' => 'user.forgotPassword',
        ]);

        Route::post('/forgotpassword', [
            'uses' => 'UserController@postForgotPassword',
            'as' => 'user.forgotPassword',
        ]);

    });

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile',
        ]);

        Route::get('/editprofile', [
            'uses' => 'UserController@postEditProfile',
            'as' => 'user.editProfile',
        ]);


        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout',
        ]);
    });

});




