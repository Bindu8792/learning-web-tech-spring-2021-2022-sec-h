<?php require('../Models/usermodel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>

	<link rel="icon" href="download.jpg" type="image/gif/png/jpg">
<style media="screen">
	div{
		border: 2px solid black;
		width: 500px;
		padding: 20px;
		margin-left: 400px;
		margin-top: 40px;


	}
	#firstname,#lastname,#email,#password{
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
	#signup{
		
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




 


</style>

</head>
<body>
	
		<form class="" action="signup.php" method="post" name="signup-form" onsubmit="return validationForm()">
			<label for="">Firstname</label><br>
			<input id="firstname" type="text" name="first-name" value="" placeholder="Enter your First name"><br><br>

			<label for="">Lastname</label><br>
			<input id="lastname" type="text" name="last-name" value="" placeholder="Enter your Last name"  ><br><br>

			<label for="">Email</label><br>
			<input id="email" type="Email" name="email" value="" placeholder="Enter your Email" ><br><br>

			<label for="">password</label><br>
			<input id="password" type="password" name="password" value="" placeholder="Set your password"><br><br>
			
			<input id="signup" type="submit" name="signup" value="Signup">  <br>
			<p>Already a user?<a href="signin.php"><b>Sign in</b></a></p>


		</form>
	</div>

<script src="../js/signup.js"></script>
</body>
</html>