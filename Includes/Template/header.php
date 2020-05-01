<?php 

    session_start();
    if(!isset($_SESSION['Id']))
    {
        header("Location: login.php");
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php
    //basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */
        switch(basename($_SERVER['PHP_SELF']))
        {
            case 'index.php': 
                echo 'Home';
                break;
            case 'Menu.php' :
                echo 'Food Menu';
                break; 
            case 'contact.php': 
                echo 'Contact';
                break;
            case 'about.php': 
                echo 'About Us';
                break;
            case 'checkout.php' :
                echo 'Checkout';
                break;
            case 'Cart.php': 
                echo 'Shopping Cart';
                break;
            case 'login.php' :
                echo 'Login';
                break; 
            case 'Register.php' :
                echo 'Register';
                break;         
            default :
                echo 'Online Food System';    
        }
    ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= $img ?>/favicon.png">

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
                                        <li><a  href="index.php">Home</a></li>
                                        <li><a href="Menu.php">Menu</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="../index.php">
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
                                <?php
                                    if($_SESSION['User_Type_Id'] == 1) 
                                    { ?>
                                        <a class="towHomeBtn" style="margin: 40px" href="<?=$adminHome ?>">Admin</a>
                                   <?php
                                   }else
                                   { ?>
                                    <a class="towHomeBtn"  href="<?=$userHome ?>">MyAccount</a>
                                  <?php
                                   }

                                ?>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="towHomeBtn" href="logout.php">Log Out</a>
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