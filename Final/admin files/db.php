<?php

    $server= "localhost";
	$user= "root";
	$pw = "";
	$db = "ll";
	
	$conn= new mysqli($server, $user, $pw, $db);
	
	
	if($conn->connect_error)
	{
		
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		
		
	}



?>