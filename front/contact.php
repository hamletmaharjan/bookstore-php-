<?php
include 'layouts/frontheader.php';


if(isset($_POST['submitbtn'])){

    dd($_POST);
    if(InsertData($conn,$_POST,"table_contact")){
        SetMessage("Data Added","success");
        //redirection('contact.php');
    }
}

?>


<!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <?php 
                                DisplayMessage(); ?>
            </div>
            <div class="col-lg-4">
            </div>
            
        </div>
        <!--================Contact Area =================-->
        <section class="contact_area p_100">
            <div class="container">
                <div class="contact_title">
                    <h2>Get in Touch</h2>
                </div>
                <div class="contact_form_inner">
                    <h3>Drop a Message</h3>
                    <form class="contact_us_form row" action="contact_process.php" method="POST" id="contactForm" novalidate="novalidate">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="name" name="full_name" placeholder="Full Name *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address *">
                        </div>
                        
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Type Your Message..." name="message"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            
                            <button type="submit"  name="submitbtn" class="btn update_btn form-control">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        
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
        
        
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
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
        
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>