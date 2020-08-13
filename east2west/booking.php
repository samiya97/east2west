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
    
    
    <body id="booking">
    
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
             

        <!--========= PAGE-COVER ==========-->
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
                                        	<li ><a href="user-profile.php"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                            <li  class="active"><a href="booking.php"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                            <li  ><a href="room-booking.php"><span><i class="fa fa-briefcase"></i></span>Rooms</a></li>
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                		<h2 class="dash-content-title">Trips You have Booked!</h2>
                                        <div class="dashboard-listing booking-listing">
                                        	<div class="dash-listing-heading">
                                               
                                            </div>
                                            
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                    </tbody>
                                                    <?php 
                                                    $u_id=$_SESSION['id'];
                                                    include("connection.php");
                                  $p = mysqli_query($var,"select b.id , b.user_id ,b.t_id ,b.no_of_purchase,b.book_date , b.t_amount , c.title , c.days ,d.start_date,d.end_date , d.amount
 from tbl_booking_detail b, tbl_package c ,tbl_tour_detail d , tbl_user u
 where u.id='$u_id' and b.user_id=u.id and b.t_id=d.id and c.id=d.p_id");
                                  while($abc = mysqli_fetch_array($p))
                                  {

                                                    ?>
                                                        <tr>
                                                            <td class="dash-list-icon booking-list-date"><div class="b-date"><h3><?php echo $abc['days'];?></h3><p>Days</p></div></td>
                                                            <td class="dash-list-text booking-list-detail">
                                                            	<h3><?php echo $abc['title'];?></h3>
                                                                <ul class="list-unstyled booking-info">
                                                                <li><span>Booking Date:</span> <?php echo $abc['book_date'];?></li>
                                                                <li><span>No Of Persons:</span> <?php echo $abc['no_of_purchase'];?></li>
                                                                <li><span>Start Date:</span> <?php echo $abc['start_date'];?></li>
                                                                <li><span>End Date:</span> <?php echo $abc['end_date'];?></li>
                                                                <li><span>Per Person Rate:</span> <?php echo $abc['amount'];?></li>
                                                                <li><span>Total Amount:</span> <?php echo $abc['t_amount'];?></li>
                                                                </ul>
                                                            </td>
                                                            
                                                        </tr>
                                         <?php 
                                     }
                                         ?>
                                                    </tbody>
                                                </table>
                                            </div><!-- end table-responsive -->
                                        </div><!-- end booking-listings -->
                                        
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
