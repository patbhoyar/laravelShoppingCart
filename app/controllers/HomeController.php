<?php
use library\abstractClasses\menuActive;

class HomeController extends BaseController {

	public function index(){
        return View::make('home', array('title' => 'MyCart', 'menuActive' => menuActive::MENU_HOME));
    }
}
