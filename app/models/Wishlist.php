<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Wishlist extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'wishlist';

    public static function getWishlist($onlyIds = 0){
        if(Auth::check()){
            $data = array('products.id', 'products.name', 'products.price', 'products.image', 'products.discount');
            $params = ($onlyIds == 1)?"products.id":$data;
            $products = DB::table('wishlist')
                ->leftjoin('products', 'wishlist.productId', '=', 'products.id')
                ->where('wishlist.userId', '=', Auth::user()->id)
                ->select($params)
                ->get();

            if($onlyIds == 1){
                $wishlist = array();

                foreach($products as $product){
                    array_push($wishlist, $product->id);
                }
            }else{
                $wishlist = $products;
            }

        }else{
            $wishlist = array();
        }
        return $wishlist;
    }


}
