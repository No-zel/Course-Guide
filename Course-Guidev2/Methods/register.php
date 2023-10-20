<?php 
session_start();
// DB Information --Dont Share to anyone!.
$dbservername = "group5-admin.cwcul3ylqcmq.ap-southeast-1.rds.amazonaws.com";
$dbusername = "admin";
$dbname = "UserAccounts";
$dbpassword = "ilovecookies696969";

    // Global Variables from HTML Forms
    $accusername = $_POST['username']  ?? "";
    $accemail = $_POST['email']  ?? "";
    $accpassword = $_POST['password']  ?? "";
    $accrepassword = $_POST['repassword']  ?? "";
    
    

    //Checker if the password is not match
    if ( $accpassword != $accrepassword) {
      exit("Password not match");
    } 

    //Hashing the password for protection
    $hashed_password = password_hash($accpassword, PASSWORD_DEFAULT);
   
    try {

        $dbcon = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
        // set the PDO error mode to exception
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Checks if theres a Existing Users
        $statement = $dbcon->prepare("SELECT * FROM Members WHERE USERNAME = '$accusername'");
        $statement->execute();
        $checkusers = $statement->fetch();

        if ($checkusers) {
          //If theres a duplicated it will error
          exit("Theres a Existing User");
        } else {
          //if theres not the user will be added
          $sql = "INSERT INTO Members (`USERNAME`, `EMAIL`, `PASSWORD`) VALUES ('$accusername', '$accemail', '$hashed_password')";
          $dbcon->exec($sql);

          $_SESSION['Status'] = "Account Registered";
          header("location: ../Pages/login.php");
        }

      } catch(PDOException $e) {
        //Catching the error
        echo "Connection failed: " . $e->getMessage();

      }
        //Close database
        $dbcon = null;
    
?>