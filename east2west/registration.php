<!doctype html>
<html lang="en">
    <head>
        <title>Registration</title>
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
        
        <!--================ PAGE-COVER =================-->
        <section class="page-cover" id="cover-registration">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Registration Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Registration Page</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Registration</h3>
                                    <p>Register your self to avail the best travelling packages and deals.</p>
                                    <form enctype="multipart/form-data" method="POST">
                                            
                                        <div class="form-group">
                                             <input type="text" class="form-control" name="name" placeholder="Username"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="email" class="form-control" name="email" placeholder="Email"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input type="text" class="form-control" name="cnic" placeholder="Cnic no"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input type="text" class="form-control" name="Phone"  placeholder="Phone Number"  required/>
                                             <span><i class="fa fa-phone"></i></span>
                                        </div>

                                         <div class="form-group">
                                             <input type="text" class="form-control" name="Address"  placeholder="Address"  required/>
                                             <span><i class="fa fa-location-arrow"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                             <input type="password" class="form-control" name="Password" placeholder="Password"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
        
                                       
                                        <input type="submit" name="signup" class="btn btn-orange btn-block" value="Register" />
                                       
                                    </form>
                                    
                                    <div class="other-links">
                                    	<p class="link-line">Already Have An Account ? <a href="login.php">Login Here</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="images/registration.jpg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
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

<?php
if(isset($_POST["signup"]))
{
include("connection.php");
$ab="select email from tbl_user where email='".$_POST['email']."'";
$abc=mysqli_query($var,$ab);
if($R = mysqli_fetch_array($abc))
       {
    echo "<script>alert('Sorry this email has been already registered');</script>";
    echo "<meta http-equiv='refresh' content='0'>";
       }
       else{
$abe = "INSERT INTO tbl_user(name, email,cnic, phone_no, address, password)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['cnic']."', '".$_POST['Phone']."', '".$_POST['Address']."','".$_POST['Password']."')";
 mysqli_query($var,$abe);
     echo "<script>alert('Register Succesfully');</script>";
     echo "<script>window.location.assign('login.php')</script>";
}
}
?>
