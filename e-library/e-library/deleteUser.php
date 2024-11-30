<?php
	include"connection.php";
	$id=$_GET['id'];
	$query="DELETE FROM all_users WHERE ID=$id";
	$result= mysqli_query($conn,$query);
	if($result){
		header("location:homepage.html");
	}
?>