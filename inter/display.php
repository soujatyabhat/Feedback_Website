<html>
	<head> <title> Display </title> </head>
	<style>
	.msg
	{
		padding:20px;
		background-color:silver;
		border:3px black dotted;
	}
	a
	{
		text-decoration: none;
	}
	.link
	{
		text-align:left;
		text-transformation:none;
	}
	</style>
		<body>
					<?php
					$row ="";
					$count=0;
					include("../connection.php");
					$sql = "select *from xyz order by date desc;";
					$result = mysqli_query($link,$sql);
					$count = mysqli_num_rows($result);
					if($count == 0)
					{
						echo "<p> No Row has present <p>";
					}
					while($row = mysqli_fetch_array($result))
					{
					?>
					
						<div class="msg">
							<p> <b> Date : </b> <?php echo $row['date'] ?> </p> </b>
							<p> <b> Name : </b> <?php echo $row['name'] ?> </p>
							<p> <b> Feedback : </b> <p> <?php echo $row['msg'] ?> </p>
						<button> <a href="delete.php?time=<?php echo $row['time']; ?>"> Delete </a>  </button>
						<button> <a href="update.php?time=<?php echo $row['time']; ?>"> Update </a>  </button> 						
						</div>
						<br>
						<br>
					<?php
					}
					?>
			</center>
		<a href="insert.php"> Goto Write Message Page </a>
		</body>
</html>