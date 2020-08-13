<!--=============== TOUR OFFERS ===============-->
        <section id="tour-offers" class="section-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12">
                    	<div class="page-heading">
                        	<h2 style="color: #fff;">Packages</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                         <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                            <?php
                                include("connection.php");
                                  $p = mysqli_query($var,"SELECT T.id,T.p_id, P.title, P.place_name , P.hotel_name, P.days, P.food , P.description , T.start_date , T.end_date , T.capacity ,T.amount , T.amount
FROM tbl_package P, tbl_tour_detail T
WHERE T.p_id = P.id
AND Status = 'Enable' ");
                                  while($abc = mysqli_fetch_array($p))
                                  {

                                  ?>
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                    	<a href="#">
                                        	<img src="admin/package-images/<?php echo $abc['p_id']; ?>_(A).jpg" class="img-responsive" alt="tour-img" />
                                    	</a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price">Rs. <?php echo $abc['amount']; ?><a href="tour-detail.php?id=<?php echo $abc["id"]; ?>" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                    	<div class="main-title tour-title">
                                            <a href="#"><?php echo $abc['title']; ?></a>
                                            <p><?php echo $abc['place_name']; ?></p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            <?php 
                            }
                             ?>
                            
                            
                        </div><!-- end owl-tour-offers -->
                        
                        <div class="view-all text-center">
                        	<a href="packages.php" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end tour-offers -->