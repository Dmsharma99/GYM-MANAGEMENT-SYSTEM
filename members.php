<?php

session_start();
if (!isset($_SESSION["AdminLoginId"])) {
    header("Location: admin_login.php");
}

include 'config.php';


if(isset($_REQUEST["submit"])){

  $id = $_REQUEST["ID"];
  $NAME = $_REQUEST["NAME"];
  $DATE = $_REQUEST["DATE"];
  $DOB = $_REQUEST["D-O-B"];
  $PHONE = $_REQUEST["PHONE"];
  $COACH = $_REQUEST["COACH"];



  $ins = "INSERT INTO members (id, NAME, DATE, `D-O-B`, PHONE, COACH) VALUES ('$id', '$NAME', '$DATE', '$DOB', '$PHONE', '$COACH')";
  $query = mysqli_query($connection, $ins);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBERS</title>
    <link rel="stylesheet" href="members.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap');

*{
  font-family: 'Protest Guerrilla', sans-serif;
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

    <!-- navigation section ends -->


     <!-- form starts -->
     <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">ID</label>
      <input type="text" name="ID" class="form-control" id="inputEmail4" placeholder=""ID>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">NAME</label>
      <input type="text" name="NAME" class="form-control" id="inputPassword4" placeholder="SURNAME NAME MIDDLENAME">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">DATE OF JOINING</label>
    <input type="text" name="DATE" class="form-control" id="inputAddress" placeholder="DATE">
  </div>
  <div class="form-group">
    <label for="inputAddress">DATE-OF-BIRTH</label>
    <input type="text" name="D-O-B" class="form-control" id="inputAddress" placeholder="DD/MM/YYYY">
  </div>
  <div class="form-group">
    <label for="inputAddress2">PHONE NUMBER</label>
    <input type="tel" name="PHONE" class="form-control" id="inputAddress2" placeholder="**********" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">COACH ASSIGNED</label>
    <input type="text" maxlength="10" name="COACH" class="form-control" id="inputAddress2" placeholder="NAME OF THE COACH">
  </div>
  
    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the mobile number from the form
    $coach = $_POST["COACH"];
    
    // Validate the mobile number
    if (preg_match("/^\d{10}$/", $coach)) {
        // Mobile number is valid
        // Proceed with further processing
        
        // For demonstration, let's just echo the valid mobile number
        echo "Valid mobile number: " . $coach;
    } else {
        // Mobile number is invalid
        echo "Please enter a valid 10-digit mobile number.";
    }
}
?>

    <!-- form ends  -->





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    
</body>
</html>