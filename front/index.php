<?php
include 'layouts/frontheader.php';




?>

<!--================Slider Area =================-->
        <section class="main_slider_area">
            <div class="container">
                
                <img src="img/feature-add/f-add-12.jpg" height="300px" width="100%">
                
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Feature Add Area =================-->
        
        <!--================End Feature Add Area =================-->
        
        <!--================Our Latest Product Area =================-->
        <section class="our_latest_product">
            <div class="container">
                <div class="s_m_title">
                    <h2>Our Best Sellers</h2>
                </div>
                <div class="l_product_slider owl-carousel">
                	<?php
                	$books = GetBooks($conn);
					
					foreach ($books as $key => $value):
                	?>
                    <div class="item">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="../admin/uploads/<?php echo $value['cover']; ?>" alt="" width="150px" height="350px">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="productdetails.php?ref=<?php echo $value['b_id']?>"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="addtocart.php?ref=<?php echo $value['b_id']?>">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4><?php echo $value['title']; ?></h4>
                                <h5>Rs <?php echo $value['price']; if($key>=5) break; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                 
                </div>
            </div>
        </section>
        <section class="our_latest_product">
            <div class="container">
                <div class="s_m_title">
                    <h2>Lastest Books</h2>
                </div>
                <div class="l_product_slider owl-carousel">
                	<?php
                	$books = GetBooks($conn);
					
					foreach ($books as $key => $value):
						if($value['published_date']>="2018-01-01"):
                	?>
                    <div class="item">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="../admin/uploads/<?php echo $value['cover']; ?>" alt="" width="150px" height="350px">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="addtocart.php?ref=<?php echo $value['b_id']?>">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4><?php echo $value['title']; ?></h4>
                                <h5>Rs <?php echo $value['price']; if($key>=5) break; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endif; endforeach; ?>
                 
                </div>
            </div>
        </section>
        <!--================End Our Latest Product Area =================-->
        
        <!--================Feature Big Add Area =================-->
        <section class="feature_big_add_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="f_add_item white_add">
                            <div class="f_add_img"><img class="img-fluid" src="img/feature-add/f-add-11.jpg" alt="" height="120%" width="100%"></div>
                            <div class="f_add_hover">
                                <h4>Best Summer <br />Collection</h4>
                                <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="f_add_item white_add">
                            <div class="f_add_img"><img class="img-fluid" src="img/feature-add/f-add-0.jpg" alt="" height="100%" width="100%"></div>
                            <div class="f_add_hover">
                                <h4>Best Summer <br />Collection</h4>
                                <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Big Add Area =================-->
        
        <!--================Product_listing Area =================-->
        <section class="product_listing_area">
            <div class="container">
                <div class="row p_listing_inner">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-sm-8">
                                <div class="p_list_text">
                                    <h3>Authors</h3>
                                    <ul>
                                        <?php $authors = GetAuthors($conn);
                                        foreach ($authors as $key => $value):
                                        ?>
                                        <li><a href="#"></a><?php echo $value['a_firstname'].' '.$value['a_lastname']; if($key>=5) break;?></li>
                                    <?php endforeach; ?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-4">
                                <div class="p_list_img">
                                    <img src="img/thoughts.png" alt="" height="60%" width="60%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product_listing Area =================-->
        
        <!--================Featured Product Area =================-->
        
        <!--================End Featured Product Area =================-->
        
        <!--================Form Blog Area =================-->
       
        <!--================End Form Blog Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                
                <div class="footer_copyright">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>