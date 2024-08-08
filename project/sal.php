<?php
include "config.php";

if(isset($_POST['submit'])) {
    $s_no = $_POST ['s_no'];
    $employee_name = $_POST['employee_name'];
    $month = $_POST['month'];
    $basic_pay = $_POST['basic_pay'];
    $da = $_POST['da'];
    $hra = $_POST['hra'];
    $total = $_POST['total'];

    $sql = "INSERT INTO  salary  VALUES ('$s_no', '$employee_name', '$month', '$basic_pay', '$da', '$hra', '$total')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: salary.php?msg=New record added successfully");
    }
    else
    {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
<!Doctype html>
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

     <title> Add Salary </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Add Salary
</nav>
<div class="container">
    <div class="text-center mb-4">
        <p class="text-muted"> Complete the form below to add a new department </p>
</div>
<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row">
        <div class="col">
            <label class="form-label"> Employee Name </label>
            <input type="text" class="form-control" name="employee_name"><br><br>
        </div>
        <div class="mb-3">
            <label class="form-label"> Month </label>
            <select class="" name="month" required>
        <option value="" selected hidden> Select Month </option>
        <option value="january"> January</option>
        <option value="february"> February </option>
        <option value="march"> March </option>
        <option value="april"> April </option>
        <option value="may"> May </option>
        <option value="june"> June </option>
        <option value="july"> July </option>
        <option value="august"> August </option>
        <option value="september"> September </option>
        <option value="october"> October </option>
        <option value="november"> November</option>
        <option value="december"> December </option>
        </select><br><br>
        </div>
        <div class="mb-3">
            <label class="form-label"> Basic Pay</label>
            <input type="text" class="form-control" name="basic_pay">
        </div>
        <div class="mb-3">
            <label class="form-label"> DA </label>
            <input type="text" class="form-control" name="da">
        </div>
        <div class="mb-3">
            <label class="form-label"> HRA </label>
            <input type="text" class="form-control" name="hra">
        </div>
        <div class="mb-3">
            <label class="form-label"> Total </label>
            <input type="text" class="form-control" name="total">
        </div>
        
        <div>
            <button type="submit" class="btn btn-success" name="submit"> Add </button>
            <a href="salary.php" class="btn btn-danger"> back </a>
        </div>
</form>
</div>
</div>
</body>
</html>

