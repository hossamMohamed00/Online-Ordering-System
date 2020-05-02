<?php
    include 'init.php';
    include $tpl.'header.php'; 
?>

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Menu</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- best_burgers_area_start  -->
    <div class="best_burgers_area" style="margin-top: -90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Burger Menu</span>
                        <h3>Best Ever Burgers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Products Here --> 
            <?php
                $pro = new products();
                $products = $pro->getProducts();
                
                if(!empty($products))
                {
                    //loop the data 
                    foreach($products as $row)
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
                ?>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $uploaded.$row['Pro_Img']?>">
                        </div>
                        <div class="info">
                            <h3><?=$row['Pro_Name'] ?></h3>
                            <p><?=$row['Pro_Desc'] ?></p>
                            <span><?=$row['Pro_Price'] ?> $</span>
                            <a href="<?= "user/Cart_Process.php?id=".$row['Pro_Id'] ?>" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php  
                    }
                }else
                {   
                ?>
                    <div class="section_title text-center mb-80" style="margin-left: 450px">
                        <span>No Products Yet</h3></span>
                    </div>
               <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- best_burgers_area_end  -->

    <!-- features_room_startt -->
    <div class="Burger_President_area">
            <div class="Burger_President_here">
                <?php
                    foreach($products as $row)
                    {
                        if($row['Special'] == 1)
                        {
                            //to skip not avaliable products 
                            if($row['Pro_Statue'] == 0 )
                            {
                                continue;
                            }
                ?>
                <div class="single_Burger_President">
                    <div class="room_thumb">
                    <img src="<?= $uploaded.$row['Pro_Img']?>">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span><?=$row['Pro_Price'] ?> $</span>
                                <h3><?=$row['Pro_Name'] ?></h3>
                                <p><?=$row['Pro_Desc'] ?></p>
                                <a href="<?= "user/Cart_Process.php?id=".$row['Pro_Id'] ?>" class="boxed-btn3">Order Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>  
                <?php
                        }
                    }
                ?>
            </div>
    </div>
    <!-- features_room_end -->

    

    <!-- instragram_area_start -->
<div class="instragram_area" style="margin-top: 20px;margin-bottom: -100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/1.png" alt="">
                    <div class="ovrelay">
                        <a>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/2.png" alt="">
                    <div class="ovrelay">
                        <a >
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a >
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->

    <?php include $tpl."footer.php"; ?>

