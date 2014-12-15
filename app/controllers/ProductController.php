<?php
use library\abstractClasses\menuActive;
use library\abstractClasses\AjaxReturn;

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $wishlist = Wishlist::getWishlist(1);
        return View::make('products.index', array('title' => 'Products', 'menuActive' => menuActive::MENU_PRODUCTS, 'products' => Product::paginate(5), 'wishlist' => $wishlist));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $wishlist = Wishlist::getWishlist(1);
        $product = Product::find($id);
        self::incrementProductHits($product);
        $reviews = DB::table('reviews')->leftJoin('userInfo', 'userInfo.id', '=', 'reviews.userId')->where('reviews.productId', '=', $id)->select('reviews.productId', 'userInfo.firstName', 'userInfo.lastName','reviews.rating', 'reviews.review', 'reviews.created_at')->get();
        return View::make('products.show', array('title' => $product->name, 'menuActive' => menuActive::MENU_PRODUCTS, 'product' => $product, 'reviews' => $reviews, 'wishlist' => $wishlist));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function incrementProductHits($product){
        ++$product->hits;
        $product->save();
    }

    private function processAddToCart($productId){
        if(Auth::check()){
            try{
                $user = Auth::user();

                //Check if product is already available in the users cart
                $prods = DB::table('carts')->where('userId', '=', $user->id)->where('productId', '=', $productId)->select('id')->get();
                if(sizeof($prods) == 0){
                    $cartItem = new Cart();
                    $cartItem->userId = $user->id;
                    $cartItem->productId = $productId;
                    $cartItem->save();
                    return "success";
                }else{
                    return "duplicate"; //This product is already available in the current users cart
                }

            }catch(Exception $e){
                dd($e->getMessage());
            }
        }else{
            return "failure";
        }
    }

    public function addToCart($productId){
        $ret = self::processAddToCart($productId);
        if($ret == "success" || $ret == "duplicate"){
            return Redirect::route('cart');
        }else{
            return Redirect::route('login');
        }
    }

    public function addToWishlist($productId){
        if(Auth::check()){
            try{
                $wishlist = new Wishlist();
                $wishlist->userId = Auth::user()->id;
                $wishlist->productId = $productId;
                $wishlist->save();
                return "success";
            }catch(Exception $e){
                if($e->getCode() == 23000){
                }
            }
            return "failure";
        }else{
            return 'user not logged in';
        }
    }

    public function removeFromWishlist($productId){
        if(Auth::check()){
            try{
                $prod = DB::table('wishlist')->where('userId', '=', Auth::user()->id)->where('productId', '=', $productId)->delete();
                //return Redirect::route('wishlist');
                return AjaxReturn::returnJSON('json', '100', 'success');
            }catch(Exception $e){
                if($e->getCode() == 23000){
                    //return Redirect::route('login')->with('error',1);
                }
            }
            return "failure";
        }else{
            return 'user not logged in';
        }
    }

    public function removeFromCart($productId){
        if(Auth::check()){
            try{
                $prod = DB::table('carts')->where('userId', '=', Auth::user()->id)->where('productId', '=', $productId)->delete();
                return Redirect::route('cart');
            }catch(Exception $e){
                if($e->getCode() == 23000){
                    return Redirect::route('login')->with('error',1);
                }
            }
        }else{
            return Redirect::route('login');
        }
    }

    public function moveToCart($productId){

        $ret = self::processAddToCart($productId);
        if($ret == "success" || $ret == 'duplicate'){
            self::removeFromWishlist($productId);
            return AjaxReturn::returnJSON('json', '100', 'success');
        }else{
            return "failure";
        }
    }

}
