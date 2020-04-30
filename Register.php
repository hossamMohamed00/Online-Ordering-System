<?php include 'init.php'; ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registration Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $img ?>favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= $css ?>Stylesheet.css">


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
    <!--here signuo only -->

    <!-- <link rel="stylesheet" href="<?= $css ?>responsive.css"> -->
</head>

<body>

    <header>
        <div class="header-area " >
            <div id="sticky-header" class="main-header-area" >
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="Register.php">
                                    <img src="<?= $img ?>logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            
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

    <!-- sign up -start -->
    <div class="signup" >
            <h2 class="h_signup">Sign Up</h2>
            <form action="" target="_blank" method="post">
                Name: <br>
                <input class="Form_input" type="text" name="firstname" placeholder="Type your Name..." required><br>
                
                User Name:<br>
                <input class="Form_input" type="text" name="username" placeholder="Choose you own user name..." required><br>
                Password:<br>
                <input class="Form_input" type="password" name="password" placeholder="Choose you own Password..."  required><br>
                
                Phone Number:<br>
                <input class="Form_input" type="text" name="phonenumber" placeholder="Type your Phone Number..." maxlength="11"  required><br>
                
                Address:<br>
                <input class="Form_input" type="text" name="Address" placeholder="Type your Address..." maxlength="11"  required><br>

                <input class="Form_input2" type="submit" name="Signup" value="Sign up-100% free">
                <input class="Form_input2" type="reset" name="reset" value="reset all fields">
                <P class="login_p">Already created an account? <a class="span" href="login.php">Log In</a></P>
            </form>
            
    </div>
    <!-- sign up -end -->

    <?php include $tpl."footer.php"; ?>
