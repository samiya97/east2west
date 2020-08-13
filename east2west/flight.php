<!doctype html>
<html lang="en">
    <head>
        <title>East2West | Airline and Flights</title>
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

              <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">

        
        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="css/magnific-popup.css">
    </head>
    <style type="text/css">
        #flight-homepage #top-bar {
    background: #000000;
}


    </style>
    
    
    <body id="flight-homepage">
    
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
        
        
		<!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-2">
            
            <div class="flexslider slider" id="slider-2">
                <ul class="slides">
                    
                    <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/flight-slider-1.jpg) 50% 15%;
	background-size:cover;
	height:100%;">
                    	<div class="meta">         
                            <div class="container">
                                <h2>Find Best Flight For a Awesome Journey</h2>
                                
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                   
                   
                </ul>
            </div><!-- end slider -->
            
            <div class="search-tabs" id="search-tabs-2">
            	<div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Flights</span></a></li>
                                
                            </ul>
        
                            <div class="tab-content">

                                <div id="flights" class="tab-pane in active">
                                    <form method="POST">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-10">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                                        <div class="form-group left-icon">
                                                            <input type="text" name="toflight" class="form-control" placeholder="From" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                                        <div class="form-group left-icon">
                                                            <input type="text" name="fromflight" class="form-control" placeholder="To" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                                        <div class="form-group">
                                                        

                                                    <select name="way" class="form-control" required="">
                                                         <option>Select Way</option>
                                                         <option value="One Way">One Way</option>
                                                         <option value="Two Way">Two Way</option>
                                                         
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>

                                                           
                                                        </div>
                                                    </div><!-- end columns -->

                                                     <div class="col-xs-12 col-sm-6 col-md-3">
                                                        <div class="form-group">
                                                            <input type="Date" name="fdate" class="form-control" placeholder="To" >
                                                           
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->								
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button name="searchbtn" class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                            
                                            
                                        </div><!-- end row -->
                                        
                                    </form>
                                </div><!-- end flights -->
                                
                                
                                
                            </div><!-- end tab-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->

<section id="flight-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    
                            <?php
                             if(isset($_POST["searchbtn"]))
                                {
                                    include("connection.php");
                                    if($_POST["way"]=="One Way"){
                                
                                $xyz = "SELECT F.f_id, F.to_flight , F.from_flight , S.price , S.takeoff , S.landing , F.duration , F.name , S.stops
FROM tbl_flight F, tbl_flight_schedule S
WHERE F.id = S.flight_name
AND F.to_flight = '".$_POST["toflight"]."'
AND F.from_flight = '".$_POST["fromflight"]."'
AND S.takeoff = '".$_POST["fdate"]."'";
}
else if($_POST["way"]=="Two Way"){
 $xyz = "SELECT F.f_id, F.to_flight , F.from_flight , (S.price * 2) price , S.takeoff , S.landing , F.duration , F.name , S.stops
FROM tbl_flight F, tbl_flight_schedule S
WHERE F.id = S.flight_name
AND F.to_flight = '".$_POST["toflight"]."'
AND F.from_flight = '".$_POST["fromflight"]."'
AND S.takeoff = '".$_POST["fdate"]."'";

}


                                  $x = mysqli_query($var,$xyz);

                              

                                  while($abc = mysqli_fetch_array($x))
                                  {

                                  ?>  


                    <div class="col-sm-6 col-md-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="admin/flight/Logo/<?php echo $abc["f_id"].".jpg"; ?>" class="img-responsive" alt="flight-img" />
                                        </div><!-- end flight-img -->
                                        
                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination"><?php echo $abc['to_flight']; ?></span>|<span class="flight-type"><?php echo $abc['from_flight']; ?></span></h3>
                                            </div><!-- end flight-title -->
                                            
                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date"><?php echo $abc['takeoff']; ?></span></li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date"><?php echo $abc['landing']; ?></span></li>
                                                </ul>
                                            </div><!-- end flight-timing -->
                                            
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">Rs. <?php echo $abc['price']; ?><span class="pkg"><?php echo $abc['duration']; ?> </span>|<span class="pkg">NO of Stay : <?php echo $abc['stops']; ?></span></li>

                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->


                    <?php 
                    }}
                     ?>





                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end flight-offers -->

        <!--================= FLIGHT OFFERS =============-->
        <section id="flight-offers" class="section-padding">
        	
        </section><!-- end flight-offers -->
        
        
        <!--============== TOP DESTINATIONS ============-->
        <section style="padding-top: 60px; padding-bottom:  60-px;" id="destinations" class="section-padding">
        	<div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-heading">
                            <h2>Available Flights</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row">

                             <?php
                                include("connection.php");
                                  $p = mysqli_query($var,"SELECT F.f_id, F.to_flight , F.from_flight , S.price , S.takeoff , S.landing , F.duration , F.name
FROM tbl_flight F, tbl_flight_schedule S
WHERE F.id = S.flight_name");
                                  while($abc = mysqli_fetch_array($p))
                                  {
                                    ?>
                        
                            <div class="col-sm-6 col-md-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="admin/flight/Logo/<?php echo $abc["f_id"].".jpg"; ?>" class="img-responsive" alt="flight-img" />
                                        </div><!-- end flight-img -->
                                        
                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination"><?php echo $abc['to_flight']; ?></span>|<span class="flight-type"><?php echo $abc['from_flight']; ?></span></h3>
                                            </div><!-- end flight-title -->
                                            
                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date"><?php echo $abc['takeoff']; ?></span></li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date"><?php echo $abc['landing']; ?></span></li>
                                                </ul>
                                            </div><!-- end flight-timing -->
                                            
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">Rs. <?php echo $abc['price']; ?><span class="pkg"><?php echo $abc['duration']; ?></span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->
                            <?php 
                            }
                             ?>
                            
                            
                            
                        </div><!-- end row -->
                        
                       
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end destinations -->
                
                
         <?php

       include('features.php');
       include('newsletter.php');
        include('footer.php');
        ?>
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-flex.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>