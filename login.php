<?php 
 require_once 'init.php';
        session_start();
$error='';
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if (isset($_POST['username']) && !empty($_POST['password']) && isset($_POST['password']) && !empty($_POST['username'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new User();
        $userdata = $user ->getUserForLogin($username,$password);

        if (!empty($userdata))
        {
            $_SESSION['Id']=$userdata['Id'];
            $_SESSION['Name']=$userdata['Name'];
            $_SESSION['User_Name']=$userdata['User_Name'];
            $_SESSION['Password']=$userdata['Password'];
            $_SESSION['Phone']=$userdata['Phone'];
            $_SESSION['Address']=$userdata['Address'];
            $_SESSION['User_Type_Id']=$userdata['User_Type_Id'];

        
            if ($userdata['User_Type_Id'] == 1) {
                header("location: ".$adminHome);

            }
            elseif ($userdata['User_Type_Id'] == 2) {
                header("location: index.php");

            }
        }
        else
        {
            $error = 1;   
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

    <!-- JS HERE -->
    <script>
        function showPass() 
        {
            var x = document.getElementById("pass");
            if (x.type === "password") 
            {
                x.type = "text";
            } else
            {
                x.type = "password";
            }
        }
    </script>

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
            <form action="<?= $_SERVER['PHP_SELF'] ?>"  method="POST">
                
                User Name:<br>
                <input class="Form_input" type="text" name="username" placeholder="Type your username..."  value="<?= (isset($_POST['username'])) ? $_POST['username'] : '' ?>" required><br>

                Password:<br>
                <input class="Form_input" type="password" id = "pass" name="password" placeholder="Type your password..." value="<?= (isset($_POST['password'])) ? $_POST['password'] : '' ?>" required><br>
                
                <input type="checkbox" onclick="showPass()" style="margin-left: -220px">    Show Password <br />

                <input class="Form_input2" type="submit" name="login" value="Login">
                <?php
                    if($error == 1)
                    {?>
                         <P class="login_p" style="color: red">Invalid username or password , Try Again </P>
                    <?php    
                        session_unset();//To Clear and Destroy the session
                    }
                ?>
                <P class="login_p">If you don't have an account? <a class="span" href="Register.php">Create Now</a></P>
            </form>
            
    </div>
    <!-- sign up -end -->

    <?php include $tpl."footer.php"; ?>
