<?php
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Enter time</title>
</head>
<body>
	<?php
	if(isset($_SESSION['status']));
		unset($_SESSION['status']});
?>

	<form method="post" action="../Controllers/entertime.php">
			<fieldset align="left">
			<legend>Set Enter Time</legend>
			<input type="datetime-local" id="entry" name="datetime">
			<input type="submit" name="savetime" value="Submit">
</fieldset>
</form>	
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>company</h4>
					<ul>
						<li><a href="#">about us</a></li>
						<li><a href="#">our services</a></li>
						<li><a href="#">privacy policy</a></li>

					</ul>
				</div>
				<div class="footer-col">
					<h4>get help</h4>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Disclaimer</a></li>
						<li><a href="#">Career</a></li>

					</ul>
				</div>
				<div class="footer-col">
					<h4>Emergency</h4>
					<ul>
						<li><a href="#">Ambulance</a></li>
						<li><a href="#">Hotline</a></li>
						<li><a href="#">Location</a></li>



					</ul>
				</div>
				<div class="footer-col">
					<h4>follow us </h4>
					<div class="social-pages">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>


</body>
</html>