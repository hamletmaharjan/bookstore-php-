<?php

include 'layouts/header.php';
include 'layouts/sidebar.php';

$authorId = $_GET['ref'];
$author = GetAuthorById($conn,$authorId);


if(isset($_POST['savebtn'])){
  
  if(UpdateAuthor($conn,$_POST,'table_author',$authorId)){
    ShowMessage("Data Updated Successfully","success");
    redirection('manageauthors.php'); 
  } 
} 

?>

        

         <!--main content start-->
          <section id="main-content">
              <section class="wrapper">
    		  <div class="row">
    				<div class="col-lg-12">
    					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Update Author </h3>
    					<ol class="breadcrumb">
    						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
    						<li><i class="icon_document_alt"></i>Authors</li>
    						<li><i class="fa fa-file-text-o"></i>Update Author</li>
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
                                  <form class="form-horizontal " method="POST">
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">First Name</label>
                                          <div class="col-sm-10">
                                              <input type="text" name="a_firstname" value="<?php echo $author['a_firstname']; ?>" class="form-control">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Last Name</label>
                                          <div class="col-sm-10">
                                              <input type="text" name="a_lastname" value="<?php echo $author['a_lastname']; ?>" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Age</label>
                                          <div class="col-sm-10">
                                              <input type="number" name="age" value="<?php echo $author['age']; ?>" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Email</label>
                                          <div class="col-sm-10">
                                              <input type="email" name="email" value="<?php echo $author['email']; ?>" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                          <label class="col-sm-2 control-label">Contact</label>
                                          <div class="col-sm-10">
                                              <input type="text" name="contact" value="<?php echo $author['contact']; ?>" class="form-control">
                                          </div>
                                     </div>
                                     <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button type="submit" name="savebtn"class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </div>
                     
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
