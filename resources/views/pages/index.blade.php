<!DOCTYPE html>

<!-- Mirrored from thematicwebs.com/demo/html/moment/HTML/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 10:05:13 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Moment</title>
    <!-- Style Sheets -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.sidr.light.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extralayers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

</head>

<body>

<!-- Main Header Start -->
<div class="pull-right">
    <div id="search-list">
        <div class="text-center">
            <input type="search" placeholder="Let’s Search...">
        </div>
        <ul>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Linen Shirt With Mao Color</a></h4>
                    <label>$450</label>
                </div>
            </li>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Ulani Adirondack Chair Cushion</a></h4>
                    <label>$450</label>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Coral Coast Adirondack Chair</a></h4>
                    <label>$450</label>
                </div>
            </li>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Linen Shirt With Mao Color</a></h4>
                    <label>$450</label>
                </div>
            </li>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Write On Pendant Light</a></h4>
                    <label>$450</label>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="pull-right">
    <div id="cart-list">
        <div class="text-center">
            <h6>3 ITEMS</h6>
        </div>
        <ul>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Linen Shirt With Mao Color</a></h4>
                    <label>$450</label>
                    <span class="cross"><img src="{{ asset('images/cross.jpg') }}" alt=""></span>
                </div>
            </li>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Ulani Adirondack Chair Cushion</a></h4>
                    <label>$450</label>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <span class="cross"><img src="{{ asset('images/cross.jpg') }}" alt=""></span>
                </div>
            </li>
            <li class="thumbnail-list">
                <figure>
                    <img src="{{ asset('images/cat-1.jpg') }}" alt="" />
                </figure>
                <div class="text">
                    <h4><a href="#">Coral Coast Adirondack Chair</a></h4>
                    <label>$450</label>
                    <span class="cross"><img src="{{ asset('images/cross.jpg') }}" alt=""></span>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="pull-right">
    <div id="link-list">
        <div class="text-center">
            <h6>LINK</h6>
        </div>
        <ul class="link-list">
            <li><a href="#">Wish List</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Check Out</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </div>
</div>

