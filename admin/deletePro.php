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
        $admin = new Admin();

        $id = $_POST['pro_id'];

        $admin->deletePro($id);
    }
    else
    {
        echo("<script language='javascript'>alert('Unable to access this page directly')</script>");
        
    }
