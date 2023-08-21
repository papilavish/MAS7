<!DOCTYPE html>
<html>

<head>
    <style>
        .bg-ffc107 {
            background-color: #ffc107;
        }

        .bg-1c1a32 {
            background-color: #1c1a32;
        }
    </style>

    <title>MAS7</title>
    <link href="img/MAS7/logo.JPG" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                            <span id="usernamePlaceholder">My Account</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <div class="container mt-4">
                        <?php
// Check if the username query parameter is set
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    echo '<button class="dropdown-item" type="button"><strong>Hey ' . htmlspecialchars($username) . '</strong></button>';
    echo '<a href="logout.php" id="signOutLink">';
    echo '<button class="dropdown-item" type="button">Sign out</button>';
    echo '</a>';
} else {
    echo '<p>Your username is not available.</p>';
    echo '<a href="signin.php" id="signInLink">';
    echo '<button class="dropdown-item" type="button">Sign in</button>';
    echo '</a>';
    echo '<a href="register.php" id="signupLink">';
    echo '<button class="dropdown-item" type="button">Sign up</button>';
    echo '</a>';  
}
?>
                        </div>
                        </div>
                    </div>

                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" id="currencyDropdown" data-toggle="dropdown">NGN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button" onclick="changeCurrency('NGN')">NGN</button>
                            <button class="dropdown-item" type="button" onclick="changeCurrency('USD')">USD</button>
                            <button class="dropdown-item" type="button" onclick="changeCurrency('EUR')">EUR</button>
                        </div>
                    </div>               
                    <div class="d-inline-flex align-items-center d-block d-lg-none">
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-heart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center bg-1c1a32 py-3 px-xl-5 d-none d-lg-flex">
                <a href="MAS7.html" class="text-decoration-none">
                    <div class="col-lg-4">
                        <img src="img/MAS7/logo (2).JPG" alt="Your Logo" width="200">
                    </div>
                </a>            
                </div>
            </div>
        </div>
        <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-ffc107 mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-ffc107 w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="your_mens_url" class="nav-link dropdown-toggle" data-toggle="dropdown" style="background-color: #1c1a32; color: #ffc107;">M👽S7 Men <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0" style="background-color: #1c1a32;">
                                <a href="your_men_shirts_url" class="dropdown-item">M👽S7 Men-Shirts</a>
                                <a href="your_men_shorts_url" class="dropdown-item">M👽S7 Men-Shorts</a>
                                <a href="your_men_cargopants_url" class="dropdown-item">M👽S7 Men-Cargo Pants</a>
                                <a href="your_men_accessories_url" class="dropdown-item">M👽S7 Men-Accessories</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="your_womens_url" class="nav-link dropdown-toggle" data-toggle="dropdown" style="background-color: #1c1a32; color: #ffc107;">M👽S7 Women <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0" style="background-color: #1c1a32;">
                                <a href="your_women_dresses_url" class="dropdown-item">M👽S7 Women-Dresses</a>
                                <a href="your_women_shirts_url" class="dropdown-item">M👽S7 Women-Shirts</a>
                                <a href="your_women_shorts_url" class="dropdown-item">M👽S7 Women-Shorts</a>
                                <a href="your_women_cargopants_url" class="dropdown-item">M👽S7 Women-Cargo Pants</a>
                                <a href="your_women_accessories_url" class="dropdown-item">M👽S7 Women-Accessories</a>
                            </div>
                        </div>
                    </div>
                </nav>  
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-ffc107 justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="MAS7.html" class="nav-item nav-link">Home</a>
                            <a href="Mas7-men.html" class="nav-item nav-link active">MAS7 Men</a>
                            <a href="Mas7-women.html" class="nav-item nav-link active">MAS7 Women</a>
                            <div class="nav-item dropdown">
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0 ml-3 wishlist-icon">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/MAS7/White Cross Jacket2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">M👽S7 MEN</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Join us on a journey to redefine fashion with our intergalactic-inspired designs. Embrace the bold, the innovative, and the adventurous in your everyday style. M👽S7 Men is more than just clothing; it's a statement of confidence and empowerment</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="Mas7-men.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/MAS7/T-shirt with dropped shoulders number with letter print1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">M👽S7 WOMEN</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Discover the perfect fusion of style and comfort with our exclusive collection of women's clothing. Embrace your individuality and express yourself through our unique designs and trendy outfits</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="Mas7-women.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/MAS7/NBA vintage caps.JPG" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">M👽S7 ACCESSORIES</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Step up your style game with the hottest trends from M👽S7 ACCESSOIRES! Elevate your look with our unique and fashionable accessories. Stand out, be bold, and let your personality shine with our curated collection. Explore the latest must-haves and show the world your individuality. Upgrade your accessory game now!" 🚀🛍️💫</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/MAS7/Travis Scott Cactus Jack Look Mom I Can Fly T Shirt.JPG" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">M👽S7</h6>
                        <h3 class="text-white mb-3">MEN</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/MAS7/Power Letter Street T-Shirt Women Loose Oversize Tee.JPG" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">M👽S7</h6>
                        <h3 class="text-white mb-3">WOMEN</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/MAS7/cat1.JPG" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 MEN</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 MEN-SHIRTS</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 MEN-SHORTS </h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 MEN-CARGO PANTS</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 WOMEN</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 WOMEN-DRESSES</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/MAS7/prd-1.JPG" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 WOMEN-SHIRTS</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 WOMEN-SHORTS</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/MAS7/prd-1.JPG" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 WOMEN-CARGO-PANTS</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 MEN-ACCESSORIES</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>M👽S7 WOMEN-ACCESSORIES</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Categories End -->


   <!-- Featured MAS7 MEN START -->
   <div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> Featured MAS7 MEN</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4" data-product-id="product-1">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/Reckless Boys Logo Tee3.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="MAS7-MEN.html">Reckless Boys Logo Tee</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦12,000.00</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$15.60</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€14.21</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
            <div class="product-item bg-light mb-4" data-product-id="product-2">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/White Cross Jacket2.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">White Cross Jacket</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦20,000.00</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$19.50</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€17.76</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4" data-product-id="product-3">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/Straight Leg Rigid Twig Print Jeans1.jpeg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Straight Leg Rigid Twig Print Jeans</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦10,000.00</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$13.00</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€11.84</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4" data-product-id="product-3">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/Cactus Jack Pants.JPG" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Cactus Jack Pants</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦9,000.00</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$11.70</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€10.66</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
      <!-- Featured MAS7 MEN END-->  


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/MAS7/Power Letter Street T-Shirt Women Loose Oversize Tee.JPG" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">M👽S7</h6>
                        <h3 class="text-white mb-3">WOMEN</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/MAS7/Travis Scott Cactus Jack Look Mom I Can Fly T Shirt.JPG" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">M👽S7</h6>
                        <h3 class="text-white mb-3">MEN</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


   <!-- Featured MAS7 WOMEN START-->
   <div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> Featured MAS7 WOMEN</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4" data-product-id="product-5">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/Slogan & Butterfly Print Graphic Tee Slogan Butterfly Regular Fit Round Neck Regular Elastane.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Slogan & Butterfly Print Graphic Tee</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦8,500.00</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$11.05</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€10.06</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
            <div class="product-item bg-light mb-4" data-product-id="product-6">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/Half Butterfly Half Skeleton Graphic Tee Oversized Tumblr Casual Funny Street Style Hipster T-Shirt Women.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Half Butterfly Half Skeleton Graphic Tee</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦8,500.00</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$11.05</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€10.06</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4" data-product-id="product-7">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/Leather Trousers with Pockets Female Streetwear Fashion2.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Leather Trousers with Pockets Female</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦9,000.00</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$11.70</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€10.66</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4" data-product-id="product-8">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid" src="img/MAS7/Cargo Mini Skirts.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square heart-icon" data-product-id="product-1"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Cargo Mini Skirts</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <!-- For NGN -->
