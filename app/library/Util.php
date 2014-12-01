<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/26/14
 * Time: 9:40 PM
 */

namespace library;


class Util {
    public static function calculateDiscount($productPrice, $productDiscount){
        if($productDiscount > 0.00){
            $price = number_format($productPrice - ($productPrice * $productDiscount/100));
            $op = "<s>Rs.".number_format($productPrice)."</s> Rs.".$price." ($productDiscount % off)";
        }else{
            $op = "Rs.".number_format($productPrice);
        }
        return $op;
    }

    public static function compressText($text, $size){
        $size -= 10;

        if(strlen($text) <= $size){
            return $text;
        }

        $x = strpos($text, " ", $size);

        if($x !== FALSE){
            return substr($text, 0, $x)." ...";
        }else{
            return $text;
        }
    }
} 