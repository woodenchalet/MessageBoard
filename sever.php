<?php
	header("content-type: text/html;charset=utf-8");
    $message = $_POST['message'];
	
    

	$con = mysqli_connect("127.0.0.1","root","") or die ("could not connect to mysql");
	mysqli_select_db($con,"hello") or die ("no database"); 
	$sql = "INSERT INTO comments (comments)	VALUES ('$message')";
	
	//if (!mysqli_query($con,$sql)) {
	//	die('Error: ' . mysqli_error($con));
	//}
	echo $message;
	
	if (mysqli_query($con,$sql)) {
	//	echo "Table persons created successfully";
	} else {
		echo "Error:" . mysqli_error($con);
	}
	mysqli_close($con);
	
	