<header class="bg-dark-gray header-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="header-btns">
                    <a class="btn-dark plus" href="#">dollar</a>
                    <a class="btn-dark plus" href="#">english</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="logo">
                    <div class="text-center">
                        <a href="index.html">
                            <img src="{{ asset('images/header-logo.png') }}" alt="">
                        </a>
                        <p>moment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="header-links">
                    <ul class="list-unstyled text-center">
                        <li>
                            <a id="search-menu" href="#search-menu" class="icon-hold search">
                                <i class="fa fa-search"></i>
                            </a>
                            <p>Search</p>
                        </li>
                        <li>
                            <a id="cart-menu" href="#cart-menu" class="icon-hold cart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <p>Cart</p>
                        </li>
                        <li>
                            <a id="links-menu" href="#links-menu" class="icon-hold links">
                                <i class="fa fa-th-large"></i>
                            </a>
                            <p>Link</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar yamm navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="main-nav nav navbar-nav">
                    <li><a href="#">HOME</a></li>
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">CATEGORIES</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="categories">
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">LIVING ROOM</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-1.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">BEDROOM</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-2.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">LIVING ROOM</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-3.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">WORKSPACES</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-4.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">DINING & KITCHEN</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-5.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">BATHROOM</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-6.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">OUTDOOR</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-7.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="category-box">
                                                    <h4 class="heading-style-2">STUDYROOM</h4>
                                                    <p>Fusce sit amet placerat diam. Donec convallis magna ac nisl viverra.</p>
                                                    <div class="category-thumbnail">
                                                        <figure>
                                                            <img src="{{ asset('images/category-8.jpg') }}" alt="">
                                                        </figure>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Short</a></li>
                                                            <li><a href="#">Sweatpant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">FEATURES</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="top-products">
                                        <div class="top-product-box">
                                            <figure>
                                                <img src="{{ asset('images/top-1.jpg') }}" alt="">
                                                <figcaption class="caption">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                                    <ul class="pull-right">
                                                        <li>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-sliders"></i></a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="top-product-text">
                                                <div class="product-price pull-right">
                                                    <label>$450</label>
                                                    <label><del>350</del></label>
                                                </div>
                                                <div class="product-detail pull-left">
                                                    <p>Write On Pendant</p>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-product-box">
                                            <figure>
                                                <img src="{{ asset('images/top-2.jpg') }}" alt="">
                                                <figcaption class="caption">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                                    <ul class="pull-right">
                                                        <li>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-sliders"></i></a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="top-product-text">
                                                <div class="product-price pull-right">
                                                    <label>$450</label>
                                                    <label><del>350</del></label>
                                                </div>
                                                <div class="product-detail pull-left">
                                                    <p>Write On Pendant</p>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-product-box">
                                            <figure>
                                                <img src="{{ asset('images/top-3.jpg') }}" alt="">
                                                <figcaption class="caption">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                                    <ul class="pull-right">
                                                        <li>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-sliders"></i></a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="top-product-text">
                                                <div class="product-price pull-right">
                                                    <label>$450</label>
                                                    <label><del>350</del></label>
                                                </div>
                                                <div class="product-detail pull-left">
                                                    <p>Write On Pendant</p>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-product-box">
                                            <figure>
                                                <img src="{{ asset('images/top-4.jpg') }}" alt="">
                                                <figcaption class="caption">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                                    <ul class="pull-right">
                                                        <li>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-sliders"></i></a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="top-product-text">
                                                <div class="product-price pull-right">
                                                    <label>$450</label>
                                                    <label><del>350</del></label>
                                                </div>
                                                <div class="product-detail pull-left">
                                                    <p>Write On Pendant</p>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-product-box">
                                            <figure>
                                                <img src="{{ asset('images/top-1.jpg') }}" alt="">
                                                <figcaption class="caption">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                                    <ul class="pull-right">
                                                        <li>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-sliders"></i></a>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="top-product-text">
                                                <div class="product-price pull-right">
                                                    <label>$450</label>
                                                    <label><del>350</del></label>
                                                </div>
                                                <div class="product-detail pull-left">
                                                    <p>Write On Pendant</p>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">CUSTOM HTML</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="top-product">
                                                <div class="top-product-box">
                                                    <figure>
                                                        <img src="{{ asset('images/top-1.jpg') }}" alt="">
                                                        <figcaption class="caption">
                                                            <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                                            <ul class="pull-right">
                                                                <li>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-sliders"></i></a>
                                                                </li>
                                                            </ul>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="top-product-text">
                                                        <div class="product-price pull-right">
                                                            <label>$450</label>
                                                            <label><del>350</del></label>
                                                        </div>
                                                        <div class="product-detail pull-left">
                                                            <p>Write On Pendant</p>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="top-product-box">
                                                    <figure>
                                                        <img src="{{ asset('images/top-3.jpg') }}" alt="">
                                                        <figcaption class="caption">
                                                            <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                                            <ul class="pull-right">
                                                                <li>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-sliders"></i></a>
                                                                </li>
                                                            </ul>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="top-product-text">
                                                        <div class="product-price pull-right">
                                                            <label>$450</label>
                                                            <label><del>350</del></label>
                                                        </div>
                                                        <div class="product-detail pull-left">
                                                            <p>Write On Pendant</p>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="video-container">
                                                <iframe src="http://player.vimeo.com/video/32001208?portrait=0&amp;badge=0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">CUSTOM LINK</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="container">
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="custom-links">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Living Room</a></li>
                                                        <li><a href="#">Bedroom</a></li>
                                                        <li><a href="#">Dining & Kitchen</a></li>
                                                        <li><a href="#">Bathroom</a></li>
                                                        <li><a href="#">Workspaces</a></li>
                                                        <li><a href="#">Bar</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-links">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Bedroom Accessories</a></li>
                                                        <li><a href="#">Beds</a></li>
                                                        <li><a href="#">Dressing Tables</a></li>
                                                        <li><a href="#">Wall Shelves</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-links">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Wardrobes</a></li>
                                                        <li><a href="#">Mirrors</a></li>
                                                        <li><a href="#">Bedroom Sets</a></li>
                                                        <li><a href="#">Bedside Tables</a></li>
                                                        <li><a href="#">Chest of Drawers</a></li>
                                                        <li><a href="#">Mattresses</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PAGES</a>
                        <ul role="menu" class="dropdown-menu custom-links">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="home-02.html">Home 02</a></li>
                            <li><a href="home-03.html">Home 03</a></li>
                            <li><a href="home-04.html">Home 04</a></li>
                            <li><a href="category-list.html">Category</a></li>
                        </ul>
                    </li>
                    <li><a href="#">BUY THIS THEME</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Main Slider Section Start -->
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
            <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('images/slide-3.jpg') }}" data-delay="13000"  data-saveperformance="off"  data-title="Our Workplace">

                <img src="{{ asset('images/slide-1.jpg') }}"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="right center">

                <div class="tp-caption reddishbg_heavy_70 customin customout"
                     data-x="50"
                     data-y="265"

                     data-splitin="chars"
                     data-elementdelay="0.05"
                     data-start="100"
                     data-speed="1200"
                     data-easing="Back.easeOut"
                     data-customin="x:-40;y:-30;z:0;rotationX:0;rotationY:0;rotationZ:-70;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"


                     data-splitout=""
                     data-endelementdelay="0"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:190;rotationZ:0;scaleX:10;scaleY:10;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-end="90000"
                     data-endspeed="1500"
                     data-endeasing="Power3.easeInOut"
                     data-captionhidden="on"
                     style="z-index:5"
                >FUTURE
                </div>

                <div class="tp-caption tp-fade fadeout tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="0"
                     data-speed="1000"
                     data-start="300"
                     data-easing="Power4.easeOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="500"
                     data-endeasing="Power1.easeOut"
                     style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="{{ asset('images/port-caption.png') }}" alt="">
                </div>

                <div class="tp-caption reddishbg_heavy_70 customin customout"
                     data-x="700"
                     data-y="265"

                     data-splitin="chars"
                     data-elementdelay="0.05"
                     data-start="700"
                     data-speed="1200"
                     data-easing="Back.easeOut"
                     data-customin="x:-40;y:-30;z:0;rotationX:0;rotationY:0;rotationZ:-70;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"


                     data-splitout=""
                     data-endelementdelay="0"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:190;rotationZ:0;scaleX:10;scaleY:10;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-end="90000"
                     data-endspeed="1500"
                     data-endeasing="Power3.easeInOut"
                     data-captionhidden="on"
                     style="z-index:5"
                >HOUSES
                </div>

            </li>

            <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('images/slide-8.jpg') }}" data-delay="15000"  data-saveperformance="off"  data-title="New York City">

                <img src="{{ asset('images/slide-3.jpg') }}"  alt="kenburns6"  data-bgposition="center top" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="center center">

                <div class="tp-caption sfb tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="165" data-voffset="0"
                     data-speed="1000"
                     data-start="100"
                     data-easing="Power4.easeOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="500"
                     data-endeasing="Power1.easeOut"
                     style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="{{ asset('images/port-caption.png') }}" alt="">
                </div>

                <div class="tp-caption reddishbg_heavy_70 customin customout"
                     data-x="center"
                     data-y="350"

                     data-splitin="chars"
                     data-elementdelay="0.05"
                     data-start="700"
                     data-speed="1200"
                     data-easing="Back.easeOut"
                     data-customin="x:-40;y:-30;z:0;rotationX:0;rotationY:0;rotationZ:-70;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"


                     data-splitout=""
                     data-endelementdelay="0"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:190;rotationZ:0;scaleX:10;scaleY:10;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-end="90000"
                     data-endspeed="1500"
                     data-endeasing="Power3.easeInOut"
                     data-captionhidden="on"
                     style="z-index:5"
                >HOME SWEET HOME
                </div>

                <div class="tp-caption light_medium_20 tp-fade fadeout tp-resizeme"
                     data-x="center" data-hoffset="-20"
                     data-y="480" data-voffset="130"
                     data-speed="600"
                     data-start="800"
                     data-easing="Power4.easeOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="600"
                     data-endeasing="Power1.easeOut"
                     style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap; margin:0 auto">This set is designed to improve working conditions.
                </div>
            </li>

            <li data-transition="zoomin" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('images/slide-9.jpg') }}" data-delay="15000"  data-saveperformance="off"  data-title="New York gl
            City">

                   <img src="{{ asset('images/slide-8.jpg') }}"  alt="kenburns6"  data-bgposition="center top" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="center center">

                <div class="tp-caption tp-fade fadeout tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="220" data-voffset="0"
                     data-speed="1000"
                     data-start="300"
                     data-easing="Power4.easeOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="500"
                     data-endeasing="Power1.easeOut"
                     style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="{{ asset('images/border.png) }}" alt="">
                </div>

                <div class="tp-caption very_big_white customin customout start"
                     data-x="center"
                     data-y="center"

                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-speed="1000"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endspeed="300"><br>PEOPLE<br>LOVE<br>INTERIOR
                </div>

                <div class="tp-caption tp-fade fadeout tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="530" data-voffset="0"
                     data-speed="1000"
                     data-start="300"
                     data-easing="Power4.easeOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="500"
                     data-endeasing="Power1.easeOut"
                     style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/border.png" alt="">
                </div>

            </li>

            <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slide-4.jpg"  data-delay="15000"  data-saveperformance="off"  data-title="New York City">

                <img src="images/slide-9.jpg"  alt="kenburns6"  data-bgposition="center top" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="center center">

                <div class="tp-caption reddishbg_heavy_70 customin customout"
                     data-x="center"
                     data-y="center"

                     data-splitin="chars"
                     data-elementdelay="0.05"
                     data-start="100"
                     data-speed="1200"
                     data-easing="Back.easeOut"
                     data-customin="x:-40;y:-30;z:0;rotationX:0;rotationY:0;rotationZ:-70;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                     data-splitout=""
                     data-endelementdelay="0"
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:190;rotationZ:0;scaleX:10;scaleY:10;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                     data-end="90000"
                     data-endspeed="1500"
                     data-endeasing="Power3.easeInOut"
                     data-captionhidden="on"
                     style="z-index:5"
                >COFFEE SHOP FURNITURE
                </div>

                <div class="tp-caption tp-fade fadeout tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="390" data-voffset="0"
                     data-speed="1000"
                     data-start="300"
                     data-easing="Power4.easeOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="500"
                     data-endeasing="Power1.easeOut"
                     style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/border.png" alt="">
                </div>

            </li>
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>

