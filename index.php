<?php
    include 'init.php';
    include $tpl.'header.php'; 
?>

<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9 col-md-9 col-md-12">
                        <div class="slider_text text-center">
                            <div class="deal_text">
                                <span>Big Deal</span>
                            </div>
                            <h3>Burger <br>
                                Bachelor</h3>
                            </Br>   
                            <h4>Maxican</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9 col-md-9 col-md-12">
                        <div class="slider_text text-center">
                            <div class="deal_text">
                                <span>Big Deal</span>
                            </div>
                            <h3 >Burger <br>
                                Bachelor</h3>
                                </Br>  
                            <h4>Maxican</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- slider_area_end -->

<div class="best_burgers_area">
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
        <!-- Products Appear Here --> 
        <?php
            $count = 0;

            $pro = new products();
            $products = $pro->getProducts();
            
            if(!empty($products))
            {
                //loop the data 
                foreach($products as $row)
                {
                    //to display just 6 product only
                    $count++;
                    if($count == 7)
                    {
                    break;
                    }
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
                    <!-- Product Image Here  -->
                    <div class="thumb">
                        <img src="<?= $uploaded.$row['Pro_Img']?>">
                    </div>

                    <!-- Product Data Here  -->
                    <div class="info">
                        <h3><?=$row['Pro_Name'] ?></h3>
                        <p><?=$row['Pro_Desc'] ?></p>
                        <span><?=$row['Pro_Price'] ?> $</span>
                        <!-- Order Now Button Here  -->
                        <a href="<?= "user/Cart_Process.php?id=".$row['Pro_Id'] ?>" class="boxed-btn3">Order Now</a>
                    </div>

                </div>
            </div>
            <?php  
                }//foreach loop end
            }
            // If There are No Products
            else
            {   
            ?>
            <div class="section_title text-center mb-80" style="margin-left: 450px">
                <span>No Products Yet</h3></span>
            </div>
           <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="iteam_links">
                    <a class="boxed-btn5" href="Menu.php">More Items</a>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Special_room_startt -->
<div class="Burger_President_area">
    <div class="Burger_President_here">
        <?php
            foreach($products as $row)
            {
                //To Get Special Products Only
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
                <!-- Product Img Here -->
                <img src="<?= $uploaded.$row['Pro_Img']?>">

                <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                        <!-- Product Data Here -->
                        <span><?=$row['Pro_Price'] ?> $</span>
                        <h3><?=$row['Pro_Name'] ?></h3>
                        <p><?=$row['Pro_Desc'] ?></p>

                        <!-- Order Now Button Here -->
                        <a href="<?= "user/Cart_Process.php?id=".$row['Pro_Id'] ?>" class="boxed-btn3">Order Now</a>
                    </div>
                        
                </div>
            </div>
        </div>  
                <?php
                        }//If end here
                    }//foreach loop End 
                ?>
    </div>
</div>
<!-- Special_room_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about_thumb2">

                    <div class="img_1">
                        <img src="<?= $img ?>about/1.png" alt="">
                    </div>

                    <div class="img_2">
                        <img src="<?= $img ?>about/2.png" alt="">
                    </div>

                </div>
            </div>

            <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>About Us</span>
                        <h3>Best Burger <br>
                                in your City</h3>
                    </div>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate</p>
                    <div class="img_thumb">
                        <img src="<?= $img ?>jessica-signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about_area_end -->

<!-- video_area_start -->
<div class="video_area video_bg overlay" style="margin-bottom:  150px">
    <div class="video_area_inner text-center">
        <h3>Burger <br>
            Bachelor</h3>

        <span>How we make delicious Burger</span>

        <div class="video_payer">
            <a href="https://www.youtube.com/watch?v=7O0FcxNjB6Q" class="video_btn popup-video">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
</div>
<!-- video_area_end -->

   
<!-- instragram_area_start -->
<div class="instragram_area">
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
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="<?= $img ?>instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- instragram_area_end -->


    <!-- Include Footer -->
    <?php include $tpl."footer.php"; ?>
