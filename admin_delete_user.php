<?php
$id = $_GET['stu'];


// echo $id;

include 'connect.php';

$sql = "DELETE FROM users WHERE id ='$id'";

$query = mysqli_query($conn, $sql);

if($query == TRUE){
    echo "<script> alert('Record Deleted Successfully'); window.location='admin_approved_visa.php'; </script>";
}else{
    echo "<script> alert('Record Not Deleted Successfully'); window.location='admin_approved_visa.php'; </script>";
}


?>