<!-- Different Brand Section start -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="row brand-style-1">
            <div class="col-md-4">
                <div class="brand-box animated out" data-delay="0" data-animation="fadeInDown">
                    <figure>
                        <img src="images/port-1.jpg" alt="">
                        <figcaption>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="brand-box brand-box-text animated out" data-delay="100" data-animation="fadeInDown">
                    <div class="text-center">
                        <div class="heading">
                            <h4>brandnew</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#">Wooden Furniture</a></li>
                            <li><a href="#">Desktop</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Comfortable Bed</a></li>
                        </ul>
                        <a class="btn-dark plus" href="#">buy collection</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="brand-box animated out" data-delay="200" data-animation="fadeInDown">
                    <figure>
                        <img src="images/port-2.jpg" alt="">
                        <figcaption>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="brand-box brand-box-text animated out" data-delay="300" data-animation="fadeInDown">
                    <div class="text-center">
                        <div class="heading">
                            <h4>Wooden Chair</h4>
                        </div>
                        <p>This set is designed to improve working conditions by adding a little bit of personal touch to the work environment. User can easily addapt the workplace.</p>
                        <a class="btn-dark plus" href="#">buy collection</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="brand-box animated out" data-delay="400" data-animation="fadeInDown">
                    <figure>
                        <img src="images/port-3.jpg" alt="">
                        <figcaption>
                            <span></span>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="brand-box brand-box-text animated out" data-delay="500" data-animation="fadeInDown">
                    <div class="text-center">
                        <div class="heading">
                            <h4>brandnew</h4>
                        </div>
                        <p>Nou sistema d’apertura de portes. Elaboració d’un nou marc, una nova porta i un nou mecanisme per a portes interiors.</p>
                        <a class="btn-dark plus" href="#">buy collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Daily Deals Section Start -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <div class="heading">
                <h2>DAILY DEALS</h2>
            </div>
        </div>
        <div class="row daily-deal">
            <div class="col-md-4">
                <div class="daily-deal-box animated out" data-delay="0" data-animation="fadeInUp">
                    <figure>
                        <img src="{{ asset('images/deal-3.jpg') }}" alt="">
                        <figcaption>
                            <label>Wooden tables</label>
                            <a class="btn off">40% OFF</a>
                            <a class="btn-dark plus" href="#">buy Product</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="daily-deal-box animated out" data-delay="300" data-animation="fadeInUp">
                    <figure>
                        <img src="{{ asset('images/deal-2.jpg') }}" alt="">
                        <figcaption>
                            <label>Wooden tables</label>
                            <a class="btn off">40% OFF</a>
                            <a class="btn-dark plus" href="#">buy Product</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="daily-deal-box animated out" data-delay="600" data-animation="fadeInUp">
                    <figure>
                        <img src="{{ asset('images/deal-1.jpg') }}" alt="">
                        <figcaption>
                            <label>Wooden tables</label>
                            <a class="btn off">40% OFF</a>
                            <a class="btn-dark plus" href="#">buy Product</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Products Section Start -->
