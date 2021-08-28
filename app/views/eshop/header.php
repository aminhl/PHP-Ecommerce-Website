<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $data['page_title']; ?> | E-Shopper</title>
    <link href="<?= ASSETS?>/eshop/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS?>/eshop/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= ASSETS?>/eshop/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= ASSETS?>/eshop/css/price-range.css" rel="stylesheet">
    <link href="<?= ASSETS?>/eshop/css/animate.css" rel="stylesheet">
    <link href="<?= ASSETS?>/eshop/css/main.css" rel="stylesheet">
    <link href="<?= ASSETS?>/eshop/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?= ASSETS?>/eshop/js/html5shiv.js"></script>
    <script src="<?= ASSETS?>/eshop/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?= ASSETS?>/eshop/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS?>/eshop/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS?>/eshop/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS?>/eshop/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= ASSETS?>/eshop/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?= ASSETS?>/eshop/index.html"><img src="<?= ASSETS?>/eshop/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="<?= ASSETS?>/eshop/checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="<?= ASSETS?>/eshop/cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="<?= ASSETS?>/eshop/login.html"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?= ASSETS?>/eshop/index.html" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?= ASSETS?>/eshop/shop.html">Products</a></li>
                                    <li><a href="<?= ASSETS?>/eshop/product-details.html">Product Details</a></li>
                                    <li><a href="<?= ASSETS?>/eshop/checkout.html">Checkout</a></li>
                                    <li><a href="<?= ASSETS?>/eshop/cart.html">Cart</a></li>
                                    <li><a href="<?= ASSETS?>/eshop/login.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?= ASSETS?>/eshop/blog.html">Blog List</a></li>
                                    <li><a href="<?= ASSETS?>/eshop/blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= ASSETS?>/eshop/404.html">404</a></li>
                            <li><a href="<?= ASSETS?>/eshop/contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->