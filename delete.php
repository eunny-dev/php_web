<?php
//$_REQUEST
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpassword = "";
   $db = "trial";
   $con = mysqli_connect('localhost', 'root', '', 'trial');

   $sql = "delete from contact where idnum=$id";
   
   mysqli_query($con, $sql);
}
 header('location:fetch.php');