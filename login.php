<?php 
 require_once 'init.php';
        session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $eror='';
if (isset($_POST['username'])&& !empty($_POST['password']) && isset($_POST['password']) && !empty($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new User();
    $userdata = $user ->getUserForLogin($username,$password);
    if (!empty($userdata)) {
        $_SESSION['Name']=$userdata['Name'];
        $_SESSION['Id']=$userdata['Id'];
        $_SESSION['User_Name']=$userdata['User_Name'];
        $_SESSION['Password']=$userdata['Password'];
        $_SESSION['Phone']=$userdata['Phone'];
        $_SESSION['Address']=$userdata['Address'];
        $_SESSION['User_Type_Id ']=$userdata['User_Type_Id '];

    
    if ($userdata['User_Type_Id'] == 1) {
        header("location:".$adminHome);

    }
    elseif ($userdata['User_Type_Id'] == 2) {
        header("location:".$userHome);

    }
}
    else  {
        header("location:login.php");
    }    
}
}

?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $img ?>favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="<?= $css ?>Stylesheet.css">

</head>

<body>

    <header>
        <div class="header-area " >
            <div id="sticky-header" class="main-header-area" >
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="login.php">
                                    <img src="<?= $img ?>logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- sign up -start -->
    <div class="signup" >
            <h2 class="h_signup">Log In</h2>
            <form action="login.php"  method="POST">
                
                User Name:<br>
                <input class="Form_input" type="text" name="username" placeholder="Type your username..." required><br>
                Password:<br>
                <input class="Form_input" type="password" name="password" placeholder="Type your password..." required><br>
                
                <input class="Form_input2" type="submit" name="login" value="Login">
                
                   
                 
                <P class="login_p">If you don't have an account? <a class="span" href="Register.php">Create Now</a></P>
            </form>
            
    </div>
    <!-- sign up -end -->

    <?php include $tpl."footer.php"; ?>
