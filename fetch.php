<?php
	header("content-type: text/html;charset=utf-8");
    $message = $_POST['send'];
	
	$con = mysqli_connect("127.0.0.1","root","","hello") or die ("could not connect to mysql");
	//mysqli_select_db($con,"hello") or die ("no database"); 
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$result = mysqli_query($con,"SELECT * FROM comments");
	
	while($row = mysqli_fetch_array($result)){     //http://www.w3schools.com/php/php_mysql_select.asp
		echo "<p>".$row['comments']."</p>";
	}
	
	mysqli_close($con);