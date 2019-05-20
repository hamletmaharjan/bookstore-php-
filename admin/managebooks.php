<?php
include 'layouts/header.php';
include 'layouts/sidebar.php';
?>
  <!--main content start-->
          <section id="main-content">
              <section class="wrapper">
    		  <div class="row">
    				<div class="col-lg-12">
    					<h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
    					<ol class="breadcrumb">
    						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
    						<li><i class="fa fa-table"></i>Table</li>
    						<li><i class="fa fa-th-list"></i>Basic Table</li>
    					</ol>
    				</div>
    			</div>
                  <!-- page start-->
                  
                  <div class="row">
                    <?php DisplayMessage(); ?>
                      <div class="col-lg-12">
                          <section class="panel">
                            
                              <header class="panel-heading">
                                  Advanced Table
                              </header>
                              
                              <table class="table table-striped table-advance table-hover">
                               <tbody>
                                  <tr>
                                     <th><i class="#"></i></th>
                                     <th><i class="#"></i>Book Title</th>
                                     <th><i class="#"></i> Price</th>
                                     <th><i class="#"></i> Author</th>
                                     <th><i class="#"></i> Categories</th>
                                     <th><i class="#"></i> Pages</th>
                                     <th><i class="#"></i> Published Date</th>
                                     <th><i class="#"></i> Publisher</th>
                                  </tr>
                                  <?php
                                  	$books = GetBooks($conn);
                                  	dd($books);
                                  if($books):
                                    
                                    foreach ($books as $key => $value):
                                    ?>
                                  <tr>
                                     <td><?php echo ++$key; ?></td>
                                     <td><?php echo ucwords($value['title']); ?></td>
                                     <td><?php echo $value['price']; ?></td>
                                     <td><?php echo ucwords($value['a_firstname'].' '.$value['a_lastname']); ?></td>
                                     <td><?php echo $value['categories']; ?></td>
                                     <td><?php echo $value['pages'];?></td>
                                     <td><?php echo $value['published_date'];?></td>
                                     <td><?php echo $value['publisher'];?></td>

                                     <td>
                                      <div class="btn-group">
                                          <a class="btn btn-primary" href="#"><i class="icon_check_alt2"></i></a>
                                          <!--
                                          <a class="btn btn-success" href="updateusers.php?ref=<?php echo $value['id']; ?>"><i class="icon_plus_alt2"></i></a>
                                          <a class="btn btn-danger" href="deleteuser.php?ref=<?php echo $value['id']?>" onclick="return confirm('You Sure?');"><i class="icon_close_alt2"></i></a> -->
                                      </div>
                                      </td>
                                  </tr>
                                  
                                  <?php endforeach;
                                    else:
                                  ?>  
                                  <tr>
                                    <td colspan="6"> no data found </td>
                                  </tr> 
                                  <?php  endif; ?>   

                                  -->                       
                               </tbody>
                            </table>
                          </section>
                      </div>
                  </div>
                  <!-- page end-->
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
        <!-- nicescroll -->
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <!--custome script for all page-->
        <script src="js/scripts.js"></script>


      </body>
    </html>