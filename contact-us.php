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
    <link rel="stylesheet" href="contact-us.css">

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

<!-- contact -->

    <section class="contact-us">

        <div class="conatiner">
            <h2 class="heading">
                Any Query<span>Contact-Us!</span></h2>

                <!-- query through form -->

                <div class="Container">
                    <h1>Any Query ?</h1>
                    <p>Fill out the form given below.</p>
                    
                    <!-- Contact Form -->

                    <!-- api added to receive the feedback from the visitors -->
                    <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="bdccf832-6973-464b-985d-9d0d4463bfe9">
                        <div class="form-group">
                            <label for="name">Name : </label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject : </label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message : </label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button class="S-btn" type="submit">Submit</button>
                    </form>
        
                    
                </div>

                <!-- additional info -->
            
                <div class="additional-info">
                    <div class="container">
                    <h2 class="heading">Additional <span>Information</span></h2>
                    <p>You can also reach us through:</p>
                    <ul>
                        <li><div class="head">Email:</div> kingmakerdm12@gmail.com</li>
                        <li><div class="head">Phone:</div> +1234567890</li>
                        <li><div class="head">Address:</div> 123 Street, City, Country</li>
                    </ul>
                </div>
                </div>

            
        </div>

    </section>

<!-- contact -->

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

    <script src="contact-us.js"></script>

</body>
</html>