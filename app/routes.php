<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('/home',  array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('/about',  array('as' => 'about', 'uses' => 'HomeController@about'));
Route::get('/contact',  array('as' => 'contact', 'uses' => 'HomeController@contact'));

// ======================== Products ========================
Route::get('products', array('as' => 'products', 'uses' => 'ProductController@index'));
Route::get('/product/{id}', array('as' => 'product', 'uses' => 'ProductController@show'));
Route::get('/product/{id}/addToCart', array('as' => 'addToCart', 'uses' => 'ProductController@addToCart'))->before('auth');
Route::get('/product/{id}/addToWishlist', array('as' => 'addToWishlist', 'uses' => 'ProductController@addToWishlist'))->before('auth');
Route::get('/product/{id}/removeFromCart', array('as' => 'removeFromCart', 'uses' => 'ProductController@removeFromCart'))->before('auth');
Route::get('/product/{id}/removeFromWishlist', array('as' => 'removeFromWishlist', 'uses' => 'ProductController@removeFromWishlist'))->before('auth');

// ======================== Categories ========================
Route::get('/categories', array('as' => 'categories', 'uses' => 'CategoryController@index'));
Route::get('/category/{id}', 'CategoryController@showProductsInCategory');


// ======================== Brands ========================
Route::get('/brands', array('as' => 'brands', 'uses' => 'BrandController@index'));
Route::get('/brand/{id}', 'BrandController@showProductsWithBrand');


// ======================== User ========================
Route::get('/login', array('as' => 'login', 'uses' => 'UserController@displayLogin'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'UserController@processLogout'));
Route::post('/login', 'UserController@processLogin');
Route::get('/signup', array('as' => 'signup', 'uses' => 'UserController@displaySignUp'));
Route::post('/signup', array('as' => 'signup', 'uses' => 'UserController@processSignUp'));


// ======================== Wishlist ========================
Route::get('wishlist', array('as' => 'wishlist', 'uses' => 'UserController@displayWishlist'));


// ======================== Cart ========================
Route::get('/cart', array('as' => 'cart', 'uses' => 'UserController@displayCart'))->before('auth');



