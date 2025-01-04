<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: userlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM</title>
    <link rel="stylesheet" href="courses.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
     <!-- head -->
     <header class="header" >

        <a class="logo" >
            GYM
        </a>
        <nav class="navbar">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="courses.php">COURSES</a>
            <a href="pricing.php">PRICING</a>
            <a href="contact-us.php">CONTACT US</a>
            <a href="blogs.php">BLOGS</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        

        <form action="" class="login-form">
            <h3>login now</h3>
            <p>USER LOGIN<a href="userlogin.php">CLICK HERE</a></p>
            <p>don't have an account <a href="registration.php">Register NOW</a></p>
            <p>ADMIN LOGIN <a href="admin_login.php">LOGIN</a></p>
        </form>


    </header>

    <!-- courses -->

    <section class="courses-page">
        
        <div class="container">
            <h2 class="heading">
                Our's <span>Courses</span>
            </h2>
            <!-- first course -->
            <div class="course-box">
                <div class="box-left">
                    <img src="img/crossfit.jpg" alt="course">
                </div>
                <div class="box-right">
                <h2>CROSS-FIT</h2>>
                <p><strong>Timing:</strong> 7am-10am</p>
                <p><strong>Class Fees:</strong> $59.99</p>
                <p> <strong>About:</strong>
                     A form of high intensity interval training, CrossFit is a strength and conditioning workout that is made up of functional movement performed at a high intensity level. These movements are actions that you perform in your day-to-day life, like squatting, pulling, pushing etc
                </p>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
            </div>
            <!-- second course -->
            <div class="course-box">
                <div class="box-left">
                    <img src="img/functionalitytraining.jpg" alt="course">
                </div>
                <div class="box-right">
                <h2>Functionality Training</h2>>
                <p><strong>Timing:</strong> 7am-12pm</p>
                <p><strong>Class Fees:</strong> $65</p>
                <p> <strong>About:</strong>
                    Functional training trains the same muscle movements you use in everyday life. For example, a senior citizen might practice bodyweight squats to improve their ability to stand up from a chair. These everyday activities can get easier when you train for them. Balance and coordination.
                </p>
                <a href="checkout.php" class="btn">Checkout</a>
                </div>
            </div>
            <!-- third course -->
            <div class="course-box">
                <div class="box-left">
                    <img src="img/strength.jpg" alt="course">
                </div>
                <div class="box-right">
                <h2>Strength Exercise</h2>>
                <p><strong>Timing:</strong> 4pm-12am</p>
                <p><strong>Class Fees:</strong> $59.99</p>
                <p> <strong>About:</strong>
                    The five exercises of bench press, deadlift, squat, shoulder press and pull-up are commonly known as the Big 5 of strength training. Because of the adjustability of the resistance, the lat pulldown is often used instead of the pull-up.
                </p>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
            </div>
        </div>

    </section>

    <!-- courses -->


        <!-- footer -->
        <footer class="footer">

    

            <div class="box-container">
    
                <div class="box">
                    <h3>GYM <i class="fas"></i></h3>
                    <p>
                        
                    </p>
    
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
    
                </div>
    
                <div class="box">
                    <h3>contact us</h3>
                    <a href="#" class="links"><i class="fas fa-phone"> +123-456-7896 </i></a>
                    <a href="#" class="links"><i class="fas fa-phone"> +124-456-4567 </i></a>
                    <a href="#" class="links"><i class="fas fa-envelope"> aloknath@gmail.com </i></a>
                    <a href="#" class="links"><i class="fas fa-map-marker-alt"> mumbai india - 400964 </i></a>
                </div>
    
                <div class="box">
                    <h3>quick links</h3>
                    <a href="#" class="links"><i class="fas fa-arrow-right"> HOME </i></a>
                    <a href="#" class="links"><i class="fas fa-arrow-right"> ABOUT </i></a>
                    <a href="#" class="links"><i class="fas fa-arrow-right"> COURSES </i></a>
                    <a href="#" class="links"><i class="fas fa-arrow-right"> PRICING </i></a>
                    <a href="#" class="links"><i class="fas fa-arrow-right"> CONTACT US </i></a>
                    <a href="#" class="links"><i class="fas fa-arrow-right"> BLOGS </i></a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>Copyright &copy;2024; <span class="f-name">GYM</span></p>
            </div>

    </footer>

    <script src="courses.js"></script>

</body>
</html>