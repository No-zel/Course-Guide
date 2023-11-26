<?php 
session_start();

if (isset($_SESSION['UserID'])) {
    echo '<style> 
    
    .log-in-btn {
        display: none;
    }

    .afterlogin {
        display: block !important;
    }

    #PhoneLogin {
        display: none;
    }
    
    .settings {
        display: block !important;
    }

    </style>';
    $_SESSION["ButtonStart"] = "Take a quiz";
    $_SESSION["LoginQuiz"] = "Pages/quiz-page.php";
    

    if ($_SESSION["TYPE"] == 1) {
        echo '<style> 
    
        #AdminSet {
            display: block !important;
        }

        #AdminLog {
            display: block !important;
        }

        </style>';
    } else {
        echo '<style> 
    
        #PhoneAdminlog {
            display: none !important;
        }
    
        </style>';
    }   
} else {

    echo '<style> 
    
    .afterlogin {
        display: none !important;
    }

    </style>';
    $_SESSION["ButtonStart"] = "Get started";
    $_SESSION["LoginQuiz"] = "Pages/register.php";

} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <!-- Logo Favicon -->
    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Style CSS -->
    <link rel="stylesheet" href="./Pages/style.css">
     <!-- Settings CSS -->
    <link rel="stylesheet" href="./Pages/settings.css">
     <!-- Navigation Javascript -->
    <script src="./js/nav.js" defer></script>
     <!-- Homepage Javascript -->
     <script src="./js/index.js" defer></script>
    <title>CGuide AI</title>
</head>

<style>



</style>

