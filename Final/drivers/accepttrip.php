<?php

include 'sendsms.php';






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
$riderid = $_REQUEST["riderid"];
$driverid = $_REQUEST["driverid"];
$tripid = $_REQUEST["tripid"];
$comment = $_REQUEST["comment"];
$budget = $_REQUEST["budget"];
$phone = $_REQUEST["phone"];


        $sql = "insert into proposals (riderid,driverid,tripid,comment,budget,status) values('$riderid','$driverid','$tripid','$comment','$budget',0)";
		
if($conn->query($sql) == TRUE)
	{
		msg((int)$phone,0);
		header("Location: proposal-submitted.php");
	}
	else
	{
		
		echo "failed";
	}

       

	
	
	



?>