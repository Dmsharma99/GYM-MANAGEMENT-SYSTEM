<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("Location: admin_login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap');

*{
  font-family: 'Protest Guerrilla', sans-serif;
}


section{
padding: 2rem 9%;
}
.dashboard{
    display: flex;
    align-items: center;
    justify-content: center;
    background: url(./img/adminbg.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    padding-top: 17rem;
    padding-bottom: 10rem;
}

.dashboard .content{
    text-align: center;
    width: 60rem;
}

.dashboard .content h3{
    color: black;
    font-size: 3rem;
}

.dashboard .content h3 span{
    color: orange;
}

.dashboard .content p{
    color: rgb(238, 228, 85);
    font-size: 1.7rem;
    padding: 1rem 0;
    line-height: 1.8;
}
.dashboard .content p h2 span{
    color: orange;
    font-size: 1.7rem;
}

  .l-btn{
    margin-top: .5rem;
    display: inline-block;
    padding: .4rem 1.5rem;
    font-size: 1rem;
    border-radius: .4rem;
    border:.2rem solid black;
    color: black;
    cursor: pointer;
    background: none;
}

.l-btn:hover{
    background: orange;
    color: #fff;
}

</style>

</head>
<body>
 
    <!-- navigation section starts -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="dashboard.php"><img src="img/logo.jpg" alt="logo" height="100" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Gym Management System</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">DASHBOARD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="biling.php">BILING</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coach.php">COACH</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="members.php">MEMBERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="receptionist.php">RECEPTIONIST</a>
      </li>
    </ul>
  </div>
</nav>

<section class="dashboard" id="dashboard">

<div class="content">
    <h3>GET IN <span>SHAPE</span> WITH US!</h3>
    <p>Welcome to Admin Panel Mr. <h2><span><?php  echo $_SESSION["AdminLoginId"] ?></h2></p>
     <div class="r-btn">
        <form method="POST">
            <button name="Logout" class="l-btn">Logout</button>
        </form>
  </div>
</div>

<?php

if (isset($_POST['Logout'])) {
    session_destroy();
    header("Location: admin_login.php");
}

?>

</section>


    <!-- navigation section ends -->

     <!-- Members Details -->
     <section class="members">
       
     </section>

    <!-- Coach Details  -->

    <!-- Receptionist Details  -->

    <!-- Basic Fees Details  -->





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>