<body>

    <div class="open-confirmation" id="open-confirmation">
            <div class="card-delete">
                <div class="card-h1">Delete account?</div>
                <div class="card-content">
                    <div class="card-p">This will delete your <strong>Account</strong></div>
                    <div class="card-button">
                        <button class="cancel" id="cancel"> Cancel </button>
                        <button class="delete"> <a href="Methods/delete-acc.php"> Delete </a> </button>
                    </div>
                </div>
            </div>
        </div>
    
    <header>
        <nav>
            <div class="logo"> <a href="#"><img src="./assets/logo.png" alt="logo">CGuide</a></div>
            <ul class="sidebar" id="sidebar">
                <div class="close-btn close">
                    <i class="fa-solid fa-xmark"></i>
                </div>

                <li><a href="#homeFeatures">Feature</a></li>
                <li><a href="#homeAbout">About</a></li>
                <div class="log-in-btn sidebar-logout" id="PhoneLogin"><button><a href="./Pages/login.php">Log in</a></button></div>
                <li><a href="Pages/logpage.php" id="PhoneAdminlog" class="option afterlogin"> Admin Logs</a> </li>
                <li><a href="Pages/change-pass.php" class="option afterlogin">Settings</a></li>
                <li><a href="Methods/logout.php" class="option afterlogin">Log out</a></li>
                <li><a href="Methods/delete-acc.php" class="option delete-account afterlogin">Delete account</a></li>

                
            </ul>

            <ul>
             
                <li><a href="#homeFeatures">Feature</a></li>
                <li><a href="#homeAbout">About</a></li>
                <div class="settings">
                    <li><span><?php echo $_SESSION["LName"] ?>, <?php echo $_SESSION["FName"] ?></span>
                        <ul class="dropdown">

                            <a href="Pages/logpage.php" id="AdminLog" class="option">Audit Trail</a>
                            <a href="Pages/admin.php" class="option" id="AdminSet">Admin</a>
                            <a href="Pages/change-pass.php" class="option">Settings</a>
                            <a href="Methods/logout.php" class="option">Log out</a>
                            <a href="#" class="option delete-account" id="open-delete">Delete account</a>
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
            <h1 class="hero-h1">Discover Your Official
                Course with CGuide AI</h1>
            <div class="form">

                <p>The easiest way to determine the most fitting courses for you.</p>

                <div class="start">
                    <button> <a href="<?php echo $_SESSION["LoginQuiz"] ?>"> <?php echo $_SESSION["ButtonStart"] ?> </a> </button>
                </div>
            </div>

        </div>


    </section>

    <section id="homeAbout" class="desktop-section animate-section">

            <div class="text-section">
                <h3 class="blue-title">ABOUT</h3>
                <h1 class="primary-title">GET TO KNOW US</h1>
                <p class="secondary-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt quia perferendis
                    adipisci at, nihil veniam!</p>
            </div>

            <div class="card-box-container">
                <div class="box">
                    <p class="box-paragraph">
                        Those who are struggling to choose a college program that fits their skills can get assistance from
                        CGuide AI. The website asks questions and then utilizes artificial intelligence (AI) to assess the
                        responses in order to recommend a course of study. With CGuide AI, students can set up their own
                        accounts to safeguard their personal information.
                    </p>
                </div>
            </div>
    </section>

    <section class="cta-section animate-section">
        <div class="cta-card">
            <img src="./assets/banner.png" alt="">
            <div class="text-section cta-position">
                <h1 class="primary-title">Choose your course now</h1>
                <p class="secondary-p">Lorem ipsum, dolor sit amet consectetur!</p>
                <div class="cta-buttons">
                    <a href="Pages/quiz-page.php" class="get-started">Get started</a>
                    <a href="./Pages/register.php" class="sign-up">Sign up</a>
                </div>


            </div>



        </div>
    </section>

    <section id="homeFeatures" class="desktop-section animate-section">

            <div class="text-section">
                <h3 class="blue-title">FEATURES</h3>
                <h1 class="primary-title">EXCEEDING EXPECTATIONS</h1>
                <p class="secondary-p">Not your average site. We're all about your studies, guiding you to your dream
                    course!</p>
            </div>

            <div class="feature-box">
                <div class="box-child">
                    <img src="./assets/Question answer.svg" alt="question-image">
                    <h3>CGuide Questionaire</h3>
                    <p class="box-paragraph">
                        A feature that helps you to know the course that fits in your personal choice.
                    </p>
                </div>

                <div class="box-child">
                    <img src="./assets/Search in List.svg" alt="question-image">
                    <h3>Course Listings</h3>
                    <p class="box-paragraph">
                        Detailed information about various courses offered, including descriptions, prerequisites, credits,
                        and schedules.
                    </p>
                </div>

                <div class="box-child">
                    <img src="./assets/Heart.svg" alt="question-image">
                    <h3>CGuide Recommendations</h3>
                    <p class="box-paragraph">
                        Algorithms or tools that suggest courses based on a user's academic history, interests, or career
                        goals.
                    </p>
                </div>
            </div>
    </section>


    <footer class="footer-container">
            <div class="footer-wrapper">
                <div class="footer-first">
                    <a href="#">CGUIDE</a>
                    <p>The easiest way to determine the most fitting courses for you. </p>
                </div>
                <div class="footer-second">
                    <h1>Navigation</h1>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Features</a>
                    <a href="#">Process</a>
                </div>

                <div class="footer-third">
                    <h1>Terms of Use</h1>
                    <a href="#" target="_blank">Services</a>
                </div>

                <div class="footer-fourth">
                    <h1>Policy</h1>
                    <a href="#" target="_blank">Text here</a>

                </div>

                <div class="footer-fifth">
                    <h1>Community</h1>
                    <a href="#" target="_blank">Discord</a>

                </div>
            </div>
            <div class="copyright">© CGuide AI 2023</div>
    </footer>


    <!-- Gsap Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CSSRulePlugin.min.js"
        integrity="sha512-+35N1KBHwTDnFOBSqO2nm/qsf5okaS74sUZu/rT/wlvuAfJ1hrAoGlWZip2l1LHB1q2i8B2k84Pb/NrC38bv8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<!-- 
    <script>
      
        let tl = gsap.timeline({ defaults: { ease: "power4.inOut", duration: 2 } });
        let tl2 = gsap.timeline({defaults: {duration: 2, delay:1}})
        let flagPoles = CSSRulePlugin.getRule(".hero-section:before");

        // Animation of the Landing Page || Here Text || Navigation

        tl.to('h1', { 'clip-path': 'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0, duration: 2.2 })
        tl.to('.form', { 'clip-path': 'polygon(0% 105%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0 }, "-=2")
        tl.to('nav', { opacity: 1 }, "-=1")

        tl.to('h1', { 'clip-path': 'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', opacity: 1, y: 0, duration: 2.2 })


        // Smooth Scroll
       const lenis = new Lenis()

        lenis.on('scroll', (e) => {
            console.log(e)
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)

       
        // Scroll Animation for Sections
        gsap.registerPlugin(ScrollTrigger);

        const sections = document.querySelectorAll('.animate-section');

        sections.forEach(section => {
        gsap.to(section, {
            scrollTrigger: {
            trigger: section,
            start: 'top 35%', // Change the start position as needed
            toggleActions: 'play none none reverse', // Stops animation when scrolling up
            onEnter: () => {
                section.classList.add('animate');
            },
            onLeaveBack: () => {
                section.classList.remove('animate');
            }
            }
        });
        });


         // Open Delete account function
         const modal = document.getElementById("open-confirmation");
        const openModalBtn = document.getElementById("open-delete");
        const closeModalBtn = document.getElementsByClassName("close")[0];

        openModalBtn.addEventListener("click", function() {
        modal.classList.add("show");
        });

        closeModalBtn.addEventListener("click", function() {
        modal.classList.remove("show");
        });

        window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.classList.remove("show");
        }
        });
    </script> -->
</body>

</html>