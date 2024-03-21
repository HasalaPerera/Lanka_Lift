<?php

	
	 $db = mysqli_connect("localhost", "root", "", "ll");
	
	


$pass = $_REQUEST["pass"];
$newpass = $_REQUEST["newpass"];
$id = $_REQUEST["id"];






        $sql = "SELECT * FROM drivers WHERE id='$id' AND password='$pass'";

        $result = mysqli_query($db, $sql);
		
		
		if (mysqli_num_rows($result) === 1) {

			
			if($pass==$newpass)
		{
	 header("Location: samepassword.php");
		} else {

           $sql = "update drivers set password='$newpass' where id=$id";
		
           mysqli_query($db, $sql); 

           header("Location: passwordsuccess.php");
		  
		  
		}

        } else
		{
			header("Location: wrongpassword.php");
		}







		

	
	
	
	



?>