<section class="section no-padding-top">
    <div class="container">
        <div class="top-products">
            <div class="text-center">
                <nav class="filtration animated out" data-delay="100" data-animation="fadeInUp">
                    <ul class="mixit-up">
                        <li class="btn-light plus filter" data-filter="all">furniture</li>
                        <li class="btn-light plus filter" data-filter=".category-1">lighting</li>
                        <li class="btn-light plus filter" data-filter=".category-2">homewares</li>
                    </ul>
                </nav>
            </div>
            <div class="" id="Container">
                <div class="">
                    <div class="top-product-box mix category-1">
                        <figure>
                            <img src="{{ asset('images/top-1.jpg') }}" alt="">
                            <span class="sale-category red">Hot</span>
                            <figcaption class="caption">
                                <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                <ul class="pull-right">
                                    <li>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-sliders"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="top-product-text">
                            <div class="product-price pull-right">
                                <label>$450</label>
                            </div>
                            <div class="product-detail pull-left">
                                <p>Write On Pendant</p>
                                <p>Write On Pendant</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="top-product-box mix category-2">
                        <figure>
                            <img src="{{ asset('images/top-2.jpg') }}" alt="">
                            <span class="sale-category yellow">Sale</span>
                            <figcaption class="caption">
                                <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                <ul class="pull-right">
                                    <li>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-sliders"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="top-product-text">
                            <div class="product-price pull-right">
                                <label>$450</label>
                                <label><del>350</del></label>
                            </div>
                            <div class="product-detail pull-left">
                                <p>Write On Pendant</p>
                                <p>Write On Pendant</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="top-product-box mix category-1">
                        <figure>
                            <img src="{{ asset('images/top-3.jpg') }}" alt="">
                            <figcaption class="caption">
                                <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                <ul class="pull-right">
                                    <li>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-sliders"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="top-product-text">
                            <div class="product-price pull-right">
                                <label>$450</label>
                            </div>
                            <div class="product-detail pull-left">
                                <p>Write On Pendant</p>
                                <p>Write On Pendant</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="top-product-box mix category-2">
                        <figure>
                            <img src="{{ asset('images/top-4.jpg') }}" alt="">
                            <figcaption class="caption">
                                <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                <ul class="pull-right">
                                    <li>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-sliders"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="top-product-text">
                            <div class="product-price pull-right">
                                <label>$450</label>
                            </div>
                            <div class="product-detail pull-left">
                                <p>Write On Pendant</p>
                                <p>Write On Pendant</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="top-product-box mix category-1">
                        <figure>
                            <script src="{{ asset('feeds/js/jquery.min.js') }}"></script>
                            <img src="{{ asset('images/top-1.jpg') }}" alt="">
                            <span class="sale-category blue">New</span>
                            <figcaption class="caption">
                                <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                                <ul class="pull-right">
                                    <li>
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-sliders"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="top-product-text">
                            <div class="product-price pull-right">
                                <label>$450</label>
                                <label><del>350</del></label>
                            </div>
                            <div class="product-detail pull-left">
                                <p>Write On Pendant</p>
                                <p>Write On Pendant</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Highlight Section Start -->
