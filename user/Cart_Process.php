<?php
    include 'init.php';
    session_start();

   if(isset($_GET['id']))
   {
      $flage = 0 ;
      $i = 0;
      $id = $_GET['id'];

      if(isset($_SESSION['cart']))
      {
        //check if this product already exist on cart or not
       for ($i = 0 ; $i < sizeof( $_SESSION['cart']); $i++)
        {
          if($_SESSION['cart'][$i]['id'] == $id)
          {
            $flage = 1 ;
            break;
          }
         
        }
      }
       

       if( $flage == 0)
       {
        $admin = new Admin();
        $pro_data = $admin->getProData($id);

        //add product data to session
        $_SESSION['cart'][] = array('id'=>$pro_data['Pro_Id'] ,
                                        'name'=>$pro_data['Pro_Name'],
                                        'price'=>$pro_data['Pro_Price'],
                                        'desc'=>$pro_data['Pro_Desc'] , 
                                        'qty'=>1 );
       }
       else 
       {
         $_SESSION['cart'][$i]['qty'] ++ ;
         
       }

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
        }
        header("Location: ../Cart.php");
        exit();

   }
