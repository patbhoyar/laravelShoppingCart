<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/26/14
 * Time: 3:45 PM
 */

namespace library\abstractClasses;


abstract class menuItems {

    const MENU_HOME = 1;
    const MENU_PRODUCTS = 2;
    const MENU_CATEGORIES = 3;
    const MENU_BRANDS = 4;
    const MENU_ABOUTUS = 5;
    const MENU_CONTACT = 6;

    public static function test(){
    return "This is a Test";
}

} 