<section class="section section-parallax dark-overlay no-padding-bottom" style="background-image:url({{ asset('images/parallax-1.jpg') }};">
    <div class="container">
        <div class="text-center">
            <div class="heading">
                <h2>Features highlight</h2>
            </div>
        </div>
        <div class="feature-highlight-style-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-highlight-box">
                        <div class="icon-hold blue animated out" data-delay="0" data-animation="fadeIn">
                            <i class="fa fa-3x fa-gavel"></i>
                        </div>
                        <div class="feature-highlight-text">
                            <h4>PARALLAX SCROLLING</h4>
                            <p>Vestibulum ac suscipit erat, feugiat posuere arcu. Quisque ullamcorper est quis tincidunt convallis. Quisque mollis, diam nec euismod pharetra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-highlight-box">
                        <div class="icon-hold red animated out" data-delay="300" data-animation="fadeIn">
                            <i class="fa fa-3x fa-diamond"></i>
                        </div>
                        <div class="feature-highlight-text">
                            <h4>RESPONSIVE DESIGN</h4>
                            <p>Quisque sodales adipiscing mattis. Ut eu tincidunt urna. Suspendisse ultrices est lectus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-highlight-box">
                        <div class="icon-hold yellow animated out" data-delay="600" data-animation="fadeIn">
                            <i class="fa fa-3x fa-paint-brush"></i>
                        </div>
                        <div class="feature-highlight-text">
                            <h4>EASY CUSTOMIZE</h4>
                            <p>Nam pharetra condimentum varius. Aenean in dignissim dui, nec dictum dui.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-highlight-box">
                        <div class="icon-hold blue animated out" data-delay="900" data-animation="fadeIn">
                            <i class="fa fa-3x fa-cogs"></i>
                        </div>
                        <div class="feature-highlight-text">
                            <h4>MOBILE READY</h4>
                            <p>Vestibulum ac suscipit erat, feugiat posuere arcu. Quisque ullamcorper est quis tincidunt convallis. Quisque mollis, diam nec euismod pharetra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Categories Section Start -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <div class="heading">
                <h2>FEATURED CATEGORIES</h2>
            </div>
        </div>
        <div class="row featured-categories">
            <div class="col-md-4">
                <div class="featured-category-box animated out" data-delay="100" data-animation="fadeInLeft">
                    <figure>
                        <img src="{{ asset('images/cat-1.jpg') }}" alt="">
                        <figcaption>
                            <div class="text-center">
                                <a class="btn-dark plus">view categories</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="featured-category-text">
                    <div class="text-center">
                        <h4>LIVING ROOMS</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">California King Beds</a></li>
                            <li><a href="#">Eastern King Beds</a></li>
                            <li><a href="#">Full Beds</a></li>
                            <li><a href="#">Twin Beds</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-category-box animated out" data-delay="200" data-animation="fadeInUp">
                    <figure>
                        <img src="{{ asset('images/cat-2.jpg') }}" alt="">
                        <figcaption>
                            <div class="text-center">
                                <a class="btn-dark plus">view categories<span></span></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="featured-category-text">
                    <div class="text-center">
                        <h4>LIVING ROOMS</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">California King Beds</a></li>
                            <li><a href="#">Eastern King Beds</a></li>
                            <li><a href="#">Full Beds</a></li>
                            <li><a href="#">Twin Beds</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-category-box animated out" data-delay="100" data-animation="fadeInRight">
                    <figure>
                        <img src="{{ asset('images/cat-3.jpg') }}" alt="">
                        <figcaption>
                            <div class="text-center">
                                <a class="btn-dark plus">view categories</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="featured-category-text">
                    <div class="text-center">
                        <h4>LIVING ROOMS</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">California King Beds</a></li>
                            <li><a href="#">Eastern King Beds</a></li>
                            <li><a href="#">Full Beds</a></li>
                            <li><a href="#">Twin Beds</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Free Shipping Section Start -->
