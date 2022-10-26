<?php
session_start();
$host="localhost:3306";
	$user="root";
	$pass="";
	$db="sign_up";

	$conn=mysqli_connect($host,$user,$pass,$db);

	if(isset($_POST['savetime']))
	{
		$name=$_POST['datetime']
		$query="INSERT INTO enter_time(entry) VALUES('$name')";

		$query_run = mysqli_query($conn,$query);
		if($query_run)
		{
			$_SESSION['status'] ="Date Time inserted successfully";
			header("../Views/entertime.php");
		}
		else{
			$_SESSION['status'] ="Date Time not inserted";
			header("../Views/entertime.php");

		}
	}




	?>
