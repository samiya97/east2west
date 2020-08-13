<!doctype html>
<html lang="en">
    <head>
        <title>East2West | Contact Us</title>
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
    <style type="text/css">
        .custom-form {
    padding: 70px 40px 55px;
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
        
        
        <!--================ PAGE-COVER ===============-->
        <section class="page-cover" id="cover-contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Contact Us</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact Us Page</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="contact-us" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-5 no-pd-r">
                        	<div class="custom-form contact-form">
                            	<h3>Contact Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                <form method="POST" enctype="multipart/form-data">
                                        
                                    <div class="form-group">
                                         <input type="text" name="name" class="form-control" placeholder="Name"  required/>
                                         <span><i class="fa fa-user"></i></span>
                                    </div>
    
                                    <div class="form-group"> 
                                         <input type="email" name="email" class="form-control" placeholder="Email"  required/>
                                         <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    
                                    <div class="form-group">
                                         <input type="text" name="Subject" class="form-control" placeholder="Subject"  required/>
                                         <span><i class="fa fa-info-circle"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                        <textarea name="Message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                                        <span><i class="fa fa-pencil"></i></span>
                                    </div>
    								
                                    <input type="submit" name="Sendmsg" class="btn btn-orange btn-block" value="Send" />
                                </form>
                            </div><!-- end contact-form -->
                        </div><!-- end columns -->
                        
                        <div class="col-sm-12 col-md-7 no-pd-l">
                            <div class="map">
                                <iframe src=		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                            </div><!-- end map -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end contact-us -->
        </section><!-- end innerpage-wrapper -->
        
        
       
        
        
         
           <?php
        
        include('features.php');
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

if(isset($_POST["Sendmsg"]))
{
include("connection.php");
$ab = "INSERT INTO tbl_contact(name, email, subject, messge) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['Subject']."','".$_POST['Message']."')";


mysqli_query($var,$ab);



}

?>
