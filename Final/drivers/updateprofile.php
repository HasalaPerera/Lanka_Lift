<?php

	 include 'db.php';
	
	


$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$passport = $_REQUEST["passport"];
$id = $_REQUEST["id"];
$adress = $_REQUEST["adress"];









 $sql = "update drivers set name='$name', adress='$adress', phone='$phone', nic='$passport' where id=$id";
		
 mysqli_query($conn, $sql); 

 header("Location: drivers-dashboard.php");
		

	
	
	
	



?>