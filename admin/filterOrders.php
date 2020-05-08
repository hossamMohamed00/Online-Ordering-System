<?php
    include 'init.php';
    session_start();
    if(isset($_POST['from_date'] , $_POST['to_date']))
    {
        //save date to session , to use it when generate orders
        $_SESSION['filterOrder']['from_date'] = $_POST['from_date'];
        $_SESSION['filterOrder']['to_date'] = $_POST['to_date'];

        $output = '';//To Hold output to display it

        //change the format of the date to be like date on DB
        $from_Date = date("Y-m-d",strtotime($_POST['from_date'])); 
        $to_Date = date("Y-m-d",strtotime($_POST['to_date']));

        $orders = new orders();

        $allOrders = $orders->Filter_Orders($from_Date, $to_Date);

        $output .= '
        <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px ;margin-top: 0px"   >
                    <thead style="font-family: \'East Sea Dokdo\', cursive; font-size: 25px">
                        <tr style="background-color:#F54300 ;color:white;"> 
                                <th style="text-align: center;">Order ID</th>
                                <th style="text-align: center;">Customer ID</th>
			                    <th style="text-align: center;">Order Desc.</th>
			                    <th style="text-align: center;">Date</th>
			                    <th style="text-align: center;">Total Cost</th>
                                <th style="text-align: center;">Payment</th>
			                    <th style="text-align: center;">Statue</th>
			                </tr>
			            </thead>
		                <tbody>
        ';

        if(!empty($allOrders))
        {
            //loop the data
            foreach($allOrders as $row)
            {
                $output .= "
                <tr class = \"tabelrow\">
                    <td style='text-align:center'>". $row['Order_Id'] ."</td>
                    <td style='text-align:center'>". $row['Cust_Id'] ."</td>
                    <td style='text-align:center'>". $row['Order_Desc'] ."</td>
                    <td style='text-align:center'>". $row['Order_Date'] ."</td>
                    <td style='text-align:center'>". $row['Total_Cost'] ." $</td>
                    <td style='text-align:center'>". $row['Payment_Method'] ." </td>
                    <td style='text-align:center'>". $row['Order_Statue'] ."</td>
                </tr>
                ";
            }
            $output .= '
                        </tbody>    
                    </table>
                        <!-- Generate pdf button -->
            <form method="POST" action="Generate_Pdf.php">
                <div class="form-group" style="">
                    <div class="col-md-5" h style="margin-left: 750px;">
                        <button type="submit" name = "create_pdf" id="create_pdf"  class="btn btn-default" style="height: 5px;width: 150px" >Generate Pdf </button>
                    </div>
                </div>
            </form> 
            ';
        }
        else
        {
            $output .= "
                <tr class = \"tabelrow\">
                        <td colspan = \"6\"'>NO ORDERS FOUND</td>
                </tr>
                ";
        }
        $output .= '
            </tbody>	
        </table>
        ';

        echo $output;
    }