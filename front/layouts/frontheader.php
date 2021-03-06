<?php
include '../config/call.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Book Store</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Top Header Area =================-->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="top_header_left">
                            <div class="selector">
                                <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                  <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                </select>
                            </div>
                            <select class="selectpicker usd_select">
                                <option>Rs</option>
                            </select>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top_header_middle">
                            <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+977 9841363126</span></a>
                            <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@bookstore.com</span></a>
                            <img src="img/booklogo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="top_right_header">
                            <ul class="header_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <!-- may use later
                            <?php
                            if(isset($_SESSION['customer']) && isset($_SESSION['c_id'])):
                            ?>
                            <ul class="top_right">
                                <li class="user">
                                    <a> 
                                    <i class="icon-user icons">
                                        </i>
                                        <i class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" style="font-style: normal; font-size: 14px;">Hi, <?php echo $_SESSION['customer']; ?>
                                <i aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" style="font-style: normal;">Log out</a></li>
            
                                </ul>
                            </i>
                            
                                </a>
                            </li>
                            <li class="cart"><a href="cart.php"><i class="icon-handbag icons"></i></a></li> 
                            </ul>
                            <?php else:
                            ?>

                            <ul class="top_right">
                                <li class="user"><a href="#"><i class="icon-user icons"></i></a>Login</li>
                                <li class="cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                            </ul>

                        <?php endif; ?>

                    -->

                            
                            <ul class="top_right">
                                <?php
                                if(isset($_SESSION['customer']) && isset($_SESSION['c_id'])):
                                ?>
                                <li class=""><?php echo $_SESSION['customer']; ?></li>
                                <li class=""><a href="logout.php">logout</i></a></li>
                                
                                
                                <?php else: ?>
                                
                                <li class="user"><a href="login.php">login</i></a></li>

                            <?php endif; ?>
                                <li class="cart"><a href="cart.php"><i class="icon-handbag icons"></i></a></li> 
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Top Header Area =================-->
        
        <!--================Menu Area =================-->
        <header class="shop_header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav categories">
                            <li class="nav-item">
                                <select class="selectpicker" name="picker">
                                    <option>Navigation</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="popularbooks.php">Popular Books</a></li>
                                    <li class="nav-item"><a class="nav-link" href="booklist.php?ref=lb">Latest Books</a></li>
                                    <li class="nav-item"><a class="nav-link" href="booklist.php?ref=cb">Cheapest Books</a></li>
                                    <li class="nav-item"><a class="nav-link" href="booklist.php?ref=ab">All Books</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="bookbycategories.php?ref=aca">Academics</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookbycategories.php?ref=bio">Biography</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookbycategories.php?ref=fic">Fiction</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookbycategories.php?ref=his">History</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookbycategories.php?ref=med">Medical Science</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookbycategories.php?ref=poe">Poetry</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookbycategories.php?ref=oth">Others</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================End Menu Area =================-->