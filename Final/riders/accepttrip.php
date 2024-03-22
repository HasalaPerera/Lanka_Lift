<?php

include 'db.php';
	
	
	if($conn->connect_error)
	{
		
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		
		
	}


$budget = $_REQUEST["rate"];



echo"$budget";
       

	
	
	



?>