<?php

session_start();

 include 'db.php';

$id = $_REQUEST["email"];
$pass = $_REQUEST["psw"];

 

        $sql = "SELECT * FROM drivers WHERE email='$id' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $id && $row['password'] === $pass) {
				
				
				$_SESSION['login'] = TRUE;
				$_SESSION['id'] = $row['id'] ;
				$_SESSION['name'] = $row['name'] ;
				
                echo "Logged in!";

               

                header("Location: drivers-dashboard.php");

                exit();

            }else{

                header("Location: login.html");

                exit();

            }

        }else{

            header("Location: login.html");

            exit();

        }

	
	
	



?>