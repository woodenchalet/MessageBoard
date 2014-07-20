<?php



	$conn = mysql_connect("127.0.0.1","root","");
	
	if(!$conn){
		die("connect error".mysql_error());
	}

?>