<section class="shipping-section bg-light-blue animated out" data-delay="0" data-animation="bounceIn">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="shipping-box">
                    <div class="pull-left">
                        <div class="icon-hold">
                            <i class="fa fa-cart-arrow-down"></i>
                        </div>
                    </div>
                    <div class="shipping-box-text text-uppercase">
                        <h4>Free Shipping and return</h4>
                        <p>Vestibulum ac suscipit erat, feugiat posuere arcu. Quisque ullamcorper est quis tincidunt convallis....</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="shipping-box-text">
                    <a href="#" class="btn-light plus">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Products Section Start -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <div class="heading">
                <h2>TOP PRODUCTS</h2>
            </div>
        </div>
        <div class="top-products">
            <div class="top-product-box animated out" data-delay="0" data-animation="fadeInUp">
                <figure>
                    <img src="{{ asset('images/top-1.jpg') }}" alt="">
                    <figcaption class="caption">
                        <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                        <ul class="pull-right">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sliders"></i></a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="top-product-text">
                    <div class="product-price pull-right">
                        <label>$450</label>
                    </div>
                    <div class="product-detail pull-left">
                        <p>Write On Pendant</p>
                        <p>Write On Pendant</p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="top-product-box animated out" data-delay="300" data-animation="fadeInUp">
                <figure>
                    <img src="{{ asset('images/top-2.jpg') }}" alt="">
                    <figcaption class="caption">
                        <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                        <ul class="pull-right">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sliders"></i></a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="top-product-text">
                    <div class="product-price pull-right">
                        <label>$450</label>
                        <label><del>350</del></label>
                    </div>
                    <div class="product-detail pull-left">
                        <p>Write On Pendant</p>
                        <p>Write On Pendant</p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="top-product-box animated out" data-delay="600" data-animation="fadeInUp">
                <figure>
                    <img src="{{ asset('images/top-3.jpg') }}" alt="">
                    <span class="sale-category yellow">Sale</span>
                    <figcaption class="caption">
                        <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                        <ul class="pull-right">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sliders"></i></a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="top-product-text">
                    <div class="product-price pull-right">
                        <label>$450</label>
                    </div>
                    <div class="product-detail pull-left">
                        <p>Write On Pendant</p>
                        <p>Write On Pendant</p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="top-product-box animated out" data-delay="900" data-animation="fadeInUp">
                <figure>
                    <img src="{{ asset('images/top-4.jpg') }}" alt="">
                    <figcaption class="caption">
                        <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                        <ul class="pull-right">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sliders"></i></a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="top-product-text">
                    <div class="product-price pull-right">
                        <label>$450</label>
                    </div>
                    <div class="product-detail pull-left">
                        <p>Write On Pendant</p>
                        <p>Write On Pendant</p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="top-product-box animated out" data-delay="1200" data-animation="fadeInUp">
                <figure>
                    <img src="{{ asset('images/top-1.jpg') }}" alt="">
                    <figcaption class="caption">
                        <a href="#"><i class="fa fa-shopping-cart"></i>ADD TO CART</a>
                        <ul class="pull-right">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sliders"></i></a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="top-product-text">
                    <div class="product-price pull-right">
                        <label>$450</label>
                        <label><del>350</del></label>
                    </div>
                    <div class="product-detail pull-left">
                        <p>Write On Pendant</p>
                        <p>Write On Pendant</p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Update Section Start -->
