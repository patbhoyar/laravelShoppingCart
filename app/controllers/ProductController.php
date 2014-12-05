<?php
use library\abstractClasses\menuActive;

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('products.index', array('title' => 'Products', 'menuActive' => menuActive::MENU_PRODUCTS, 'products' => Product::paginate(5)));
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
        $product = Product::find($id);
        self::incrementProductHits($product);
        $reviews = DB::table('reviews')->leftJoin('userInfo', 'userInfo.id', '=', 'reviews.userId')->where('reviews.productId', '=', $id)->select('reviews.productId', 'userInfo.firstName', 'userInfo.lastName','reviews.rating', 'reviews.review', 'reviews.created_at')->get();
        return View::make('products.show', array('title' => $product->name, 'menuActive' => menuActive::MENU_PRODUCTS, 'product' => $product, 'reviews' => $reviews));
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

    public function addToCart($productId){
        if(Auth::check()){
            try{
                $cartItem = new Cart();
                $cartItem->userId = Auth::user()->id;
                $cartItem->productId = $productId;
                $cartItem->save();
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

    public function addToWishlist($productId){
        if(Auth::check()){
            try{
                $wishlist = new Wishlist();
                $wishlist->userId = Auth::user()->id;
                $wishlist->productId = $productId;
                $wishlist->save();
                return Redirect::route('wishlist');
            }catch(Exception $e){
                if($e->getCode() == 23000){
                    return Redirect::route('login')->with('error',1);
                }
            }
        }else{
            return Redirect::route('login');
        }
    }

    public function removeFromWishlist($productId){
        if(Auth::check()){
            try{
                $prod = DB::table('wishlist')->where('userId', '=', Auth::user()->id)->where('productId', '=', $productId)->delete();
                return Redirect::route('wishlist');
            }catch(Exception $e){
                if($e->getCode() == 23000){
                    return Redirect::route('login')->with('error',1);
                }
            }
        }else{
            return Redirect::route('login');
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

}
