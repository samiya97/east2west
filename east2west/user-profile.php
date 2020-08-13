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
                                            <li  ><a href="room-booking.php"><span><i class="fa fa-briefcase"></i></span>Rooms</a></li>

                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                		<h2 class="dash-content-title">My Profile</h2>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Profile Details</h4></div>
                                            <div class="panel-body">
                                            	<div class="row">
                                                	<div class="col-sm-5 col-md-4 user-img">
                                                   <?php

                                                     include("connection.php");
                                                    $id=$_SESSION['id'];
                                                    ?>
                                                        <img src="user-photo/<?php echo $id.".jpg"; ?>" class="img-responsive" alt="user-img" />
                                                   
                                                        <br>
                                                        <form method="POST" enctype="multipart/form-data">
                                                        <input type="file"   name="photoa" />
                                                        <br>

                                                        <input type="submit" class="btn btn-orange" value="Upload " name="uploadbtn" />
                                                    </form>
                                                    </div><!-- end columns -->
                                                    <?php
                                                    
                                                    $p = mysqli_query($var,"Select * from tbl_user where id = '$id'");
                                  if($xyz = mysqli_fetch_array($p))
                                  {
                    ?>
                                                    <div class="col-sm-7 col-md-8  user-detail">
                                                        <ul class="list-unstyled">
                                                            <li><span>Name:</span> <?php echo $xyz['name']; ?></li>
                                                            <li><span>Email:</span> <?php echo $xyz['email']; ?></li>
                                                            <li><span>CNIC:</span> <?php echo $xyz['cnic']; ?></li>
                                                            <li><span>Phone:</span> <?php echo $xyz['phone_no']; ?></li>
                                                            <li><span>Address:</span> <?php echo $xyz['address']; ?></li>
                                                        </ul>
                                                        <?php 
                                                    }
                                                        ?>
                                                        <button class="btn"><a href='<?php echo "profile-update.php?id=$id"; ?>'>Edit Profile</a></button>
                                                   	</div><!-- end columns -->
                                                    
                                                    <!-- end columns -->
                                                </div><!-- end row -->
                                                
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

if(isset($_POST["uploadbtn"]))
{
include("connection.php");


    $jf = mysqli_query($var,"Select id from tbl_user where id = '$id'");
    if($RR = mysqli_fetch_array($jf))
    {
       move_uploaded_file($_FILES["photoa"]["tmp_name"],"user-photo/".$RR["id"].".jpg"); 

    }


     echo "<script>alert('Image uploaded  Succesfully');</script>";
     echo "<meta http-equiv='refresh' content='0'>";




}

?>