<section class="section bg-skin">
    <div class="container">
        <div class="row blog-update">
            <div class="col-md-7 animated out" data-delay="100" data-animation="fadeInLeft">
                <div class="row">
                    <div class="heading-with-plus">
                        <h3>BLOG UPDATES</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-update-box">
                            <figure>
                                <img src="{{ asset('images/blog-2.jpg') }}" alt="">
                                <figcaption>
                                    <h4>We work all-day-long</h4>
                                    <p>Vestibulum ac suscipit erat, feugiat posuere arcu. Quisque ullamcorper est quis tincidunt convallis. Quisque mollis, diam nec euismod pharetra...</p>
                                    <div class="text-center">
                                        <a href="#" class="btn-dark plus">Read More</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-update-box">
                            <figure>
                                <img src="{{ asset('images/blog-1.jpg') }}" alt="">
                                <figcaption>
                                    <h4>We work all-day-long</h4>
                                    <p>Vestibulum ac suscipit erat, feugiat posuere arcu. Quisque ullamcorper est quis tincidunt convallis. Quisque mollis, diam nec euismod pharetra...</p>
                                    <div class="text-center">
                                        <a href="#" class="btn-dark plus">Read More</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-update-box">
                            <figure>
                                <img src="{{ asset('images/blog-3.jpg') }}" alt="">
                                <figcaption>
                                    <h4>We work all-day-long</h4>
                                    <p>Vestibulum ac suscipit erat, feugiat posuere arcu. Quisque ullamcorper est quis tincidunt convallis. Quisque mollis, diam nec euismod pharetra...</p>
                                    <div class="text-center">
                                        <a href="#" class="btn-dark plus">Read More</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-offset-1 animated out" data-delay="100" data-animation="fadeInRight">
                <div class="quick-tips">
                    <div class="heading-with-plus">
                        <h3>QUICK TIPS</h3>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <div class="icon-hold blue">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <h6>CALL US FOR FREE</h6>
                            <label>01.666.777.8989</label>
                        </li>
                        <li>
                            <div class="icon-hold yellow">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <h6>FREE SHIPPING</h6>
                            <label>ON ORDER OVER $1000</label>
                        </li>
                        <li>
                            <div class="icon-hold red">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <h6>FREE REFUND</h6>
                            <label>24H AFTER PURCHASING</label>
                        </li>
                        <li>
                            <div class="icon-hold blue">
                                <i class="fa fa-heart-o"></i>
                            </div>
                            <h6>ADORABLE</h6>
                            <label>BRING YOU JOY</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Client Section Start -->
<section class="section">
    <div class="container">
        <div class="row our-client owl-carousel">
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-2.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-3.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-4.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-5.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-6.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-2.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-3.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-4.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-5.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="item">
                <div class="client-box">
                    <figure>
                        <img src="{{ asset('images/our-client-6.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section Start -->
<section class="bg-gray">
    <div class="row">
        <div class="col-md-6 no-padding">
            <div id="map-street"></div>
        </div>
        <div class="col-md-6">
            <div class="contact-form">
                <div class="heading-with-plus">
                    <h3>Contact Us</h3>
                </div>
                <input type="text" placeholder="Name" class="animated out" data-delay="0" data-animation="fadeInUp">
                <input type="text" placeholder="Email" class="animated out" data-delay="300" data-animation="fadeInUp">
                <textarea placeholder="Message" rows="4" class="animated out" data-delay="600" data-animation="fadeInUp"></textarea>
                <a href="#" class="btn-light plus animated out" data-delay="900" data-animation="fadeInUp">Send</a>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonial Section Start -->
<section class="section animated out" data-delay="0" data-animation="flipInX">
    <div class="container">
        <div class="owl-theme client-testimonial">
            <div class="client-testimonial-box">
                <div class="text-center">
                    <div class="snap-box">
                        <figure>
                            <img src="{{ asset('images/our-client-1.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="testimonial-text">
                        <blockquote class="text-center">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus eros quam. Sed pharetra tincidunt tincidunt.”</p>
                        </blockquote>
                        <label>JEREMY ROHMER - CEO</label>
                    </div>
                </div>
            </div>

            <div class="client-testimonial-box">
                <div class="text-center">
                    <div class="snap-box">
                        <figure>
                            <img src="{{ asset('images/our-client-2.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="testimonial-text">
                        <blockquote class="text-center">
                            <p>“Lorem ipsum dolor sit amet, consectetur quam. Sed pharetra tincidunt tincidunt.”</p>
                        </blockquote>
                        <label>JEREMY ROHMER - CEO</label>
                    </div>
                </div>
            </div>

            <div class="client-testimonial-box">
                <div class="text-center">
                    <div class="snap-box">
                        <figure>
                            <img src="{{ asset('images/our-client-3.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="testimonial-text">
                        <blockquote class="text-center">
                            <p>“Lorem ipsum dolor sit amet. Quisque rhoncus eros quam. Sed pharetra tincidunt tincidunt.”</p>
                        </blockquote>
                        <label>JEREMY ROHMER - CEO</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Links Section Start -->
