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
    <link rel="stylesheet" href="blogs.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

    <!-- blogs section -->

    <section class="blogs-page">

        <div class="container">
            <h2 class="heading">
                Daily <span>Exercise</span> Routine
            </h2>
        </div>


        <!-- 1st exercise -->

         <div class="card mb-3" style="max-width: 100rem;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/exbg1.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title">Universal Warm-Up</h2>
                  <ul class="card-text">
                    <li>Step 1: Slow forward and back neck tilts </li>
                    <li>Step 2: Slow side-to-side neck tilts</li>
                    <li>Step 3: Slow neck rotations</li>
                    <li>Step 4: Shoulder rotations</li>
                    <li>Step 5: Slow march jacks</li>
                    <li>Step 6: Slow side jacks</li>
                    <li>Step 7: Alternating chest expansions</li>
                    <li>Step 8: Chest expansions</li>
                    <li>Step 9: Raised arms circles</li>
                    <li>Step 10: Hip rotations</li>
                    <li>Step 11: Backward leg raises</li>
                    <li>Step 12: Side leg raises</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- 2nd exercise -->

          <div class="card mb-3" style="max-width: 100rem;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/ex2.gif" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title">Chest Exercise</h2>
                  <ul class="card-text">
                    <li>Before Starting Do a Universal Warmup.</li>
                    <li>Step 1: Dips </li>
                    <li>Step 2: Barbell Incline Press</li>
                    <li>Step 3: Flat Barbell Press</li>
                    <li>Step 4: Flat Dumbbel Chest Press</li>
                    <li>Step 5: Incline Dumbbel Chest Press</li>
                    <li>Step 6: Suspended Push Ups</li>
                    <li>Step 7: Push Ups</li>
                    <li>Step 8: Clapping Pusph Ups</li>
                    <li>Step 9: Cable Chest Press</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- 3rd exercise -->
          <div class="card mb-3" style="max-width: 100rem;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/ex3.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title">Shoulder Exercise</h2>
                  <ul class="card-text">
                  <li>Before Starting Do a Universal Warmup.</li>
                    <li>Step 1: Barbell Standing Press </li>
                    <li>Step 2: Seated Dumbbel Press</li>
                    <li>Step 3: Arnold Press</li>
                    <li>Step 4: Lateral Raise</li>
                    <li>Step 5: Bent Over Reverse Fly</li>
                    <li>Step 6: Upright Row</li>
                    <li>Step 7: Front Raises</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- 4th exercise -->


          <!-- 5th exercise -->


          <!-- 6th exercise -->


          <!-- 7th exercise -->





         


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

    <script src="blogs.js"></script>

</body>
</html>