<?php
include "config.php";

if(isset($_POST['submit'])) {
    $s_no = $_POST ['s_no'];
    $fdp_no = $_POST['fdp_no'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $program_name = $_POST['program_name'];
    $venue = $_POST['venue'];

    $sql = "INSERT INTO  fdp  VALUES ('$s_no', '$fdp_no','$start_date', '$end_date', '$program_name', '$venue')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: fdp.php?msg=New record added successfully");
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

     <title> FDP  </title>
</head>
     <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        FDP
</nav>
<div class="container">
    <div class="text-center mb-4">
        <p class="text-muted"> Update the new data </p>
</div>
<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row">
        <div class="col">
            <label class="form-label"> Fdp no </label>
            <input type="text" class="form-control" name="fdp_no">
        </div>
        <div class="mb-3">
            <label class="form-label">  Start Date  </label>
            <input type="date" class="form-control" name="start_date">
        </div>
        <div class="mb-3"> 
            <label class="form-label">  End Date  </label>
            <input type="date" class="form-control" name="end_date">
        </div>
        <div class="mb-3">
            <label class="form-label"> Program Name </label>
            <input type="text" class="form-control" name="program_name">
        </div>
        <div class="mb-3">
            <label class="form-label"> Venue  </label>
            <input type="text" class="form-control" name="venue">
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


 
     

