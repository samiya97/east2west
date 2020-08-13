<select name="state"  onChange="show(this.value)"  class="form-control">
<option selected="">State</option>
<?php
include("connection.php");
$c = mysqli_query($var,"Select * from state_list where country_id='".$_GET["country_id"]."' ");

while($xyz = mysqli_fetch_array($c)){
?>
<option value="<?php echo $xyz['state_id']; ?>"><?php echo $xyz['state_name']; ?></option>
<?php
        }

?>
</select>




                

                                          
                                         