<!DOCTYPE html>
<html lang="en">
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['login'])) {
	header('Location: login.html');
	exit;
}



?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanka Lift</title>

    <!-- Fav icon -->
    <link rel="icon" type="image/x-icon" href="images/fav icon.png">
    <!-- Fav icon -->

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->

    <!--CSS File-->
    <link rel="stylesheet" href="Rider_Profile.css">
    <!--CSS File-->

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="Logo" class="logo-image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" aria-current="page" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="vehicals.html">Vehicals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="servises.html">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
   
        <!-- Hero Section End --><br>
		<?php
		$tripid = $_REQUEST["tid"];
		
		?>
		
		<div class="container mt">
  <div class="row">
   <div class="col-sm-2"></div>
 <div class="col-sm-8"> <center>
 <br><br>
 <h1>Edit your trip #<?php echo $tripid; ?></h1> </center>
  <br><br>
  </div>
  <div class="col-sm-2"></div>

	</div>
	

        <?php

include 'db.php';
    
	$id=$_SESSION['id'];
	$tripid = $_REQUEST["tid"];
	
	
	
	$sql= "SELECT * FROM trips where id=$tripid";
	$result = $conn->query($sql);
	
	
if ($result->num_rows > 0) {
	
	
	 while($row = mysqli_fetch_array($result)){
			  
			   
			$pickcity=$row['city'];
			$picklocation=$row['pickup'];
			$pickuDdate=$row['pickuDdate'];
			$pickupTime=$row['pickupTime'];
			$visitingPlaces=$row['visitingPlaces'];
			$days=$row['days'];
			$vehicleType=$row['vehicleType'];
			$dropLocation=$row['dropLocation'];
			$specialInstructions=$row['specialInstructions'];
			

	
	 }
	 }
				echo "  <div class='row'>
   <div class='col-sm-4'></div>
 
 <div class='col-sm-4'>   <form action='edittrip.php' method='post'>   <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Pickup City :</label>
	 
    <input type='username' class='form-control' name='pickcity' value='$pickcity' required>
	<input type='hidden' class='form-control'  placeholder='Enter the subject' name='id' value='$tripid'>
  </div>
   <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Pickup Location :</label>
	 
    <input type='text' class='form-control'  name='picklocation' value='$picklocation' name='adress'  required>
  </div>
   <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Pickup Date :</label>
	 
    <input type='date' class='form-control' name='pickuDdate'  value='$pickuDdate' required>
  </div>
    <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Pickup Time :</label>
	 
    <input type='time' class='form-control' name='pickupTime'  value='$pickupTime' required>
  </div>
    <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Visting Places :</label>
	 
    <input type='text' class='form-control' name='visitingPlaces'  value='$visitingPlaces' required>
  </div>
    <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>No Days :</label>
	 
    <input type='text' class='form-control' name='days'  value='$days' required>
  </div>
    <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Vehicle Type :</label>
	 
    <input type='text' class='form-control' name='vehicleType'  value='$vehicleType' required>
  </div>
    <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Drop Location :</label>
	 
    <input type='text' class='form-control' name='dropLocation'  value='$dropLocation' required>
  </div>
    <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Special Instructions :</label>
	 
    <input type='text' class='form-control' name='specialInstructions'  value='$specialInstructions' required>
  </div>
  
 
  <center><button type='submit' class='btn btn-success' name='uploadfile'>Update</button></center>
</form>
  <br><br>
  </div>
  <div class='col-sm-4'></div>

	</div>";
	


  ?>

  
  </div>


<br><br><br>
     <!-- Footer Start -->
     <footer id="footer">
        <h1><span>Drive </span>long</h1>
        <p>"Seamless Journeys, Endless Adventures: Your Key to Long-Term Vehicle Freedom."</p>
        <div class="social-links">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-pinterest-p"></i>
        </div>
        <div class="credit">
            <p>Designed By <a href="#">Group A-12</a></p>
        </div>
        <div class="copyright">
            <p>&copy;Copyright Computing Group Project. All Rights Reserved</p>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
</body>

</html>