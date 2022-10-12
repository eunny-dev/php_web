<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $db = "trial";

    $con = mysqli_connect('localhost', 'root', '', 'trial');

    $sql= "UPDATE `contact` SET `fname`='korir',
     WHERE id=32";

    $rs=mysqli_query($con, $sql);

    if ($rs) 
    {
        echo "Record updated successfully";

      } 
      else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      ?>