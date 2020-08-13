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
        <title>EAST2WEST - Airline</title>
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
	                                <h2 class="page-header-title">Airline</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-all.html"><i class="ti ti-home"></i></a></li>
                              
                                        </ul>
                                    </div>	                            
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                      
                      
                      
                      <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Requests</h4>
                                    </div>
                                    <div class="widget-body">
                                       <div class="table-responsive"><table id="sorting-table" class="table mb-0 dataTable no-footer" role="grid" aria-describedby="sorting-table_info">
                                                <thead>
                                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 76px;">ID</th>
                                                    
                                                    
                                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 76px;">Name</th>

                                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 76px;">Description</th>
                                                    
                                                    
                                                    
                                                   
                                                    <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Order Total: activate to sort column ascending" style="width: 76px;">Email</th>
                                                    
                                                     <th class="sorting" tabindex="0" aria-controls="sorting-table" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 76px;">Actions</th></tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                include("connection.php");
                                  $p = mysqli_query($var,"SELECT * FROM tbl_flight_company where Status = 'Approve'");
                                  while($abc = mysqli_fetch_array($p))
                                  {

                                   
                                 

                                  ?>
                                                    
                                               <tr role="row" class="even">
                                                        <td><?php echo $abc['id']; $id1 =$abc['id']; ?></td>
                                                        <td><?php echo $abc['name']; ?></td>
                                                        <td><?php echo $abc['description']; ?></td>
                                                        <td><?php echo $abc['email']; ?></td>
                                                        <td class="td-actions">
                                                            <form method="POST"><input type="submit"  name="approve" class="btn btn-danger mr-1 mb-2" value="Pending">
                                                          </form>
                                                          
                                                        </td>
                                                    </tr>

                                                   

                                                <?php
                                                    }
                                                ?>    



                                                </tbody></table></div>
                      
                      
                      
                      
                      
                      
                             
                            
                    
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
             
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>

         <!-- Begin Large Modal -->
        <div id="modal-large" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Title</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                                    <?php
                                include("connection.php");
                                  $p = mysqli_query($var,"Select * from tbl_package where WHERE Status = 'Pending' ");
                                  if($xyz = mysqli_fetch_array($p))
                                  {
                                    ?>
                       <form class="needs-validation" enctype="multipart/form-data" method="POST">

                                            <div class="form-group row d-flex align-items-center mb-3">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">ID</label>
                                                <div class="col-lg-5">
                                                   <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo $xyz['id']; ?></label>
                                                </div>
                                            </div>


                                            <div class="form-group row d-flex align-items-center mb-3">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Title</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="ptitle" required="" value="<?php echo $xyz['title']; ?>" placeholder="Enter package title">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Places</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="pplace" required="" value="<?php echo $xyz['place_name']; ?>" placeholder="Enter Tour Places">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Hotel</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="photel" required="" value="<?php echo $xyz['hotel_name']; ?>" placeholder="Enter Hotel Name">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Days</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="pdays" required="" value="<?php echo $xyz['days']; ?>" placeholder="Enter Total Days">
                                                </div>
                                            </div>

                                          <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Description</label>
                                                <div class="col-lg-5">
                                                    <textarea class="form-control" name="pdesc"  required="" placeholder="Type Description here ..."><?php echo $xyz['description']; ?></textarea>
                                                </div>
                                            </div>
                                           <div class="text-right">
                                                <input type="submit" class="btn btn-gradient-01" value="Submit Form"  name="updatedata"/> 
                                                <button class="btn btn-shadow" type="reset">Reset</button>
                                            </div>
                                            <?php 
                                        }
                                             ?>
                                            
                                            </form>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- End Large Modal -->

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

if(isset($_POST["approve"]))
{
include("connection.php");

$ab = "Update tbl_flight_company set Status='Pending' WHERE id ='$id1' ";
     
 mysqli_query($var,$ab);

 echo"<script>alert('Airline Approve Succesfully');</script>";
 echo"<meta http-equiv='refresh' content='0'>";




}
}


?>