<h5 class="price price-ngn">₦7,000</h5>

<!-- For USD -->
<h5 class="price price-usd hidden-currency">$8.29</h5>


<!-- For EUR -->
<h5 class="price price-eur hidden-currency">€9.10</h5>


                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
      <!-- Featured MAS7 WOMEN END --> 


    <!-- Vendor Start 
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    Vendor End -->


    
   <!-- Footer Start -->
<div class="container-fluid bg-ffc107 text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-dark text-uppercase mb-4">Get In Touch</h5>
            <p class="mb-4">Hey there! We're all ears and totally vibing with you! Need to talk about some cool streetwear or just want to share your fashion inspiration? Slide into our DMs or hit us up through these channels:</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Lagos, Nigeria</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><a href="mailto:MAS7CONTACT@gmail.com?subject=Hey%20M%F0%9F%91%BDS7">MAS7CONTACT@gmail.com</a></p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><a href="tel:+2349020584696">+234 902 058 4696</a></p>
        </div>
        <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>👋 Hey Trendsetter,Sign up for the MAS7 newsletter and unlock the coolest trends, exclusive drops, and style tips designed just for you. Don't miss out – 🚀🔥
                            Stay stylish,
                            The MAS7 Team</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Send a message</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https:/wa.me/9057195690" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp"></i>
                              </a>
                              <a class="btn btn-primary btn-square" href="https://www.instagram.com/direct/t/17843475501041034" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                              </a>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; 2023 <a class="text-primary" href="#">MAS7</a>. Powered by
                    <a class="text-primary" href="RETRO-PORTFOLIO/xanderblog.com/portfolio/index.html" target="_blank" rel="noopener noreferrer">RETRO</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer end -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="function changeCurrency(currency) {.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            // Get references to the heart icons and the heart badge in the navbar
            const heartIcons = document.querySelectorAll(".heart-icon");
            const heartBadge = document.querySelector(".wishlist-icon .badge");
        
            // Initialize the heart counter value
            let heartCounter = 0;
        
            // Function to update the heart counter and badge
            function updateHeartCounter() {
                if (this.classList.contains("liked")) {
                    // Unlike the product
                    this.classList.remove("liked");
                    heartCounter -= 1; // Decrease the heart counter
                } else {
                    // Like the product
                    this.classList.add("liked");
                    heartCounter += 1; // Increase the heart counter
                }
        
                // Update the heart badge
                heartBadge.textContent = heartCounter;
            }
        
            // Add click event listeners to the heart icons
            heartIcons.forEach(icon => {
                icon.addEventListener("click", updateHeartCounter);
            });
        });
        
            </script>
</body>

</html>