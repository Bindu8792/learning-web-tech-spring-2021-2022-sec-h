<?php 

	if(isset($_POST['submit'])){

		//print_r($_FILES['myfile']);

		$src = $_FILES['myfile']['tmp_name'];
		$des = '../Models/upload/'.$_FILES['myfile']['name'];

		if(move_uploaded_file($src, $des)){
			echo "Success";
		}else{
			echo "error";
		}
	}
?>