<?php

error_reporting(0);

?>

<?php
$id = $_REQUEST["id"];
$msg = ""; 

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "images/".$filename;   

		// connect with the database
include 'db.php';

        // query to insert the submitted data

        $sql = "UPDATE riders set photo='$filename' where id=$id";

        // function to execute above query

        mysqli_query($conn, $sql); 

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";
			

        }else{

            $msg = "Failed to upload image";
			

    }

}



header("Location: riders-dashboard.php");

?>