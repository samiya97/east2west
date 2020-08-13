<?php
 include("connection.php");
if(isset($_POST) & !empty($_POST)){
	$email = mysqli_real_escape_string($var, $_POST['email']);
	$sql = "SELECT * FROM tbl_user WHERE email = '$email'";
	$res = mysqli_query($var, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		echo "Send email to user with password";
	}else{
		echo "User name does not exist in database";
	}
	$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";
 
$message = "Please use this password to login " . $password;
$headers = "From : east@west@travelntour.com";
if(mail($to, $subject, $message, $headers)){

	echo "<script>alert('Your Password has been sent to your email id');</script>";
	echo "<script>window.location.assign('login.php')</script>";
}else{
		echo "<script>alert('Failed to Recover your password, try again');</script>";

}
}


?>