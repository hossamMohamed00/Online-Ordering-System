<footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                         New Cairo
                                </h3>
                                <p> Concord Plaza Mall, 90th Street<br> 
                                        Katameya Down Town, Road 90 <br>
                                        </p>
                                <a class="number" href="#">19914</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                     Nasr City
                                </h3>
                                <p> City Stars Mall, <br> 
                                         9 Hafez Ramadan Street <br>
                                        </p>
                                <a class="number" href="#">19914</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Stay Connected
                                        </h3>
                                        <form action="#" class="newsletter_form">
                                           
                                            <button type="submit" style="font-family: 'East Sea Dokdo'"><a href="<?=($_SESSION['User_Type_Id'] == 1) ? $adminHome : $userHome ?>">My Account</a></button>

                                        </form>
                                        <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">FCIH TEAM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <!-- JS here -->
    <script src="<?= $js ?>vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= $js ?>vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= $js ?>popper.min.js"></script>
    <script src="<?= $js ?>bootstrap.min.js"></script>
    <script src="<?= $js ?>owl.carousel.min.js"></script>
    <script src="<?= $js ?>isotope.pkgd.min.js"></script>
    <script src="<?= $js ?>ajax-form.js"></script>
    <script src="<?= $js ?>waypoints.min.js"></script>
    <script src="<?= $js ?>jquery.counterup.min.js"></script>
    <script src="<?= $js ?>imagesloaded.pkgd.min.js"></script>
    <script src="<?= $js ?>scrollIt.js"></script>
    <script src="<?= $js ?>jquery.scrollUp.min.js"></script>
    <script src="<?= $js ?>wow.min.js"></script>
    <script src="<?= $js ?>nice-select.min.js"></script>
    <script src="<?= $js ?>jquery.slicknav.min.js"></script>
    <script src="<?= $js ?>jquery.magnific-popup.min.js"></script>
    <script src="<?= $js ?>plugins.js"></script>

    <!--contact js-->
    <script src="<?= $js ?>contact.js"></script>
    <script src="<?= $js ?>jquery.ajaxchimp.min.js"></script>
    <script src="<?= $js ?>jquery.form.js"></script>
    <script src="<?= $js ?>jquery.validate.min.js"></script>
    <script src="<?= $js ?>mail-script.js"></script>

    <script src="<?= $js ?>main.js"></script>
    </body>

</html>