    <!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

     <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">

    <!-- CSS here   -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/bootstrap.min2.css"/>

        <link rel="stylesheet" type="text/css" href="css/style2.css"/> 
        <link rel="stylesheet" href="css/owl-carousel.css"/>

        

    <!--  -----------------  -->

    

    <!--  -----------------  -->



    <link rel="stylesheet"  href="css/bootstrap2.min.css"/>
        <link rel="stylesheet"  href="css/AdminStyle.css"/> 
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" type="text/css" href="css/Stylesheet.css">

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
                                    <img src="img/logo.png" alt="">
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




<!--           -->
        <h2 class="helloAdmin" >CheckOut</h2>

    <div class="panel panel-default" >
            
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">  Delivery Details <i class="fa fa-caret-down"></i></a></h4>
        </div>    
        <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
                <div class="panel-body">

                    <form class="form-horizontal" action="ThanksPage.php" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="Categories">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value="Hossam" name="name" readonly="readonly">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Address</label>
                             <div class="col-sm-10">          
                                <input type="text" class="form-control" id="pwd" value="Cairo" name="address"  readonly="readonly">
                            </div>
                        </div>


                         <div class="form-group">
                          <label class="control-label col-sm-2" for="description">Phone Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="pro_desc" value="01156826636" name="mobile"  readonly="readonly">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="description">PAYMENT METHOD</label>
                          <div class="col-sm-10">
                              <label  style="margin-top: 15px;margin-bottom: 60px;font-size: 25px;color:black ;font-family: 'Bellota', cursive;">Cash on delivery (COD)</label>

                          </div>
                        </div>


                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default"  style="margin-left:760px;margin-bottom: -30px">Place Order</button>
                          </div>
                        </div>
                        
                    </form>

                    <form class="form-horizontal" action="Cart.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default" style="margin-left:-180px;margin-top: -40px" > Back To Cart</button>
                          </div>
                        </div>
                    </form>	

					<form class="form-horizontal" action="User_Home.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default" style="margin-left:290px;margin-top: -110px"  onclick=""> Change Delivery Details </button>
                          </div>
                        </div>
                    </form>

                </div>                                           
             </div>
    </div>    
    <!--add food end-->
    <!-- -----------------------------------------  -->

    <!-- Footer start  -->
    <footer class="footer" style="margin-top: 150px">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                         New Cairo
                                </h3>
                                <p> Concord Plaza Mall, 90th Street<br> 
                                        Katameya Down Town, Road 90 <br>
                                        </p>
                                <a class="number" href="#">19914</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                     Nasr City
                                </h3>
                                <p> City Stars Mall, <br> 
                                         9 Hafez Ramadan Street <br>
                                        </p>
                                <a class="number" href="#">19914</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Stay Connected
                                        </h3>
                                        <form action="#" class="newsletter_form">
                                            <button type="submit" style="font-family: 'East Sea Dokdo'"><a href="Register.php">Register Now</a></button>
                                        </form>
                                        <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">FCIH TEAM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- footer end -->
    <!-- JS here -->
     <script src="js/jquery2.min.js"></script>
    <script src="js/owl-carousel2.js"></script>
    <script src="js/bootstrap2.min.js"></script>
    <script src="js/custom2.js"></script>

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>


        <script src="js/jquery2.min.js"></script>
        <script src="js/owl-carousel2.js"></script>
        <script src="js/bootstrap2.min.js"></script>
        <script src="js/custom2.js"></script>

</body>

</html>