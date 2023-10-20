<?php 
 session_start();
 

 $_SESSION['Status'] = "Please Login Again";
 header("location: ../Pages/login.php");

 session_destroy();
?>