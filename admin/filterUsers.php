<?php
    include 'init.php';
    if(isset($_POST['search'] ))
    {
        $output = '';//to hold the table to display it

        $key = $_POST['search'];//to get the keyword to search for it

        $admin = new Admin();

        $Users = $admin->searchUsers($key);//will return array of all users that matched this keyword
        
        //prepare the table to print it
        $output .= '
        <table border="1" style="border-color:gray ; width:1200px ; text-align: center; margin-left: 35px;" >
                <thead style="font-family: \'East Sea Dokdo\', cursive; font-size: 25px">
                <tr style="background-color:#F54300 ;color:white;"> 
                        <th style="text-align: center;">Id</th>
                        <th style="text-align: center;">Type</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;width: 20%">User Name</th>
                        <th style="text-align: center;width:16%">Phone</th>
                        <th style="text-align: center;width:30%">Address</th>
                        <th style="text-align: center;width:30%">Email</th>
                        <th style="text-align: center;"> DELETE </th>
                    </tr>
                </thead>
                <tbody>               
        ';

        if(!empty($Users))
        {
            //loop the data
            foreach($Users as $row)
            {
                $type = ($row['User_Type_Id'] == 1) ? 'Admin' : 'User';
                $output .= "
                <tr class = \"tabelrow\" id = 'user".$row['Id']."' > 
                    <td style='text-align:center'>". $row['Id'] ."</td>
                    <td style='text-align:center'>". $type ."</td>
                    <td style='text-align:center'>". $row['Name'] ."</td>
                    <td style='text-align:center'>". $row['User_Name'] ."</td>
                    <td style='text-align:center'>". $row['Phone'] ."</td>
                    <td style='text-align:center'>". $row['Address'] ."</td>
                    <td style='text-align:center'>". $row['Email'] ."</td>
                    <td style=\"width: 7%\">
                    <a  onclick='DELETE_USER(". $row['Id'] .")' >
                        <img src=\"". $img ."drop-icon.png\" title=\"Delte This User\" width=\"35px\" style=\"margin-left: 5px;\">
                        </a>
                </tr>
                ";
            }
        }
        else
        {
            $output .= '
                <tr class = "tabelrow" > 
                    <td colspan="7" >No User Found</td>       
                </tr>
                ';
        }
        $output .= '
            </tbody>	
        </table>
        ';

        echo $output;
    }