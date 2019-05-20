<?php
include 'layouts/header.php';
include 'layouts/sidebar.php';


if(isset($_POST['submitbtn'])){
	echo "works";
	$_POST['cover'] = UploadFile('uploads',$_FILES['file']);
	if(InsertData($conn,$_POST,"table_book")){
		echo "works too";
	}

}

?>


         <!--main content start-->
          <section id="main-content">
              <section class="wrapper">
    		  <div class="row">
    				<div class="col-lg-12">
    					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Book </h3>
    					<ol class="breadcrumb">
    						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
    						<li><i class="icon_document_alt"></i>Books</li>
    						<li><i class="fa fa-file-text-o"></i>Add Book</li>
    					</ol>
    				</div>
    			</div>


                  <div class="row">
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                User Form 
                              </header>
                              <div class="panel-body">
                                  <form class="form-horizontal " method="POST" enctype="multipart/form-data">
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Book Title</label>
                                          <div class="col-sm-10">
                                              <input type="text" name="title" class="form-control">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Price</label>
                                          <div class="col-sm-10">
                                              <input type="number" name="price" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Author</label>
                                          <div class="col-sm-10">
                                            <select class="form-control m-bot15" name="author_id">
                                            	<?php $authors = GetAuthors($conn);
                                            	
                                            	if($authors):
                                            		foreach ($authors as $key => $value):
                                            		?>
														<option value="<?php echo $value['a_id'] ?>"><?php echo $value['a_firstname'] ?></option>
			                                        <?php endforeach;

			                                    else:
			                                        ?>
			                                        	<option value="null">no data found</option>
			                                    <?php endif; ?>
                                          </select>
                                          </div>
                                      </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Categories</label>
                                          <div class="col-sm-10">
                                            <select class="form-control m-bot15" name="categories">
                                              <option value="academics">Academics</option>
                                              <option value="biography">Biography</option>
                                              <option value="fiction">Fiction</option>
                                              <option value="history">History</option>
                                              <option value="medical science">Medical Science</option>
                                              <option value="poetry">Poetry</option>
                                              <option value="others">Others</option>
                                          </select>
                                          </div>
                                      </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Pages</label>
                                          <div class="col-sm-10">
                                              <input type="number" name="pages" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Published Date</label>
                                          <div class="col-sm-10">
                                              <input type="date" name="published_date" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Publisher</label>
                                          <div class="col-sm-10">
                                              <input type="text" name="publisher" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Cover</label>
                                          <div class="col-sm-10">
                                              <input type="file" name="file" class="form-control">
                                          </div>
                                     </div>
                                      <div class="form-group">
                                          <button type="submit" name="submitbtn">Submit</button>
                                      </div>
                                  </form>
                              </div>
                          </section>
                          
                      </div>
                  </div>
                 
              </section>
          </section>
          <!--main content end-->
          <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
      </section>
      <!-- container section end -->
        <!-- javascripts -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- nice scroll -->
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

        <!-- jquery ui -->
        <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

        <!--custom checkbox & radio-->
        <script type="text/javascript" src="js/ga.js"></script>
        <!--custom switch-->
        <script src="js/bootstrap-switch.js"></script>
        <!--custom tagsinput-->
        <script src="js/jquery.tagsinput.js"></script>
        
        <!-- colorpicker -->
       
        <!-- bootstrap-wysiwyg -->
        <script src="js/jquery.hotkeys.js"></script>
        <script src="js/bootstrap-wysiwyg.js"></script>
        <script src="js/bootstrap-wysiwyg-custom.js"></script>
        <!-- ck editor -->
        <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
        <!-- custom form component script for this page-->
        <script src="js/form-component.js"></script>
        <!-- custome script for all page -->
        <script src="js/scripts.js"></script>


      </body>
    </html>
