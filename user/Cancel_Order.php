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
        $admin = new Admin();

        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

        if($admin->changeStatue($id , "Canceled"))
        {
            header("Location: User_Home.php");
            exit;
        }
    }
    else
    {
        echo("<script language='javascript'>alert('Unable to access this page directly')</script>");
        
    }
