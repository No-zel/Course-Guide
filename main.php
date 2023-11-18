<?php 
session_start();

if (isset($_SESSION['UserID'])) {
    echo '<style> 
    
    .log-in-btn {
        display: none;
    }
    
    .settings {
        display: block !important;
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
 

    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Pages/style.css">
    <link rel="stylesheet" href="./Pages/settings.css">
    <script src="./js/nav.js" defer></script>

    <title>CGuide AI</title>
</head>

<style>



</style>

<body>

    <header>
        <nav>
            <div class="logo"> <a href="#"><img src="./assets/logo.png" alt="logo">CGuide</a></div>
            <ul class="sidebar" id="sidebar">
                <div class="close-btn close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <li><a href="#">Home</a></li>
                <li><a href="#">Feature</a></li>
                <li><a href="#">About</a></li>
                <div class="log-in-btn sidebar-logout"><button><a href="./Pages/login.php">Log in</a></button></div>
            </ul>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Feature</a></li>
                <li><a href="#">About</a></li>
                <div class="settings">
                    <li><span><?php echo $_SESSION["username"] ?> Username</span>
                        <ul class="dropdown">
                            <!-- <li class="option"><a href="../Pages/logpage.php">Logs</a></li>
                            <li class="option"><a href="../Pages/change-pass.php">Settings</a></li>
                            <li class="option"><a href="Methods/logout.php">Log out</a></li> -->

                            <a href="../Pages/logpage.php" class="option">Logs</a>
                            <a href="../Pages/change-pass.php" class="option">Settings</a>
                            <a href="Methods/logout.php" class="option">Log out</a>
                            <a href="#" class="option delete-account">Delete account</a>
                        </ul>
                    </li>
                </div>
                <div class="log-in-btn"><button><a href="./Pages/login.php"> Log in </a></button></div>
            </ul>

            <div class="hamburger " id="open-nav">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>

    <section class="hero-section">
        <div class="hero-title">
            <h1>Discover Your Official
                Course with CGuide AI</h1>
            <div class="form">

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem accusantium accusamus rem facilis
                    voluptatem minima!</p>

                <div class="start">
                    <button>Get started</button>
                </div>
            </div>

        </div>


    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CSSRulePlugin.min.js"
        integrity="sha512-+35N1KBHwTDnFOBSqO2nm/qsf5okaS74sUZu/rT/wlvuAfJ1hrAoGlWZip2l1LHB1q2i8B2k84Pb/NrC38bv8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        let tl = gsap.timeline({ defaults: { ease: "power4.inOut", duration: 2 } });

        let flagPoles = CSSRulePlugin.getRule(".hero-section:before");

        tl.to('h1', { 'clip-path': 'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0, duration: 2.2 })
        tl.to('.form', { 'clip-path': 'polygon(0% 105%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0 }, "-=2")
        tl.to('nav', { opacity: 1 }, "-=1")
    </script>
</body>

</html>