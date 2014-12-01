<?php
use library\abstractClasses\menuActive;

class HomeController extends BaseController {

	public function index(){
        return View::make('base.home', array('title' => 'MyCart', 'menuActive' => menuActive::MENU_HOME, 'products' => Product::take(4)->get()));
    }

    public function about(){
        return View::make('base.about', array('title' => 'About Us', 'menuActive' => menuActive::MENU_ABOUTUS));
    }

    public function contact(){
        return View::make('base.contact', array('title' => 'Contact', 'menuActive' => menuActive::MENU_CONTACT));
    }
}
