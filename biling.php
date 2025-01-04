<?php

session_start();
if (!isset($_SESSION["AdminLoginId"])) {
    header("Location: admin_login.php");
}

include 'config.php';


if(isset($_REQUEST["submit"])){

  $id = $_REQUEST["id"];
  $name = $_REQUEST["name"];
  $period = $_REQUEST["period"];
  $price = $_REQUEST["price"];


  $ins = "INSERT INTO biling (id,name,period,price) VALUES('$id','$name','$period','$price')";
  $query = mysqli_query($connection, $ins);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILING</title>
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
  <a class="navbar-brand" href="adminlogin.php"><img src="img/logo.jpg" alt="logo" height="100" width="100"></a>
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
      <label for="inputEmail4">Biling ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder=""ID>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">FULL NAME</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="SURNAME NAME MIDDLENAME">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Period</label>
    <input type="text" name="period" class="form-control" id="inputAddress" placeholder="DATE OF JOINING">
  </div>
  <!-- Membership time  -->
  <div class="form-group">
    <label for="inputAddress2">CHARGES</label>
    <input type="text" name="price" class="form-control" id="inputAddress2" placeholder="FEES">
  </div>
  <button  type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  
</form>




    <!-- form ends  -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>