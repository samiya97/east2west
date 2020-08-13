<label>City</label>
<select name="city"  class="form-control">-
<option selected="">City</option>
<?php
include("connection.php");
$v = mysqli_query($var,"Select * from city_list where state_id='".$_GET["state_id"]."' ");
while($efg = mysqli_fetch_array($v)){
?>
<option value="<?php echo $efg['city_id']; ?>"><?php echo $efg['city_name']; ?><i class="fa fa-angle-down"></i></option>
<?php
        }

?>
</select>

                                             