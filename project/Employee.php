<?php
require 'config.php';
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $department = $_POST["department"];
    $country = $_POST["country"];
    $duplicate = mysqli_query($conn, "SELECT * FROM emp WHERE username = '$username' OR email= '$email'");
    if(mysqli_num_rows($duplicate) > 0){
     echo
     "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        $query = "INSERT INTO emp VALUES('$id', '$username', '$name', '$email', '$gender', '$department', '$country')";
        $result = mysqli_query($conn, $query);
        echo
        "<script> alert('Registration Successful'); </script>";
    }
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
  }
?>
    
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> Update Employee Details </title>
    <link rel="stylesheet" href="style5.css">
</head>
<body> 
    <center>
    <h1 class="a"> Update Employee Details </h1>
    <div class="head">
    <form class="" action="" method="post" autocomplete="off">
        <label for=""> Id </label><br>
        <input type="text" name="id" required value=""><br><br>
        <label for=""> Username </label><br>
        <input type="text" name="username" required value=""><br><br>
        <label for=""> Name </label><br>
        <input type="text" name="name" required value=""><br><br>
        <label for=""> Email </label><br>
        <input type="text" name="email" required value=""><br><br>
        &nbsp;&nbsp;<label for=""> Gender </label><br>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female <br><br>
        <label for=""> Department </label><br>
        <select class="" name="department" required>
        <option value="" selected hidden> Select Department </option>
        <option value="Information Technology"> Information Technology </option>
        <option value="Computer Science"> Computer Science </option>
        <option value="Finance"> Finance </option>
        <option value="Human Resource"> Human Resource </option>
        <option value="Marketing"> Marketing </option>
        </select><br><br>
        <label for=""> Country </label><br>
        <select class="" name="country" required>
        <option value="" selected hidden> Select Country </option>
        <option value="USA"> USA </option>
        <option value="UK"> UK </option>
        <option value="India"> India </option>
        </select><br><br>
</div>

<div>
        <button type="submit" class="btn btn-success" name="submit"> Save</button>&nbsp;&nbsp;
        <a href="Ad emp.php" class="btn btn-danger"> back </a>
</div>
</form>
</center>
</body>
</html>



        
        

    
        

        

        

        

        
