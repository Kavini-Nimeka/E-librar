<?php
	include"connection.php";
	$id=$_GET['id'];
	$query="DELETE FROM all_users WHERE id=$id";
	$result= mysqli_query($conn,$query);
	if($result){
		header("location:managerDashboard.php");
	}
?>