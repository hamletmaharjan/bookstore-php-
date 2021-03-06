<?php
include 'layouts/frontheader.php';

$b = $_GET['ref'];

if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else {
	$page = 1;
}
$bookType = substr($b,0,2);
$books;
$count=0;
$resultsPerPage = 8;
$totalPages = 0;
$offset = 0;
switch ($bookType) {
	/*
	case 'pb':
		$totalOrders = GetAllOrders($conn);
		$book = GetBooks($conn);
		$orders = GetOrders($conn);
		foreach ($book as $key => $value) {
			$temp=0;
			for($i=0; $i<=$totalOrders-1; $i++){
				if($value['b_id']==$orders[$i]['book_id']){
					$temp++;
				}
			}
			if($temp>=2){
				dd($value);
			}
		}
		break;
	*/
	case 'lb':
		$book = GetBooks($conn);
		foreach ($book as $key => $value) {
			if($value['published_date']>="2018-01-01"){
				$count++;
			}
			
		}
		$totalPages = ceil($count/$resultsPerPage);
		$offset = ($page - 1) * $resultsPerPage; 
		$books = LatestBooks($conn,$offset,"2018-01-01");

		break;

	case 'cb':
		$book = GetBooks($conn);
		foreach ($book as $key => $value) {
			if($value['price']<=1000){
				$count++;
			}
			
		}
		$totalPages = ceil($count/$resultsPerPage);
		$offset = ($page - 1) * $resultsPerPage; 
		$books = CheapestBooks($conn,$offset,1000);
		break;

	case 'ab':
		$book = GetBooks($conn);
		foreach ($book as $key => $value) {
			$count++;
		}
		$totalPages = ceil($count/$resultsPerPage);
		$offset = ($page - 1) * $resultsPerPage; 
		$books = Pagination($conn,$offset);
		break;
	
	default:
		$book = GetBooks($conn);
		foreach ($book as $key => $value) {
			$count++;
		}
		$totalPages = ceil($count/$resultsPerPage);
		$offset = ($page - 1) * $resultsPerPage; 
		$books = Pagination($conn,$offset);
		break;
}

?>

<!--================Categories Product Area =================-->
        <section class="no_sidebar_2column_area">
            <div class="container">
                <div class="showing_fillter">
                    <div class="row m0">
                        <div class="first_fillter">
                            <h4><?php $temp = $offset+$resultsPerPage;
                            echo "Showing ".($offset+1)." to ".$temp." of ".$count; ?></h4>
                        </div>
                        <div class="third_fillter">
                            <h4>Show : </h4>
                            <select class="selectpicker">
                                <option>8</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="two_column_product">
                    <div class="row">
                    	<?php
                    	//$offset = ($page - 1) * $resultsPerPage; 
                    	

                    	if($books):
                    		foreach ($books as $key => $value):		
                    	?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="" src="../admin/uploads/<?php echo $value['cover']; ?>" alt="" height="350px" width="100%">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="productdetails.php?ref=<?php echo $value['b_id']?>"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="addtocart.php?ref=<?php echo $value['b_id']?>">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4><?php echo $value['title']; ?></h4>
                                    <h5>Rs <?php echo $value['price']; ?></h5>
                                </div>
                            </div>
                        </div>
                       	<?php endforeach; endif; ?>
                        
                    </div>
                    <nav aria-label="Page navigation example" class="pagination_area">
                      <ul class="pagination">
                      	<?php for($page=1; $page <= $totalPages; $page++): ?>
                        <li class="page-item"><a class="page-link" href="booklist.php?ref=<?php echo $bookType; ?>&amp;page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                    <?php endfor;?>
                        <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
        
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
        <script type="text/javascript">
        	function hamsCookie(var id){
        		alert("id received");
        	}
        </script>
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