<div class="news-letter-style-1 bg-light-gray animated out" data-delay="0" data-animation="bounceIn">
    <div class="container">
        <div class="row">
            <div class="col-md-5 social-links">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-behance"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="news-letter-form">
                    <h4>NEWSLETTER</h4>
                    <form>
                        <input type="text" placeholder="Enter Your Email Address">
                        <a class="btn-dark plus">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<section class="section bg-dark-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget about-us-widget animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>ABOUT US</h4>
                    </div>
                    <div class="logo">
                        <img src="{{ asset('images/header-logo.png') }}" alt="Logo Image">
                    </div>
                    <span>Moment</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit viverra tortor, vitae imperdiet ante suscipit quis.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="widget theme-feature-widget animated out" data-delay="300" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>THEME FEATURES</h4>
                    </div>
                    <ul class="theme-features-list list-unstyled">
                        <li><a href="#">Theme Features</a></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Our Other Projects</a></li>
                        <li><a href="#">One Click To Join Us</a></li>
                        <li><a href="#">Follow Us On Twitter</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="widget key-feature-widget animated out" data-delay="600" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>KEY FEATURES</h4>
                    </div>
                    <ul class="key-feature-list list-unstyled">
                        <li>
                            <span>1</span>
                            <p>Choose your wishlist products then add to cart.</p>
                        </li>
                        <li>
                            <span>2</span>
                            <p>Call us for more info about our products.</p>
                        </li>
                        <li>
                            <span>3</span>
                            <p>Pay by creadit card.</p>
                        </li>
                        <li>
                            <span>4</span>
                            <p>We will send this product in 2 days.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget contact-us-widget animated out" data-delay="900" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>CONTACT US</h4>
                    </div>
                    <ul class="contact-us-list list-unstyled">
                        <li>
                            <span><i class="fa fa-microphone"></i></span>
                            <p>Call Us +001 666 951</p><p>Fax +001 678 987</p>
                        </li>
                        <li>
                            <span><i class="fa fa-mobile"></i></span>
                            <p>+77 123 1234</p><p>+42 98 9876</p>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope-o"></i></span>
                            <p>info@example.com</p><p>business@example.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer with widgets Section Start -->
<section class="section bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="footer-box">
                <div class="widget widget-information animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>Information</h4>
                    </div>
                    <ul class="info-list list-unstyled">
                        <li><a href="#">About us </a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">terms and conditions</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-box">
                <div class="widget service-widget animated out" data-delay="300" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>Service</h4>
                    </div>
                    <ul class="service-list list-unstyled">
                        <li><a href="#">Conect Us</a></li>
                        <li><a href="#">Return</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-box">
                <div class="widget extra-widget animated out" data-delay="600" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>Extras</h4>
                    </div>
                    <ul class="extra-list list-unstyled">
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Gift Vouchers</a></li>
                        <li><a href="#">Affilates</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-box">
                <div class="widget account-widget animated out" data-delay="900" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>Account</h4>
                    </div>
                    <ul class="account-list list-unstyled">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">News letter</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-box">
                <div class="widget additional-info-widget animated out" data-delay="1200" data-animation="fadeInUp">
                    <div class="heading-with-plus">
                        <h4>Additional Info</h4>
                    </div>
                    <ul class="additional-info-list list-unstyled">
                        <li>
                            <span><i class="fa fa-map-marker"></i></span>
                            <p>ABC Inc., 123 Kingston St.</p><p>New York, USA</p>
                        </li>
                        <li>
                            <span><i class="fa fa-clock-o"></i></span>
                            <p>7:30 AM - 7:30 PM</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom Bar Section Style -->
<div class="bottom-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copy-right-text">
                    <p>© Copyright 2015.</p>
                    <p>Thematicwebs Team</p>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled payment-list">
                    <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="http://www.thematicwebs.com/demo/html/moment/HTML/js/pathLoader.js"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/jquery.sidr.min.js') }}"></script>
<script src="{{ asset('js/jquery.mixitup.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script>
    $(function(){
        $('#Container').mixItUp();
    });
</script>
<!-- Google Map -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    var locations = [
        ['<div class="infobox">121 King Street, Melbourne Victoria 3000<br />United States of America, CA 90017</div>', 40.5458921,-74.1843522, 2],
        ['<div class="infobox">121 King Street, Melbourne Victoria 3000<br />United States of America, CA 90017</div>', 40.550121,-74.187378, 3],
        ['<div class="infobox">Vineland Avenue, Staten Island, NY<br />United States of America, CA 90017</div>', 40.5474649,-74.187468, 2]
    ];

    var map = new google.maps.Map(document.getElementById('map-street'), {
        zoom: 15,
        scrollwheel: false,
        navigationControl: true,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,

        center: new google.maps.LatLng(40.550121,-74.187378),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map ,
            icon: 'images/marker.png'
        });


        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>

<script type="text/javascript">

    jQuery(document).ready(function() {



        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:700,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"preview2",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner4",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",



                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                videoJsPath:"rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });




    });	//ready

</script>

</body>

</html>


