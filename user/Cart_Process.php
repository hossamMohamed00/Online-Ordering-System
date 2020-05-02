<?php
    include 'init.php';
    session_start();

   if(isset($_GET['id']))
   {
       $id = $_GET['id'];
       $pro = new products();
       $pro_data = $pro->getProduct($id);

        //add product data to session
       $_SESSION['cart'][] = array('id'=>$pro_data['Pro_Id'] ,
                                        'name'=>$pro_data['Pro_Name'],
                                        'price'=>$pro_data['Pro_Price'],
                                        'desc'=>$pro_data['Pro_Desc'] , 
                                        'qty'=>1 );

        header("Location: ../Cart.php");
   }
   else if(isset($_GET['Did']))
   {
       //remove this product from the session and back to the cart
       $id = $_GET['Did'];
       unset ($_SESSION['cart'][$id]);
       header("Location: ../Cart.php");
   }
   //this if statement to check if Re_calculate button used
   else if (!empty($_POST))
   {
        //loop the cart content  and set the qty value
        foreach($_POST as $id => $val)
        {
            $_SESSION['cart'][$id]['qty']= $val;
            header("Location: ../Cart.php");
        }
   }
