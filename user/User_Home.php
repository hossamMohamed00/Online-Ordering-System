<?php 
    require 'init.php' ;
    session_start();
    if(!isset($_SESSION['Id']))
    {
        header("Location: ../login.php");
    }

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= $img ?>favicon.png">
    <!-- Place favicon. in the root directory -->

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

    <!--  JS HERE  -->
    <!-- JS Here-->
    <script>
        function Cancel_Confirm (id)
        {
            if(confirm("You Are Going To Cancel This Order , are you sure?"))
            {
                window.location.href = 'Cancel_Order.php?id= ' + id ;
                return true;
            }
            return false;
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
                                <div class="book_btn d-none d-xl-block" >
                                     <a class="towHomeBtn" href="../Cart.php" >My_Cart</a>
                                </div>
                                <div class="book_btn d-none d-xl-block" style="margin-right: 1px">
                                    <a class="towHomeBtn" href="User_Home.php">My Account</a>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="towHomeBtn" href="../logout.php">Log Out</a>
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
<h2 class="helloAdmin" >Welcome <?=$_SESSION['Name'] ?></h2>

<!-- User Info start -->
<div class="panel panel-default" >
    <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">User Information <i class="fa fa-caret-down"></i></a></h4>
    </div>

    <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
        <div class="panel-body">
                    
            <form class="form-horizontal" action="Edit_User.php?id=<?=$_SESSION['Id'] ?>" method="POST" >
                        
                <div class="form-group">
                  <label class="control-label col-sm-2" for="Categories">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" value="<?= $_SESSION['Name'] ?>" name="name" require>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="UserName">UserName</label>

                     <div class="col-sm-10">          
                        <input type="text" class="form-control" id="pwd" value="<?= $_SESSION['User_Name'] ?>" readonly="readonly" name="username" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="Password">Password</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?= $_SESSION['Password'] ?>"  name="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="Phone">Phone Number</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Phone" value="<?= $_SESSION['Phone'] ?>" name="phone" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="Address">Address</label>
  
                    <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $_SESSION['Address'] ?>" name="address" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email</label>
  
                    <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $_SESSION['Email'] ?>" name="email" required>
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

<!-- Pending Orders start -->
<?php 
    $user = new User();
    // 
    $waiting_Orders = $user->getWatingOrdersForUser($_SESSION['Id']);
?>

<div class="panel panel-default" >
    <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Pending Orders<i class="fa fa-caret-down"></i></a></h4>
    </div>
    <div id="collapse-checkout-confirm1" class="panel-collapse collapse in" aria-expanded="true" >
        <div class="panel-body">

            <?php
                if(!empty($waiting_Orders))
                { 
            ?>
            <p style="color: black" class="login_p"> * Here You can Show Your Pending Orders and Cancel it if you want * </p>

            <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px" >
                <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                    <tr style="background-color:#F54300 ;color:white;"> 
                        <th style="text-align: center;width: 5px">Order ID</th>
	                    <th style="text-align: center;font-size: 35px">Order Description</th>
	                    <th style="text-align: center;">Date</th>
	                    <th style="text-align: center;">Total Cost</th>
                        <th style="text-align: center;">Payment</th>
                        <th style="text-align: center;">Statue</th>
                        <th style="text-align: center;">Cancel</th>
	                </tr>
	            </thead>
                    <?php  

                    foreach($waiting_Orders as $row)
                    {?>
                    
                <tbody>
	                <tr class = "tabelrow">
                        <td style='text-align:center'><?= $row['Order_Id'] ?></td>
                        <td style='text-align:center'><?= $row['Order_Desc']  ?></td>
                        <td style='text-align:center'><?= $row['Order_Date'] ?></td>
                        <td style='text-align:center'><?= $row['Total_Cost'] ?> $</td>
                        <td style='text-align:center'><?= $row['Payment_Method'] ?></td>
                        <td style="width: 13%">Pending</td>
                        <td> 
                            <!-- Add onClick to show confirm msg before cancel order -->
                            <a  onclick="Cancel_Confirm(<?= $row['Order_Id']; ?>)">
                                <img src="<?= $img ?>cancel_order.png" width=50px title="Cancel This Order">
                            </a>
                        </td>
	                </tr>
                    <?php
                     }//loop end
                    ?> 
                </tbody>	
            </table>
            <?php 
            }//if End
            else{
            ?>
                <h4 style="color: black;margin-left: 500px">No Pending Orders For Now</td>  
            <?php
                }//else end
            ?>                   
        </div>
    </div>
</div>

<!-- Pending Orders end -->

<!-- All Users Orders start -->

<div class="panel panel-default" style="margin-bottom: 50px;">
    <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">ORDERS History <i class="fa fa-caret-down"></i></a></h4>
    </div>

    <div id="collapse-checkout-confirm1" class="panel-collapse collapse in" aria-expanded="true" >
        <div class="panel-body">

            <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px; margin-top: 0px" >

                <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">

                    <tr style="background-color:#F54300 ;color:white;"> 
                        <th style="text-align: center;">Order ID</th>
                        <th style="text-align: center;">Order Desc.</th>
                        <th style="text-align: center;">Date</th>
                        <th style="text-align: center;">Total Cost</th>
                        <th style="text-align: center;">Payment</th>
                        <th style="text-align: center;">Statue</th>
                    </tr>

                </thead>

                <tbody>  
                 <?php
                    $user_id = $_SESSION['Id'];
                    $user = new User();

                    $all_orders = $user->getOrders($user_id);
                    
                    if(!empty($all_orders))
                    {
                         //loop the data 
                         foreach($all_orders as $row)
                    {
                ?>  

                    <tr class = "tabelrow">
                            <td style='text-align:center'><?= $row['Order_Id'] ?></td>
                            <td style='text-align:center'><?= $row['Order_Desc'] ?></td>
                            <td style='text-align:center'><?= $row['Order_Date'] ?></td>
                            <td style='text-align:center'><?= $row['Total_Cost'] ?> $</td>
                            <td style='text-align:center'><?= $row['Payment_Method'] ?></td>
                            <td style='text-align:center'><?= $row['Order_Statue'] ?></td>
                    </tr>
                    <?php
                        }
                        }else{
                    ?>
                    <div>
                        <tr class = "tabelrow" > 
                            <td colspan="7" >NO ORDERS TO SHOW</td>       
                        </tr>
                    </div>
                    <?php
                        }
                   ?>

                </tbody>    

            </table>
        </div>
    </div>
</div>


<!-- All User orders end -->

    <!-- -------------Require Footer----------------------------  -->

    <?php require $tpl."footer.php"; ?>
