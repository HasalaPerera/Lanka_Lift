<?php

include 'sendsms.php';

include 'db.php';

	
	if($conn->connect_error)
	{
		
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		
		
	}

$pid = $_REQUEST["pid"];
$rid = $_REQUEST["id"];
$tid = $_REQUEST["tid"];
$did = $_REQUEST["did"];
$phone = $_REQUEST["phone"];
$code = $_REQUEST["code"];
$budget = $_REQUEST["budget"];

$phone="$code$phone";

        $sql = "update proposals  set status=1 where id=$pid";
		
if($conn->query($sql) == TRUE)
	{
		
		        $sql1 = "update trips  set tripStatus=1, confirmedDriverId=$did, confrimedBudget=$budget where riderId=$rid and id=$tid";
		
				if($conn->query($sql1) == TRUE)
					{
						
						
					msg((int)$phone,2);
					header("Location: riders-dashboard.php");
					}
	}
	else
	{
		
		echo "failed";
	}

       
	
	
	
	



?>