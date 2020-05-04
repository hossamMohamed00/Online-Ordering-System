<?php
    require 'init.php' ;

    $arr=$_POST['Statue'];
	
    $order = new Orders();
    $waiting_Orders = $order->getWatingOrders();
    $Id =  array();
    // for each to puch all id to arr ID
    foreach ($waiting_Orders as $Row ) {
    	array_push($Id, $Row['Order_Id']);
         }
         // to know num of arr
    $number=count($Id);
    // for loop to change statue of all id in the array
    for ($i=0; $i <$number ; $i++) { 
    	$Bol=$order->changeStatue($Id[$i],"$arr[$i]");
        
    	header("location:".$adminHome);
    	
    }	
  ?>


