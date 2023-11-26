<?php
session_start();

//Checker if someones is by-passing the website (not login)
if (isset($_SESSION["TYPE"]) !== 1 || !isset($_SESSION['UserID'])) {
    $_SESSION['StatusError'] = "You need access";

    header('location: login.php');

    echo '<style>     
    .afterlogin {
        display: none !important;
    } </style>';
    
    session_unset();
    session_destroy();

} else {
    echo '<style> 

    #AdminSet {
        display: block !important;
    }
    </style>';
}

//DATABASE CONNECTION
$dbservername = "group5-admin.cwcul3ylqcmq.ap-southeast-1.rds.amazonaws.com";
$dbusername = "admin";
$dbname = "UserAccounts";
$dbpassword = "ilovecookies696969";
//CONNETION
try {
    $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT USERNAME, ACTION, datatime FROM UsersLog";
    $result = $conn->query($sql);
    $logData = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$maxpage = 5;
$page = isset($_GET['pageindex']) ? intval($_GET['pageindex']):1;

$index = ($page - 1) * $maxpage;

// Get the logs for the current page
$logs = array_slice($logData, $index, $maxpage);

// calculates for the pages
$totalPages = ceil(count($logData) / $maxpage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./style.css">
   <link rel="stylesheet" href="./settings.css">
    <title>Log Data</title>

</head>
<body>

     <header>
        <nav style="opacity: 1 !important;">
            <div class="logo"> <a href="../main.php"><img src="../assets/logo.png" alt="logo">CGuide</a></div>
            <ul class="sidebar" id="sidebar">
                <div class="close-btn close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <li><a href="../main.php">Home</a></li> 
                <li><a href="change-pass.php" class="option afterlogin">Settings</a></li>
                <li><a href="../Methods/logout.php" class="option afterlogin">Log out</a></li>
            </ul>

            <ul>
                <li><a href="../main.php">Home</a></li>
                <div class="settings" style="display: flex;">
                    <li><span><?php echo $_SESSION["LName"] ?>, <?php echo $_SESSION["FName"] ?></span>
                        <ul class="dropdown">
                            <a href="#" class="option" id="AdminSet">Admin Settings</a>
                            <a href="change-pass.php" class="option">Settings</a>
                            <a href="../Methods/logout.php" class="option">Log out</a>
                            <a href="#" class="option delete-account" id="open-delete">Delete account</a>
                        </ul>
                    </li>
                </div>
            </li>
            </ul>

            <div class="hamburger " id="open-nav">
                <i class="fa-solid fa-bars" id="open-nav1"></i>
            </div>
        </nav>
    </header>


<div class="log-container" >
    
 
    <table>
       
        <thead>
       
          <th colspan="3" class="log-history">Log History</th>

        <tr class="responsive-display-none">
            <th>User</th>
            <th>Activity</th>
            <th>Date</th>
        </tr>
        </thead>
        <?php foreach ($logs as $entry): ?>
            <tr>
                <td data-title="Username" ><?= $entry['USERNAME'] ?></td>
                <td data-title="Activity"><?= $entry['ACTION'] ?></td>
                <td data-title="Date"><?= $entry['datatime'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <!-- Pagination links -->
    <div class="pages">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?pageindex=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>
        <a href="#"> Pages </a>
    </div>
</div>
<script src="../js/nav.js"> </script>
<script>

        let tl = gsap.timeline({defaults: {ease: "power4.inOut", duration: 2}});
    
        let flagPoles = CSSRulePlugin.getRule(".hero-section:before");

      
        tl.to('nav', { opacity: 1}, "-=1")
   
</script>
</body>
</html>