<?php
 
    $con1 = new mysqli('localhost' , 'root' , '' , 'test2');
  $query = "INSERT INTO `tbl_sound`(`Type_of_alarm`) VALUES ('MP4')";
  print($query);
  
  $con1->query($query);
 
 if($con1->affected_rows>0)
  {
  echo "<br /> The Registeration was successful ! <br />";
  
  }
else
   {
    echo "<br /> The Error Occured ! The Registeration was Canceled <br />";
   }
    
?>
