<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

     <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">

    <!-- CSS here -->
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
                                <div class="book_btn d-none d-xl-block">
                                    <a class="towHomeBtn">Admin</a>
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
		<h2 class="helloAdmin" >Welcome Admin</h2>

    <div class="panel panel-default">
            
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">ADD NEW Food <i class="fa fa-caret-down"></i></a></h4>
        </div>    
        <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="margin-top: 25px">
                <div class="panel-body">

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="Categories">Product ID</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Type an unique id " name="Pid" required>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="control-label col-sm-2" for="pwd">Food Name</label>
                         	 <div class="col-sm-10">          
                            	<input type="text" class="form-control" id="pwd" placeholder="Type the food name " name="name" required>
                      		</div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="price">Price</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" placeholder="Type it's price here" name="price" required>
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
                            <input type="file" class="form-control"   name="image" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="price">Availability</label>
                          <div class="col-sm-10">
                            <select name = "Availability" style="width: 100%;height: 35px ;font-family: 'Bellota';font-size: 20px;color: black">
			                      <option >Available</option>
			                      <option >Not Available</option>
                   	 		</select>
                          </div>
                        </div>

                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                    </form>
                </div>                                           
             </div>
    </div>    
    <!--add food end-->

    <!-- All Food start -->
    <div class="panel panel-default">
           <div class="panel-heading" >
                 <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-method">ALL Food <i class="fa fa-caret-down"></i></a></h4>
            </div>

            <div id="collapse-shipping-method" class="panel-collapse collapse in" aria-expanded="true" style="">
                <div class="panel-body">

                <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px; margin-top: -120px"   >
                    <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                        <tr style="background-color:#F54300 ;color:white;"> 
                        	<th style="text-align: center;" >Product Id </th>
                            <th style="text-align: center;"> Name </th>
                            <th style="text-align: center;"> PRICE : $ </th>
                            <th style="text-align: center;"> DESCREPTION </th>
                            <th style="text-align: center;"> DELETE </th>
                            <th style="text-align: center;"> Availability </th>
                        </tr>
                	</thead>


	                <tbody>
	                <tr class = "tabelrow" >
	                	<td style='text-align:center'>1</td>
	                <td  style="padding: 10px;" >

                    <input value="Burger Boys"  name="foodName" type="text"  style="width: 100%;border: 0px" >
 
                    </td>

	                <td style='text-align:center'><input value="10$"  name="price" type="text"  style="width: 35%;border: 0px"></td>
	               
                    <td style='text-align:center'><input value="A lean grilled burger patty on a multi grain bread"  name="desc" type="text"  style="width: 90%;border: 0px">
                    </td>
	                
                    <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
	                 <td>
                        <div class="col-sm-10">
                            <select name = "Availability" style="width: 130%;height: 35px ;font-family: 'Bellota';font-size: 20px;color: black;margin-right: 100px;border: 0px; ">
                                  <option >Available</option>
                                  <option >Not Available</option>
                            </select>
                          </div>
                     </td>  
	                </tr>

	           		 </br>
                <!-- ------------------------>
	           		<tr class = "tabelrow" style="  background-color: white;">
	           			<td style='text-align:center'>2</td>
	                <td style='text-align:center'>Burger Boys</td>
	                <td style='text-align:center'>5$</td>
	                <td style='text-align:center'>A lean grilled burger patty on a multi grain bread bun with light buffalo sauce and light cheddar cheese</td>
                    <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                	 <td style='text-align:center'>Non Avaliable</td>  
	                </tr>

	                </br>

	                <tr class = "tabelrow" style="  background-color: white;">
	                	<td style='text-align:center'>3</td>
	                <td style='text-align:center'>Burger Bizz</td>
	                <td style='text-align:center'>3$</td>
	                <td style='text-align:center'>A lean grilled burger patty wrapped in fresh whole romaine lettuce, light buffalo sauce and light cheddar cheese</td>
                    <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                	 <td style='text-align:center'>NonAvaliable</td>  
	                </tr>

	           		 </br>

	                
	                <tr class = "tabelrow" style="  background-color: white;">
	                	<td style='text-align:center'>4</td>
	                <td style='text-align:center'>Crackles Burger</td>
	                <td style='text-align:center'>12$</td>
	                <td style='text-align:center'>Triple the beef, triple the taste , triple the experience, triple the cheese</td>
                    <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
	                 <td style='text-align:center'>Avaliable</td>  
	                </tr>

	           		 </br>

	                
	                <tr class = "tabelrow" style="  background-color: white;">
	                	<td style='text-align:center'>5</td>
	                <td style='text-align:center'>Bull Burgers</td>
	                <td style='text-align:center'>7$</td>
	                <td style='text-align:center'>Crispy mushroom and bacon with cheddar cheese and creamy buffalo sauce, drizzled with smokey bbq sauce</td>
                    <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
	                 <td style='text-align:center'>Avaliable</td>  
	                </tr>

	           		 </br>

	                
	                <tr class = "tabelrow" style="  background-color: white;">
	                	<td style='text-align:center'>6</td>
	                <td style='text-align:center'>Rocket Burgers</td>
	                <td style='text-align:center'>15$</td>
	                <td style='text-align:center'>The quintessence of burger made with our signature buffalo sauce and clean cut beef patties</td>
                    <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
	                 <td style='text-align:center'>Avaliable</td>  
	                </tr>


	           		 </br>
	                
	                <tr class = "tabelrow" style="  background-color: white;">
	                	<td style='text-align:center'>7</td>
    	                <td style='text-align:center'>Smokin Burger</td>
    	                <td style='text-align:center'>11$</td>
    	                <td style='text-align:center'>Mexican jalapeños, spicy buffalo sauce, and cheddar cheese</td>
                        <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
    	                <td style='text-align:center'>Avaliable</td>  
	                </tr>

	           		 </br>

           		   <tr class = "tabelrow" style="  background-color: white;" >
               		   	<td style='text-align:center'>8</td>
    	                <td style='text-align:center'>Crackles Burger</td>
    	                <td style='text-align:center'>8$</td>
    	                <td style='text-align:center'>Jalapeño cheddar bites on a burger patty with creamy buffalo sauce</td>
                        <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
    	                 <td style='text-align:center'>Non Avaliable</td>  
	                </tr>

	           		 </br>
                     
        			</tbody>
    			</TABLE>

                     </br> 
                    <div class="form-group">        
                              <div class="col-sm-offset-2 col-sm-10" style="margin-left: 650px">
                               <button type="submit" class="btn btn-default">Save Changes</button>
                    </div>
                </div>

   		 	</div>
    	</div>
    </div>
