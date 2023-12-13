<?php
session_start();

//Checker if someones is by-passing the website (not login)
if (!isset($_SESSION['UserID'])) {
    $_SESSION['StatusError'] = "You need to login first";
    header('location: login.php');
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
    <title>Start your course</title>
    <!-- Css stylesheets -->
    <link rel="stylesheet" href="../Pages/style.css">
    <link rel="stylesheet" href="./quiz.css">
</head>

    
<body>

    <header >
        <nav style="opacity: 1; outline:none; justify-content:center;">
            <div class="logo"> <a href="../main.php"><img src="../assets/logo.png" alt="logo">CGuide</a></div>
        </nav>
    </header>
<main class="main-container">
    <div class="quiz">
        <form action="../Methods/quiz-result.php" method="post">
    
          
            <div class="question">
                <p>
                    How do you usually solve problems?
                </p>
    
               <div class="options-input">
                 <input type="radio" name="Q1-answer" id="Q1-A" value="A">
                 <label for="Q1-A"> Use proven methods that I can follow </label>
                 <input type="radio" name="Q1-answer" id="Q1-B" value="B">
                 <label for="Q1-B"> Think of creative or unconventional solutions </label> 
                 <input type="radio" name="Q1-answer" id="Q1-C" value="C">
                 <label for="Q1-C"> Carefully observe and analyze information before acting </label> 
                 <input type="radio" name="Q1-answer" id="Q1-D" value="D">
                 <label for="Q1-D"> Do something right away, rather than spend time talking about it </label>
                 <input type="radio" name="Q1-answer" id="Q1-E" value="E">
                 <label for="Q1-E"> Think about the people who are involved and see how I can best help them </label> 
                 <input type="radio" name="Q1-answer" id="Q1-F" value="F">
                 <label for="Q1-F"> Use my influence or leadership </label>
                
               </div>
            </div>
    
          <div class="question">
              <p>
                  What activities do you like doing the most?
              </p>
              <div class="options-input">
                <input type="radio" name="Q2-answer" id="Q2-A" value="A">
                <label for="Q2-A"> Tasks that require physical strength and coordination </label> 
                <input type="radio" name="Q2-answer" id="Q2-B" value="B">
                <label for="Q2-B"> Things that allow me to do experiments and analysis </label> 
                <input type="radio" name="Q2-answer" id="Q2-C" value="C">
                <label for="Q2-C"> Working more with data and facts than with people </label> 
                <input type="radio" name="Q2-answer" id="Q2-D" value="D">
                <label for="Q2-D"> Activities that allow me to express myself creatively </label> 
                <input type="radio" name="Q2-answer" id="Q2-E" value="E">
                <label for="Q2-E"> Leading and directing teams </label> 
                <input type="radio" name="Q2-answer" id="Q2-F" value="F">
                <label for="Q2-F"> Training or teaching people </label> 
              </div>
            
              
          </div>
    
            <div class="question">
                <p>
                    How would people be most likely to describe you?
                </p>
                <div class="options-input">
                    
                    <input type="radio" name="Q3-answer" id="Q3-A" value="A">
                    <label for="Q3-A"> Practical </label> 
                    <input type="radio" name="Q3-answer" id="Q3-B" value="B">
                    <label for="Q3-B"> Organized </label> 
                    <input type="radio" name="Q3-answer" id="Q3-C" value="C">
                    <label for="Q3-C"> Logical </label> 
                    <input type="radio" name="Q3-answer" id="Q3-D" value="D">
                    <label for="Q3-D"> Competitive </label> 
                    <input type="radio" name="Q3-answer" id="Q3-E" value="E">
                    <label for="Q3-E"> Creative </label> 
                    <input type="radio" name="Q3-answer" id="Q3-F" value="F">
                    <label for="Q3-F"> Collaborative </label> 
                </div>
            </div>
    
            <div class="question">
                <p>
                    Which of the following describes you best?
                </p>
                <div class="options-input">
                    
                    <input type="radio" name="Q4-answer" id="Q4-A" value="A">
                    <label for="Q4-A"> I like helping others solve their problems. </label> 
                    <input type="radio" name="Q4-answer" id="Q4-B" value="B">
                    <label for="Q4-B"> I like examining theories and information. </label> 
                    <input type="radio" name="Q4-answer" id="Q4-C" value="C">
                    <label for="Q4-C"> I tend to be less concerned with structure and rules. </label> 
                    <input type="radio" name="Q4-answer" id="Q4-D" value="D">
                    <label for="Q4-D"> I like having clear instructions to follow. </label> 
                    <input type="radio" name="Q4-answer" id="Q4-E" value="E">
                    <label for="Q4-E"> I prefer to focus on things that are scientific or mechanical. </label> 
                    <input type="radio" name="Q4-answer" id="Q4-F" value="F">
                    <label for="Q4-F"> I like being in charge. </label> 
                </div>
            </div>
    
            <div class="question">
                <p>
                     What kind of working environment do you prefer?
                </p>
                <div class="options-input">
                    
                    <input type="radio" name="Q5-answer" id="Q5-A" value="A">
                    <label for="Q5-A"> Stable and active </label> 
                    <input type="radio" name="Q5-answer" id="Q5-B" value="B">
                    <label for="Q5-B"> Unique and creative </label> 
                    <input type="radio" name="Q5-answer" id="Q5-C" value="C">
                    <label for="Q5-C"> Competitive and fast-paced </label> 
                    <input type="radio" name="Q5-answer" id="Q5-D" value="D">
                    <label for="Q5-D"> Collaborative and cooperative </label> 
                    <input type="radio" name="Q5-answer" id="Q5-E" value="E">
                    <label for="Q5-E"> Highly organized and rule-regulated </label> 
                    <input type="radio" name="Q5-answer" id="Q5-F" value="F">
                    <label for="Q5-F"> Data-driven and insightful </label> 
                </div>
            </div>
    
            <div class="question">
                
                <p>
                    Which of the following activities would you like to work on the most?
                </p>
                <div class="options-input">
                    
                    <input type="radio" name="Q6-answer" id="Q6-A" value="A">
                    <label for="Q6-A"> Create a solar-powered engine </label> 
                    <input type="radio" name="Q6-answer" id="Q6-B" value="B">
                    <label for="Q6-B"> How to develop a system for a manufacturing plant </label> 
                    <input type="radio" name="Q6-answer" id="Q6-C" value="C">
                    <label for="Q6-C"> Produce and direct a short film </label> 
                    <input type="radio" name="Q6-answer" id="Q6-D" value="D">
                    <label for="Q6-D"> How to create an online business from scratch </label> 
                    <input type="radio" name="Q6-answer" id="Q6-E" value="E">
                    <label for="Q6-E"> Start a fundraising event for an orphanage </label> 
                    <input type="radio" name="Q6-answer" id="Q6-F" value="F">
                    <label for="Q6-F"> Solve a murder crime </label> 
                </div>
            </div>
    
            <div class="question">
            
                <p>
                    Which of the following activities would you like to work on the most?
                </p>
                <div class="options-input">
                    <input type="radio" name="Q7-answer" id="Q7-A" value="A">
                    <label for="Q7-A"> Special Education </label> 
                    <input type="radio" name="Q7-answer" id="Q7-B" value="B">
                    <label for="Q7-B"> Architecture </label> 
                    <input type="radio" name="Q7-answer" id="Q7-C" value="C">
                    <label for="Q7-C"> Business Economics </label> 
                    <input type="radio" name="Q7-answer" id="Q7-D" value="D">
                    <label for="Q7-D"> Policy Analysis </label> 
                    <input type="radio" name="Q7-answer" id="Q7-E" value="E">
                    <label for="Q7-E"> Art History </label> 
                    <input type="radio" name="Q7-answer" id="Q7-F" value="F">
                    <label for="Q7-F"> Manufacturing </label> 
                    <button> <a class="submit" type="submit">Submit</a> </button>
                </div>
                
              
            </div>

            
  
        </div>

        </form>
        <div class="button-div">
         <button id="backButton" class="back">Back</button>
         <button id="nextButton" class="next">Next</button>
       </div>
       
        
</main>


</body>


    <script>
 

    

        const questions = document.querySelectorAll('.question');
        let currentQuestion = 0;
        const nextButton = document.getElementById('nextButton');
        const backButton = document.getElementById('backButton');
        
        function showQuestion(index) {
            questions.forEach(question => {
                question.style.display = 'none';
            });
            questions[index].style.display = 'block';
            if (index === questions.length - 1) {
                nextButton.style.display = 'none';
            } else {
                nextButton.style.display = 'block';
            }
            if (index === 0) {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = 'block';
            }
        }
        
        document.getElementById('nextButton').addEventListener('click', function() {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                showQuestion(currentQuestion);
            } else {
                alert('You have reached the end of the quiz!');
            }
        });
        
        document.getElementById('backButton').addEventListener('click', function() {
            if (currentQuestion > 0) {
                currentQuestion--;
                showQuestion(currentQuestion);
            } else {
                alert('This is the first question!');
            }
        });
        
        showQuestion(currentQuestion);
        


    </script>

</html>