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


//ARRAYS RECOMENDATION
$crea = array("Mass Communication", "Fine Arts", "Architecture", "Multimedia Arts", "Fashion Design");
$org = array("Legal Management", "History", "Human Resources", "Public Administration", "Library and Information Science");
$analy = array("Computer Science", "Statistics", "Physics", "Mathematics", "Mechanical/ Electrical Engineering","Philosophy Logic","Chemistry");
$soc = array("Education", "Nursing", "Medicine", "Veterinary Medicine", "Psychology","Hotel and Restaurant Management/Tourism");
$prac = array("Sports Science", "Maritime", "Criminology", "Sports Management", "Agriculture", "Fisheries");
$lead = array("Marketing", "Business", "Management", "Accountancy", "Entrepreneurship");
//ARRAYS
//ARRAYS DISCRIPTION
$dcrea = array("This program is designed to prepare students for a career in media, communications, film & TV production, and journalism.", "A fine arts degree is for individuals who want to pursue careers in the arts, encompassing fields such as painting, sculpting, dance, theater, and other artistic pursuits. Graduates of the Fine Arts program emerge well-prepared for a range of creative professions, including roles as professional artists, illustrators, designers, curators, and educators. This program cultivates an enthusiasm for self-expression, nurtures a discerning eye, and equips individuals to make meaningful contributions to the realm of visual arts.
", "Architecture is the design and construction of buildings, combining art, mathematics, science, and logistics. During an architecture degree, students will learn how to draw accurate designs of buildings either by hand or with computer software. Graduates of the Architecture program are well-prepared for diverse career paths, including architectural design, urban planning, sustainable design, and project management.", "Multimedia Arts programs are equipped for careers in graphic design, digital media production, animation, web design, and interactive media. This program emphasizes technical skills and nurtures creativity, adaptability, and a deep understanding of multimedia arts in the contemporary landscape.
", "The fashion design program offers a comprehensive exploration of design principles, aesthetics, and the technical aspects of garment creation. Graduates of Fashion Design are responsible for researching trends, creating design concepts, sketching designs, selecting fabrics and trims, and overseeing the production process. They collaborate with teams to bring their designs to life and ensure they align with the business strategy and current market trends.
");
$dorg = array("This program is an interdisciplinary study with a curriculum focused on law integrated with essential aspects of business management. The purpose of the program is to develop the study of law within the framework of business management. Its ultimate goal is to develop students to become leaders and managers of the twenty-first century, equipped with the knowledge of management principles and business laws for good governance and attuned to the environment of globalized business.
", "A history course is an academic program or class that focuses on the study and analysis of past events, cultures, societies, and individuals. These courses are designed to provide students with a comprehensive understanding of historical developments, their causes and consequences, and their impact on the present. History courses are offered at various educational levels, including high school, undergraduate, and graduate levels.
", "Human Resources (HR) focuses on managing an organization’s most valuable asset: its employees. HR professionals ensure employees have the necessary resources for their tasks and foster a positive work environment. They handle various responsibilities, from recruiting and compliance to benefits and training
", "Public administration is a field in which leaders serve communities to advance the common good and effect positive change. Public administration professionals are equipped with skills to manage at all levels of government (local, state, and federal) as well as nonprofit organizations.
", "A library science degree can position professionals to pursue a career helping and educating others The question “What can you do with a library science degree?” presents myriad possibilities to consider. Many graduates with library science degrees end up in libraries. Some librarians choose to work in school libraries, while others opt for jobs at public libraries—it all comes down to preference.  
");
$danaly = array("Computer Science is the study of algorithms, programming languages, data structures, and the principles behind computing machines. Students delve into software development, artificial intelligence, machine learning, and cybersecurity. The curriculum often includes coding, software engineering, and theoretical concepts. Graduates are equipped for careers in software development, system analysis, database administration, and IT management.
", "Statistics involves the collection, analysis, interpretation, presentation, and organization of data. Students in a Statistics course learn to apply mathematical techniques to make informed decisions. Topics include probability theory, regression analysis, and hypothesis testing. Graduates find opportunities in various fields such as finance, healthcare, market research, and government agencies, where data-driven decision-making is crucial.
", "Physics is the study of matter, energy, and the fundamental forces that govern the universe. Courses cover classical mechanics, electromagnetism, quantum mechanics, and relativity. Students conduct experiments, analyze data, and learn mathematical modeling. Physics graduates can pursue careers in research, academia, engineering, and industries like telecommunications and renewable energy. 
", "MathemaMathematics involves the study of numbers, quantities, shapes, and patterns. Courses cover areas such as algebra, calculus, geometry, and statistics. Students develop problem-solving skills and logical thinking. Graduates are sought after in various industries, including finance, technology, education, and research, due to their ability to analyze complex problems and provide solutions. 
tics", "Mechanical and Electrical Engineering programs focus on designing, building, and maintaining mechanical and electrical systems. Students learn about thermodynamics, fluid mechanics, circuits, and control systems. Practical applications include designing machines, electrical systems, and robotics. Graduates often find opportunities in manufacturing, energy, aerospace, and telecommunications industries. 
","Philosophy Logic courses explore the principles of reasoning and argumentation. Students delve into symbolic logic, informal fallacies, and critical thinking. The program aims to enhance analytical skills and the ability to construct and evaluate arguments. Graduates may pursue careers in law, academia, journalism, and any field where precise reasoning and argumentation are essential. 
","Chemistry involves the study of the properties, composition, and behavior of matter. Courses cover organic, inorganic, and physical chemistry, as well as laboratory techniques. Students gain hands-on experience in analyzing and synthesizing substances. Chemistry graduates find employment in pharmaceuticals, materials science, environmental science, and various industries where expertise in chemical processes is essential.
");
$dsoc = array("Education is a four-year degree program that prepares students to become competent and effective teachers in various subject areas. The program covers topics such as educational foundations, curriculum development, instructional methods, assessment strategies, classroom management, and educational research. Students also undergo extensive practicum and internship experiences in different school settings to develop their skills and professional ethics.
", "a four-year degree program that prepares students to become professional nurses who can provide quality and holistic care to individuals, families, communities, and populations. The program consists of general education, major, and professional nursing courses that cover the theoretical and practical aspects of nursing. Graduates of BS Nursing are expected to apply critical thinking, evidence-based practice, leadership, management, research, and communication skills in their nursing roles. They are also expected to uphold ethical, legal, and professional standards and demonstrate cultural sensitivity and social responsibility in their practice.
", "Medicine degree is the undergraduate qualification required to become a medical doctor. This degree typically spans a period of five to six years, varying by country and educational institution. The program is rigorous and encompasses a wide range of medical subjects, practical training, and clinical experience.
", "Veterinary Medicine is a degree that prepares students for careers in animal health and welfare. It covers topics such as anatomy, physiology, pathology, pharmacology, microbiology, immunology, parasitology, epidemiology, surgery, and clinical skills. Students also learn about animal production, nutrition, behavior, welfare, and public health.
", "Psychology is a degree that prepares students for careers in various fields related to human behavior, cognition, and emotion. Students learn about the theories, methods, and applications of psychology, as well as develop skills in research, communication, critical thinking, and problem-solving.
","Sports science courses are academic programs that focus on the scientific study of various aspects related to sports and physical activity. These courses integrate principles from fields such as biology, physiology, psychology, nutrition, biomechanics, and exercise science to understand and enhance athletic performance, prevent injuries, and promote overall health and well-being.
");
$dprac = array("Sports science courses are academic programs that focus on the scientific study of various aspects related to sports and physical activity. These courses integrate principles from fields such as biology, physiology, psychology, nutrition, biomechanics, and exercise science to understand and enhance athletic performance, prevent injuries, and promote overall health and well-being.
", "A maritime course typically refers to an educational program or training that focuses on various aspects of the maritime industry. The maritime industry encompasses activities related to the sea, including navigation, shipping, shipbuilding, marine engineering, and maritime law. Maritime courses are designed to provide individuals with the knowledge and skills necessary to work in different roles within this industry.
", "criminology course is an educational program that focuses on the scientific study of crime, criminal behavior, and the criminal justice system. Criminology courses are designed to provide students with a comprehensive understanding of the factors influencing criminal behavior, the social and psychological aspects of crime, and the institutions and practices involved in preventing and responding to criminal activities. They are commonly found in departments of criminology, criminal justice, sociology, or legal studies within universities and colleges. Graduates of criminology programs may pursue careers in law enforcement, criminal justice administration, social work, policy analysis, research, or advocacy related to crime and justice.
", "A sports management course is an educational program that focuses on the business and organizational aspects of the sports industry. This field of study prepares individuals to work in various roles related to the management, administration, and marketing of sports organizations, events, and facilities. Sports management courses cover various topics to provide students with the skills and knowledge needed to navigate the complex and dynamic world of the sports business.
", "agricultural course refers to an educational program that focuses on the study of agriculture— the science, art, and business of producing crops and raising livestock. These courses cover a wide range of topics related to farming, agribusiness, agricultural science, and sustainable agricultural practices. Agricultural courses are designed to equip individuals with the knowledge and skills needed to address the challenges and opportunities in the agricultural sector. Graduates of agricultural courses may pursue careers in farming, agribusiness, research, extension services, agricultural consulting, and various roles within the food and agricultural industries.
", "Marketing courses cover a wide range of topics related to promoting and selling products or services. They often include areas such as consumer behavior, market research, advertising, digital marketing, branding, strategy development, and analytics. Depending on the level (undergraduate, graduate, or specialized), these courses can offer insights into various aspects of marketing and equip individuals with the skills needed to excel in the field.
");
$dlead = array("Marketing courses cover a wide range of topics related to promoting and selling products or services. They often include areas such as consumer behavior, market research, advertising, digital marketing, branding, strategy development, and analytics. Depending on the level (undergraduate, graduate, or specialized), these courses can offer insights into various aspects of marketing and equip individuals with the skills needed to excel in the field.
", "Business courses encompass a broad spectrum of subjects related to commerce and management. They typically cover accounting, finance, marketing, economics, management, operations, entrepreneurship, and more. These courses aim to provide a comprehensive understanding of how businesses operate, teaching practical skills and theoretical knowledge essential for success in various industries. They can range from introductory courses for foundational knowledge to specialized programs catering to specific fields within the business world.
", "The concepts and procedures involved in effectively allocating and arranging organizational resources are thoroughly examined in management courses. Students study organizational behavior, team dynamics, and project management with an emphasis on leadership, decision-making, and strategic planning. Through effective management techniques, the program seeks to provide students with the skills necessary to succeed in challenging business situations, promote teamwork, and advance organizational success.
", "The fundamentals of financial reporting and analysis are thoroughly covered in accounting courses. Students gain knowledge of how to create accurate financial accounts, evaluate the financial performance of a business, and guarantee compliance with accounting standards and regulations by studying topics including auditing, taxation, and financial planning. The course material is intended to develop proficiency in keeping open and responsible financial records, supporting well-informed decision-making, and negotiating the intricacies of the financial environment in enterprises and organizations.
", "The dynamic world of starting and running businesses is introduced to students in entrepreneurship courses. All aspects of entrepreneurship are encouraged to be understood holistically by the curriculum, from ideation and business development to market analysis and financial management. Encouraging innovation, taking calculated risks, and being flexible are all stressed, along with cultivating an entrepreneurial mindset. The knowledge and abilities students acquire to launch and maintain profitable enterprises are based on their practical understanding of the difficulties faced by entrepreneurs.");
//ARRAYS


$categories = array(
    array('name' => 'Creative', 'value' => $Creative,'category' => $crea,'discription' => $dcrea),
    array('name' => 'Organized', 'value' => $Organized,'category' => $org,'discription' => $org),
    array('name' => 'Analytical', 'value' => $Analytical,'category' => $analy,'discription' => $danaly),
    array('name' => 'Social', 'value' => $Social,'category' => $soc,'discription' => $dsoc),
    array('name' => 'Practical', 'value' => $Practical,'category' => $prac,'discription' => $dprac),
    array('name' => 'Enterprising', 'value' => $Enterprising,'category' => $lead,'discription' => $dlead)
);

//SORT THE ARRAYS
usort($categories, function ($a, $b) {
    return $b['value'] - $a['value'];});

//FUNCTION RECOMENDATION
$TopCategory = $categories[0]['category'];
$TopDiscription = $categories[0]['discription'];
$Index = rand(0,count($TopCategory)-1);


echo'Recommended Field: ',$TopCategory[$Index],'<br>','Discription: ',$TopDiscription[$Index];
?>