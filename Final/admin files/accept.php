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
$ownerid = $_REQUEST["ownerid"];


        $sql = "update vehicles set status='1' where plateno='$id'";
		
if($conn->query($sql) == TRUE)
	{
		
		        $sql = "update drivers set status='1' where id='$ownerid'";
		
if($conn->query($sql) == TRUE)
	{
		
		header("Location: admin-dashboard.php");
	}
	
	}
	else
	{
		
		echo "failed";
	}

?>