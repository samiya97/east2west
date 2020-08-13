
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>	
                        <form method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control input-lg" placeholder="Enter your email address" required="">
                                    <span class="input-group-btn"><button type="submit" name="Subscibe" class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->


        <?php

if(isset($_POST["Subscibe"]))
{
include("connection.php");
$ab = "INSERT INTO tbl_newsletter(email) VALUES ('".$_POST['email']."')";
     
 mysqli_query($var,$ab);
 echo "<script>alert('Subscibe Succesfully');</script>";
  echo"<meta http-equiv='refresh' content='0'>";

    

}

?>