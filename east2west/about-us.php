<!doctype html>
<html lang="en">
    <head>
        <title>EastWest | About Us</title>
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
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="css/magnific-popup.css">
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
            
        
        
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">About Us Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">About Us Page</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="about-us">

                <div id="about-content" class="section-padding"> 
                    <div class="container">
                        <div class="row">
                        	<div class="col-sm-12">
                                <div class="flex-content">
                                
                                    <div class="flex-content-img about-img">
                                        <img src="images/about-us.jpg" class="img-responsive" alt="about-img" />
                                    </div><!-- end about-img -->
                                    
                                    <div class="about-text">
                                        <div class="about-detail">
                                            <h2>About East2West</h2>
                                            <p>About East2West
East2West, the world's largest travel site*, enables travelers to unleash the full potential of every trip. With 702 million reviews and opinions covering the world's largest selection of travel listings worldwide – covering 8 million accommodations, airlines, experiences, and restaurants -- East2West provides travelers with the wisdom of the crowds to help them decide where to stay, how to fly, what to do and where to eat. East2West also compares prices from more than 200 hotel booking sites so travelers can find the lowest price on the hotel that's right for them. East2West-branded sites are available in 49 markets, and are home to the world's largest travel community of 490 million average monthly unique visitors**, all looking to get the most out of every trip. East2West: Know better. Book better. Go better.</p>
                                        </div><!-- end about-detail -->
                                    </div><!-- end about-text -->
                                    
                                </div><!-- end flex-content -->
							</div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end about-content -->
                
                
               
                            
            </div><!-- end about-us -->
        </section><!-- end innerpage-wrapper -->
        
        
         <?php
        include('features.php');
        include('newsletter.php');
       include('footer.php');
        ?>
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-owl.js"></script>
		<script src="js/custom-video.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
