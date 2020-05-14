<?php


  /**
    This Page Will Genertate Pdf File Contains Orders History 

    will generate this pdf when admin click on Generate button which in Admin Home Section Orders History 
  */


  include 'init.php'; 
  session_start();


if(isset($_POST["create_pdf"]))  
 {  
    //hold the Pdf content  on it 
      $content = '';  

      //get the data 
       $admin = new Admin ();

       $total_profit = 0;

       //first check admin filter orders or not !! if filter it --> generate pdf about filtered orders only
       if(! isset($_SESSION['filterOrder']['from_date']))
       {
          $Finishing_Orders = $admin->getAllOrders();
          if(!empty ($Finishing_Orders)){

              $content .= '  
            <h3 align="center">Orders History Report</h3><br /><br />  
              
              <table border="1"  cellspacing="0" cellpadding="2"   >
                  <thead style="font-size: 10px">
                      <tr style="background-color:#F54300 ;color:white;"> 

                          <th style="text-align: center;">Order ID</th>
                          <th style="text-align: center;">Customer ID</th>
                          <th style="text-align: center;">Order Description</th>
                          <th style="text-align: center;">Date</th>
                          <th style="text-align: center;">Total Cost</th>
                          <th style="text-align: center;">Payment</th>
                          <th style="text-align: center;">Statue</th>

                      </tr>
                  </thead>
                  <tbody>
                '; 
            //loop the data
            foreach( $Finishing_Orders as $row )
            { 
              $content .= "
                <tr class = \"tabelrow\">
                    <td style='text-align:center'>".$row['Order_Id']."</td>
                    <td style='text-align:center'>".$row['Cust_Id']."</td>
                    <td style='text-align:center'>".$row['Order_Desc']."</td>
                    <td style='text-align:center'>".$row['Order_Date']."</td>
                    <td style='text-align:center'>".$row['Total_Cost']." $</td>
                    <td style='text-align:center'>".$row['Payment_Method']." $</td>
                    <td style='text-align:center'>".$row['Order_Statue']."</td>
                </tr>
              ";

              //calculate Total profit 
              $total_profit += $row['Total_Cost'];
            }
            //add total profit row
             $content .= '
                <tr> 
                  <td colspan="4" align="right" >
                      <span style="color: #ff0000">Total Profit : </span>
                  </td>
                  <td colspan="2"> 
                        '. $total_profit.' $ 
                  </td>

                </tr>
             ';
          }
       }
       else
       {
        //change the format of the date to be like date on DB
        $from_Date = date("Y-m-d",strtotime($_SESSION['filterOrder']['from_date'])); 
        $to_Date = date("Y-m-d",strtotime($_SESSION['filterOrder']['to_date']));

        $filtered_Orders = $admin->Filter_Orders($from_Date, $to_Date);

        if(!empty($filtered_Orders))
        {
            $content .= '  
            <h3 align="center">Orders History Report</h3> 
            <h5 align="center">From Date :'.$from_Date .' || To Date :'.$to_Date.' </h5><br /><br /> 

              <table border="1"  cellspacing="0" cellpadding="2"   >
                  <thead style="font-size: 10px">
                      <tr style="background-color:#F54300 ;color:white;"> 

                          <th style="text-align: center;">Order ID</th>
                          <th style="text-align: center;">Customer ID</th>
                          <th style="text-align: center;">Order Description</th>
                          <th style="text-align: center;">Date</th>
                          <th style="text-align: center;">Total Cost</th>
                          <th style="text-align: center;">Payment</th>
                          <th style="text-align: center;">Statue</th>

                      </tr>
                  </thead>
                  <tbody>
            '; 
            //loop the data
            foreach($filtered_Orders as $row)
            {
              $content .= "
                    <tr class = \"tabelrow\">
                    <td style='text-align:center'>".$row['Order_Id']."</td>
                    <td style='text-align:center'>".$row['Cust_Id']."</td>
                    <td style='text-align:center'>".$row['Order_Desc']."</td>
                    <td style='text-align:center'>".$row['Order_Date']."</td>
                    <td style='text-align:center'>".$row['Total_Cost']." $</td>
                    <td style='text-align:center'>".$row['Payment_Method']." $</td>
                    <td style='text-align:center'>".$row['Order_Statue']."</td>
                </tr>
              ";
              //calculate Total profit 
              $total_profit += $row['Total_Cost'];
            }//loop end

            //add total profit row
             $content .= '
                <tr> 
                  <td colspan="4" align="right" >
                      <span style="color: #ff0000">Total Profit : </span>
                  </td>
                  <td colspan="2"> 
                        '. $total_profit.' $ 
                  </td>

                </tr>
             ';
             
          }//if end

      }//else end
       

      $content .= '
      </tbody> 
        </table>';  


        //call the function to genereate the pdf 
        $admin->Generate_Report($content);
 }