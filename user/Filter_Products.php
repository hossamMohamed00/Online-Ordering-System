<?php
    include 'init.php';
    if(isset($_POST['search'] ))
    {
        $output = '';//to hold the table to display it

        $key = $_POST['search'];//to get the keyword to search for it

        $product = new products();

        $Filtered_Products = $product->searchProducts($key);//will return array of all Products that matched this keyword
        

        if(!empty($Filtered_Products))
        {
            //loop the data
            foreach($Filtered_Products as $row)
            {
                //to skip Special products (Larg Photo)
                    if($row['Special'] == 1 )
                    {
                        continue;
                    }

                    //to skip not avaliable products 
                    if($row['Pro_Statue'] == 0 )
                    {
                        continue;
                    }

                $AVAILABILITY = ($row['Pro_Statue'] == 1)  ? 'Avaliable' : 'Not Avaliable';
                $SPECIAL = ($row['Special']) ? 'Yes' : 'No';

                $output .= '
                <div class="col-xl-6 col-md-6 col-lg-6" >
                <div class="single_delicious d-flex align-items-center">
                    <div class="thumb">
                        <!--  Product Img Here  -->
                        <img src="">
                    </div>
                    <div class="info">
                        <!-- Product Data Here -->

                        <h3>'.$row["Pro_Name"] .'</h3>

                        <p>'.$row["Pro_Desc"] .'</p>
                        <span>'.$row["Pro_Price"] .'$</span>
                        <a href="user/Cart_Process.php?id='.$row["Pro_Id"].'" class="boxed-btn3">Order Now</a>
                    </div>
                </div>
                </div>
                ';
            }
        }
        else
        {
            $output .= '
               <div class="section_title text-center mb-80" style="margin-left: 450px">
                    <span>No Products Found</h3></span>
                </div>
                ';
        }
        echo $output;
    }
    else
    {
        echo "<script>alert('Error') </script>";
    }