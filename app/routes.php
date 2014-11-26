<?php
use library\abstractClasses\menuItems;

Route::get('/', function()
{
	return View::make('home', array('title' => 'MyCart', 'menuActive' => menuItems::MENU_HOME));
});
Route::get('/home', function()
{
    return View::make('home', array('title' => 'MyCart', 'menuActive' => menuItems::MENU_HOME));
});

Route::get('/products', function(){
    return View::make('products.index', array('title' => 'Products', 'menuActive' => menuItems::MENU_PRODUCTS, 'products' => Product::all()));
});

Route::get('/categories', function(){
    return View::make('categories.index', array('title' => 'MyCart Categories', 'menuActive' => menuItems::MENU_CATEGORIES, 'categories' => Category::all()));
});

Route::get('/brands', function(){
    return View::make('brands.index', array('title' => 'MyCart Brands', 'menuActive' => menuItems::MENU_BRANDS, 'brands' => Brand::all()));
});
