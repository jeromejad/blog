<?php 
	session_start();
	$dbconnection = mysqli_connect("bcupibzywnva4fhilcxr-mysql.services.clever-cloud.com","uixdfpp1egrv5bdz","BEcOK7MBhTLYUC8TctW5","bcupibzywnva4fhilcxr");  //host,user,password,database
	mysqli_set_charset($dbconnection, "utf8");
	if (!$dbconnection)
	{
		die("Could not connect: " . mysqli_connect_error());
	}
 ?>