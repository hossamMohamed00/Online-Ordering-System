<?php 
    include 'init.php' ;
    session_start();
    //To prevent opening this page directly
    if(!isset($_SESSION['Id']))
    {
        header("Location: ../login.php");
    }

    //to show product added or not added
    if(!isset($_SESSION['Stat']))
    {
    $_SESSION['Stat'] = '';
    }
?>
<!doctype html>
<html class="no-js" lang="zxx" xmlns:font-family="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Account</title>

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


    <!--          JS HERE           -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- Filter Order history by date -->
    <script>
        function filterDate()
        {
            var from_date = document.getElementById("from_date").value
            var to_date = document.getElementById("to_date").value

            if(from_date !== '' && to_date !== '')
            {
                $.ajax({
                    url:"filterOrders.php",
                    method:"POST",
                    data:{from_date:from_date, to_date:to_date},
                    success:function(data)
                    {
                        $('#order_table').html(data);
                    }
                });
            }
            else
            {
                alert("Please Select Date" );
            }
        }
    </script>

    <!-- Filter All User  -->
    <script> 
        function filterUsers()
        {
            var key = document.getElementById("search_user").value

            if(key !== '')
            {
                $.ajax({
                    url:"filterUsers.php",
                    method:"POST",
                    data:{search:key},
                    success:function(data)
                    {
                        $('#users_table').html(data);
                    }
                });
            } 
            else
            {
                alert("Please Enter Somthing To Search For" );
            }
        }
    </script> 

    <!-- Filter Products -->
    <script >
        function filterProducts()
        {
            var key = document.getElementById("Search_Product").value

            if(key !== '')
            {
                $.ajax({
                    url:"filterProducts.php",
                    method:"POST",
                    data:{search:key},
                    success:function(data)
                    {
                        $('#products_table').html(data);
                    }

                });
            }else
            {
                alert("Please Enter Somthing To Search For");
            }
        }

    </script>

    <!--Delete Confirm   -->

    <script>
        function DELETE_USER (id)
        {
            if(confirm("Are you sure for this step!"))
            {
                $.ajax({
                    url:"delet_User.php",
                    type: "POST",
                    data:{user_id:id},
                    success:function(data){
                        $('#user'+id).hide();//to hide this row from the table without refresh the page
                    }
                });
            }
        }
    </script>

    <script>
        function DELETE_PRODUCT (id)
        {
            if(confirm("Are you sure for this step!"))
            {
                $.ajax({
                    url: "deletePro.php",
                    type: "POST",
                    data:{pro_id:id},
                    success:function(data)
                    {
                        $('#pro_'+id).hide();//to hide this row from the table without refresh the page
                    }
                });
            }
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
                                <div class="book_btn d-none d-xl-block">
                                    <a class="towHomeBtn">Admin</a>
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

<!-- Add Food Start --> 
<h2 class="helloAdmin" >Welcome <?=$_SESSION['Name'] ?></h2>

<div class="panel panel-default">
    <!-- Header Title -->   
    <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">ADD NEW Food <i class="fa fa-caret-down"></i></a></h4>
    </div>  

    <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
        <div class="panel-body">

            <form class="form-horizontal" action="addProduct.php" method="POST" enctype="multipart/form-data">
                        
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Food Name</label>

                 	<div class="col-sm-10">          
                    	<input type="text" class="form-control" id="name" placeholder="Type the food name " name="foodName"  required>
              		</div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="price">Price</label>

                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="price" placeholder="Type it's price here" name="price" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="description">Description</label>
                    
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pro_desc" placeholder="Type a brief description" name="pro_desc" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Photo Of Food</label>
                    
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="Special">Special</label>
                          
                    <div class="col-sm-10">
                        <select name = "Special" style="width: 100%;height: 35px ;font-family: 'Bellota';font-size: 20px;color: black">
		                      <option >Yes</option>
		                      <option selected>No</option>
               	 		</select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="price">Availability</label>
                          
                    <div class="col-sm-10">
                        <select name = "Availability" style="width: 100%;height: 35px ;font-family: 'Bellota';font-size: 20px;color: black">
			                      <option selected>Available</option>
			                      <option >Not Available</option>
                   	    </select>
                    </div>
                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                           <p class="login_p" style="color: red;margin-left:-190px;margin-top: 20px;font-size: 50px ">

                            <?= $_SESSION['Stat'];//To Print Food Added Done Or Not 
                            unset($_SESSION['Stat']);//To Remove this state if Refresh the page ,, Try it !
                            ?>
                               
                           </p>
                    </div>
                </div>
            </form>
        </div>                                           
     </div>
</div>    
<!--Add food End-->

<!-- All Food start -->

<?php 
    $admin = new Admin();
    $All_Products = $admin->getAllProducts();
?>
<div class="panel panel-default">
    <div class="panel-heading" >
         <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-method" >ALL Food <i class="fa fa-caret-down"></i></a></h4>
    </div>

    <div id="collapse-shipping-method" class="panel-collapse collapse in" aria-expanded="true" >

        <!-- Search Box to Search for Products -->
        <div style="padding: 15px;margin-left: 35px">
            <div class="form-group" style="width: 90%;margin-bottom: -20px">
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id ="Search_Product" placeholder="Type To Search [ONLY SEARCH BY ID , NAME , AVAILABILITY] , Or type [ All ] to show all Products" name="search"  >
                </div>  

                <div class="col-sm-5"  style="margin-top: -50px;margin-left: 650px;">
                    <button type="submit" onclick="filterProducts()" class="btn btn-default" style="height: 30px">Filter</button>
                </div>  
            </div>   
        </div>

        <div class="panel-body" id = "products_table">
            <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px"   >
                <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                    <tr style="background-color:#F54300 ;color:white;"> 

                    	<th style="text-align: center;width: 3%" >PRODUCT ID </th>
                        <th style="text-align: center;width: 20%"> NAME </th>
                        <th style="text-align: center;"> DESCREPTION </th>
                        <th style="text-align: center;width: 10%"> PRICE : $</th>
                        <th style="text-align: center;width: 11%"> AVAILABILITY </th>
                        <th style="text-align: center;width: 4%"> SPECIAL </th>
                        <th style="text-align: center;width: 5%"> EDIT </th>
                        <th style="text-align: center;width: 4%"> DELETE </th>

                    </tr>
            	</thead>
                <?php
                    if(!empty($All_Products))
                    {
                        //loop the data to put it on the table
                        foreach($All_Products as $row)
                        {
                ?>
                <tbody>
                        <tr class = "tabelrow" id = "pro_<?= $row['Pro_Id']?>" >

                            <td style='text-align:center;'><?= $row['Pro_Id']?></td>
                            
                            <td  style="padding: 10px;" >
                            <?= $row['Pro_Name']?>
                            </td>

                            <td style='text-align:center'> <?= $row['Pro_Desc']?> </td>

                            <td style='text-align:center;' > <?= $row['Pro_Price']?>$</td>
                            
                            <td>
                                <div class="col-sm-10">
                                    <?= ($row['Pro_Statue'] == 1)  ? 'Avaliable' : 'Not Avaliable'; ?>
                                </div>
                            </td> 

                            <td style='text-align:center'> <?= ($row['Special']) ? 'Yes' : 'No' ?> </td>

                            <td style="width: 7%"><a href="Edit_Pro.php?id=<?=$row['Pro_Id']; ?>"><img src="<?= $img ?>edit.png" title="Edit this Product" width="55px" style="margin-left: 5px;"></a>

                            <td style="width: 7%"><a  onclick="DELETE_PRODUCT(<?= $row['Pro_Id'];?> )" ><img src="<?= $img ?>drop-icon.png" title="Delete This Product" width="35px" style="margin-left: 5px;"></a>

                        </tr>
               <?php
                    }//for loop end
                 }else
                 {
                ?>
                <tbody>
                    <tr class = "tabelrow" > 
                        <td colspan="7" >NO PRODUCTS YET</td>       
                    </tr>
                    <?php
                     }
                    ?>
                </tbody>  
            </table>
	 	</div>
	</div>
</div>
<!--  All Food end -->

<!--All User start -->

<?php 
    $admin = new Admin();
    $users = $admin->getUsers();//Return All Users    
?>

<!--                                All users Table                             -->

<div class="panel panel-default">
    <!-- Header Title -->
    <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="true">All USERS <i class="fa fa-caret-down"></i></a></h4>
    </div>

    <div id="collapse-payment-method" class="panel-collapse collapse in" aria-expanded="true" style="">
         <!-- Search Box to Search User -->
        <div style="padding: 15px;margin-left: 35px">
            <div class="form-group" style="width: 90%;margin-bottom: -20px">
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id ="search_user" placeholder="Type To Search [ONLY SEARCH BY ID , NAME , USER TYPE] , Or type [ All ] to show all" name="search"  >
                </div>  

                <div class="col-sm-5" h style="margin-top: -50px;margin-left: 650px;">
                    <button type="submit" onclick="filterUsers()" class="btn btn-default" style="height: 30px">Filter</button>
                </div>  
            </div>   
        </div>

        <div class="panel-body" id = "users_table">
            <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px" >
                <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">

                    <tr style="background-color:#f54300 ;color:white;" >

                        <th style="text-align: center;">Id</th>
                        <th style="text-align: center;">Type</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;width: 20%">User Name</th>
                        <th style="text-align: center;width:10%">Phone</th>
                        <th style="text-align: center;width:20%">Address</th>
                        <th style="text-align: center;width:22%">Email</th>
                        <th style="text-align: center;"> DELETE </th>

                    </tr>
                </thead>
                <?php
                    if(!empty($users))
                    {
                        //loop the data 
                        foreach($users as $row)
                        {?>
                <tbody>
                    <tr class = "tabelrow" id = "user<?= $row['Id'] ?>"> 

                        <td style='text-align:center'><?= $row['Id'] ?></td>
                        <td style='text-align:center'><?= ($row['User_Type_Id'] == 1) ? 'Admin' : 'User' ?></td>
                        <td style='text-align:center'><?= $row['Name'] ?></td>
                        <td style='text-align:center'><?= $row['User_Name'] ?></td>
                        <td style='text-align:center'><?= $row['Phone'] ?></td>
                        <td style='text-align:center'><?= $row['Address'] ?></td>
                        <td style='text-align:center'><?= $row['Email'] ?></td>
                        <td style="width: 7%"><a  onclick='DELETE_USER(<?= $row['Id']; ?>)' ><img src="<?= $img ?>drop-icon.png" title="" width="35px" style="margin-left: 5px;"></a>
                    
                    </tr>
                    <?php
                        }
                     }else
                     {

                    ?>
                <tbody>
                    <tr class = "tabelrow" > 
                        <td colspan="7" >NO USERS</td>       
                    </tr>
                    
                    <?php
                     }
                    ?>        
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--All User end -->

<!-- Wating Orders start -->
<?php 
    $admin = new Admin();
    // 
    $waiting_Orders = $admin->getWatingOrders();
?>

<div class="panel panel-default" >
    <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Wating Orders<i class="fa fa-caret-down"></i></a></h4>
    </div>

    <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="true" >
        <div class="panel-body" >

            <?php
            if(!empty($waiting_Orders))
            { 
            ?>
            <p style="color: black" class="login_p"> * Here You can Show Waiting Orders and change it's statue from dropdown list * </p>
            <form action="ChangeOrderStatue.php" method="POST">
            <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px" >
                <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                    <tr style="background-color:#F54300 ;color:white;"> 
                        <th style="text-align: center;width: 5px">Order ID</th>
                        <th style="text-align: center;width: 5px">Customer ID</th>
	                    <th style="text-align: center;font-size: 35px">Order Description</th>
	                    <th style="text-align: center;">Date</th>
	                    <th style="text-align: center;">Total Cost</th>
                        <th style="text-align: center;">Payment</th>
	                    <th style="text-align: center;">Statue</th>
	                </tr>
	            </thead>
                    <?php  
                        foreach($waiting_Orders as $row)
                        {?>
                    
                <tbody>
	                <tr class = "tabelrow" >
                        <td style='text-align:center'><?= $row['Order_Id'] ?></td>
                        <td style='text-align:center'><?= $row['Cust_Id'] ?></td>
                        <td style='text-align:center'><?= $row['Order_Desc']  ?></td>
                        <td style='text-align:center'><?= $row['Order_Date'] ?></td>
                        <td style='text-align:center'><?= $row['Total_Cost'] ?> $</td>
                        <td style='text-align:center'><?= $row['Payment_Method'] ?> </td>
                        <td style="width: 13%">
                            <div class="col-sm-10" >
                                <select name = "Statue[]" id = "Statue[]"  style="width: 120%;height: 35px ;font-family: 'Bellota';font-size: 20px;color: black;border: 0px; ">
                                        <option value="Waiting" >Waiting</option>
                                        <option value="Delivered" >Delivered</option>
                                        <option value="Canceled" >Canceled</option>
                                </select>
                            </div>
                    	</td>
	                </tr>
                    <?php
                     }//loop end
                    ?> 
                </tbody>	
            </table>
            <!-- Save Changes Button Hre --> 
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10" style="margin-left: 650px">
                    <button type="submit" onclick="Change_Statue()" class="btn btn-default">Save Changes</button>
                </div>
            </div>
        </div>
        </form>
    </div>  
        <?php 
            }//if End
            else{
            ?>
                <h4 style="color: black;margin-left: 500px">No Waiting Orders For Now</h4>
         </div>
    </div>
    <?php
        }//else end
    ?>
    </form>
</div>

<!-- Waiting orders end -->

<!-- All Orders start -->

<div class="panel panel-default" style="margin-bottom: 50px ">
    <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">ORDERS History<i class="fa fa-caret-down"></i></a></h4>
    </div>
    <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="true" >
        <!-- Filter Orders By Date -->
        <div style="padding: 15px;margin-left: 35px " >
            <div class="form-group" style="width: 20%;margin-bottom: -20px;margin-left: 100px">
                <div class="col-sm-10" style="margin-left: -40px">
                    <input type="date" data-date="" data-date-format="YYYY MMMM DD" class="form-control" id ="from_date" name="from_date"  >
                </div>

                <div class="col-sm-10" style="margin-top: -35px;margin-left: 200px">
                    <input type="date" class="form-control" id ="to_date"  name="to_date" >
                </div>

                <div class="col-md-5" h style="margin-top: -50px;margin-left: 130px;">
                    <button type="submit" onclick="filterDate()" name = "filter" id="filter"  class="btn btn-default" style="height: 5px;width: 130px" >Filter Table </button>
                </div>
            </div>
        </div>

        <div class="panel-body" id = "order_table">
            <?php

            $admin = new Admin ();

            $Finishing_Orders = $admin->getAllOrders();
            if(!empty ($Finishing_Orders))
            {
                
            ?>

        <table border='1' style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px ;"   >
            <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                <tr style="background-color:#F54300 ;color:white;"> 

                    <th style="text-align: center;width: 5px">Order ID</th>
                    <th style="text-align: center;width: 5px">Customer ID</th>
                    <th style="text-align: center;font-size: 35px">Order Description</th>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Total Cost</th>
                    <th style="text-align: center;">Payment</th>
                    <th style="text-align: center;">Statue</th>

                </tr>
            </thead>
            <tbody>
            <?php
            //loop the data
            foreach( $Finishing_Orders as $row )
            {
            ?>
                <tr class = "tabelrow">
                    <td style='text-align:center'><?=$row['Order_Id']?></td>
                    <td style='text-align:center'><?=$row['Cust_Id']?></td>
                    <td style='text-align:center'><?=$row['Order_Desc']?></td>
                    <td style='text-align:center'><?=$row['Order_Date']?></td>
                    <td style='text-align:center'><?=$row['Total_Cost']?> $</td>
                    <td style='text-align:center'><?= $row['Payment_Method'] ?> </td>
                    <td style='text-align:center'><?=$row['Order_Statue']?></td>
                </tr>
                <?php
                }// llop end
            ?>
            </tbody>	
        </table>
        <!-- Generate pdf button -->
        <form method="POST" action="Generate_Pdf.php">
            <div class="form-group" >
                <div class="col-md-5" h style="margin-left: 750px;">
                    <button type="submit"  name = "create_pdf" id="create_pdf"  class="btn btn-default" style="height: 5px;width: 180px" >Generate Report </button>
                </div>
            </div>
        </form>           
            <?php
            }//if end
                else{
                ?>
            <h4 style="margin-left: 500px; margin-top: 50px">NO ORDERS TO SHOW</h4>
                <?php
                }
                ?>
        </div>

        

	</div>
</div>

<!-- All orders end -->

    <!-- -----------------------------------------  -->

    <?php include $tpl."footer.php"; ?></body>
