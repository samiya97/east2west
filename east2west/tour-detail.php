<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <title>East2West | Tours and Travels</title>
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
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">
        
        <!-- Slick Stylesheet -->
		<link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
    </head>
    <style type="text/css">
        
        .detail-tabs .tab-pane .tab-text {
    padding-top: 0px;

    .detail-tabs .tab-pane .tab-text p {
    width: 100%;
    line-height: 1.55em;
}
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

         <?php
                                include("connection.php");
                              
                                $tid=$_GET['id'];
                                  $p = mysqli_query($var,"select c.id, C.title, C.description,  s.start_date,  s.end_date, s.capacity, s.status, s.amount, C.days from tbl_tour_detail S, tbl_package C where s.id = '$tid' and s.p_id = C.id ");
                             
                                  if ($abc = mysqli_fetch_array($p))
                                  {
                                    ?>


        
        <!--================ PAGE-COVER ================-->
        <section class="page-cover" id="cover-tour-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title"><?php echo $abc['title']; ?></h1>
                        <ul class="breadcrumb">
                            <li><a href="packages.php">Packages</a></li>
                            <li class="active"><?php echo $abc['title']; ?></li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="tour-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">Rs. <?php echo $abc['amount']; $amt=$abc['amount']; ?></h2>
                            
                            	<div class="booking-form">
                                	<h3>Book Tour</h3>
                                    <p>Find your dream tour today</p>
                                     <?php 
                                //session_start();
if(!isset($_SESSION["user"])){
                                 ?>
                                    <form method="POST">
                                         <p><a href="login.php">Login to your account</a></p>
                                        <p> Or Register Yourself From Here </p>
                                    	<div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Name" name="name" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="email" class="form-control" placeholder="Email" name="email" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="CNIC" name="cnic" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Phone" name="phone" required/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control dpd3" placeholder="Your Address" name="address" required/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control dpd3" placeholder="Password" name="pass" required/>
                                        </div>

                                        
                                         <p>Book a tour Right Now</p>
                                        <div class="form-group">
                                    		<input type="date" class="form-control dpd3" placeholder="Booking Date" name="bdate" required/>
                                        </div>
                                        

                                        <div class="form-group">
                                            <input type="text" class="form-control dpd3" placeholder="No of persons" name="person" required/>
                                        </div>
                      
                                        
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Payment Method</option>
                                                <option>Credit Card</option>
                                                <option>Cash</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        
                                        <div class="checkbox custom-check">
                                        	<input type="checkbox" id="check01" name="checkbox" required />
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <input type="submit" name="rbooking" class="btn btn-block btn-orange" value="Confirm Booking" style="color: orange;" \>
                                    </form>
                                    <?php 
                                }

                                else {
                                    ?>
                                    <form method="POST">
                                 <p>Book a tour Right Now</p>
                                        <div class="form-group">
                                            <input type="date" class="form-control dpd3" placeholder="Booking Date" name="bdate" required/>
                                        </div>
                                        

                                        <div class="form-group">
                                            <input type="text" class="form-control dpd3" placeholder="No of persons" name="person" required/>
                                        </div>
                      
                                        
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Payment Method</option>
                                                <option>Credit Card</option>
                                                <option>Cash</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        
                                        <div class="checkbox custom-check">
                                            <input type="checkbox" id="check01" name="checkbox" required />
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <input type="submit" name="booking" class="btn btn-block btn-orange" value="Confirm Booking" style="color: orange;"\>
                                    </form>
                                    <?php

                                }?>
                         
                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Need Help</h3>
                                        <p>For any query feel free to contact</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            
                            <div class="detail-slider">
                                <div class="feature-slider">
                                    <div><img src="admin/package-images/<?php echo $abc['id']."_(A).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                     <div><img src="admin/package-images/<?php echo $abc['id']."_(B).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                      <div><img src="admin/package-images/<?php echo $abc['id']."_(C).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                              
                                </div><!-- end feature-slider -->
                            	
                                <div class="feature-slider-nav">
                                       <div><img src="admin/package-images/<?php echo $abc['id']."_(A).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                      <div><img src="admin/package-images/<?php echo $abc['id']."_(B).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                       <div><img src="admin/package-images/<?php echo $abc['id']."_(C).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                         <div><img src="admin/package-images/<?php echo $abc['id']."_(A).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                      <div><img src="admin/package-images/<?php echo $abc['id']."_(B).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                </div><!-- end feature-slider-nav -->
                                
                                <ul class="list-unstyled features tour-features">
                                	<li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data"><?php echo $abc['capacity']; ?></p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data"><?php echo $abc['days']; ?> DAYS</p></div></li>
                                    <!-- <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data">10% OFF</p></div></li> -->
                                </ul>
                            </div><!-- end detail-slider -->  

                            <div class="detail-tabs">
                            	<ul class="nav nav-tabs nav-justified">
                                   
                                    <li class="active"><a href="#tour-information" data-toggle="tab"><h3><b> <br/>Tour Information</b></h3></a></li>
                             
                                </ul>
                            	
                                <div class="tab-content">

                                    <div id="tour-information" class="tab-pane in active">
                                    	<div class="row">
                                    		<div class="tab-text">
                                        		<h3>Description</h3>
                                                <p>Start Date:</p>
                                                <p><?php echo $abc['start_date']; ?></p>
                                                <p>End Date:</p>
                                                <p><?php echo $abc['end_date']; ?></p>
                                                <p><?php echo $abc['description']; ?></p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end hotel-overview -->
                                	
                                    
                                    
                                    
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            
                            
                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end tour-detail -->
        </section><!-- end innerpage-wrapper -->

    <?php 
}
   ?>
        
        
        <!--======================= BEST FEATURES =====================-->
        <!-- end best-features -->
         <?php 
        include('features.php');
        ?>
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <!-- end newsletter-1 -->
         <?php 
        include('newsletter.php');
        ?>
        
        <!--======================= FOOTER =======================-->
         <?php 
        include('footer.php');
        ?><!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <script src="js/custom-slick.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>

<?php
if(isset($_POST["rbooking"]))
{
include("connection.php");
$ab="select email from tbl_user where email='".$_POST['email']."'";
$abc=mysqli_query($var,$ab);
    if($R = mysqli_fetch_array($abc))
       {
    echo "<script>alert('Sorry this email has been already registered please login for booking');</script>";
    echo "<meta http-equiv='refresh' content='0'>";
       }
    else{
$abe = "INSERT INTO tbl_user(name, email,cnic, phone_no, address, password)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['cnic']."', '".$_POST['phone']."', '".$_POST['address']."','".$_POST['pass']."')";
 mysqli_query($var,$abe);
 $select="select * from tbl_user where email='".$_POST['email']."'";
 $result=mysqli_query($var,$select);

        if($s = mysqli_fetch_array($result)){
            $u_id=$s['id'];
            $per=$_POST['person'];
            $t_amt=$amt*$per;
 $abb= "INSERT INTO tbl_booking_detail (user_id,t_id,no_of_purchase,book_date,t_amount) VALUES ('".$u_id."','".$tid."','".$per."','".$_POST['bdate']."','".$t_amt."')";  
  mysqli_query($var,$abb); 
            echo "<script>alert('Thanks for Booking visit your account');</script>";
             echo "<script>window.location.assign('login.php')</script>";
 
            }

        }
}

if(isset($_POST["booking"])){

            $u_id=$_SESSION['id'];
            $per=$_POST['person'];
            $t_amt=$amt*$per;
 $abb= "INSERT INTO tbl_booking_detail (user_id,t_id,no_of_purchase,book_date,t_amount) VALUES ('".$u_id."','".$tid."','".$per."','".$_POST['bdate']."','".$t_amt."')";  
  mysqli_query($var,$abb); 
            echo "<script>alert('Thanks for Booking visit your account');</script>";
            echo "<script>window.location.assign('booking.php')</script>";

            

}
?>
