<?php

include 'db.php';
	if($conn->connect_error)
	{
		
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		
		
	}

$id = $_REQUEST["plateno"];



        $sql = "update vehicles set status='2' where plateno='$id'";
		
if($conn->query($sql) == TRUE)
	{
		
		header("Location: admin-dashboard.php");
	}
	else
	{
		
		echo "failed";
	}

?>