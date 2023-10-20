<?php 
session_start();
// DB Information --Dont Share to anyone!.
$dbservername = "group5-admin.cwcul3ylqcmq.ap-southeast-1.rds.amazonaws.com";
$dbusername = "admin";
$dbname = "UserAccounts";
$dbpassword = "ilovecookies696969";

$memberuser = $_SESSION['username'];
$memberID = $_SESSION['UserID'];

    try {

        //Database connection
        $dbcon = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
        // set the PDO error mode to exception
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //SQL Query
        $statement = "DELETE FROM Members WHERE ID ='$memberID'";
        $dbcon->exec($statement);

        $_SESSION['StatusSuccess'] = "Account Deleted";
        header("location: ../Pages/login.php");

        } catch(PDOException $e) {

        //Database Error
        echo "Connection failed: " . $e->getMessage();

      }
        //Close DB
        $dbcon = null;

?>