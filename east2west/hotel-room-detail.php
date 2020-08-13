<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <title>Hotel Room Detail </title>
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
        
<!--         -Date-Picker Stylesheet-->
        <!-- <link rel="stylesheet" href="css/datepicker.css"> --> 
        
        <!-- Slick Stylesheet -->
		<link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">


    </head>
       
    
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
                              
                                $rid=$_GET['id'];
                                
                                    $rtt="Select R.room_no , R.h_id , R.rt_id, R.person,R.price, R.id , R.price, H.name ,  H.description , H.location , H.rating ,  H.Stars ,RT.types
FROM tbl_room R, tbl_hotel H, tbl_room_type RT
WHERE R.h_id = H.id
AND R.rt_id = RT.rid
and R.id='$rid'
and RT.h_id=H.id";
//echo $rtt;
                                  $x = mysqli_query($var,$rtt);

                              
                                  if ($abc = mysqli_fetch_array($x))
                                  {
                                    ?>
        <!--================= PAGE-COVER ================-->
        <section class="page-cover" id="cover-hotel-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title"><?php echo $abc['name']; ?></h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active"><?php echo $abc['name']; ?></li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="hotel-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">Rs. <?php echo $abc['price']; $amt=$abc['price'] ?></h2>
                            
                            	<div class="booking-form">
                                	<h3>Book Hotel</h3>
                                    <p>Find your dream hotel today</p>
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

                                        <p>Book a Room Right Now</p>
                                       
                                        
                                        <div class="form-group">
                                    		<input type="date" class="form-control dpd1" placeholder="Check In Date"name="chkin"
                                             required/>                                       		<i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="date" class="form-control dpd2" placeholder="check out Date"name="chkout" required/>                                       		<i class="fa fa-calendar"></i>
                                        </div>
                                        
               

                                       
                                        
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Payment Method</option>
                                                <option>Credit Card</option>
                                                <option>Paypal</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        
                                        <div class="checkbox custom-check">
                                        	<input type="checkbox" id="check01" name="checkbox"/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange" name="rbooking">Confirm Booking</button>
                                    </form>
     <?php 
                                }

                                else {
                                    ?>
                                     <p>Book a Room Right Now</p>
                                     <form method="POST">

                                        <div class="form-group">
                                            <input type="date" class="form-control dpd1" placeholder="check in Date"name="chkin"
                                             required/>                                           <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="date" class="form-control dpd2" placeholder="check out Date"name="chkout" required/>                                               <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Payment Method</option>
                                                <option>Credit Card</option>
                                                <option>Paypal</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        
                                        <div class="checkbox custom-check">
                                            <input type="checkbox" id="check01" name="checkbox"/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange" name="booking">Confirm Booking</button>
                                    </form>
                                    <?php 
}
                                    ?>

                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                            
                            <div class="row">
                                <!-- end columns -->
                                
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
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(A).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(B).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(C).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                              
                                </div><!-- end feature-slider -->
                                
                                <div class="feature-slider-nav">
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(A).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(B).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(C).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(A).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="admin/Hotel/room/<?php echo $abc['id']."_(B).jpg"; ?>" class="img-responsive" alt="feature-img"/></div>
                                </div><!-- end feature-slider-nav -->
                            </div>  <!-- end detail-slider -->

                            <div class="detail-tabs">
                            	<ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#hotel-overview" data-toggle="tab">Hotel Overview</a></li>
                                    <li><a href="#restaurant" data-toggle="tab">Restaurant</a></li>
                                
                                </ul>
                            	
                                <div class="tab-content">

                                    <div id="hotel-overview" class="tab-pane in active">
                                    	<div class="row">
                                    		
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3>Hotel Offer Overview</h3>
                                                <p><?php echo $abc['description']; $hid=$abc['h_id'];?></p>
                                            </div> <!-- end columns -->
                                        </div> <!-- end row -->
                                    </div> <!-- end hotel-overview -->
                                	
                                     <?php
                                include("connection.php");
                                
                                $p = mysqli_query($var,"SELECT * FROM tbl_hotel_services where h_id ='$hid' ");
                                  while($xyz = mysqli_fetch_array($p))
                                  {

                                  ?>

                                    <div id="restaurant" class="tab-pane">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="admin/Hotel/logo/<?php echo $xyz['id'].".jpg"; ?>" class="img-responsive" alt="hotel-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3><?php echo $xyz['service_name']; ?></h3>
                                                <p><?php echo $xyz['description'];?></p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end restaurant -->
                                    
                                    <?php 
                                    }
                                     ?>
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            
                           
                            
                            
                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end hotel-details -->
        </section><!-- end innerpage-wrapper -->
        
            
        <?php

    }
        include('features.php');
        include('newsletter.php');
        include('footer.php');
        ?>
                
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
       <!--  <script src="js/bootstrap-datepicker.js"></script> -->
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
           
            $rooms=$_GET['id'];
        
 $abb= "INSERT INTO tbl_hotel_booking (user_id,h_id,offer_id,room_id,check_in,check_out,book_date) VALUES ('".$u_id."','".$hid."','0','".$rooms."','".$_POST['chkin']."','".$_POST['chkout']."','".date('Y/m/d') ."')"; 

echo $abb;

  mysqli_query($var,$abb); 
            echo "<script>alert('Thanks for Booking visit your account');</script>";
            echo "<script>window.location.assign('login.php')</script>";
 
            }


        }
}

if(isset($_POST["booking"])){

              $u_id=$_SESSION['id'];
         
             $rooms=$_GET['id'];
        
 $abb= "INSERT INTO tbl_hotel_booking (user_id,h_id,offer_id,room_id,check_in,check_out,book_date) VALUES ('".$u_id."','".$hid."','0','".$rooms."','".$_POST['chkin']."','".$_POST['chkout']."','".date('Y-m-d')."')"; 
 echo $abb;
  mysqli_query($var,$abb); 
            echo "<script>alert('Thanks for Booking visit your account');</script>";
  //echo "<script>alert($rooms);</script>";
            echo "<script>window.location.assign('room-booking.php')</script>";

            

}
?>