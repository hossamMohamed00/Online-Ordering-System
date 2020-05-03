<?php include 'init.php'; 
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
    <title>The End</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $img ?>favicon.png">
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
    <link rel="stylesheet"  href="<?= $css ?>bootstrap.min2.css"/>

        <link rel="stylesheet" type="text/css" href="<?= $css ?>style2.css"/> 
        <link rel="stylesheet" href="<?= $css ?>owl-carousel.css"/>

        
    <link rel="stylesheet"  href="<?= $css ?>bootstrap2.min.css"/>
    <link rel="stylesheet"  href="<?= $css ?>AdminStyle.css"/> 
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
                                <a href="index.php">
                                    <img src="<?= $img ?>logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <?php
                                if($_SESSION['User_Type_Id'] == 1) 
                                    { ?>
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
                                
                                    <a class="towHomeBtn" style="margin: 40px" href="<?=$adminHome ?>">Admin</a>
                                   <?php
                                   }else
                                   { ?>
                                    <div class="book_btn d-none d-xl-block" style="margin-right: 1px">
                                    <a class="towHomeBtn"  href="<?=$userHome ?>">My_Account</a>
                                    <div class="book_btn d-none d-xl-block" style="margin-left: -150px;margin-top: -25px">
                                         <a class="towHomeBtn" href="Cart.php" >My_Cart</a>
                                    </div>
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

<!--           -->
        <h2 class="helloAdmin" style="font-size: 85px;margin-bottom: -120px">Ordering Done</h2>
        </br></br></br>

        <h2 class="helloAdmin" style="font-size: 45px;font-family: 'Bellota'">Thanks for your order</h2>
    </br></br></br>
        <h2 class="helloAdmin" style="font-size: 45px;font-family: 'Bellota'">Your order id is 5</h2>

        <h2 class="helloAdmin" style="font-size: 30px;padding-top: 60px;font-family: 'Bellota'">It will be delivered to you as soon as possible</h2>

        </br></br></br>

         <div class="form-group">
                    <form class="form-horizontal" action="<?=($_SESSION['User_Type_Id'] == 2) ? 'user/User_Home.php' : 'admin/Admin_Home.php'?>" method="post" enctype="multipart/form-data">
        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default"  style="margin-left:760px;margin-top: 120px">Track your Orders</button>
                          </div>
                        </div>
                        
                     </form>   

                     <form class="form-horizontal" action="index.php" method="post" enctype="multipart/form-data">>
                         <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default" style="margin-left:-180px;margin-top: -60px" > Back To Home </button>
                          </div>
                        </div>

                     </form>

<!-- -----------------------------------------  -->

<?php include $tpl."footer.php"; ?>
