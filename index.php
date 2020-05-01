<?php include 'init.php'; ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $img ?>/favicon.png">
    <!-- Place favicon.ico in the root directory -->

	<link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">


    <!-- CSS here -->
    <link rel="stylesheet" href="<?= $css ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= $css ?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $css ?>magnific-popup.css">
    <link rel="stylesheet" href="<?= $css ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?= $css ?>themify-icons.css">
    <link rel="stylesheet" href="<?= $css ?>nice-select.css">
    <link rel="stylesheet" href="<?= $css ?>flaticon.css">
    <link rel="stylesheet" href="<?= $css ?>animate.css">
    <link rel="stylesheet" href="<?= $css ?>slicknav.css">
    <link rel="stylesheet" href="<?= $css ?>style.css">
    <link rel="stylesheet" type="text/css" href="<?= $css ?>Stylesheet.css">

</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class = "active" href="index.php">Home</a></li>
                                        <li><a href="Menu.php">Menu</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="<?= $img ?>logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block" style="margin-right: 1px">
                                    <a class="towHomeBtn" href="User_Home.php">MyAccount</a>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="towHomeBtn" href="login.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Big Deal</span>
                                </div>
                                <h3>Burger <br>
                                    Bachelor</h3>
                                 </Br>   
                                <h4>Maxican</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Big Deal</span>
                                </div>
                                <h3 >Burger <br>
                                    Bachelor</h3>
                                    </Br>  
                                <h4>Maxican</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Burger Menu</span>
                        <h3>Best Ever Burgers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Beefy Burgers</h3>
                            <p>burger + Egg + lettuce + Ketchup and mayonnaise + beards.</p>
                            <span>$5</span>
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/2.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Boys</h3>
                            <p>burger + Egg + lettuce + Ketchup and mayonnaise + beards.</p>
                            <span>$5</span>
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/3.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Bizz</h3>
                            <p>burger + Egg + lettuce + Ketchup and mayonnaise + beards.</p>
                            <span>$5</span>
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/4.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Crackles Burger</h3>
                            <p>burger + Egg + lettuce + Ketchup and mayonnaise + beards.</p>
                            <span>$5</span>
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/5.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Bull Burgers</h3>
                            <p>burger + Egg + lettuce + Ketchup and mayonnaise + beards.</p>
                            <span>$5</span>
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/6.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Rocket Burgers</h3>
                            <p>burger + Egg + lettuce + Ketchup and mayonnaise + beards.</p>
                            <span>$5</span>
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/7.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Smokin Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                            
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $img ?>burger/8.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Delish Burger</h3>
                            <p>burger + Egg + lettuce + Ketchup and mayonnaise + beards.</p>
                            <span>$5</span>
                            <a href="Cart.php" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="iteam_links">
                        <a class="boxed-btn5" href="Menu.php">More Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_startt -->
    <div class="Burger_President_area">
            <div class="Burger_President_here">
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="<?= $img ?>burger/S1.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger President</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <a href="Cart.php" class="boxed-btn3">Order Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="<?= $img ?>burger/S2.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger President</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <a href="Cart.php" class="boxed-btn3">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features_room_end -->
        
    <!-- about_area_start -->
    <div class="about_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about_thumb2">
                            <div class="img_1">
                                <img src="<?= $img ?>about/1.png" alt="">
                            </div>
                            <div class="img_2">
                                <img src="<?= $img ?>about/2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <span>About Us</span>
                                <h3>Best Burger <br>
                                        in your City</h3>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate</p>
                            <div class="img_thumb">
                                <img src="<?= $img ?>jessica-signature.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about_area_end -->
    <!-- video_area_start -->
    <div class="video_area video_bg overlay" style="margin-bottom:  150px">
        <div class="video_area_inner text-center">
            <h3>Burger <br>
                Bachelor</h3>
            <span>How we make delicious Burger</span>
            <div class="video_payer">
                <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

   

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/1.png" alt="">
                    <div class="ovrelay">
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/2.png" alt="">
                    <div class="ovrelay">
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->

    <?php include $tpl."footer.php"; ?>
