<?php require('../Models/usermodel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign in</title>

	<link rel="icon" href="download.jpg" type="image/gif/png/jpg">
	<style media="screen">
		body{font-family: Arial,Helvetica,sans-serif;}
		div{
			border: 2px solid black;
		width: 500px;
		padding: 20px;
		margin-left: 400px;
		margin-top: 40px;


		}
		#email,#password{
		 width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  align: center;
  border-radius: 50px;
}
	
	label{
		font-weight: bold;
		font-size: 20px;
	}
	#signin{
		
  background-color: blueviolet;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;

	}
#signin:hover {
  opacity: 0.8;
}
 #imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  width: 40%;
  border-radius: 50%;
}




	</style>
</head>
<body>
	<div class="imgcontainer">
		<img id="imgcontainer" src="../img/doctor.jpg" alt="avatar" class="avatar">
	</div>

		<form class="" action="../Controllers/signin_action.php" method="post" name="signin-form" onsubmit="return validationForm()">
			<p><h2>Doctor sign in</h2></p>

			<label for="">Email</label><br>
			<input id="email" type="email" name="email" value="" placeholder="Enter your Email"><br><br>

			<label for="">password</label><br>
			<input id="password" type="password" name="password" value="" placeholder="Enter your password"><br><br>
			<input id="signin" type="submit" name="submit" value="Sign in">


			<p>Not a user?<a href="signup.php"><b>Register here</b></a></p> 
			
			

		</form>

	


<script src="../js/signin.js"></script>
</body>
</html>