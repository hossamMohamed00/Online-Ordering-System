<?php

    require 'init.php';
    session_start();
    //To prevent opening this page directly
    if(!isset($_SESSION['Id']))
    {
        header("Location: login.php");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $product = new products();

        $id = $_POST['pro_id'];

        $product->deleteProduct($id);
    }
    else
    {
        echo("<script language='javascript'>alert('Unable to access this page directly')</script>");
        
    }
