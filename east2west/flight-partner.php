<!doctype html>
<html lang="en">
    <head>
        <title>Become a Flight Partner</title>
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    xmlhttp.open("GET","ShowPost.php?country_id="+str,true);
    xmlhttp.send();     
}


</script>




    <style>
    .form-control {
    display: block;
    width: 100%;
    height: 45px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
        color: #a7a9ac;
    background-color: #fff;
    background-image: none;
    border: 0px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.custom-form .form-group select .fa {
    position: absolute;
    top: 14px;
    left: 15px;
    font-size: 18px;
}

.custom-form  .form-group input select {
    height: 45px;
    padding-left: 40px;
}

.select{
    padding-left: 39px;
}
    </style>
    
    
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

        
        <!--================ PAGE-COVER =================-->
        <section class="page-cover" id="cover-registration">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Become a Flight Partner</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Become a Flight Partner</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Become a Flight Partner</h3>
                                    
                                    <form enctype="multipart/form-data" method="POST">
                                            
                                        <div class="form-group">
                                             <input type="text" class="form-control" name="name" placeholder=" Company Name"  required/>
                                             <span><i class="fa fa-building"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                            <textarea class="form-control" name="Description" rows="2" cols="20"  placeholder="Description"></textarea>
                                            
                                             <span><i class="fa fa-file"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input type="email" class="form-control" name="email" placeholder="email"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="password" class="form-control" name="Password" placeholder="Password"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>



                                        <input type="submit" name="submitf" class="btn btn-orange btn-block" value="Submit" />

                                       
                                    </form>
                                    
                                  
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="images/registration.jpg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
        </section><!-- end innerpage-wrapper -->
        
        
       
        
        
      
        
        
       <?php
       include('newsletter.php');

        include('footer.php');
        ?>
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>

<?php

if(isset($_POST["submitf"]))
{
include("connection.php");
$ab = "INSERT INTO tbl_flight_company(name, Description, email , Password , status)
VALUES ('".$_POST['name']."', '".$_POST['Description']."','".$_POST['email']."','".$_POST['Password']."', 'Pending')";
     
 mysqli_query($var,$ab);

  

     echo "<script>alert('Submit Succesfully');</script>";




}

?>

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
    xmlhttp.open("GET","Show.php?state_id="+s,true);
    xmlhttp.send();     
}

</script>
