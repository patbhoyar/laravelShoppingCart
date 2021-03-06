<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://localhost:8888/projects/laravelShoppingCart/public/css/normalize.css"/>
    <link rel="stylesheet" href="http://localhost:8888/projects/laravelShoppingCart/public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://localhost:8888/projects/laravelShoppingCart/public/css/global.css"/>
    <link rel="stylesheet" href="http://localhost:8888/projects/laravelShoppingCart/public/css/products.css"/>
    <link rel="stylesheet" href="http://localhost:8888/projects/laravelShoppingCart/public/css/signup.css"/>
    <script src="http://localhost:8888/projects/laravelShoppingCart/public/js/jquery.js" type="text/javascript"></script>
    <script src="http://localhost:8888/projects/laravelShoppingCart/public/js/bootstrap.min.js" type="text/javascript"></script>
    <?php
        if(isset($js) && sizeof($js) > 0){
            foreach($js as $file){
                echo "<script src='".asset('js/'.$file.'.js')."' type='text/javascript'></script>";
            }
        }
    ?>
</head>
<body>

<div class="container">

    <?php
        use library\abstractClasses\menuActive;
        $homeActive = $productsActive = $categoryActive = $brandsActive = $wishlistActive = $aboutusActive = $contactActive = $cartActive = '';
        switch($menuActive){
            case menuActive::MENU_HOME:
                $homeActive = 'active';
                break;
            case menuActive::MENU_PRODUCTS:
                $productsActive = 'active';
                break;
            case menuActive::MENU_CATEGORIES:
                $categoryActive = 'active';
                break;
            case menuActive::MENU_BRANDS:
                $brandsActive = 'active';
                break;
            case menuActive::MENU_WISHLIST:
                $wishlistActive = 'active';
                break;
            case menuActive::MENU_ABOUTUS:
                $aboutusActive = 'active';
                break;
            case menuActive::MENU_CONTACT:
                $contactActive = 'active';
                break;
        }
    ?>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-inner">

            <div class="container">
                <a href="home" class="navbar-brand">MyCart</a>

                <ul class="nav navbar-nav">
                    <li class="{{ $homeActive }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ $productsActive }}"><a href="{{ route('products') }}">Products</a></li>
                    <li class="{{ $categoryActive }}"><a href="{{ route('categories') }}">Categories</a></li>
                    <li class="{{ $brandsActive }}"><a href="{{ route('brands') }}">Brands</a></li>
                    <li class="{{ $wishlistActive }}"><a href="{{ route('wishlist') }}">Wishlist</a></li>
                    <li class="{{ $aboutusActive }}"><a href="{{ route('about') }}">About Us</a></li>
                    <li class="{{ $contactActive }}"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>

                <div class="navbar-text pull-right"> <a href="{{ route('cart') }}">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></div>
                <?php
                    if(Auth::check()){
                ?>
                        <div class="navbar-text pull-right">{{ Auth::user()->email }} <span class="glyphicon glyphicon-user"></span> <a href="{{ route('logout') }}">(logout)</a></div>
                <?php
                    }else{
                ?>
                        <div class="navbar-text pull-right"> <a href="{{ route('login') }}">Login <span class="glyphicon glyphicon-user"></span></a></div>
                <?php
                    }
                ?>

            </div>
        </div>
    </nav>

    <div class="paddingForMenu"></div>
    @yield('pageContent')

</div>

</body>
</html>