<!--  All Food end -->

<!--All User start -->
<!--                                All users Table                             -->
    <div class="panel panel-default">
         <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="true">All USERS <i class="fa fa-caret-down"></i></a></h4>
        </div>

        <div id="collapse-payment-method" class="panel-collapse collapse in" aria-expanded="true" style="">
            <div class="panel-body">

                    <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px; margin-top: -120px"   >
                    <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                        <tr style="background-color:#F54300 ;color:white;"> 
                        		<th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;width: 20%">User Name</th>
                                <th style="text-align: center;">Password</th>
                                <th style="text-align: center;width:16%">Phone</th>
                                <th style="text-align: center;width:30%">Address</th>
                                <th style="text-align: center;"> DELETE </th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr class = "tabelrow" > 
                            	<td style='text-align:center'>1</td>
                            <td style='text-align:center'>Hossam</td>
                            <td style='text-align:center'>hossam@mail.com</td>
                            <td style='text-align:center'>123</td>
                            <td style='text-align:center'>01156826636</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                            

                        	<tr class = "tabelrow" > 
                        		<td style='text-align:center'>2</td>
                            <td style='text-align:center'>Safa</td>
                            <td style='text-align:center'>safa@mail.com</td>
                            <td style='text-align:center'>456</td>
                            <td style='text-align:center'>Non</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                        	</br>

                        	<tr class = "tabelrow" > 
                        		<td style='text-align:center'>3</td>
                            <td style='text-align:center'>Ebram</td>
                            <td style='text-align:center'>ebram@mail.com</td>
                            <td style='text-align:center'>789</td>
                            <td style='text-align:center'>Non</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                        	</br>

                        	<tr class = "tabelrow" > 
                        		<td style='text-align:center'>4</td>
                            <td style='text-align:center'>Shrouk</td>
                            <td style='text-align:center'>shrouk@mail.com</td>
                            <td style='text-align:center'>153</td>
                            <td style='text-align:center'>Non</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                        	</br>

                        	<tr class = "tabelrow" > 
                        		<td style='text-align:center'>5</td>
                            <td style='text-align:center'>Esraa</td>
                            <td style='text-align:center'>esraa@mail.com</td>
                            <td style='text-align:center'>486</td>
                            <td style='text-align:center'>Non</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                        	</br>

                        	<tr class = "tabelrow" > 
                        		<td style='text-align:center'>6</td>
                            <td style='text-align:center'>Eslam</td>
                            <td style='text-align:center'>eslam@mail.com</td>
                            <td style='text-align:center'>183</td>
                            <td style='text-align:center'>Non</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                        	</br>

                        	<tr class = "tabelrow" > 
                        		<td style='text-align:center'>7</td>
                            <td style='text-align:center'>Admed</td>
                            <td style='text-align:center'>esraa@mail.com</td>
                            <td style='text-align:center'>154</td>
                            <td style='text-align:center'>01164541578</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                        	</br>

                        	<tr class = "tabelrow" > 
                        		<td style='text-align:center'>8</td>
                            <td style='text-align:center'>Mohamed</td>
                            <td style='text-align:center'>mohamed@mail.com</td>
                            <td style='text-align:center'>114</td>
                            <td style='text-align:center'>01015484154</td>
                            <td style='text-align:center'>Cairo</td>
                            <td style="width: 7%"><a ><img src="img/drop-icon.png" title="delete User" width="35px" style="margin-left: 5px;"></a>
                            </tr>
                        	</br>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>





