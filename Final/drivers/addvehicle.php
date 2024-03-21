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

$plateno = $_REQUEST["plateno"];
$make = $_REQUEST["make"];
$cat = $_REQUEST["cat"];
$model = $_REQUEST["model"];
$year = $_REQUEST["year"];
$id = $_REQUEST["id"];


        $sql = "insert into vehicles (plateno,make,category,model,year,status,ownerid) values('$plateno','$make','$cat','$model','$year', 0,'$id')";
		
if($conn->query($sql) == TRUE)
	{
		
		header("Location: vehicleadded.php");
	}
	else
	{
		
		echo "failed";
	}

       

	
	
	



?>