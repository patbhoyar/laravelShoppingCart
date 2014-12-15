<?php
use library\abstractClasses\menuActive;

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		//
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

    public function displayLogin(){
        return View::make('users.login', array('title' => 'Login to MyCart', 'menuActive' => menuActive::MENU_NONE));
    }

    public function displaySignUp(){
        return View::make('users.signup', array('title' => 'SignUp MyCart', 'menuActive' => menuActive::MENU_NONE));
    }

    public function displayCart(){
        if(Auth::check()){
            $products = DB::table('carts')
                ->leftjoin('products', 'carts.productId', '=', 'products.id')
                ->where('userId', '=', Auth::user()->id)
                ->select('products.id', 'products.name', 'products.price', 'products.image', 'products.discount')
                ->get();
        }else{
            $products = array();
        }
        return View::make('users.cart', array('title' => 'Your Shopping Cart', 'menuActive' => menuActive::MENU_NONE, 'products' => $products));
    }

    public function processLogin(){
        $user = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($user)) {
            return Redirect::route('home');
        }else{
            dd("Wrong Username/Password");
        }
    }

    public function processLogout(){
        Auth::logout();
        return Redirect::route('home');
    }

    public function displayWishlist(){
        $wishlist = Wishlist::getWishlist();
        return View::make('users.wishlist', array('title' => 'Your Wishlist', 'menuActive' => menuActive::MENU_WISHLIST, 'products' => $wishlist));
    }

}
