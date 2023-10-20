<?php 
session_start();

// DB Information --Dont Share to anyone!.
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
        $state = $dbcon->prepare("SELECT * FROM Members WHERE USERNAME = ?");
        $state->execute([$_POST['username']]);
        $checkusers = $state->fetch();
        
        //Account Checker
        if ($checkusers && password_verify($_POST['password'], $checkusers['PASSWORD'])) {

                
                $_SESSION["username"] = $_POST["username"];
                $_SESSION['Status'] = "Welcome," . $_SESSION["username"];
                $_SESSION["UserID"] = $checkusers['ID'];
                header("location: ../Pages/change-pass.php");

            } else {
                exit ($_SESSION['Status'] = "Incorrect Details, Please Double Check");
            }

        } catch(PDOException $e) {
        //Database Error
        echo "Connection failed: " . $e->getMessage();

      }
        //Close DB
        $dbcon = null;

?>