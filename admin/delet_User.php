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

        $id = $_POST['user_id'];//get user id 

       if($admin->deleteUser($id));//delete this user from db 

    }
    else
    {
        echo("<script language='javascript'>alert('Unable to access this page directly')</script>");
        
    }
