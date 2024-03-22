<?php
include 'db.php';
	
	
	if($conn->connect_error)
	{
		
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		
		
	}

$id = $_REQUEST["Eid"];


        $sql = "update proposals  set status=2 where id=$id";
		
if($conn->query($sql) == TRUE)
	{
		
		header("Location: riders-dashboard.php");
	}
	else
	{
		
		echo "failed";
	}

       
	
	
	
	



?>