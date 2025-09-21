<?php
	session_start();
?>
<?php
$id = $_GET['stu'];

include 'connect.php';
$sql = "UPDATE users SET sts = '1' WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
if($query == TRUE){
    echo "<script> alert('User Approved Successfully'); window.location='admin_view_booked_tickets2.php'; </script>";
}else{
    echo "<script> alert('User Not Approved'); window.location='admin_view_booked_tickets2.php'; </script>";
}
?>
