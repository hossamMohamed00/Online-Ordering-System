<?php include 'init.php' ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Account</title>
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

        

    <!--  -----------------  -->

    

    <!--  -----------------  -->



    <link rel="stylesheet"  href="<?= $css ?>bootstrap2.min.css"/>
        <link rel="stylesheet"  href="<?= $css ?>AdminStyle.css"/> 
    <!-- <link rel="stylesheet" href="<?= $css ?>responsive.css"> -->
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
                                        <li><a  href="index.PHP">Home</a></li>
                                        <li><a href="Menu.PHP">Menu</a></li>
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
                                    <a class="towHomeBtn" href="User_Home.php">My Account</a>
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

<!--     Greeting Msg      -->
        <h2 class="helloAdmin" >Welcome User</h2>

<!-- User Info start -->

  <div class="panel panel-default" style="margin-bottom: 50px">
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">User Information <i class="fa fa-caret-down"></i></a></h4>
        </div>
            <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
                <div class="panel-body">

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="Categories">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value="Hossam" name="name" required>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">UserName</label>
                             <div class="col-sm-10">          
                                <input type="text" class="form-control" id="pwd" value="username" readonly="readonly" name="username" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="price">Password</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" value="123"  name="Password" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="description">Phone Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="pro_desc" value="01156826636" name="pro_desc" required>
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="control-label col-sm-2" for="description">Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="pro_desc" value="Cairo" name="Address" required>
                          </div>
                        </div>

                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default">Save Changes</button>
                          </div>
                        </div>
                    </form>
                </div>                                           
             </div>
   </div>


<!-- User Info end -->


<!-- All Orders start -->

  <div class="panel panel-default" style="margin-bottom: 50px;margin-top: -30px">
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">ORDERS History <i class="fa fa-caret-down"></i></a></h4>
        </div>
            <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="true" style="">
                <div class="panel-body">

                    <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px; margin-top: -90px"   >
                    <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                        <tr style="background-color:#F54300 ;color:white;"> 
                                <th style="text-align: center;">Order ID</th>
                                <th style="text-align: center;">Order Desc.</th>
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Total Cost</th>
                                <th style="text-align: center;">Statue</th>

                            </tr>
                        </thead>

                        <tbody>

                            <tr class = "tabelrow">
                            <td style='text-align:center'>1</td>
                            <td style='text-align:center'>2 of Po(2)</td>
                            <td style='text-align:center'>25/3/2020</td>
                            <td style='text-align:center'>30$</td>
                            <td style='text-align:center'>Delivered</td>
                            </tr>
                            </br>

                            <tr class = "tabelrow">
                            <td style='text-align:center'>2</td>
                            <td style='text-align:center'>3 of Po(5)</td>
                            <td style='text-align:center'>31/3/2020</td>
                            <td style='text-align:center'>95$</td>
                            <td style='text-align:center'>Not Delivered yet</td>
                            </tr>
                            </br>

                            <tr class = "tabelrow">
                            <td style='text-align:center'>3</td>
                            <td style='text-align:center'>1 of Po(3) &1 of Po(7) </td>
                            <td style='text-align:center'>25/3/2020</td>
                            <td style='text-align:center'>47$</td>
                            <td style='text-align:center'>Delivered</td>
                            </tr>
                            </br>

                            <tr class = "tabelrow">
                            <td style='text-align:center'>4</td>
                            <td style='text-align:center'>1 of Po(4)</td>
                            <td style='text-align:center'>27/3/2020</td>
                            <td style='text-align:center'>20$</td>
                            <td style='text-align:center'>Delivered</td>
                            </tr>
                            </br>

                            <tr class = "tabelrow">
                            <td style='text-align:center'>5</td>
                            <td style='text-align:center'>4 of Po(2) & 2 of Po(3)</td>
                            <td style='text-align:center'>25/3/2020</td>
                            <td style='text-align:center'>103$</td>
                            <td style='text-align:center'>Not Delivered yet</td>
                            </tr>
                            </br>

                        </tbody>    

                    </table>
                </div>
            </div>
   </div>


<!-- All orders end -->

    <!-- -----------------------------------------  -->

    <?php include $tpl."footer.php"; ?>
