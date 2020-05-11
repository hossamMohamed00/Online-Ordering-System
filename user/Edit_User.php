<?php
require_once 'init.php';
session_start();
//To prevent opening this page directly
if(!isset($_SESSION['Id']))
{
    header("Location: login.php");
}

$user = new User();

$error_fields = array();

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Validation
    if(!(isset($_POST['name']) && !empty($_POST['name']))) 
    {
        $error_fields[] = "name";
    }
    if(!(isset($_POST['password']) && strlen($_POST['password']) >= 4)) 
    {
        $error_fields[] = "password";
    }
    if(!(isset($_POST['phone']) && is_numeric($_POST['phone']))) 
    {
        $error_fields[] = "phone";
    }
    if(!(isset($_POST['address']) && !empty($_POST['address']))) 
    {
        $error_fields[] = "address";
    }
    if(!(isset($_POST['email']) && !empty($_POST['email']))) 
    {
        $error_fields[] = "email";
    }

    if(!$error_fields)
    {
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password =$_POST['password'];
        $phone =$_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        //prepare data for update
        $data = array("Id" => $id , "Name" => $name ,"User_Name" => $username, "Password" => $password , "Phone" => $phone ,"Address" => $address , "Email" =>$email);
        
        //Update the data in DB
        if($user->updateUser($data , $id))
        {
            $_SESSION['Name'] = $data['Name'];
            $_SESSION['Password'] = $data['Password'];
            $_SESSION['Phone'] = $data['Phone'];
            $_SESSION['Address'] = $data['Address'];
            $_SESSION['Email'] = $data['Email'];
            $_SESSION['User_Type_Id'] = $data['User_Type_Id'];

            header("Location: User_Home.php");
            exit;
        }else
        {
            echo("<script language='javascript'>alert('Unable to Update Data')</script>");
        }   
    }
    else 
    {
        $_SESSION['error_fields'] = $error_fields;
        header("Location: User_Home.php");
    }
}
else{
    header("Location: User_Home.php");
    exit;

}