<?php
    include 'init.php';
    include $tpl.'header.php';
?>
     
    <div class="signup" >
            <h2 class="h_signup">Shopping Cart</h2>
    </div>    

    <div id="page" >
                    <!-- start content -->
        <div id="content">
            <div class="entry">
           
         <table border="2"   style="border-color:#F54300 ; width:1200px ; text-align: center; margin-left: 180px; margin-top: -80px;border-radius: 40px;">
                    <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                        <tr style="background-color:#F54300 ;color:white;"> 
                            <th style="text-align: center;" > No</th>
                            <th style="text-align: center;"> Product </th>
                            <th style="text-align: center;"> Description </th>
                            <th style="text-align: center;width: 10%"> Quantity </th>
                            <th style="text-align: center;"> Price </th>
                            <th style="text-align: center;"> DELETE </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class = "tabelrow" >
                             <td style='text-align:center'>1</td>
                            <td style='text-align:center'>Beefy Burgers</td>
                            <td style='text-align:center'>Description Must be Here</td>
                            <td> <input style="border:none ;text-align:center;" type="number" size="100" value="1" name="">

                            <td style='text-align:center'>10 $</td>   
                            <td> <a href=""><img src="<?= $img ?>delete-icon.png" width=22px></a>
                         </tr>
                        </br>
                         <tr class = "tabelrow" >
                             <td style='text-align:center'>2</td>
                            <td style='text-align:center'>Crackles Burger</td>
                            <td style='text-align:center'>Description Must be Here</td>

                            <td> <input style="border:none ;text-align:center" type="number" size="100" value="1" name="">

                            <td style='text-align:center'>25 $</td>   
                            <td> <a href=""><img src="<?= $img ?>delete-icon.png" width=22px></a>
                         </tr>

                         <tr>
                                <td colspan="5" align="right">
                                <h4 style="font-family: East Sea Dokdo;font-size: 30px">.Total Bill </h4>
                                </td>
                                <td> <h4>€ 15 </h4></td>
                        </tr>
                    </tbody>
                                                          
         </table>                
                <br><br>
                <center>

                    <input class="btn btn-default" type="submit" value=" Re-Calculate "  style="margin-top: -30px" >
               
                </center>
            </form>
        </div>
            
    
        
    </div>
    <!-- end content -->   

            <div class="buttons"  style="margin-bottom: 70px">
                <div class="pull-left"><a class="btn btn-primary reg_button" style="margin-left: 140px;background-color: #F54300" href="menu.php"><i class="fa fa-caret-right"></i>&nbsp;Continue Shopping</a></div>
                <div class="pull-right"><a class="btn btn-primary reg_button" style="margin-right: 100px;background-color: #F54300" href="checkout.php">Confirm & Checkout</a></div>
            </div>
</div>
    



<?php include $tpl."footer.php"; ?>
