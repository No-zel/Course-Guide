<?php 

//Getting the Answer from Radio Button
$Q1Answer = $_POST['Q1-answer'];
$Q2Answer = $_POST['Q2-answer'];
$Q3Answer = $_POST['Q3-answer'];
$Q4Answer = $_POST['Q4-answer'];
$Q5Answer = $_POST['Q5-answer'];
$Q6Answer = $_POST['Q6-answer'];
$Q7Answer = $_POST['Q7-answer'];


//Course Category
$Creative = 0;
$Organized = 0;
$Social = 0;
$Analytical = 0;
$Practical = 0;
$Enterprising = 0;


//Question 1 Answer
if ($Q1Answer == "A") { $Organized++;}
if ($Q1Answer == "B") { $Creative++; }
if ($Q1Answer == "C") { $Analytical++; }
if ($Q1Answer == "D") { $Practical++; }
if ($Q1Answer == "E") { $Social++; }
if ($Q1Answer == "F") { $Enterprising++; }

//Question 2 Answer
if ($Q2Answer == "A") { $Practical++;}
if ($Q2Answer == "B") { $Analytical++;}
if ($Q2Answer == "C") { $Organized++;}
if ($Q2Answer == "D") { $Creative++;}
if ($Q2Answer == "E") { $Enterprising++;}
if ($Q2Answer == "F") { $Social++;}

//Question 3 Answer
if ($Q3Answer == "A") { $Practical++;}
if ($Q3Answer == "B") { $Organized++;}
if ($Q3Answer == "C") { $Analytical++;}
if ($Q3Answer == "D") { $Enterprising++;}
if ($Q3Answer == "E") { $Creative++;}
if ($Q3Answer == "F") { $Social++;}

//Question 4 Answer
if ($Q4Answer == "A") { $Social++;}
if ($Q4Answer == "B") { $Analytical++;}
if ($Q4Answer == "C") { $Creative++;}
if ($Q4Answer == "D") { $Organized++;}
if ($Q4Answer == "E") { $Practical++;}
if ($Q4Answer == "F") { $Enterprising++;}

//Question 5 Answer
if ($Q5Answer == "A") { $Practical++;}
if ($Q5Answer == "B") { $Creative++;}
if ($Q5Answer == "C") { $Enterprising++;}
if ($Q5Answer == "D") { $Social++;}
if ($Q5Answer == "E") { $Organized++;}
if ($Q5Answer == "F") { $Analytical++;}

//Question 6 Answer
if ($Q6Answer == "A") { $Practical++;}
if ($Q6Answer == "B") { $Organized++;}
if ($Q6Answer == "C") { $Creative++;}
if ($Q6Answer == "D") { $Enterprising++;}
if ($Q6Answer == "E") { $Social++;}
if ($Q6Answer == "F") { $Analytical++;}

//Question 7 Answer
if ($Q7Answer == "A") { $Social++;}
if ($Q7Answer == "B") { $Practical++;}
if ($Q7Answer == "C") { $Enterprising++;}
if ($Q7Answer == "D") { $Analytical++;}
if ($Q7Answer == "E") { $Creative++;}
if ($Q7Answer == "F") { $Organized++;}

echo $Creative;
echo $Organized;
echo $Social;
echo $Analytical;
echo $Practical;
echo $Enterprising; 



?>