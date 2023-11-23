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
        
        //Checker if theres a user in the database and if the password is the same with the DATABASE
        if ($checkusers && password_verify($_POST['password'], $checkusers['PASSWORD'])) {

                //Transfering User Info to Variables
                $_SESSION["username"] = $checkusers['USERNAME'];
                $_SESSION["UserID"] = $checkusers['ID'];
                $_SESSION["LName"] = $checkusers['LNAME'];
                $_SESSION["FName"] = $checkusers['FNAME'];
                $_SESSION["TYPE"] = $checkusers['TYPEOFUSER'];
                session_regenerate_id(true);

                //lOGIN LOGS
                $loginuser = $checkusers['USERNAME'];
                $currentDateTime = date("Y-m-d H:i:s");
                $Hlogs =  "INSERT INTO UsersLog (`USERNAME`,`ACTION`, `datatime`) VALUES ('$loginuser', 'LOGIN', '$currentDateTime')";
                $dbcon->exec($Hlogs);

                //Directory after the login
                header("location: ../main.php");

            } else {
                //Error Catcher
                $_SESSION['StatusError'] = "Incorrect Details, Please Double Check";
                header("location: ../Pages/login.php");
            }
        } catch(PDOException $e) {
        //Database Error
        echo "Connection failed: " . $e->getMessage();
      }
        //Close DB
        $dbcon = null;
?>