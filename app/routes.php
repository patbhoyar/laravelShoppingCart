<?php

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// ======================== Products ========================
Route::get('products', array('as' => 'products', 'uses' => 'ProductController@index'));
Route::get('/product/{id}', 'ProductController@show');


// ======================== Categories ========================
Route::get('/categories', array('as' => 'categories', 'uses' => 'CategoryController@index'));


// ======================== Brands ========================
Route::get('/brands', array('as' => 'brands', 'uses' => 'BrandController@index'));
Route::get('/brand/{id}', 'BrandController@showProductsWithBrand');


// ======================== User ========================
Route::get('/login', 'User@displayLogin');
Route::get('/signup', 'User@displaySignUp');


