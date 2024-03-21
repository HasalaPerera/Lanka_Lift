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

$id = $_REQUEST["tid"];
$driverid = $_REQUEST["driverid"];
$tripbudget = $_REQUEST["budget"];

$fee=(float)$tripbudget/100*5;



        $sql = "update trips  set tripStatus=4 where id=$id";
		
if($conn->query($sql) == TRUE)
	{
			
        $sql = "insert into billing (tripid,driverid,tripbudget,fee,payStat) values('$id','$driverid','$tripbudget','$fee','Not Paid')";
		
if($conn->query($sql) == TRUE)
	{
		
		
	}


			
	}
	else
	{		
		echo "failed";
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
<style type="text/css">
    /* 
        Use :not with impossible condition so inputs are only hidden 
        if pseudo selectors are supported. Otherwise the user would see
        no inputs and no highlighted stars.
    */
    .rating input[type="radio"]:not(:nth-of-type(0)) {
        /* hide visually */    
        border: 0;
        clip: rect(0 0 0 0);
        height: 5px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }
    .rating [type="radio"]:not(:nth-of-type(0)) + label {
        display: none;
    }
    
    label[for]:hover {
        cursor: pointer;
    }
    
    .rating .stars label:before {
        content: "★";
    }
    
    .stars label {
        color: lightgray;
    }
    
    .stars label:hover {
        text-shadow: 0 0 1px #000;
    }
    
    .rating [type="radio"]:nth-of-type(1):checked ~ .stars label:nth-of-type(-n+1),
    .rating [type="radio"]:nth-of-type(2):checked ~ .stars label:nth-of-type(-n+2),
    .rating [type="radio"]:nth-of-type(3):checked ~ .stars label:nth-of-type(-n+3),
    .rating [type="radio"]:nth-of-type(4):checked ~ .stars label:nth-of-type(-n+4),
    .rating [type="radio"]:nth-of-type(5):checked ~ .stars label:nth-of-type(-n+5) {
        color: orange;
    }
    
    .rating [type="radio"]:nth-of-type(1):focus ~ .stars label:nth-of-type(1),
    .rating [type="radio"]:nth-of-type(2):focus ~ .stars label:nth-of-type(2),
    .rating [type="radio"]:nth-of-type(3):focus ~ .stars label:nth-of-type(3),
    .rating [type="radio"]:nth-of-type(4):focus ~ .stars label:nth-of-type(4),
    .rating [type="radio"]:nth-of-type(5):focus ~ .stars label:nth-of-type(5) {
        color: darkorange;
    }
</style>
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
 <h1>Your feedback for the trip, #<?php echo $tripid; ?></h1> </center>
  <br><br>
  </div>
  <div class="col-sm-2"></div>

	</div>

        <?php
	
	$server= "localhost";
	$user= "root";
	$pw = "";
	$db = "ll";
	
	$conn= new mysqli($server, $user, $pw, $db);
    
	$driver=$_SESSION['id'];
	$tripid = $_REQUEST["tid"];
	
	   $sql= "SELECT * FROM trips where id=$tripid";
	  
      $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)) {
			
			$confirmedDriverId=$row['confirmedDriverId'];
		    $riderid=$row['riderId'];
			
			        }

  ?>
 

  
  </div>
  
  	<div class="container mt">
  <div class="row">
   <div class="col-sm-3"></div>
 <div class="col-sm-6"> <center>
 <br><br>
 
  <br><br>
  <form action='feedbacksubmit.php' method='post'>

 <fieldset class="rating" name="rt">
        <legend>Overall Experiance</legend>
      
        <input id="demo-1" type="radio" name="demo" value="1"> 
        <label for="demo-1">1 star</label>
        <input id="demo-2" type="radio" name="demo" value="2">
        <label for="demo-2">2 stars</label>
        <input id="demo-3" type="radio" name="demo" value="3">
        <label for="demo-3">3 stars</label>
        <input id="demo-4" type="radio" name="demo" value="4">
        <label for="demo-4">4 stars</label>
        <input id="demo-5" type="radio" name="demo" value="5">
        <label for="demo-5">5 stars</label>
        
        <div class="stars">
            <label for="demo-1" aria-label="1 star" title="1 star"></label>
            <label for="demo-2" aria-label="2 stars" title="2 stars"></label>
            <label for="demo-3" aria-label="3 stars" title="3 stars"></label>
            <label for="demo-4" aria-label="4 stars" title="4 stars"></label>
            <label for="demo-5" aria-label="5 stars" title="5 stars"></label>   
        </div>
        
    </fieldset>




  <div class='mb-3 mt-3'>
    <label for='title' class='form-label'>Comments :</label>
	
	 <input type='hidden' class='form-control' name='driverid' value='<?php echo $confirmedDriverId ?>' required>
     <input type='hidden' class='form-control' name='tripid' value='<?php echo $tripid ?>' required>
	 <input type='hidden' class='form-control' name='riderid' value='<?php echo $riderid ?>' required>
	<input type='text' class='form-control'  placeholder='' name='comment' value=''>
  </div>


 <center><button type='submit' class='btn btn-primary' >Submit</button></center>

  </form>
  
  
  
  
  </div>
  <div class="col-sm-3"></div>

	</div>
	

 

  
  </div>
  
  
  
    <script>
        (function(){
            var rating = document.querySelector('.rating');
            var handle = document.getElementById('toggle-rating');
            handle.onchange = function(event) {
                rating.classList.toggle('rating', handle.checked);
            };
        }());
    </script>

  
  


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