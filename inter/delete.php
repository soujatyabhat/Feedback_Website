<?php
	include("../connection.php");
	$time =  $_GET['time'];
	$sql = "delete from xyz where time = '$time'";
	$result = mysqli_query($link,$sql);
	if(!($result))
	{
		echo "data has deleted";
	}
	header("location:display.php");
	
?>