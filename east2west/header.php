<!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                              <li><a href="user-profile.php">My Account</a></li>
                               <li>|</li>
                                <li><a href="flight-partner.php">Flight Partner</a></li>
                                <li>|</li>
                                <li><a href="Become-a-partner.php">Hotel Partner</a></li>
                                 <li>|</li>
                                 <?php 
                               // session_start();
if(!isset($_SESSION["user"])){
                                 ?>
                                <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                <?php 
                              }
                              else { ?>
                                <li><a href="logout.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>
                              <?php }?>
                                <li><a href="registration.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->				
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
		
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <div class="header-search hidden-lg">
                    	
                    </div>
                    <a href="#" class="navbar-brand"><span><i class="fa fa-paper-plane"></i>EAST</span>2WEST</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li class="dropdown-"><a href="index.php">Home</a></li>
                        <li class="dropdown"><a href="flight.php">Flights</a></li>
                        <li><a href="hotel.php">Hotel</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li></li>-

                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->   

        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>EAST 2 WEST</h2>

                <div id="main-menu">
                    <div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                    
                    <div class="list-group panel">
                    
                        <a href="index.php" class="list-group-item active" ><span><i class="fa fa-home link-icon"></i></span>Home<span></span></a>
                       
                        
                        <a href="flight.html" class="list-group-item" ><span><i class="fa fa-plane link-icon"></i></span>Flights<span></span></a>
                        
                        
                        <a href="hotel.php" class="list-group-item" ><span><i class="fa fa-building link-icon"></i></span>Hotels<span></span></a>

                         <a href="packages.php" class="list-group-item" ><span>
                             <i class="fa fa-globe link-icon"></i>
                         </span>Package<span></span></a>

                    



                         <a href="about-us.php" class="list-group-item" ><span>
                             <i class="fa fa-user link-icon"></i>
                         </span>About Us<span></span></a>



                         <a href="contact-us.php" class="list-group-item"><span>
                             <i class="fa fa-phone link-icon"></i>
                         </span>Contact Us<span></span></a>
                       
                        </div><!-- end sub-menu -->
                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->