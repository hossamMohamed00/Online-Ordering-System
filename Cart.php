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
           <form action="user/Cart_Process.php" method="POST" >
         <table border="2"   style="border-color:#F54300 ; width:1200px ; text-align: center; margin-left: 180px; margin-top: -120px;border-radius: 40px;">
                    <thead style="font-family: 'East Sea Dokdo', cursive; font-size: 25px">
                        <tr style="background-color:#F54300 ;color:white;"> 
                            <th style="text-align: center;" > No</th>
                            <th style="text-align: center;"> Product </th>
                            <th style="text-align: center;"> Description </th>
                            <th style="text-align: center;width: 10%"> Quantity </th>
                            <th style="text-align: center;width: 5%"> Price </th>
                            <th style="text-align: center;"> DELETE </th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                $total_Price = 0;
                                $counter = 1;
                                //get cart data from session
                                if(isset($_SESSION['cart']))
                                {
                                    foreach($_SESSION['cart'] as $id => $data)
                                    {
                                
                            ?>
                        <tr class = "tabelrow" >
                             <td style='text-align:center'><?= $counter ?></td>
                             <td style='text-align:center'><?= $data['name'] ?></td>
                             <td style='text-align:center'><?= $data['desc'] ?></td>
                             <td> <input style="border:none ;text-align:center;" type="number" size="20" value="<?=$data['qty']?>" name="<?= $id ?>">

                            <td style='text-align:center'><?= $data['price']  ?> $</td>   
                            <td> <a href="<?='user/Cart_Process.php?Did='.$id ?>" ><img src="<?= $img ?>delete-icon.png" width=22px></a>
                         </tr>
                        <?php
                                $total_Price = $total_Price + ($data['qty'] * $data['price']); 
                                $counter++;
                            }
                        }
                         ?>
                         <tr>
                            <td colspan="5" align="right">
                            <h4 style="font-family: East Sea Dokdo;font-size: 30px">.Total Bill </h4>
                            </td>
                            <td> <h4> <?= $total_Price?> $ </h4></td>
                            
                            <?php $_SESSION['numOfPro'] = $counter - 1 ;
                            $_SESSION['total'] = $total_Price ?>
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
            <div class="pull-right"><a class="btn btn-primary reg_button" style="margin-right: 100px;background-color: #F54300" href="<?= (! empty($_SESSION['cart'])) ? 'checkout.php': ''?>">Confirm & Checkout</a></div>
        </div>

    </div>
    
<?php include $tpl."footer.php"; ?>