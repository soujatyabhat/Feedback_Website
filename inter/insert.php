<html>
	<head> <title> Write Message </title> </head>
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
		height:40px;
		border-radius:15px;
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
		<body>
		<?php
		$res = "";
			include('../connection.php');
			if(!($link))
			{
				echo "Connection failed";
			}
			if(isset($_POST['submit']))
			{
				if(($_POST['uname'] != " ") and ($_POST['msg'] != " "))
				{
				$name = mysqli_real_escape_string($link,$_POST['uname']);
				$msg = mysqli_real_escape_string($link,$_POST['msg']);
				$date = mysqli_real_escape_string($link,$_POST['date']);
				date_default_timezone_set("Asia/Kolkata");
				$timezone = date_default_timezone_get();					
				$time = date("h:m:sA");
				$sql = "insert into xyz (name,msg,date,time) values('$name','$msg','$date','$time')";
				$res = mysqli_query($link,$sql);
				if($res)
				{
					echo "<script> alert('Feedback has saved. Also you can update ur feedback') </script>";
				}
				else
				{
					echo "<script> alert('msg has not send') </script>";
				}
				}
			}
		?>
			<center>
					<form action="insert.php" method="POST">
					<h2 style="color:white;"> Write a Feedback </h2>
						<input type="text" name="uname" placeholder="Enter Name" class="box" required>
						<br>
						<br>
						<input type="text" name="msg" maxlength="100" class="box" placeholder="100 character allowed here" required>
						<br>
						<br>
						<input type="text" name="date" class="box" value = <?php echo date("d/m/Y")?> required>
						<br>
						<br>
						<input type="submit" value="Submit" name="submit" class="btn" style="background-color:green;">
						<br>
						<br>
						<input type="reset" value="Reset" name="reset"  class="btn" style="background-color:red;">
						<br>
						<p align="left">
						<a href="display.php"> Show Message </a>
					</form>
		</body>
</html>