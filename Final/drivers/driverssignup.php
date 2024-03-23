<?php


 include 'db.php';

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$pn = $_REQUEST["phone"];
$adress = $_REQUEST["address"];
$passnum = $_REQUEST["id"];
$location = $_REQUEST["location"];
$bday = $_REQUEST["birthday"];
$gender = $_REQUEST["gender"];
$password = $_REQUEST["psw"];



if($gender=="male")
{
	$imgcode="boy.png";
} else 
{
	$imgcode="girl.png";
}
	



        $sql = "insert into drivers (name,email,phone,password,adress,nic,birthday,gender,photo,code,location) values('$name','$email','$pn','$password','$adress','$passnum','$bday','$gender','$imgcode','94', '$location')";
		
if($conn->query($sql) == TRUE)
	{
		
		header("Location: login.html");
	}
	else
	{
		
		echo "failed";
	}

       

	
	
	



?>