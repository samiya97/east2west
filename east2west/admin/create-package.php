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
        <title>Elisyam - Create Package</title>
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
	                                <h2 class="page-header-title">Create Package</h2>
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
                                        <h4>Tour description</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="needs-validation"  enctype="multipart/form-data" method="POST">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Trip Category</label>
                                                <div class="col-lg-5">
                                                    <div class="select">
                                                        <select name="cate" class="custom-select form-control" required="">
                                                            <option value="">Select an Category</option>
                                                            <option value="Local Places">Local Places</option>
                                                            <option value="International Places">International Places</option>
                                                         </select>
                                                        <div class="invalid-feedback">
                                                            Please select an option
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Title</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="ptitle" required="" placeholder="Enter Tour Title">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Places</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="pplace"required=""  placeholder="Enter Tour Places">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Hotel</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="photel"required=""  placeholder="Enter Hotel Name">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Days</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="pdays"required=""  placeholder="Enter Total Days">
                                                </div>
                                            </div>


                                            <div class="form-group row mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Food</label>
                                                <div class="col-lg-1">
                                                    <div class="custom-control custom-radio styled-radio mb-3">
                                                        <input class="custom-control-input" value="Yes" name="pfood" type="radio" id="opt-01" required="">
                                                        <label class="custom-control-descfeedback"  for="opt-01">Yes</label>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="custom-control custom-radio styled-radio mb-3">
                                                        <input class="custom-control-input" value="no" type="radio" name="pfood"  id="opt-02" required="">
                                                        <label class="custom-control-descfeedback"  for="opt-02">No</label>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Description</label>
                                                <div class="col-lg-5">
                                                    <textarea class="form-control" name="pdesc" required=""  placeholder="Type Description here ..." required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Trip Images</label>
                                                <div class="col-lg-5">
                                                    <input type="file" class="form-control" name="pphotoa" required=""  placeholder="Enter food detail">
                                                    <input type="file" class="form-control" name="pphotob" required=""  placeholder="Enter food detail">
                                                    <input type="file" class="form-control" name="pphotoc" required=""  placeholder="Enter food detail">
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

if(isset($_POST["createbtn"]))
{
include("connection.php");
$ab = "INSERT INTO tbl_package(Category,Title, place_name, hotel_name, days, food, description)
VALUES ('".$_POST['cate']."','".$_POST['ptitle']."', '".$_POST['pplace']."', '".$_POST['photel']."', '".$_POST['pdays']."','".$_POST['pfood']."', '".$_POST['pdesc']."')";
     
 mysqli_query($var,$ab);

 echo $ab;




    $jf = mysqli_query($var,"Select max(id) id from tbl_package");
    if($RR = mysqli_fetch_array($jf))
    {
       move_uploaded_file($_FILES["pphotoa"]["tmp_name"],"package-images/".$RR["id"]."_(A).jpg"); 
       move_uploaded_file($_FILES["pphotob"]["tmp_name"],"package-images/".$RR["id"]."_(B).jpg");
       move_uploaded_file($_FILES["pphotoc"]["tmp_name"],"package-images/".$RR["id"]."_(C).jpg");
    }

     echo "<script>alert('Package Create Succesfully');</script>";




}
}

?>