<?php
$Userid = $_GET['id'];

$dbservername = "group5-admin.cwcul3ylqcmq.ap-southeast-1.rds.amazonaws.com";
$dbusername = "admin";
$dbname = "UserAccounts";
$dbpassword = "ilovecookies696969";


try {

    //Database connection
    $dbcon = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SQL Query
    $statement = "DELETE FROM Members WHERE ID =$Userid";
    $dbcon->exec($statement);

    header("location: ../Pages/admin.php");

    } catch(PDOException $e) {

    //Database Error
    echo "Connection failed: " . $e->getMessage();

  }
    //Close DB
    $dbcon = null;


?>