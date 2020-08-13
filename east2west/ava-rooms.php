  <select class="form-control" name="rooms">
                                                <option selected value="">Available Rooms </option>
                                                 <?php
                                                        include("connection.php");
                                $d=mysqli_query($var,"SELECT * from tbl_room where rt_id='".$_GET["RId"]."'");
								while($dd=mysqli_fetch_array($d))
								{
                              
                                                        ?>                                                            
                                                            <option value="<?php echo $dd['id'] ?>"><?php echo $dd['person'];//  echo $dd['price']  ?></option>
                                                            <?php
                                                      }
                                                        ?>                                                
                                            </select>
                                            <i class="fa fa-angle-down"></i>