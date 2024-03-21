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

 $id=$_SESSION['id'];

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
  <link rel="stylesheet" href="contact.css">
  <!--CSS File-->

</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
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
        <div class="dropdown">
          <button class="dropbtn">Log Out</button>
          
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Body sections start -->
  <br><br>
<center><h1>Add your vehicle</h1></center>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  
  	<form method="post" action="addvehicle.php">
                                        <div class="form-group">
                                            <label class="form-label">Plate No:</label>
                                            <input name="plateno" type="text" class="form-control">
											<input type="hidden" class="form-control mb-1" name="id" value="">
                                        </div> 
                                       
                                       <br>
									    <div class="form-group">
                                            <label class="form-label">Make :</label>
                                           
                                           <select id="select-option" name="make" required>
											<option value="" disabled selected>Select</option>
											<option value="toyota">Toyota</option>
										    <option value="honda">Honda</option>
											<option value="benz">Benz</option>
											<option value="bmw">BMW</option>
											<option value="hyundai">Hyundai</option>
											<option value="audi">Audi</option>
											
                                            </select>
                                        </div><br>
										<div class="form-group">
                                            <label class="form-label">Model :</label>
                                            <input name="model" type="text" class="form-control">
                                        </div> <br>
										<div class="form-group">
                                            <label class="form-label">Year :</label>
                                            <input name="year" type="text" class="form-control">
											<input name="id" type="hidden" value="<?php echo$id ?>">
                                        </div> <br>
									
										<div class="form-group">
                                            <label class="form-label">Category :</label>
                                           <select id="select-option" name="cat" required>
											<option value="" disabled selected>Select</option>
											<option value="car">Car</option>
										    <option value="van">Van</option>
											<option value="suv">SUV</option>
											<option value="bus">Bus</option>
                                            </select>
                                        </div>
										
                                       <br>
											<center><button type='submit' class='btn btn-success' name='uploadfile'>Submit</button></center>
										</form>
  
  
  </div>
  <div class="col-sm-4"></div>

</div>

  <!-- Body sections end -->


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