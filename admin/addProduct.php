<?php
    require_once 'init.php';
    session_start();

    $_SESSION['Stat'] = '';

    //create errors array to hold all error in it
    $error_fields = array();

//check if the user come from post method
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Validation
    if(!(isset($_POST['foodName']) && !empty($_POST['foodName']))){
        $error_fields[] = "foodName";
    }
    if(!(isset($_POST['price']) && is_numeric($_POST['price'])))
    {
        $error_fields[] = "price";
    }
    if(!(isset($_POST['pro_desc'])))
    {
        $error_fields[] = "pro_desc";
    }

    if(!$error_fields)
    {
        //taking object from class admin to call function which will add product
        $admin = new Admin();

        //Get All Data
        $foodName = $_POST['foodName'];
        $foodPrice = $_POST['price'];
        $foodDesc = $_POST['pro_desc'];
        $Special = ($_POST['Special'] == 'Yes') ? 1 : 0 ;
        $Availability = ($_POST['Availability'] == 'Available') ? 1 : 0 ;

        //Upload the photo
        $uploads_dir =$_SERVER['DOCUMENT_ROOT'].$fromRoot.$uploaded;//get from init.php
        $avatar = '';
        $allowed_ext = array("jpg" , "png");//allowed image type array 
        
        if($_FILES['image']['error'] == UPLOAD_ERR_OK)
        {
        	$ext = end(explode( '.', $_FILES['image']['name']));

        	if(in_array($ext, $allowed_ext))//check for valid extention
        	{
        		$tmp_name = $_FILES['image']['tmp_name'];
	            $avatar = basename($_FILES['image']['name']);

	     	   //to remove white spaces
	            $food = preg_replace('/\s+/', '', $foodName);

	            move_uploaded_file($tmp_name,"$uploads_dir/$food$avatar");
                $img_name = $food;
                $img_name .= $avatar;

	            //prepare the data to save on DB
	            $data = array(" Pro_Name " => $foodName , " Pro_Desc  " => $foodDesc , " Pro_Price " => $foodPrice , " 	Pro_Img " => $img_name , " Pro_Statue " => $Availability , " Special " => $Special);

	            if($admin->addPro($data))
	            {
	                $_SESSION['Stat'] = 'Added';
	                header("Location: Admin_Home.php");
	            }
        	}
        	else
        	{
        		$_SESSION['Stat'] = 'Not Added [Invalid image type]';
    			echo "<script>alert('Invalid Image Type') </script>";
                header("Location: Admin_Home.php");
        	}
        }
    }
    else
    {   
            $_SESSION['Stat'] = 'Not Added';   
            header("Location: Admin_Home.php");
    }

}
else
    {   
            header("Location: Admin_Home.php");
    }