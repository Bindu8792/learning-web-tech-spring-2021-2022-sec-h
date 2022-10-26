<?php require('../Models/usermodel.php');
if(!$conn){
	echo("Error connection :" .mysqli_connect_error());

}
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql="select * from doc_table where email='$email' and password='$password'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);

	if($count==1){
	echo'<script>window.location="../Views/Home.html"</script>';
	
	}
	else{
		echo"Log in failed";

		
	}

}

?>