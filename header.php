<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE SHOP NAVBAR</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="upper-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-inner">
                        <ul class="header-left">
                            <li>USD <i class="fas fa-chevron-down"></i>
                            <ul>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul>
                            </li>
                            <li>ENG <i class="fas fa-chevron-down"></i>
                                <ul>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </li>
                            <li>Sign in <i class="fas fa-chevron-down"></i></li>
                        </ul>
                        <div class="header-logo">
                            <img src="images/logo.png" alt="Cake Logo">
                        </div>
                        <ul class="header-right ">
                            <div class="header-right-links">
                                <li> <i class="fas fa-search"></i></li>
                                <li><i class="far fa-heart"></i></li>
                            </div>
                           <div class="header-right-cart">
                            <li> <i class="fas fa-shopping-bag"></i><span class="cart-price"> Cart: $0.00</span></li>
                           </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header start -->
    <header class="header fixed" id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img src="images/logo.png" alt="">
                <button class="navbar-toggler fw-bold text-black" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav_top w-100 d-flex justify-content-center align-items-center gap-3">
                        <li class="nav-item p-2">
                            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="about.php">About</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item drop_bar p-3">
                            <a href="#" class="text-decoration-none text-white">Pages</a>

                            <div class="extra_dropDown">
                                <ul class="extra_drop_content list-unstyled">
                                    <li><a class="dropdown-item text-white" href="shopdetails.php">Shop Detail</a></li>
                                    <li><a class="dropdown-item text-white" href="shopping.php">Shoping Cart</a></li>
                                    <li><a class="dropdown-item text-white" href="checkout.php">Check Out</a></li>
                                    <li><a class="dropdown-item text-white" href="wisslist.php">Wisslist</a></li>
                                    <li><a class="dropdown-item text-white" href="class.php">Class</a></li>
                                    <li><a class="dropdown-item text-white" href="blog.php">Blog Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fs-1 fst-italic" id="offcanvasMenuLabel">Cake</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item p-2">
                    <a class="nav-link text-black" href="index.php">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-black" href="about.php">About</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-black" href="shop.php">Shop</a>
                </li>


                <li class="nav-item dropdown p-2">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="shopdetails.php">Shop Detail</a></li>
                        <li><a class="dropdown-item" href="shopping.php">Shopping cart</a></li>
                        <li><a class="dropdown-item" href="checkout.php">Check out</a></li>
                        <li><a class="dropdown-item" href="wisslist.php">Wisslist</a></li>
                        <li><a class="dropdown-item" href="class.php">Class</a></li>
                        <li><a class="dropdown-item" href="blogdetails.php">Blog Detail</a></li>
                    </ul>
                </li>

                <li class="nav-item p-2">
                    <a class="nav-link text-black" href="blog.php">Blog</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-black" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- header end --> 