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
    <link rel="stylesheet" href="style.css">


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

    <!-- home section -->

    <section class="home" id="home">

        <div class="content">
            <h3>GET IN <span>SHAPE</span> WITH US!</h3>
            <p>“Welcome to GYM Our state-of-the-art facility is equipped with the latest fitness equipment and staffed by experienced trainers who are dedicated to helping you achieve your fitness goals. We offer a variety such as personal training sessions tailored to your individual needs. Sign up for a free trial today and experience the difference at GYM”</p>
            <a href="pricing.php" class="btn">JOIN NOW!</a>
        </div>

    </section>





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
                    <a href="index.html" class="links"><i class="fas fa-arrow-right"> HOME </i></a>
                    <a href="about.html" class="links"><i class="fas fa-arrow-right"> ABOUT </i></a>
                    <a href="courses.html" class="links"><i class="fas fa-arrow-right"> COURSES </i></a>
                    <a href="pricing.html" class="links"><i class="fas fa-arrow-right"> PRICING </i></a>
                    <a href="contact-us.html" class="links"><i class="fas fa-arrow-right"> CONTACT US </i></a>
                    <a href="blogs.html" class="links"><i class="fas fa-arrow-right"> BLOGS </i></a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>Copyright &copy;2024; <span class="f-name">GYM</span></p>
            </div>

    </footer>

    <script src="script.js"></script>

</body>
</html>