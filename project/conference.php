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
     <title> Department Section </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Conference
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
    <a href="con.php" class="btn btn-dark mb-3"> Add New </a>
    <table class="table table-hover text-center">
    <thead class="table-dark">
    <tr>
      <th scope="col"> Id </th>
      <th scope="col"> Name </th>
      <th scope="col"> Date </th>
      <th scope="col"> Conference List </th>
      <th scope="col"> Venue </th>
      <th scope="col"> Action </th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "config.php";

    $sql = "SELECT * FROM conference";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['conference_list'] ?></td>
        <td><?php echo $row['venue'] ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']?>" 
        class="link-dark"><i class="fa-solid fa-solid fa-pen-to-square fa-5 
        me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id']?>"
         class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
    </td>
    </tr>
    <?php
    }
    ?>
 </tbody>
</table>
</div>
<center>
<a href="emp.php" class="btn btn-danger"> back </a><br><br>
    </center>
    </html>
