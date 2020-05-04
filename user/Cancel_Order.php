<?php
    require 'init.php';
    session_start();
    //To prevent opening this page directly
    if(!isset($_SESSION['Id']))
    {
        header("Location: login.php");
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $order = new orders();

        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

        if($order->changeStatue($id , "Canceled"))
        {
            header("Location: User_Home.php");
            exit;
        }
    }
    else
    {
        echo("<script language='javascript'>alert('Unable to access this page directly')</script>");
        
    }
