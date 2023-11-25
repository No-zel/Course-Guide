<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
    .main{
        min-height: 80vh;
        width: 100vw;
        display: grid;
        place-items: center;
        font-size: var(--title-question-size);
        color: var(--white-accent-color);
    }
    .result-page{
        display: grid;
        place-items: center;
        text-align: center;
        padding: 25px;
    }
    .back{
    background: none;
    font-family: 'Poppins';
    font-size: var(--blue-text-size);
    padding: 10px 30px;
    border: none;
    outline: 1px solid var(--dark-outline-color);
    color: var(--white-accent-color);
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.5s ease;
    text-decoration: none;
  }

  .back:hover{
    background: var(--table-header-color);
  }

  


</style>
<body>
<header >
        <nav style="opacity: 1; outline:none; justify-content:center;">
            <div class="logo"> <a href="../main.php"><img src="../assets/logo.png" alt="logo">CGuide</a></div>
        </nav>
    </header>
    
        <div class="main">
            <div class="result-page">
                        
                <p>Thanks for answering. Results will be available soon.</p>
                   <a href="../main.php" class="back">Home</a>


            </div>
        </div>
</body>
</html>