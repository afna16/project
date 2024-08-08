<?php
include "config.php";

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $place = $_POST['place'];
    $resource_person = $_POST['resource_person'];
    $days = $_POST['days'];

    $sql = "INSERT INTO work  VALUES ('$id', '$place','$resource_person','$days')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: workshop.php?msg=New record added successfully");
    }
    else
    {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">

    <!-- Boostrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     <title> Workshop </title>
</head>
     <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Workshop
</nav>
<div class="container">
    <div class="text-center mb-4">
        <p class="text-muted"> Update the new data </p>
</div>
<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row">
        <div class="col">
            <label class="form-label"> id </label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="mb-3">
            <label class="form-label"> place </label>
            <input type="text" class="form-control" name="place">
        </div>
        <div class="mb-3">
            <label class="form-label"> Resource person </label>
            <input type="text" class="form-control" name="resource_person">
        </div>
        <div class="mb-3">
            <label class="form-label"> days </label>
            <input type="text" class="form-control" name="days">
        </div>
        <div>
            <button type="submit" class="btn btn-success" name="submit"> Add </button>
            <a href="dept.php" class="btn btn-danger"> back </a>
        </div>
</form>
</div>
</div>
</body>
</html>


 
     

