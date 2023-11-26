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

} 
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
                <li><a href="#" class="option delete-account afterlogin" id="open-delete">Delete account</a></li>  
            </ul>
            <ul>
                <li><a href="../main.php">Home</a></li>
                <div class="settings" style="display: flex;">
                    <li><span><?php echo $_SESSION["LName"] ?>, <?php echo $_SESSION["FName"] ?></span>
                        <ul class="dropdown">

                            <a href="logpage.php" id="AdminLog" class="option"> Admin Logs</a>
                            <a href="#" class="option" id="AdminSet">Admin Settings</a>
                            <a href="../Methods/logout.php" class="option">Log out</a>
                            <a href="#" class="option delete-account" id="open-delete">Delete account</a>
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

    <section class="login-section">

        <div class="login-card">

            <form action="../Methods/change-pass.php" method="POST" class="change-container">

                <div class="top-section">

                    <div class="title-info">
                        <h3 class="user-account"><?php echo $_SESSION["LName"];?>, <?php echo $_SESSION["FName"];  ?>   ·  CGuide</h3>
                        <h2 class="system-header">User Setting</h2>
                       
                    </div>

                    <div class="form_each">
                    <input type="text" id="fname" name="fname" placeholder="First name" required>
                    </div>

                    <div class="form_each">
                    <input type="text" id="lname" name="lname" placeholder="Last name" required>
                    </div>

                    <div class="form_each">
                    <input type="password" id="oldPassword" name="oldPassword" placeholder="New Password" required>
                    <i class="fa-solid fa-eye-slash" id="show-password-1"></i>
                        </div>
                    <div class="form_each">
                    <input type="password" id="newPassword" name="newPassword" placeholder="Re-Enter New password" required>
                    <i class="fa-solid fa-eye-slash" id="show-password-2"></i>

                    </div>

                    <button type="submit" class="btn-login">Confirm</button>
                  
                    <!-- <div class="options">
                     <a href="../Methods/delete-acc.php" class="delete">Delete account</a>
                    </div> -->

                    <div class="notifier-error">
                        <?php
                            if (isset($_SESSION['StatusError'])) {
                            
                                echo $_SESSION['StatusError']; 
                                unset($_SESSION['StatusError']);
                            }
                            ?>
                        </div>
                </div>
            </form>
        </div>

        <div class="title">
            <div class="title-wrapper">
                <h2>Welcome to</h2>
                <h1>CGuide AI</h1>
                <p>Discover Your Official Course Now</p>

            </div>
        </div>

    </section>
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