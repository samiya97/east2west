<?php session_start();
include("connection.php");
if(!isset($_SESSION["user"])){
echo "<script>window.location.assign('login.php')</script>";
  }else{


 ?>
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
             
        
          
        <!--========== PAGE-COVER =========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">My Account</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="dashboard-heading">
                                <h2>Travel <span>Profile</span></h2>
                                <p>All your trips booked with us will appear here and you'll be able to manage everything!</p>
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                                
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                        	<li class="active"><a href="user-profile.php"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                            <li><a href="booking.php"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>

                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                		<h2 class="dash-content-title">My Profile</h2>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Profile Details</h4></div>
                                            <div class="panel-body">
             <div class="modal-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" />
                            </div><!-- end form-group -->
                        
                            
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" />
                            </div><!-- end form-group -->
                            
                             <div class="form-group">
                                <label>Your Cnic</label>
                                <input type="text" class="form-control" placeholder="Cnic no" name="cnic" />
                            </div><!-- end form-group -->

                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" />
                            </div><!-- end form-group -->
                            
                            
                            <div class="form-group">
                                <label>Your Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" />
                            </div><!-- end form-group -->


                             <div class="form-group">
                                
                                <input type="submit" class="btn btn-orange" value="Update" name="updatebtn" />
                            </div><!-- end form-group -->
                            
                           
                        </form>
                    </div
      
                                     
                                     <!-- end row -->
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->

 
     <?php
        include('newsletter.php');
        include('footer.php');
        ?>

        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
<?php }
?>
<?php

if(isset($_POST["updatebtn"]))
{
include("connection.php");
$id = $_GET['id'];
mysqli_query($var,"UPDATE tbl_user SET name='".$_POST['name']."', email='".$_POST['email']."', cnic='".$_POST['cnic']."', phone_no='".$_POST['phone']."' , address = '".$_POST['address']."'WHERE id = '".$id."'");

 echo"<script>alert('Profile Updated Succesfully');</script>";
echo"<script>window.location.assign('user-profile.php?id=$id')</script>";
echo "<meta http-equiv='refresh' content='0'>";

}



?>
