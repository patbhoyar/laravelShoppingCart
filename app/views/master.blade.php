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

    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/products.css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
</head>
<body>

<div class="container">

    <?php
        use library\abstractClasses\menuItems;
        $homeActive = $productsActive = $categoryActive = $brandsActive = $aboutusActive = $contactActive = $cartActive = '';
        switch($menuActive){
            case menuItems::MENU_HOME:
                $homeActive = 'active';
                break;
            case menuItems::MENU_PRODUCTS:
                $productsActive = 'active';
                break;
            case menuItems::MENU_CATEGORIES:
                $categoryActive = 'active';
                break;
            case menuItems::MENU_BRANDS:
                $brandsActive = 'active';
                break;
            case menuItems::MENU_ABOUTUS:
                $aboutusActive = 'active';
                break;
            case menuItems::MENU_CONTACT:
                $contactActive = 'active';
                break;
        }
    ?>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">

            <div class="container">
                <a href="home" class="brand">MyCart</a>

                <ul class="nav">
                    <li class="{{ $homeActive }}"><a href="home">Home</a></li>
                    <li class="{{ $productsActive }}"><a href="products">Products</a></li>
                    <li class="{{ $categoryActive }}"><a href="categories">Categories</a></li>
                    <li class="{{ $brandsActive }}"><a href="brands">Brands</a></li>
                    <li class="{{ $aboutusActive }}"><a href="aboutus">About Us</a></li>
                    <li class="{{ $contactActive }}"><a href="contact">Contact</a></li>
                </ul>

                <div class="navbar-text pull-right">&nbsp;&nbsp;&nbsp;&nbsp; <a href="cart">Cart <i class="icon-shopping-cart"></i></a></div>
                <div class="navbar-text pull-right"><a href="login">Login <i class="icon-user"></i></a></div>

            </div>
        </div>
    </div>

    <div class="paddingTop40"></div>
    @yield('pageContent')

</div>

</body>
</html>
