<?php
    require_once 'init.php';
    session_start();
    //To prevent opening this page directly
    if(!isset($_SESSION['Id']))
    {
        header("Location: login.php");
    }

    $admin = new Admin();

    $error_fields = array();

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Validation
    if(!(isset($_POST['name']) && !empty($_POST['name']))) 
    {
        $error_fields[] = "name";
    }
    if(!(isset($_POST['desc'])))
    {
        $error_fields[] = "desc";
    }
    if(!(isset($_POST['price']) && is_numeric($_POST['price']))) 
    {
        $error_fields[] = "price";
    }
    if(!(isset($_POST['availability']) && !empty($_POST['availability']))) 
    {
        $error_fields[] = "availability";
    }

    if(!$error_fields)
    {
        $Pro_id =  filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price =$_POST['price'];
        $availability =($_POST['availability'] == 'Avaliable') ? 1 : 0;    
        //prepare data for update
        $data = array(" Pro_Name " => $name ," Pro_Desc " => $desc, " Pro_Price " => $price , " Pro_Statue " => $availability);
        
        //Update the data in DB
        if($admin->updateProduct($data ,$Pro_id))
        {
            echo("<script language='javascript'>alert('Product Updated Successfuly')</script>");
            header("Location: Edit_Pro.php?id=".$Pro_id);
        }else
        {
            echo("<script language='javascript'>alert('Unable to Update Data')</script>");
        }   
    }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Product</title>
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
    <link rel="stylesheet" type="text/css" href="<?= $css ?>Stylesheet.css">


    <!----- JS Here ------->
    <script>
        function goBack() 
        {
            window.location.href = 'Admin_Home.php';
        }
    </script>

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
                                        <li><a  href="../index.php">Home</a></li>
                                        <li><a href="../Menu.php">Menu</a></li>
                                        <li><a href="../about.php">About</a></li>
                                        <li><a href="../contact.php">Contact</a></li>
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
                                <div class="book_btn d-none d-xl-block" style="margin-right: -35px">
                                    <a class="towHomeBtn" href="<?= $adminHome?>">Admin</a>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="towHomeBtn" href="../login.php">Log Out</a>
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
<h2 class="helloAdmin" >Edit Product</h2>
<!-- Product Info start -->

    <?php
        //get product Data
        $this_product = $admin->getProData($id);
    ?>
  <div class="panel panel-default" style="margin-bottom: 50px">
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Product Information <i class="fa fa-caret-down"></i></a></h4>
        </div>
            <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
                <div class="panel-body">
                    
                    <form class="form-horizontal"   method="POST" >
                        
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="Categories">NAME</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="Name" value="<?=$this_product['Pro_Name'] ?>" name="name" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="DESCRIPTION">DESCRIPTION</label>
                             <div class="col-sm-10">          
                                <input type="text" class="form-control" id="pwd" value="<?=$this_product['Pro_Desc'] ?>"  name="desc" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="PRICE">PRICE</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"  value="<?=$this_product['Pro_Price'] ?>"  name="price" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="AVAILABILITY">AVAILABILITY</label>
                          <div class="col-sm-10">
                          <select name = "availability" style="width: 100%;height: 35px ;font-family: 'Bellota';font-size: 20px;color: black;margin-right: 100px ">
                                        <option <?= ($this_product['Pro_Statue'] == 1 ) ? 'selected' : '' ?> >Avaliable </option>
                                        <option  <?= ($this_product['Pro_Statue'] == 0 ) ? 'selected' : '' ?>>Not Avaliable </option>
                            </select>
                          </div>
                        </div>

                      
                           
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10" style="margin-left: 225px">
                           <button type="submit" class="btn btn-default">Save Changes</button>
                          </div>
                        </div>
                  
                    </form>
                    <!-- Back Button --> 
                    <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                          <button  class="btn btn-default"   onclick="goBack()">Back</button>
                          </div>
                    </div>
                </div>                                           
             </div>
   </div>


<!-- Product Info end -->

<?php  require_once $tpl.'footer.php'; ?>
