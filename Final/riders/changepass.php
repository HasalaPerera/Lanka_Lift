<?php

	
include 'db.php';
	
	


$pass = $_REQUEST["pass"];
$newpass = $_REQUEST["newpass"];
$id = $_REQUEST["id"];






        $sql = "SELECT * FROM riders WHERE id='$id' AND password='$pass'";

        $result = mysqli_query($conn, $sql);
		
		
		if (mysqli_num_rows($result) === 1) {

			
			if($pass==$newpass)
		{
	 header("Location: samepassword.php");
		} else {

           $sql = "update riders set password='$newpass' where id=$id";
		
           mysqli_query($db, $sql); 

           header("Location: passwordsuccess.php");
		  
		  
		}

        } else
		{
			header("Location: wrongpassword.php");
		}







		

	
	
	
	



?>