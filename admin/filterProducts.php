<?php
    include 'init.php';
    if(isset($_POST['search'] ))
    {
        $output = '';//to hold the table to display it

        $key = $_POST['search'];//to get the keyword to search for it

        $product = new products();

        $Filtered_Products = $product->searchProducts($key);//will return array of all users that matched this keyword
        
        //prepare the table to print it
        $output .= '
        <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px">
                <thead style="font-family: \'East Sea Dokdo\', cursive; font-size: 25px">
                    <tr style="background-color:#F54300 ;color:white;"> 

                        <th style="text-align: center;width: 3%" >PRODUCT ID </th>
                        <th style="text-align: center;width: 20%"> NAME </th>
                        <th style="text-align: center;"> DESCREPTION </th>
                        <th style="text-align: center;width: 10%"> PRICE : $</th>
                        <th style="text-align: center;width: 11%"> AVAILABILITY </th>
                        <th style="text-align: center;width: 4%"> SPECIAL </th>
                        <th style="text-align: center;width: 5%"> EDIT </th>
                        <th style="text-align: center;width: 4%"> DELETE </th>

                    </tr>
                </thead>
        ';

        if(!empty($Filtered_Products))
        {
            //loop the data
            foreach($Filtered_Products as $row)
            {
                $AVAILABILITY = ($row['Pro_Statue'] == 1)  ? 'Avaliable' : 'Not Avaliable';
                $SPECIAL = ($row['Special']) ? 'Yes' : 'No';

                $output .= "
                <tbody>
                    <tr class = \"tabelrow\" id = 'pro_".$row['Pro_Id']."'>

                        <td style='text-align:center;'>". $row['Pro_Id']."</td>
                        
                        <td  style=\"padding: 10px;\" >".$row['Pro_Name']."</td>

                        <td style='text-align:center'> ". $row['Pro_Desc'] ." </td>

                        <td style='text-align:center;' > ". $row['Pro_Price']." $</td>
                        
                        <td>
                            <div class=\"col-sm-10\">
                                ".$AVAILABILITY ."
                            </div>
                        </td> 

                        <td style='text-align:center'>".$SPECIAL."</td>

                        <td style=\"width: 7%\">
                            <a href=\"Edit_Pro.php?id=".$row['Pro_Id'] ."\">
                                <img src=\"". $img ."edit.png\" title=\"Edit this Product\" width=\"55px\" style=\"margin-left: 5px;\">
                                </a>

                        <td style=\"width: 7%\">
                            <a onclick='DELETE_PRODUCT(".$row['Pro_Id'] .")'>
                                <img src='". $img ."drop-icon.png'  title=\"Delete This Product\" width=\"35px\" style=\"margin-left: 5px;\">
                            </a>

                    </tr>
                ";
            }
        }
        else
        {
            $output .= '
                <tbody>
                    <tr class = "tabelrow" > 
                        <td colspan="7" >NO PRODUCTS FOUND</td>       
                    </tr>
                ';
        }
        $output .= '
            </tbody>	
        </table>
        ';

        echo $output;
    }
    else
    {
        echo "<script>alert('Error') </script>";
    }