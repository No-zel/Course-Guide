<?php
session_start();

//Checker if someones is by-passing the website (not login)
if (!isset($_SESSION['UserID'])) {
    $_SESSION['StatusError'] = "You need to login first";

    header('location: login.php');

    echo '<style>  

    .afterlogin {
        display: none !important;
    } 
    </style>';
    
} else {

    if ($_SESSION["TYPE"] != 1) {

        $_SESSION['StatusError'] = "You need access";
        session_unset();
        session_destroy();
        header('location: login.php');


    } else {

        echo '<style> 

        #AdminLog {
            display: block !important;
        }
        </style>';
    }
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

    $sql = "SELECT * FROM Members";
    $result = $conn->query($sql);
    $logData = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$maxpage = 5;
$page = isset($_GET['pageindex']) ? intval($_GET['pageindex']) : 1;

$index = ($page - 1) * $maxpage;


$logs = array_slice($logData, $index, $maxpage);


$totalPages = ceil(count($logData) / $maxpage);


if ($page > $totalPages) {
    $page = $totalPages;
} elseif ($page < 1) {
    $page = 1;
}

$pagesToShow = 5; 

$startPage = max(1, $page - floor($pagesToShow / 2));
$endPage = min($startPage + $pagesToShow - 1, $totalPages);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="change-pass-nav.css">
    <link rel="stylesheet" href="settings.css">

    <title> CGuide | Change password</title>
</head>


<body>
    
    <div class="open-confirmation" id="open-confirmation">
                <div class="card-delete">
                    <div class="card-h1">Delete account?</div>
                    <div class="card-content">
                        <div class="card-p">This will delete your <strong>Account</strong></div>
                        <div class="card-button">
                            <button class="cancel" id="cancel">Cancel</button>
                            <button class="delete"> <a href="../Methods/delete-acc.php"> Delete </a> </button>
                        </div>
                    </div>
                </div>
            </div>

    <header>
        <nav style="opacity: 1">
            <div class="logo"> <a href="../main.php"><img src="../assets/logo.png" alt="logo">CGuide</a></div>
            <ul class="sidebar" id="sidebar">
                <div class="close-btn close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <li><a href="../main.php">Home</a></li>
                <li><a href="../Methods/logout.php" class="option afterlogin">Log out</a></li>
                <li><a href="../Methods/delete-acc.php" class="option delete-account afterlogin">Delete account</a></li>
            </ul>
            <ul>
                <li><a href="../main.php">Home</a></li>
                <div class="settings" style="display: flex;">
                    <li><span><?php echo $_SESSION["LName"] ?>, <?php echo $_SESSION["FName"] ?></span>
                        <ul class="dropdown">
                            <a href="logpage.php" id="AdminLog" class="option">Audit Trail</a>
                            <a href="change-pass.php" class="option">Settings</a>
                            <a href="../Methods/logout.php" class="option">Log out</a>
                         <!--   <a href="#" class="option delete-account" id="open-delete">Delete account</a> -->
                        </ul>
                    </li>
                </div>
            </li>
                
             
                   
            </ul>

            <div class="hamburger" id="open-nav">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>


  <div class="log-container">
      <table>
         
         <thead>
        
           <th colspan="6" class="log-history">List of users</th>
    
         <tr class="responsive-display-none">
             <th>ID</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Username</th>
             <th>Email</th>
             <th>Manage</th>
         </tr>
         </thead>
         <?php foreach ($logs as $entry): ?>
             <tr>
                 <td data-title="ID" ><?= $entry['ID'] ?></td>
                 <td data-title="First Name"><?= $entry['FNAME'] ?></td>
                 <td data-title="Last Name"><?= $entry['LNAME'] ?></td>
                 <td data-title="Username"><?= $entry['USERNAME'] ?></td>
                 <td data-title="Email"><?= $entry['EMAIL'] ?></td>
                 <td data-title="Manage"> <button class="admin-delete"> Delete </button> </th>
             </tr>
         <?php endforeach; ?>
     </table>
  </div>

         <!-- Pagination links -->
         <div class="pagination">
    <?php if ($page > 1): ?>
        <a href="?pageindex=<?= ($page - 1) ?>" class="prev">&laquo; Previous</a>
    <?php endif; ?>

    <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
        <a href="?pageindex=<?= $i ?>" <?php if ($i == $page) echo 'class="active"'; ?>>
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <?php if ($page < $totalPages): ?>
        <a href="?pageindex=<?= ($page + 1) ?>" class="next">Next &raquo;</a>
    <?php endif; ?>
</div>
    
</body>

    <script src="../js/password.js"></script>
    <script src="../js/change.pass.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CSSRulePlugin.min.js" integrity="sha512-+35N1KBHwTDnFOBSqO2nm/qsf5okaS74sUZu/rT/wlvuAfJ1hrAoGlWZip2l1LHB1q2i8B2k84Pb/NrC38bv8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        let tl = gsap.timeline({defaults: {ease: "power4.inOut", duration: 2}});
    
        let flagPoles = CSSRulePlugin.getRule(".hero-section:before");

      
        tl.to('nav', { opacity: 1}, "-=1")


                const sidebar = document.getElementById("sidebar");
                const OpenNav = document.getElementById("open-nav");
                const CloseNav = document.getElementsByClassName("close")[0];


        OpenNav.addEventListener("click", function() {
            sidebar.classList.add("show");
        });
        
        CloseNav.addEventListener("click", function() {
            sidebar.classList.remove("show");
        });
        
        window.addEventListener("click", function(event) {
            if (event.target === sidebar) {
                sidebar.classList.remove("show");
            }
        });
                       
      
       
    </script>

</html>