<?php
session_start(); ?>
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

    <!-- CSS Styles -->
    <link rel="stylesheet" href="style.css">
    <!-- Navbar JS -->
    <script src="../js/nav.js" defer></script>

    

    <title>CGuide | Log in</title>
</head>



<body>
 
    <header>
        <nav>
            <div class="logo"> <a href="../main.php"><img src="../assets/logo.png" alt="logo">CGuide</a></div>
            <ul class="sidebar" id="sidebar">
                <div class="close-btn close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <li><a href="../main.php">Home</a></li>
                <li><a href="#">Feature</a></li>
                <li><a href="#">About</a></li>
                <div class="log-in-btn sidebar-logout"><button><a href="./Pages/login.php">Log in</a></button></div>
            </ul>

            <ul>
                <li><a href="../main.php">Home</a></li>

            </ul>

            <div class="hamburger " id="open-nav">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>

    <section class="login-section">

        <div class="login-card">

            <form action="../Methods/auth.php" method="POST" class="form-login-container">

                <div class="top-section">
                    <h2>Log in</h2>


                    <div class="form_each">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>

                    <div class="form_each">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class="fa-solid fa-eye-slash" id="log-in-pass"></i>
                    </div>

        
                    <button type="submit" class="btn-login">Log in</button>

                    <div class="bot-section">
                        <span>Don't have an account?</span>
                        <a href="../Pages/register.php"> Register </a>

                    </div>
                    <div class="notifier-error">
                        <?php
                            if (isset($_SESSION['StatusError'])) {
                            
                                echo $_SESSION['StatusError']; 
                                unset($_SESSION['StatusError']);
                            }
                            ?>
                        </div>

                        <div class="notifier-success">
                        <?php
                            if (isset($_SESSION['StatusSuccess'])) {
                            
                                echo $_SESSION['StatusSuccess']; 
                                unset($_SESSION['StatusSuccess']);
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CSSRulePlugin.min.js" integrity="sha512-+35N1KBHwTDnFOBSqO2nm/qsf5okaS74sUZu/rT/wlvuAfJ1hrAoGlWZip2l1LHB1q2i8B2k84Pb/NrC38bv8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        let tl = gsap.timeline({defaults: {ease: "power4.inOut", duration: 2}});
    
        let flagPoles = CSSRulePlugin.getRule(".hero-section:before");

      
        tl.to('nav', { opacity: 1}, "-=1")

        
        const logshowpass = document.querySelector("#log-in-pass") // icon id
        const loginpasswordField = document.querySelector("#password") //input id
    

        //  Log In Password Show function
        logshowpass.addEventListener("click", function () {
        this.classList.toggle("fa-eye-slash");
        
        this.classList.toggle("fa-eye", !this.classList.contains("fa-eye-slash"));
        const type = loginpasswordField.getAttribute("type") === "password" ? "text" : "password";
        loginpasswordField.setAttribute("type", type);
        }) 





    </script>


</html>