<!--All User end -->

<!-- All Orders start -->

  <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">ORDERS <i class="fa fa-caret-down"></i></a></h4>
        </div>
	        <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="true" style="">
	            <div class="panel-body">

                <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px; margin-top: -90px"   >
                    <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                        <tr style="background-color:#F54300 ;color:white;"> 
			                    <th style="text-align: center;">Order ID</th>
			                    <th style="text-align: center;">Order Desc.</th>
			                    <th style="text-align: center;">Customer ID</th>
			                    <th style="text-align: center;">Date</th>
			                    <th style="text-align: center;">Total Cost</th>
			                    <th style="text-align: center;">Statue</th>

			                </tr>
			            </thead>

		                <tbody>

			                <tr class = "tabelrow">
			                <td style='text-align:center'>1</td>
			                <td style='text-align:center'>2 of Po(2)</td>
			                <td style='text-align:center'>7</td>
			                <td style='text-align:center'>25/3/2020</td>
			                <td style='text-align:center'>30$</td>
                             <td style="width: 19%">
                                <div class="col-sm-10" style="padding: px">
                                    <select name = "Statue" style="width: 120%;height: 35px ;font-family: 'Bellota';font-size: 20px;color: black;border: 0px; ">
                                          <option >Delivered</option>
                                          <option >Yet to be delivered</option>
                                    </select>
                                </div>
                            </td>
			                </tr>
			            	</br>

			            	<tr class = "tabelrow">
			                <td style='text-align:center'>2</td>
			                <td style='text-align:center'>3 of Po(5)</td>
			                <td style='text-align:center'>8</td>
			                <td style='text-align:center'>31/3/2020</td>
			                <td style='text-align:center'>95$</td>
			                <td style='text-align:center'>delivered</td>
			                </tr>
			            	</br>

			            	<tr class = "tabelrow">
			                <td style='text-align:center'>3</td>
			                <td style='text-align:center'>1 of Po(3) &1 of Po(7) </td>
			                <td style='text-align:center'>8</td>
			                <td style='text-align:center'>25/3/2020</td>
			                <td style='text-align:center'>47$</td>
			                <td style='text-align:center'>Delivered</td>
			                </tr>
			            	</br>

			            	<tr class = "tabelrow">
			                <td style='text-align:center'>4</td>
			                <td style='text-align:center'>1 of Po(4)</td>
			                <td style='text-align:center'>7</td>
			                <td style='text-align:center'>27/3/2020</td>
			                <td style='text-align:center'>20$</td>
			                <td style='text-align:center'>Delivered</td>
			                </tr>
			            	</br>

			            	<tr class = "tabelrow">
			                <td style='text-align:center'>5</td>
			                <td style='text-align:center'>4 of Po(2) & 2 of Po(3)</td>
			                <td style='text-align:center'>7</td>
			                <td style='text-align:center'>25/3/2020</td>
			                <td style='text-align:center'>103$</td>
			                <td style='text-align:center'> delivered</td>
			                </tr>
			            	</br>

			            </tbody>	
	                </table>

                    </br> 
                    <div class="form-group">        
                              <div class="col-sm-offset-2 col-sm-10" style="margin-left: 650px">
                               <button type="submit" class="btn btn-default">Save Changes</button>
                           </div>
                    </div>


	            </div>

			</div>
   </div>


<!-- All orders end -->

    <!-- -----------------------------------------  -->

    <!-- Footer start  -->
    <footer class="footer" style="margin-top: 120px">
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