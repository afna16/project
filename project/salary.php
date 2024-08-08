
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
     <title> Salary Section </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Salary Section
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
    <a href="sal.php" class="btn btn-dark mb-3"> Add New </a>
    <table class="table table-hover text-center">
    <thead class="table-dark">
    <tr>
      <th scope="col"> s_no </th>
      <th scope="col"> Employee Name </th>
      <th scope="col"> Month </th>
      <th scope="col"> Basic Pay </th>
      <th scope="col"> DA </th>
      <th scope="col"> HRA </th>
      <th scope="col"> Total </th>
  
    </tr>
  </thead>
  <tbody>
    <?php
    include"config.php";
    $i=1;
      $sql = "SELECT * FROM salary";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)){
     ?>
     <tr>
      <td><?php echo $row['s_no'] ?></td>
      <td><?php echo $row['employee_name'] ?></td>
      <td><?php echo $row['month'] ?></td>
      <td><?php echo $row['basic_pay'] ?></td>
      <td><?php echo $row['da'] ?></td>
      <td><?php echo $row['hra'] ?></td>
      <td><?php echo $row['total'] ?></td>
    </tr>
    <?php
      }
?>
  </tbody>
</table>
</div>
<!-- boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<center>
<a href="emp.php" class="btn btn-danger"> back </a><br><br>
    </center>
</body>
</html>

    