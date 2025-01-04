<?php
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>


        <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"   crossorigin="anonymous">

    <link rel="stylesheet" href="register.css">


</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>

        

        <form method="POST">
            <div class="form-group">
                <input type="text" placeholder="Admin Id" name="AdminName" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Admin Password" name="AdminPassword" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Sign In" name="Signin" class="btn btn-primary">
            </div>
        </form>
        <div class="register-pg">
            <p><a href="index.php">Return Home</a></p>
        </div>
        
    </div>

<?php

if(isset($_POST["Signin"])) {
     $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`= '$_POST[AdminName]' AND `Admin_Password`= '$_POST[AdminPassword]'";
     $result = mysqli_query($con, $query);
     if(mysqli_num_rows($result)==1) {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("Location: dashboard.php");
     }
     else {
        echo  "<script>alert('Incorrect Password')</script>";
     }

}

?>


</body>
</html>