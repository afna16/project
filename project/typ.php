<?php
include "config.php";

if(isset($_POST['submit'])) {
    $s_no = $_POST ['s_no'];
    $name = $_POST ['name'];
    $leave_type = $_POST['leave_type'];
    $date = $_POST['date'];

    $sql = "INSERT INTO type VAlues('$s_no', '$name', '$leave_type', '$date')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: Leave.php?msg=New record added successfully");
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

     <title> Leave Type </title>
</head>
     <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Add Leave Types
</nav>
<div class="container">
    <div class="text-center mb-4">
        <p class="text-muted"> Update the new data </p>
</div>
<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row">
        <div class="col">
        <label class="form-label">  Name </label>
            <input type="text" class="form-control" name="name"><br><br>
        </div>
        <div class="mb-3">
            <label class="form-label"> Leave Type </label>
            <select class="" name="leave_type" required>
        <option value="" selected hidden> Select Leave Type </option>
        <option value="Casual Leave"> Casual Leave </option>
        <option value="Medical Leave"> Medical Leave </option>
        <option value="Restricted Holiday"> Restricted Holiday  </option>
        <option value="Compensatoty Leave"> Compensatoty Leave </option>
        <option value="Patiently Leave"> Patiently Leave </option>
        <option value="Voting Leave"> Voting Leave </option>
        </select><br><br>
        </div>
        <div class="mb-3">
            <label class="form-label">  Date </label>
            <input type="date" class="form-control" name="date">
        </div>
        <div>
            <button type="submit" class="btn btn-success" name="submit"> Add </button>
            <a href="Leave.php" class="btn btn-danger"> back </a>
        </div>
</form>
</body>
</html>


 
     

