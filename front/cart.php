<?php
include 'layouts/frontheader.php';






?>


<!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>shopping cart</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="shopping-cart.html">Shopping cart</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Shopping Cart Area =================-->
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_product_list">
                            <h3 class="cart_single_title">Discount Cupon</h3>
                            <div class="table-responsive-md">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">product</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    if(isset($_SESSION['c_id'])):
										$bookItems = GetCartItems($conn,$_SESSION['c_id']);
										if($bookItems):
                                    	
                                    	foreach ($bookItems as $key => $value):
                                    	?>
                                        <tr>
                                            <th scope="row">
                                                <a href="deletecartitem.php?ref=<?php echo $value['ca_id']; ?>"><img src="img/icon/close-icon.png" alt=""> </a>
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="../admin/uploads/<?php echo $value['cover']; ?>" alt="" width="100px" height="160px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><?php echo $value['title']; ?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><input type="text" placeholder="01"></td>
                                            <td><p>Rs <?php echo $value['price']; ?></p></td>
                                        </tr>
                                    <?php  endforeach; endif; endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="total_amount_area">
                            <div class="cart_totals">
                                <h3 class="cart_single_title">Your Amounts</h3>
                                <div class="cart_total_inner">
                                    <ul>
                                        <li><a href="#"><span>Cart Subtotal</span> Rs 
                                        	<?php
                                        	if(isset($_SESSION['c_id'])):
                                        		if($bookItems):
                                        	 $total=0; 
                                        		foreach ($bookItems as $key => $value) {
                                        			$total = $total + $value['price'];
                                        		}
                                        		echo $total;
                                        	
                                        		

                                        	?></a></li>
                                        <li><a href="#"><span>Shipping</span> Free</a></li>
                                        <li><a href="#"><span>Totals</span> <?php echo $total; endif; endif; ?></a></li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-primary update_btn">update cart</button>
                                <button type="submit" class="btn btn-primary checkout_btn" onclick="window.location.href='checkoutregister.php?ref=<?php echo 1; ?>'">proceed to checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Shopping Cart Area =================-->
        
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