<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <script src="../js/nav.js" defer></script>


    <title>Create account | Log in</title>
</head>



<body>


    <header>
        <nav>
            <div class="logo"> <a href="../main.html"><img src="../assets/logo.png" alt="logo">CGuide</a></div>

            <ul class="sidebar" id="sidebar">
                <div class="close-btn close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <li><a href="#">Home</a></li>
                <li><a href="#">Feature</a></li>
                <li><a href="#">About</a></li>
                <div class="log-in-btn sidebar-logout"><button><a href="./Pages/login.php">Log in</a></button></div>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">About</a></li>


                </ul>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">About</a></li>

                </ul>

                <div class="hamburger " id="open-nav">
                    <i class="fa-solid fa-bars"></i>
                </div>

        </nav>
    </header>

    <section class="login-section">

        <div class="login-card">

            <form action="../Methods/register.php" method="POST" class="form-create-container">

                <div class="top-section">
                    <h2>Create account</h2>
                    <input type="text" name="email" id="email" placeholder="Email" required>


                    <input type="text" name="username" id="username" placeholder="Username" required>


                    <input type="password" name="password" id="password" placeholder="Password" required>

                    <input type="password" name="repassword" id="repassword" placeholder="Re-type password" required>


                    <button type="submit" class="btn-login">Sign up</button>
                    <a href="../Pages/login.php" class="backbtn">Back</a>

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

</html>