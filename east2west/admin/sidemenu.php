<style>
    .default-sidebar {
    background: #faa61a;
    position: fixed;
    height: 100%;
    top: 0;
    z-index: 999;
    transition: all 0.2s ease;
}

.default-sidebar>.side-navbar a[aria-expanded="true"] {
    background: #ffffff;
    margin: 0 10px 0 10px;
    border-radius: 4px 4px 0 0;
}

.default-sidebar>.side-navbar ul a:hover i {
    color: #000000;
}
.default-sidebar>.side-navbar ul ul {
    background: #e4e4e4;
    border-radius: 0 0 4px 4px;
}

.default-sidebar>.side-navbar ul ul a {
    font-size: .85rem;
    padding-left: 40px;
    color: #000000;
}

.default-sidebar>.side-navbar ul a {
    color: #000000;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
    font-weight: 500;
}
.default-sidebar>.side-navbar a[aria-expanded="true"] i {
    color: #faa61a;
}
.default-sidebar>.side-navbar a i {
    font-size: 1.6rem;
    margin-right: 10px;
    transition: none;
    vertical-align: -4px;
    color: #000000;
}

.default-sidebar>.side-navbar ul ul a:hover {
    color: #ffffff;
    background: #bf8016;
}
</style>
<div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                    <!--     <ul class="list-unstyled">
                            <li><a href="javascript:void(0);"><i class="la la-at"></i><span>Simple Link</span></a></li>
                            <li><a href="#dropdown" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Dropdown</span></a>
                                <ul id="dropdown" class="collapse list-unstyled pt-0">
                                    <li><a href="javascript:void(0);">Link</a></li>
                                    <li><a href="javascript:void(0);">Link</a></li>
                                    <li><a href="javascript:void(0);">Link</a></li>
                                    <li><a href="javascript:void(0);">Link</a></li>
                                </ul>
                            </li>
                        </ul> -->
                       
                        <ul class="list-unstyled">

                            <?php

                            if($_SESSION["admin"]=="Admin"){



                                ?>

                            

                            <li class="Active"><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-table"></i><span>Package</span></a>
                                <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                                    
                                    <li><a href="create-package.php">Create Package</a></li>
                                    <li><a href="package-view.php">Package View</a></li>
                                    <li><a href="generate-package.php">Generate Package</a></li>
                                    <li><a href="Trips-View.php">Tour Schedule</a></li>
                                     <li><a href="Package-booking.php">Package Booking</a></li>

                                   
                                </ul>
                            </li>
                            <br>


                           <li><a href="#dropdown-db-two" aria-expanded="true" data-toggle="collapse"><i class="la la-hotel"></i><span>Hotel</span></a>
                                <ul id="dropdown-db-two" class="collapse list-unstyled show pt-0">
                                     <li><a href="hotel.php">Hotels</a></li>
                                    <li><a href="hotel-requests.php">Hotel Requests</a></li>
                                

                                   
                                </ul>
                            </li>

                            <br>

                            <li><a href="#dropdown-db-five" aria-expanded="true" data-toggle="collapse"><i class="la la-plane"></i><span>Flight</span></a>
                                <ul id="dropdown-db-five" class="collapse list-unstyled show pt-0">
                                     <li><a href="airline.php">Airline</a></li>
                                    <li><a href="airline-requests.php">Airline Requests</a></li>
                                

                                   
                                </ul>
                            </li>

                            <br>

                            <li><a href="#dropdown-db-three" aria-expanded="true" data-toggle="collapse"><i class="la la-paper-plane"></i><span>subscriber</span></a>
                                <ul id="dropdown-db-three" class="collapse list-unstyled show pt-0">
                                     <li><a href="subscriber.php">Email</a></li>
                                </ul>
                            </li>

                            <br>


                            <li><a href="#dropdown-db-four" aria-expanded="true" data-toggle="collapse"><i class="la la-phone"></i><span>Contact Form</span></a>
                                <ul id="dropdown-db-four" class="collapse list-unstyled show pt-0">
                                     <li><a href="mail.php">Messages</a></li>
                                </ul>
                            </li>

                            <br>

                            <li><a href="#dropdown-db-four" aria-expanded="true" data-toggle="collapse"><i class="la la-user"></i><span>Customers</span></a>
                                <ul id="dropdown-db-four" class="collapse list-unstyled show pt-0">
                                     <li><a href="user-view.php">Users</a></li>
                                </ul>
                            </li>

                            <br>


                            <?php

                             }
                             else
                             {



                            if($_SESSION["admin"]=="hotel"){

                                    ?>
 <li><a href="hotel-profile.php"><i class="ti ti-layout"></i><span>Edit Profile</span></a></li> 
                             <li><a href="hotel-services.php"><i class="ti ti-layout"></i><span>Hotel Services</span></a></li> 

                                <li class="Active"><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-tag"></i><span>Offers</span></a>
                                <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                                    
                                    <li><a href="hotel-offers.php">Create Offer</a></li>
                                    <li><a href="offer-view.php">Offer View</a></li>
                                   </ul>
                            </li>



                            
                             <li><a href="room-type.php"><i class="ti ti-layout"></i><span>Room Type</span></a></li>
                             <li><a href="total-room.php"><i class="ti ti-layout"></i><span>Room Quantity</span></a></li> 

                             <li><a href="room-view.php"><i class="ti ti-layout"></i><span>Room View</span></a></li>
                             <li><a href="hotel-booking.php"><i class="ti ti-layout"></i><span>Hotel Booking</span></a></li>

                            
                             

 
                            <?php

                            }else{

 ?>
<li><a href="airline-profile.php"><i class="la la-image"></i><span>Edit Logo</span></a></li>

<li><a href="create-flight.php"><i class="la la-plane"></i><span>Add Flight</span></a></li>
<li><a href="flight-schedule.php"><i class="la la-table"></i><span>Flight schedule</span></a></li>

 <?php


                          }
                      }



                                ?>

                       

                        </ul>
                        
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->