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
        <title>Elisyam - Add Flight</title>
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
	                                <h2 class="page-header-title">Flight</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-all.html"><i class="ti ti-home"></i></a></li>
                                         
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
                                        <h4>Add Flight</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="needs-validation"  enctype="multipart/form-data" method="POST">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Flight No</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="title" required="" placeholder="Enter Flight Title">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">To</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="to"required=""  placeholder="Enter Here">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">From</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="from"required=""  placeholder="Enter Here">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Duration</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="duration"required=""  placeholder="Enter Flight Duration">
                                                </div>
                                            </div>


                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Flight Images</label>
                                                <div class="col-lg-5">
                                                    <input type="file" class="form-control" name="flighta" required=""  >
                                                    <input type="file" class="form-control" name="flightb" required=""  >
                                                    <input type="file" class="form-control" name="flightc" required=""  >
                                                </div>
                                            </div>
                                            
                                            <div class="text-right">
                                                <input type="submit" class="btn btn-gradient-01" value="Submit Form"  name="createbtn"/> 
                                                <button class="btn btn-shadow" type="reset">Reset</button>
                                            </div>
                                        </form>
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

if(isset($_POST["createbtn"]))
{
include("connection.php");
$ab = "INSERT INTO tbl_flight(F_id, name, to_flight, from_flight, duration)
VALUES ('".$_SESSION["id"]."','".$_POST['title']."','".$_POST['to']."', '".$_POST['from']."', '".$_POST['duration']."')";
     
 mysqli_query($var,$ab);

 echo $ab;




    $jf = mysqli_query($var,"Select max(id) id from tbl_flight");
    if($RR = mysqli_fetch_array($jf))
    {
       move_uploaded_file($_FILES["flighta"]["tmp_name"],"flight/".$RR["id"]."_(A).jpg"); 
       move_uploaded_file($_FILES["flightb"]["tmp_name"],"flight/".$RR["id"]."_(B).jpg");
       move_uploaded_file($_FILES["flightc"]["tmp_name"],"flight//".$RR["id"]."_(C).jpg");
    }

     echo "<script>alert('flight Create Succesfully');</script>";




}
}

?>