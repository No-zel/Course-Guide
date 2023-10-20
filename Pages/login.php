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

    

    <title>CGuide | Log in</title>
</head>



<body>
    <!-- Change Pass notifier -->
  


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

            <form action="../Methods/auth.php" method="POST" class="form-login-container">

                <div class="top-section">
                    <h2>Log in</h2>

                    <input type="text" id="username" name="username" placeholder="Username" required>

                    <input type="password" id="password" name="password" placeholder="Password" required>

                  

                    <button type="submit" class="btn-login">Log in</button>

                    <div class="bot-section">
                        <span>Don't have an account?</span>
                        <a href="../Pages/register.php"> Register </a>

                    </div>
                    <div class="notifier-error">
                        <?php
                            session_start(); 
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

</html>