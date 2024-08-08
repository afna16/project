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
     <title> Holiday </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Holiday
</nav>
<div class="container">
    <?php
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <a href="day.php" class="btn btn-dark mb-3"> Add New </a>
    <table class="table table-hover text-center">
    <thead class="table-dark">
    <tr>
      <th scope="col"> S no </th>
      <th scope="col"> Name </th>
      <th scope="col"> Start Date </th>
      <th scope="col"> End Date </th>
      <th scope="col"> Days </th>
      <th scope="col"> Year </th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "config.php";
    $n = 1;
    $sql = "SELECT * FROM holiday";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['s_no'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['start_date'] ?></td>
        <td><?php echo $row['end_date'] ?></td>
        <td><?php echo $row['days'] ?></td>
        <td><?php echo $row['year'] ?></td>
    </tr>
    <?php 
    }
    ?>
 </tbody>
</table>
</div>
<center>
<a href="Ad leave.php" class="btn btn-danger"> back </a><br><br>
    </center>
    </html>
