<style type="text/css">
    .page-heading h2 {
    color: #ffffff;
}
</style>
<!--=============== HOTEL OFFERS ===============-->
        <section id="hotel-offers" class="section-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12">
                    	<div class="page-heading">
                        	<h2>Hotels Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->                        
                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        <?php
                        include("connection.php");
                        $p = mysqli_query($var," SELECT O.title, O.Price, O.id , H.name, O.days, O.description , O.rate, O.start_date , O.end_date, H.location ,H.stars
FROM tbl_hotel_offers O, tbl_hotel H
WHERE O.h_id = H.id ");
                                while($abc = mysqli_fetch_array($p))
                                  {
                                ?>
                            <div class="item">
                                <div class="main-block hotel-block">
                                    <div class="main-img">
                                    	<a href="#">
                                        <img width="350px" src="admin/hotel-offer/<?php echo $abc['id']; ?>_(A).jpg" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                        	<ul class="list-unstyled list-inline offer-price-1">
                                            	<li class="price">Rs. <?php echo $abc['Price']; ?><span class="divider">|</span><span class="pkg"><?php echo $abc['days']; ?> Days</span></li>
                                                <li class="rating">
                                                	<span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->                                    
                                    <div class="main-info hotel-info">
                                    	<div class="arrow">
                                        	<a href="hotel-offer-detail.php?id=<?php echo $abc["id"]; ?>"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->                                        
                                    	<div class="main-title hotel-title">
                    <a href="hotel-offer-detail.php?id=<?php echo $abc["id"]; ?>"><?php echo $abc['title']; ?></a>
                                            <p>Hotel: <?php echo $abc['name']; ?></p>
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                            <?php 
                            }
                             ?>                        	                            
                        </div><!-- end owl-hotel-offers -->
                        
                        <div class="view-all text-center">
                        	<a href="hotel-offer-view.php" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end hotel-offers -->