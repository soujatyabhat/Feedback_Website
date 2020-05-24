<head> <title> Update </title> </head>
	<style>
	form
	{
		background-color:gray;
		padding:40px;
		width:300px;
	}
	.box
	{
		width:280px;
		height:30px;
		border-radius:5px;
		text-align:center;
		font-family:Times new roman;
		font-size:14pt;
	}
	.btn
	{
		width:250px;
		height:30px;
	}
	a
	{
		text-decoration: none;
	}
	</style>

<?php
	include("../connection.php");
	if(isset($_POST['submit']))
	{
	$msg = $_POST['msg'];
	$time ="";
	$time= $_GET['time'];
	$sql = "update xyz set msg = '$msg' where time = '$time'";
	$result = mysqli_query($link,$sql);
	$_SESSION['msg']= "updated successful";
	header('location:display.php');
	}
?>
<center>
<form action="" method="POST">
<h2> Update Feedback </h2>
	<input type="text" name="msg" class="box">
	<br>
	<br>
	<input type="submit" value="Update" name="submit" class="btn">
	<br>
	<br>
	<input type="reset" value="Reset" class="btn">
</form>
</center>