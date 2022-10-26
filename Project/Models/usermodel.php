<?php

	

	$host="localhost:3306";
	$user="root";
	$pass="";
	$db="sign_up";

	$conn=mysqli_connect($host,$user,$pass,$db);

	function signin($email, $password){
		$conn = getConnection();
		$sql = "select * from doc_table where username='{$email}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	if(isset($_POST['signup'])) {
		$firstname=$_POST['first-name'];
		$lastname=$_POST['last-name'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$sql="INSERT INTO doc_table(first_name,last_name,email,password) values('$firstname','$lastname','$email','$password')";
		

		$query=mysqli_query($conn,$sql);
		if ($query) {
			?>
			
			<script type="text/javascript">
				alert('successfully Registered');
			</script>
	<?php
		}
	}

?>