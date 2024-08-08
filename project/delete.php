<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM work WHERE id='$id'";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: workshop.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}
?>