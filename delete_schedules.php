<?php
include('include/login_check.php');	
include('include/connect.php');
$activities = $_GET['activities'];

$sql = "SELECT * FROM schedules";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)!==0)
{
	$sql2="DELETE FROM schedules WHERE activities = '$activities'";
	mysqli_query($conn,$sql2);
	header('Location: schedules.php');
}
else
echo "Can't delete";

?>