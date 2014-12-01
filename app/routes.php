<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('/home',  array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('/about',  array('as' => 'about', 'uses' => 'HomeController@about'));
Route::get('/contact',  array('as' => 'contact', 'uses' => 'HomeController@contact'));

// ======================== Products ========================
Route::get('products', array('as' => 'products', 'uses' => 'ProductController@index'));
Route::get('/product/{id}', array('as' => 'product', 'uses' => 'ProductController@show'));


// ======================== Categories ========================
Route::get('/categories', array('as' => 'categories', 'uses' => 'CategoryController@index'));
Route::get('/category/{id}', 'CategoryController@showProductsInCategory');


// ======================== Brands ========================
Route::get('/brands', array('as' => 'brands', 'uses' => 'BrandController@index'));
Route::get('/brand/{id}', 'BrandController@showProductsWithBrand');


// ======================== User ========================
Route::get('/login', 'UserController@displayLogin');
Route::get('/signup', 'UserController@displaySignUp');



