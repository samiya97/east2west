<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <title>East2West | Hotel Special Offers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <!--Jquery UI Stylesheet-->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
    </head>
    <style type="text/css">
.pa {
    width: 250px;
    height: 20px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.main-img {
    position: relative;
    overflow: hidden;
    height: 210px;
}
    </style>
    
    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
    
    	<!--======== SEARCH-OVERLAY =========-->       
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
       <?php
        include('header.php');
        ?>
        
        
        <!--=================== PAGE-COVER =================-->
        <section class="page-cover" id="cover-hotel-grid-list">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Hotel Special Offers</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Hotel Special Offers</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="hotel-grid" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 content-side">
                            <div class="row">


                                <?php
                                include("connection.php");
                                  $p = mysqli_query($var,"SELECT O.title, O.Price, O.id ,O.h_id, H.name, O.days, O.description , O.rate, O.start_date , O.end_date, H.location ,H.stars
FROM tbl_hotel_offers O, tbl_hotel H
where o.h_id=h.id");
                                  while($abc = mysqli_fetch_array($p))
                                  {

                                  ?>
                            
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block h-grid-block">
                                    	<div class="main-img h-grid-img">
                                        	<a href="hotel-detail-left-sidebar.html">
                                    			<img width="350px" src="admin/hotel-offer/<?php echo $abc['id']; ?>_(A).jpg" class="img-responsive" alt="hotel-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">Rs. <?php echo $abc['Price']; ?><span class="divider">|</span><span class="pkg"><?php echo $abc['days']; ?> Days</span></li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                    	</div><!-- end h-grid-img -->
                                        
                                         <div class="block-info h-grid-info">
                                         	<div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div><!-- end rating -->
                                            
                                         	<h3 class="block-title"><a href="hotel-offer-detail.php?id=<?php echo $abc["id"]; ?>"><?php echo $abc['title']; ?></a></h3>
                                            <p class="block-minor">Hotel: <?php echo $abc['name']; ?></p>
                                            <p class="pa"><?php echo $abc['description']; ?></p>
                                            <div class="grid-btn">
                                            	<a href="hotel-offer-detail.php?id=<?php echo $abc["id"]; ?>" class="btn btn-orange btn-block btn-lg">View More</a>
                                            </div><!-- end grid-btn -->
                                         </div><!-- end h-grid-info -->
                                    </div><!-- end h-grid-block -->
                                </div><!-- end columns -->
                                

                                <?php 
                            }
                             ?>
                                
                                
                            </div><!-- end row -->
                            
                           
                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end hotel-grid -->
        </section><!-- end innerpage-wrapper -->
        
        
        <?php
        include('features.php');
        include('newsletter.php');
        include('footer.php');
        
        ?>
        
        
        
        
        
        
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
		<script src="js/custom-price-slider.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
