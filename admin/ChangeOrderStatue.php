<?php
    require 'init.php' ;
    session_start();

     //To prevent opening this page directly
     if(!isset($_SESSION['Id']))
     {
     header("Location: login.php");
     }

     if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $admin = new Admin();

          $Stat=$_POST['Statue'];//To get All Statues for the orders
               
          $waiting_Orders = $admin->getWatingOrders();//Return All Orders that have Statue (Waiting)

          $Orders_Id =  array();//Declare Array to hold all waiting order Id

          // foreach to puch all Orders_id to arr Orders_ID
          foreach ($waiting_Orders as $Row )
          {
               //array_push() function is used to insert new items at the end of an array
               array_push($Orders_Id, $Row['Order_Id']);
          }

          // Get The Size of the Array
          $Size=count($Orders_Id);

          // for loop to change statue of all Orders_id in the array
          for ($i = 0; $i < $Size ; $i++) 
          { 
               $admin->changeStatue($Orders_Id[$i],"$Stat[$i]");
          }
          //Navigate Admin Home Page
          header("location:".$adminHome);
          exit;

     }
  ?>