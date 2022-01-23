<!-- reject_process.php -->
<?php include 'db_connect.php' ?>
<?php
extract ($_POST);
$qry = "UPDATE schedules SET reason_reject = '$reason_reject', status = 'Pending' where id='$id'";

$result = mysqli_query($conn,$qry) or die ("Could no execute query in reject_booking.php");
if($result){
	echo "<script type = 'text/javascript'> window.location='http://localhost/eventroom/scheduling/admin/index.php?page=mbooking_list' </script>";
}
?>