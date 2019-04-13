<?php 
	//Create Connection

	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	//check the connection

	if(mysqli_connect_errno()){
		//Failed
		echo 'cannot make a connection'.mysqli_connect_errno();
	}else{
		// echo 'connected';
	}





 ?>