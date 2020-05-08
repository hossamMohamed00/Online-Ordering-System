<?php include 'init.php'; 
      session_start();

      if(!isset($_SESSION['Id']))
        {
            header("Location: ../login.php");
        }
    
    //if customer press Place order
      if(isset($_POST['submit']))
      {
        $user_Id = $_SESSION['Id'];
        $Payment = $_POST['payment'];//to get Payment Method
        $order = new orders();

        $orderDetails = array();//to hold order details
        //get order Details
        $total_price = $_SESSION['total']; // get the total price from seesion(defined in cart.php)
        $Desc = '';
        
        //loop the data to prepare order description
        foreach($_SESSION['cart'] as $id => $data)
        {   
            //prepare order description for table orders
            $Desc.= $data['qty'] . ' Of '.$data['name'] . ' , ';
            
        }

        //prepare data for Insert
        $data = array("Order_Desc" => $Desc, "Total_Cost" => $total_price , "Cust_Id" => $user_Id , "Payment_Method" => $Payment);
                
        if($order_Id = $order->placeOrder($data))
        { 
            foreach($_SESSION['cart'] as $id => $data)
            {   
                //set data to order_details table
                $orderDetails = array("Order_Id" =>$order_Id , "Pro_Id" => $data['id'] , "Quantity" => $data['qty']);
                $order->setOrderData($orderDetails);

                $orderDetails = array();
                
            }
            //save order id to use it in ThanksPage.php
            $_SESSION['Order_Id'] = $order_Id; 
            //save order Desc to send to mail
            $_SESSION['Order_Desc'] = $Desc;
            unset($_SESSION['cart']);//to empty the cart
            header("Location: ThanksPage.php");
            exit();//to stop the script
        }
      }
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout</title>
    <meta name="description" >
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $img ?>favicon.png">
    <!-- Place favicon.ico in the root directory -->

     <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">

    <!-- CSS here   -->
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
    <!--  ------ JS HERE---------  -->
    <script>
    	
    	function hide(){
			  document.getElementById('MyForm').style.display ='none';
			}
		function show(){
			  document.getElementById('MyForm').style.display = 'block';
			}

    </script>
    <!--  -----------------  -->
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
        <h2 class="helloAdmin" >CheckOut</h2>

    <div class="panel panel-default" >
            
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">  Step 1 : Delivery Details <i class="fa fa-caret-down"></i></a></h4>
        </div>    
        <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
                <div class="panel-body">

                    <form class="form-horizontal" action="ThanksPage.php" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="Categories">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value="<?= $_SESSION['Name'] ?>" name="name" readonly="readonly">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Address</label>
                             <div class="col-sm-10">          
                                <input type="text" class="form-control" id="pwd" value="<?= $_SESSION['Address'] ?>" name="address"  readonly="readonly">
                            </div>
                        </div>


                         <div class="form-group">
                          <label class="control-label col-sm-2" for="description">Phone Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="pro_desc" value="<?= $_SESSION['Phone'] ?>" name="mobile"  readonly="readonly">
                          </div>
                        </div>
                 
                    </form>

                    <form class="form-horizontal" action="<?= $userHome ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default"  style="margin-left: 750px"> Change Delivery Details </button>
                          </div>
                        </div>
                    </form>	
                    

                </div>                                           
             </div>
    </div>    
    <!--add food end-->
    <!-- -----------------------------------------  -->
    <!-- Payment Method start-->

    <div class="panel panel-default"  style="margin-bottom: 50px">
            
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">Step 2 : Payment Method <i class="fa fa-caret-down"></i></a></h4>
        </div>    
        <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
                <div class="panel-body">

                <form class="form-horizontal"   method="post" >
					<div class="col-sm-10">
                		<input type="radio" value="COD" name="payment"  onclick="hide()">
                	
                      	<label  style="margin-top: 15px;margin-bottom: 60px;margin-left: 20px; font-size: 22px;color:black ;font-family: 'Bellota', cursive;">Cash on delivery (COD)</label>
                    </div>

                    
                	<div class="col-sm-10">
                		<input type="radio" value="Credit" checked="checked" name="payment" onclick="show()">

                      	<label  style="margin-top: 15px;margin-bottom: 60px;margin-left: 20px;font-size: 22px;color:black ;font-family: 'Bellota', cursive;">Credit or Debit Cards</label>
                    </div>

                    	<div id ="MyForm">
	                        <img src="<?= $img ?>paypal.png" width="800px" height="80px" style="margin-left: 250px;margin-bottom: 50px">
	                        <div class="form-group">
	                          <label class="control-label col-sm-2" for="Categories">Card number</label>
	                          <div class="col-sm-10">
	                            <input type="text" class="form-control" id="email" placeholder="Enter Card Number Here " name="Card_number" >
	                          </div>
	                        </div>

	                        <div class="form-group">
	                          <label class="control-label col-sm-2" for="pwd">Holder's name </label>
	                             <div class="col-sm-10">          
	                            <input type="text" class="form-control" id="email" placeholder="Enter Card holder's name Here " name="Card_holder_name" >
	                            </div>
	                        </div>


	                         <div class="form-group">
	                          <label class="control-label col-sm-2" for="description">Card verification code</label>
	                          <div class="col-sm-10">
	                            <input type="password" class="form-control" id="pro_desc" placeholder="Enter Card verification code Here" name="Card_Code">
	                          </div>
	                        </div>

	                        <div class="form-group">
	                          <label class="control-label col-sm-2" for="description">Expir date</label>
	                          <div class="col-sm-10" style="width: 30%" >
	                            <input type="date" class="form-control" id="pro_desc" name="Expir_date" >
	                          </div>
	                        </div>
	                        
	                    </div>    	
	                        <div class="form-group">        
	                          <div class="col-sm-offset-2 col-sm-10">
	                           <button type="submit" class="btn btn-default"  style="margin-left:760px;margin-bottom: -30px" name = "submit">Place Order</button>
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
                  
					

                </div>                                           
             </div>
    </div>    

    <!--Payment Method end  -->

    <!-- Footer start  -->
    <?php include $tpl."footer.php"; ?>
