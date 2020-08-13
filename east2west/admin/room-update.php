<?php session_start();
if(!isset($_SESSION["usr"])){
     echo "<script>window.location.assign('index.php')</script>";
    }else{


 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elisyam - Room Update</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
        <?php
		include('navbar.php');
		include('sidemenu.php');
        
		?>
           <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Room Update</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-all.html"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item active">Blank</li>
                                        </ul>
                                    </div>	                            
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row flex-row">
                            <div class="col-xl-12 col-12">
                               <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Rooms Update</h4>
                                    </div>
                                    <div class="widget-body">
                                        <?php
                               include("connection.php");
                                
                               $id1=$_GET['id'];

                                                              
                                 // $p = mysqli_query($var,"Select * from tbl_tour_detail where id = '$id1'");
                                   $p = mysqli_query($var,"select s.person , s.price ,s.room_no , c.types ,s.id 
 from tbl_room S, tbl_room_type c
 where s.h_id='".$_SESSION["id"]."' and c.rid=s.rt_id and s.id ='$id1' ");
                                  if($xyz = mysqli_fetch_array($p))
                                  {
                                    ?>
                                        <form class="needs-validation"  enctype="multipart/form-data" method="POST">
                                             <div class="form-group row d-flex align-items-center mb-3">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">ID</label>
                                                <div class="col-lg-5">
                                                   <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo $xyz['id']; $id=$xyz['id']; ?></label>
                                                </div>
                                            </div>
                                         <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Room Type</label>
                                                <div class="col-lg-5">
                                                    <div class="select">
                                                       
                                                        <select name="type_name" class="custom-select form-control" required="">
                                                            <option value="">Select an option</option>
                                                             <?php
                                                        include("connection.php");
                                                        $hid=$_SESSION['id'];
                                                          $p = mysqli_query($var,"Select * from tbl_room_type where h_id='$hid'");
                                                          while($abc = mysqli_fetch_array($p))
                                                          {

                                                        ?>
                                                            
                                                            <option value="<?php echo $abc['id']; ?>"><?php echo $abc['types']; ?></option>
                                                            <?php
                                                        }

                                                        ?>

                                                        </select>
                                                      </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Persons</label>
                                                <div class="col-lg-5">
                                                   <select name="Persons" class="custom-select form-control" required="">
                                                         <option>Select an option</option>
                                                         <option value="1 Adult" >1 Adult</option>
                                                         <option value="1 Couple">1 Couple</option>
                                                         <option value="1 Couple 2 Kids Bed">1 Couple 2 Kids Bed</option>
                                                         <option value="6 Adult">6 Adult</option>
                                                         <option value="Rest house (8 to 10 Persons)">Rest house (8 to 10 Persons)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Rate per night</label>
                                                <div class="col-lg-5">
                                                    <input type="text" name="price" class="form-control" placeholder="Enter per day rate" value="<?php echo $xyz['price']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Room NO</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="roomno"  placeholder="Enter Amount" required="" value="<?php echo $xyz['room_no']; ?>">
                                                    
                                                </div>
                                            </div>
                                          
                                           <div class="text-right">
                                                <input type="submit" class="btn btn-gradient-01" value="Submit Form"  name="updatebtn"/> 
                                               
                                            </div>
                                        </form>
                                        <?php 
                                        }
                                   
                                             ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                 
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
  
        
        
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        
       
        <!-- End Page Vendor Js -->
    </body>
</html>



<?php
}
if(isset($_POST["updatebtn"]))
{
include("connection.php");     
mysqli_query($var,"UPDATE tbl_tour_detail SET p_id='".$_POST['packageid']."', start_date='".$_POST['startdate']."', end_date='".$_POST['enddate']."', capacity='".$_POST['capacity']."', status='".$_POST['status']."' , amount = '".$_POST['perhead']."' WHERE id = '".$id."'");

 echo"<script>alert('Room Updated Succesfully');</script>";
echo"<script>window.location.assign('Trips-View.php')</script>";
echo "<meta http-equiv='refresh' content='0'>";
}

?>