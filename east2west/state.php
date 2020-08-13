 <?php
  include("connection.php");
  $p = mysqli_query($var,"Select * from state_list where country_id = "country_id" ");
  while($abc = mysqli_fetch_array($p))
  {
    $userid 	=	$abc['state_id'];
  	$state_name	=	$abc['state_name'];
  	$users_arr[] = array("id" => $userid, "name" => $name);
  	echo json_encode($users_arr);

   }?>