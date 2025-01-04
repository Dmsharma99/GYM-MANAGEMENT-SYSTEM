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
    <link rel="stylesheet" href="pricing.css">

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

<!-- pricing -->

<section class="pricing-page">
        
        <div class="container">
            <h2 class="heading">
                Membership's <span>Plans</span>
            </h2>
            <!-- basic -->
            <div class="plans-box">
                <div class="box-up">
                    <img src="img/about-poster.jpg" alt="course">
                </div>
                <div class="box-down">
                <h2>Basic Membership Plan</h2>
                <ul>
                <li>Access to gym facilities</li>
                <li>Basic workout equipment</li>
                <li>Personal trainer available</li>
                </ul>
                <p><strong>12 Month Plan:</strong> $59.99</p>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
            </div>

            <!-- Advanced -->
            <div class="plans-box">
                <div class="box-up">
                    <img src="img/about-poster.jpg" alt="course">
                </div>
                <div class="box-down">
                <h2>Advanced Membership Plan</h2>
                <ul>
                <li>All features of Basic Plan</li>
                <li>Access to additional equipment</li>
                <li>Group fitness classes</li>
                </ul>
                <p><strong>12 Month Plan:</strong> $119.98</p>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
            </div>

            <!-- Primium -->
            <div class="plans-box">
                <div class="box-up">
                    <img src="img/about-poster.jpg" alt="course">
                </div>
                <div class="box-down">
                <h2>Primiun Membership Plan</h2>
                <ul>
                <li>All features of Standard Plan</li>
                <li>Access to sauna and spa facilities</li>
                <li>Discounts on personal training sessions</li>
                </ul>
                <p><strong>12 Month Plan:</strong> $179.97</p>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
            </div>
            


    </section>

<!-- pricing -->










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

    <script src="pricing.js"></script>

</body>
</html>