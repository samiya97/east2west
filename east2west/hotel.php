<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <title>East2West | Hotel | Tours and Travels</title>
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

    <script>


function showPost(str)
{
    if(str == "")
    {
    document.getElementById("ShowPost").innerHTML="";
    return;
    }
    
    <!---When Updated Version Browser--->
    if(window.XMLHttpRequest)
    {       
    
        xmlhttp = new XMLHttpRequest();
    }
    <!---When Old Version Browser--->
    else
    {
        xmlhttp = new ActiveXObejct("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
    
            document.getElementById("ShowPost").innerHTML = xmlhttp.responseText;
        }       
    }
    xmlhttp.open("GET","ShowPosttwo.php?country_id="+str,true);
    xmlhttp.send();     
}


</script>

    <style>
        
        .innerpage-section-padding {
    padding-top: 0px;
    padding-bottom: 147px;
}
    </style>
    
    
    <body id="hotel-homepage">
    
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
        
            <div class="flexslider slider" id="slider-3">
                <ul class="slides">
                    
                    <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hotel-slider-1.jpg) 50% 65%;
	background-size:cover;
	height:100%;">
                    </li><!-- end item-1 -->
                    
                    <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hotel-slider-1.jpg) 50% 65%;
	background-size:cover;
	height:100%;">
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
            
            <div class="search-tabs" id="search-tabs-3">
            	<div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 no-pd-r">
                        
                            <ul class="nav nav-tabs">
                               
                                <li class="active"><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hotels</span></a></li>
                                
                            </ul>

                            <div class="tab-content">

                               
                                
                                <div id="hotels" class="tab-pane in active">
                                    <form method="POST">
                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group right-icon">
                                                            <label>Country</label>
                                                          <select name="country" class="form-control" onChange="showPost(this.value)">
                                                        <option selected="">Country</option>
                                                            <?php
                                                        include("connection.php");
                                                          $p = mysqli_query($var,"Select * from country_list");
                                                          while($abc = mysqli_fetch_array($p))
                                                          {
                                                            ?>

                                                            <option value="<?php echo $abc['country_id']; ?>"><?php echo $abc['country_name']; ?></option>
                                                            <?php
                                                        }

                                                        ?>
                                                    </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div>
                                                     
                                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                                        
                                                        <div id="ShowPost" class="form-group left-icon">

                                                           
                                                        </div>

                                                    </div>
                                                     
                                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                                      
                                                        <div id="Show" class="form-group left-icon">
                                                           
                                                        </div>
                                                    </div>
                                                     
                                                     </div><!-- end row -->								
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group right-icon">
                                                            <label>Persons</label>

                                                    <select name="Persons" class="form-control" required="">
                                                         <option>Select an option</option>
                                                         <option value="1 Adult">1 Adult</option>
                                                         <option value="1 Couple">1 Couple</option>
                                                         <option value="1 Couple 2 Kids Bed">1 Couple 2 Kids Bed</option>
                                                         <option value="6 Adult">6 Adult</option>
                                                         <option value="Rest house (8 to 10 Persons)">Rest house (8 to 10 Persons)</option>
                                                    </select>

                                                        <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                  
                                                    
                                                  
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                                <input type="submit" name="searchbtn" value="Search" class="btn btn-orange" >
                                               
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hotels -->

                                
                                
                                
                            </div><!-- end tab-content -->

                        </div><!-- end columns -->
                        
                       
                                 
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->
		
        <section class="innerpage-wrapper">
            <div id="hotel-grid" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">         


                     <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 ">
                            <div class="row">
                            

                             <?php
                             if(isset($_POST["searchbtn"]))
                                {
                                include("connection.php");
                                $rtt="Select R.room_no ,RT.types, R.id , R.price, H.name ,  H.description , H.location , H.rating ,  H.Stars 
FROM tbl_room R, tbl_hotel H, tbl_room_type RT
WHERE R.h_id = H.id
AND R.rt_id = RT.rid
AND H.city = '".$_POST["city"]."'
AND R.person = '".$_POST["Persons"]."'
AND H.Status = 'Approve'
AND R.id not IN(SELECT room_id from tbl_hotel_booking)";

                                  $x = mysqli_query($var,$rtt);

                                  while($abc = mysqli_fetch_array($x))
                                  {

                                  ?>  


                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block h-grid-block">
                                        <div class="main-img h-grid-img">
                                            <a href="hotel-detail-left-sidebar.html">
                                                <img src="admin/Hotel/room/<?php echo $abc['id']; ?>_(A).jpg" class="img-responsive" alt="hotel-img">
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">Rs. <?php echo $abc['price']; ?> <span class="divider">|</span><span class="pkg">Per Night</span></li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end h-grid-img -->
                                        
                                         <div class="block-info h-grid-info">
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div><!-- end rating -->
                                            
                                            <h3 class="block-title"><a href="hotel-room-detail.php?id=<?php echo $abc["id"]; ?>"><?php echo $abc['name']; ?></a></h3>
                                            <p class="block-minor">Room Type: <?php echo $abc['types']; ?></p>
                                            
                                            <div class="grid-btn">
                                                <a href="hotel-room-detail.php?id=<?php echo $abc["id"]; ?>" class="btn btn-orange btn-block btn-lg">View More</a>
                                            </div><!-- end grid-btn -->
                                         </div><!-- end h-grid-info -->
                                    </div><!-- end h-grid-block -->
                                </div><!-- end columns -->

                                <?php
                                
                                }
                            }

                                  ?>  
                                
                                
                                
                            </div><!-- end row -->
                            
                           
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end hotel-grid -->
        </section>
       
        
		
         <?php
        include('hotel-offer.php');

        include('newsletter.php');
        
        include('footer.php');
        
      


        ?>

		
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-flex.js"></script>
        <script src="js/custom-owl.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <script src="js/custom-gallery.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>


<script>

function show(s)
{
    if(s == "")
    {
    document.getElementById("Show").innerHTML="";
    return;
    }
    
    <!---When Updated Version Browser--->
    if(window.XMLHttpRequest)
    {       
    
        xmlhttp = new XMLHttpRequest();
    }
    <!---When Old Version Browser--->
    else
    {
        xmlhttp = new ActiveXObejct("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
    
            document.getElementById("Show").innerHTML = xmlhttp.responseText;
        }       
    }
    xmlhttp.open("GET","Showtwo.php?state_id="+s,true);
    xmlhttp.send();     
}

</script>

