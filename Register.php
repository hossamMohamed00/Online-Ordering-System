<?php 

require_once 'init.php';
 session_start();
 $arr_error= array();
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
   if (!isset($_POST['name'])) {
        $arr_error[]="name";
    }

    if (!isset($_POST['username'])) {
        $arr_error[]="username";
    }
    if (!isset($_POST['password'])) {
        $arr_error[]="password";
    }
    if (!isset($_POST['phonenumber'])) {
        $arr_error[]="phonenumber";
    }
    if (!isset($_POST['Address'])) {
        $arr_error[]="Address";
    }

    if (!$arr_error) {
    $add=new Admin();
        $Name=$_POST['name'];
        $Username=$_POST['username'];
        $Password=$_POST['password'];
        $Phonenumber=$_POST['phonenumber'];
        $Address=$_POST['Address'];
        $User_Type_Id =2;
        if ($add->checkUserName($Username)) {
            $info = array('Name' =>$Name,'User_Name'=>$Username ,'Password'=>$Password ,'Phone'=>$Phonenumber,'Address'=>$Address,'User_Type_Id'=> $User_Type_Id );

        }
        if ($add->addUser($info)) {
            header("location: login.php");

            # code...
        }
}
}

 ?>
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
            <form action="Register.php"  method="post">
                Name: <br>
                <input class="Form_input" type="text" name="name" placeholder="Type your Name..." value="<?= (isset($_POST['name']))? $_POST['name'] : ''?>" required><br>
                
                User Name:<br>
                <input class="Form_input" type="text" name="username" placeholder="Choose you own user name..." value="<?= (isset($_POST['username']))? $_POST['username'] : ''?>" required><br>
                Password:<br>
                <input class="Form_input" type="password" name="password" placeholder="Choose you own Password..."  value="<?= (isset($_POST['password']))? $_POST['password'] : ''?>" required><br>
                
                Phone Number:<br>
                <input class="Form_input" type="text" name="phonenumber" placeholder="Type your Phone Number..." maxlength="11"  value="<?= (isset($_POST['phonenumber']))? $_POST['phonenumber'] : ''?>" required><br>
                
                Address:<br>
                <input class="Form_input" type="text" name="Address" placeholder="Type your Address..." maxlength="11"  value="<?= (isset($_POST['Address']))? $_POST['Address'] : ''?>" required><br>

                <input class="Form_input2" type="submit" name="Signup" value="Sign up-100% free">
                <input class="Form_input2" type="reset" name="reset" value="reset all fields">
                <P class="login_p">Already created an account? <a class="span" href="login.php">Log In</a></P>
            </form>
            
    </div>
    <!-- sign up -end -->

    <?php include $tpl."footer.php"; ?>
