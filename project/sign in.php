<?php
require 'config.php';
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM s1 WHERE username = '$username' OR email= '$email'");
    if(mysqli_num_rows($duplicate) > 0){
     echo
     "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
       if($password == $confirmpassword){
        $query = "INSERT INTO s1 VALUES('', '$username', '$name', '$email', '$password')";
        mysqli_query($conn,$query);
        echo
        "<script> alert('Registration Successful'); </script>";
    }
    else{
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> SIGN UP </title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<center>
    <h1 class="a"> SIGN IN </h1>
    <div class="head"><br>
    <form class="" action="" method="post" autocomplete="off">
     <label for="username"> Username </label>
     <input type="text" name="username" id="username" required value=""> <br><br>
     <label for="password"> Password </label>
     <input type="password" name="password" id="password" required value=""> <br><br>
     <label for="confirmpassword"> Confirm Password </label>
     <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br><br>
     <button type="submit" name="submit"> LOGIN </button>
</form>
<br>
<a href="ad frame.php" > SIGN IN </a>
</center>
</body>
</html>
     