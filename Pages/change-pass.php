<?php session_start();

if (isset($_SESSION['UserID'])) {
    header('location: ../Pages/login.php');
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
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


    <title> CGuide | Change password</title>
</head>



<body>

    <header>
        <nav>
            <div class="logo"> <a href="../main.html"><img src="../assets/logo.png" alt="logo">CGuide</a></div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Feature</a></li>
                <li><a href="#">About</a></li>

            </ul>
            <div class="hamburger">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>

    <section class="login-section">

        <div class="login-card">

            <form action="../Methods/change-pass.php" method="POST" class="change-container">

                <div class="top-section">
                    <h2>Change Password</h2>


                    <input type="password" id="oldPassword" name="oldPassword" placeholder="New Password" required>
                    <input type="password" id="newPassword" name="newPassword" placeholder="Re-Enter New password" required>


                    <button type="submit" class="btn-login">Confirm</button>
                    <div class="options">
                        <span class="delete"> <a href="../Methods/delete-acc.php">Delete account</a></span>
                        <span class="delete"><a href="../Methods/logout.php">Log out</a></span>
                    </div>

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