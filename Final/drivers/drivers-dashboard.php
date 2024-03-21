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
    <link rel="stylesheet" href="Driver_Profile.css">
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
					<div class="dropdown">
                   <a href="driverslogout.php"> <button class="dropbtn">Log Out</button> </a>
                    
                </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="container">
        <!-- Hero Section Start -->
        <div class="home">
            <div class="content">
                <h1>Driver Profile</h1>
            </div>
        </div>
        <!-- Hero Section End --><br>

        <!-- D profile start -->
        <div class="container light-style flex-grow-1 container-p-y">
            <section>
                <div class="card overflow-hidden">
                    <div class="row no-gutters row-bordered row-border-light">
                        <div class="col-md-3 pt-0"> <!-- links -->
                            <div class="list-group list-group-flush account-settings-links">
                                <a class="list-group-item list-group-item-action active" data-toggle="list"
                                    href="#account-dashbord">Dashbord</a>
								<a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#billing">Billing & Payments</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-profile">Profile</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-change-password">Change password</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#vehicle-info">Vehicle Info</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#vehicle-documents">Vehicle Documents </a>
                            </div> <!-- / links -->
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content"> <!-- Dashbord -->
                                <div class="tab-pane fade active show" id="account-dashbord">
                                    <div class="card-body media align-items-center">
                                       		    <?php
	  $id=$_SESSION['id'];
	  $name=$_SESSION['name'];
	  
	  $conn = mysqli_connect("localhost", "root", "", "ll"); 
	  
      $sql= "SELECT * FROM drivers where id=$id";
	  
      $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)) {
			
			$name=$row['name'];
			$email=$row['email'];
			$adress=$row['adress'];
			$phone=$row['phone'];
			$passport=$row['nic'];
			$photo=$row['photo'];
			$location=$row['location'];
			
			        }

	
    ?>
	
	                    		    <?php
	  $id=$_SESSION['id'];
	  $name=$_SESSION['name'];
	  
	  $conn = mysqli_connect("localhost", "root", "", "ll"); 
	  
      $sql= "SELECT * FROM vehicles where ownerid=$id";
	  
      $result = $conn->query($sql);
$cat="no";
        while($row = mysqli_fetch_array($result)) {
			
			$cat=$row['category'];
			
			        }

	
    ?>
        <img src="images/<?php echo $photo ?>" width="100" height="100" class="rounded-circle">
 
  							
									
                                       
                                        <div class="media-body ml-4">
                                            <h1>Hello, <span id="name"><?php echo $name ?></span></h1>

                                            <div class="star-container">
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                            </div>
											 <div class="card-body pb-2">
									       <br><br>
                                          <div class="media-body ml-4">
                                          <h6>My Location</h6>
                                             <form method="POST" action="location.php" enctype="multipart/form-data">        

										    <select class="form-select" name="location" >
											<option value="" disabled selected><?php echo $location ?></option>
													<option value="airport">Airport</option>
                                                    <option value="colombo">Colombo</option>
                                                    <option value="galle">Galle</option>
                                                    <option value="matara">Matara</option>
													<option value="kandy">Kandy</option>
                                                    <option value="negambo">Negambo</option>
                                                    <option value="ella">Ella</option>
													<option value="arugambay">Arugambay</option>
													<option value="sigiriya">Sigiriya</option>
				</select>
			<input type="hidden"  name="id" value="<?php echo $id ?>">

            <div>
				<br>
                <button type="submit" name="uploadfile" class="btn btn-success">
				 

                Change 

                </button>

            </div>

        </form> 
                                        </div>
                                    </div>
                                        </div>
                                    </div><br>
                                    
                                    <div class="card-body">
                                       
                                        <div class="container mt-4">
                                          
                                        </div><br>
                                       
                                         <div class="container mt-4">
                                           <h4><b>Trip Requests from Riders</b></h4>

                                        <div class="container mt-4">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Starting Point</th>
                                                        <th scope="col">Visiting Places</th>
                                                        <th scope="col">Days</th>
                                                        <th scope="col">Vehicle Type</th>
														<th scope="col">Status</th>
														
														
                                                    </tr>
                                                </thead>
                                                <tbody>
	 <?php																													   
	 
	
	  
	  $conn = mysqli_connect("localhost", "root", "", "ll"); 
	  $idd=$_SESSION['id'];
      $sql= "SELECT * FROM trips where tripStatus=0 and city='$location' and vehicleType='$cat'";
	  
      $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)) {
			$id=$row['id'];
			$pickup=$row['pickup'];
			$pickuDdate=$row['pickuDdate'];
			$visitingPlaces=$row['visitingPlaces'];
			$days=$row['days'];
			$vehicleType=$row['vehicleType'];
			$tripStatus=$row['tripStatus'];
			
			if($tripStatus==0)
			{
				$stat="Live";
			} else if($tripStatus==3)
			{
				$stat="Paused";
			}
			
			
			
     ?>
                                                    <tr>
                                                         <td><?php echo$pickuDdate ?></td>
                                                         <td><?php echo$pickup ?></td>
                                                         <td><?php echo$visitingPlaces ?></td>
                                                         <td><?php echo$days ?></td>
														 <td><?php echo$vehicleType ?></td>
														  <td><?php echo$stat ?></td>
														
                                                         <td> <div class="dropdown ">
    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
      Actions
    </button>
    <ul class="dropdown-menu">
	  <li><a class="dropdown-item " href=""><form action='accept-trip.php' method='post' > <input type='hidden' name='id' value='<?php echo$id ?>'>&nbsp;<button type='submit' class='btn btn-primary btn-sm'>Send proposal</button> <br></form></a></li>
	  <li><a class="dropdown-item " href="#"><form action='view-trip.php' method='post' > <input type='hidden' name='id' value='<?php echo$id ?>'>&nbsp;<button type='submit' class='btn btn-primary btn-sm'>View Details</button> <br></form></a></li>
       
    </ul>
  </div></td>
                                                    </tr>
												
													
	<?php							
																        
		}
	
    ?>
                                            
                                                </tbody>
                                            </table>
                                        </div><br>
                                        
                                        <div class="container mt-4">
                                           <h4><b>On Progress</b></h4>

                                        <div class="container mt-4">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Trip ID</th>
                                                        <th scope="col">Pickup Date</th>
                                                        <th scope="col">Visiting Places</th>
                                                        <th scope="col">Days</th>
                                                      
														<th scope="col">Status</th>
														<th scope="col">Rider PN</th>
														
                                                    </tr>
                                                </thead>
                                                <tbody>
	 <?php																													   
	  $id=$_SESSION['id'];
	
	  
	  $conn = mysqli_connect("localhost", "root", "", "ll"); 
	  
						
	  
	  
      $sql= "SELECT * FROM trips where confirmedDriverId=$id and tripStatus!='6'";
	  
      $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)) {
			
			$tid=$row['id'];
			$rid=$row['riderId'];
			$pickuDdate=$row['pickuDdate'];
			$visitingPlaces=$row['visitingPlaces'];
			$days=$row['days'];
			$vehicleType=$row['vehicleType'];
			$tripStatus=$row['tripStatus'];
			$riderphone=$row['riderphone'];
			$budget=$row['confrimedBudget'];
			
		
			if($tripStatus==2)
			{
				$stat="Active";
			}
			else if($tripStatus==1)
			{
				$stat="Rider Accepted your offer";
			}
			else if($tripStatus==3)
			{
				$stat="Paused";
			}
			else if($tripStatus==4)
			{
				$stat="Completed";
			}
			else if($tripStatus==5)
			{
				$stat="Finished";
			}
			
			
			
     
                                                echo"    <tr>
                                                         <td>$tid</td>
                                                         <td>$pickuDdate</td>
                                                         <td>$visitingPlaces</td>
                                                         <td>$days</td>
														
														  <td>$stat</td>
														  <td>$riderphone</td>
														
                                                         <td> <div class='dropdown'>
    <button type='button' class='btn btn-primary btn-sm dropdown-toggle' data-bs-toggle='dropdown'>
      Actions
    </button>
    <ul class='dropdown-menu'>";
	  if($tripStatus==0 or $tripStatus==3)
	  {
		  echo"<li><a class='dropdown-item ' ><form action='edit-trip.php' method='post' > <input type='hidden' name='tid' value='$tid '>&nbsp;<button type='submit' class='btn btn-success btn-sm'>Change trip</button> <br></form></a></li>"; 
		  
	  }
	 if($tripStatus==0)
	 {
		 echo"<li><a class='dropdown-item ' ><form action='pause-trip.php' method='post' > <input type='hidden' name='tid' value='$tid '>&nbsp;<button type='submit' class='btn btn-success btn-sm'>Pause trip</button> <br></form></a></li>";
      
	 }
	 if( $tripStatus==3)
	 {
		 echo"<li><a class='dropdown-item '><form action='resume-trip.php' method='post' > <input type='hidden' name='id' value='$tid'>&nbsp;<button type='submit' class='btn btn-success btn-sm'>Resume trip</button> <br></form></a></li>"; 
	
	 }
	if($tripStatus==1)
	{
		echo"<li><a class='dropdown-item ' ><form action='complete-trip.php' method='post' > <input type='hidden' name='driverid' value='$id'><input type='hidden' name='budget' value='$budget'><input type='hidden' name='tid' value='$tid'>&nbsp;<button type='submit' class='btn btn-success btn-sm'>Complete</button> <br></form></a></li>";
	}
	if($tripStatus!=2 and $tripStatus!=4 and $tripStatus!=5)
	{
		echo"<li><a class='dropdown-item ' danger ><form action='delete-trip.php' method='post' > <input type='hidden' name='tid' value='$tid'>&nbsp;<button type='submit' class='btn btn-danger btn-sm'>Cancel trip</button> <br></form></a></li>"; 
	}
    echo"</ul>
  </div></td>
                                                    </tr>";
													
													
													
													
													
													
							
															        
		}
	
    ?>
                                            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  </div>  </div> <!-- / Dashbord -->
								
								<!-- profile -->
                                <div class="tab-pane fade" id="billing">
                                   
								   
								                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Trip ID</th>
                                                        
                                                        <th scope="col">Completed Date</th>
                                                        <th scope="col">Trip Budget</th>
                                                      
														<th scope="col">Fee</th>
														<th scope="col">Status</th>
														
                                                    </tr>
                                                </thead>
                                                <tbody>
	 <?php																													   
	  $id=$_SESSION['id'];
	
	  $tot=0;
	  $conn = mysqli_connect("localhost", "root", "", "ll"); 
	  
      $sql= "SELECT * FROM billing where driverid='$id' and payStat='Not paid'";
	  
      $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)) {
			
			$tid=$row['tripid'];
			
		
			$completedDate=$row['completedDate'];
			$paystat=$row['payStat'];
			$budget=$row['tripbudget'];
			
		        
				$fee=(float)$budget/100*5;
			
			$tot=$tot+$fee;
			
     ?>
                                                    <tr>
                                                         <td><?php echo$tid ?></td>
                                                         
                                                         <td><?php echo$completedDate ?></td>
                                                         <td><?php echo$budget ?>.00</td>
														
														  <td><?php echo$fee ?>.00</td>
														  <td><?php echo$paystat ?></td>
														
                                                         <td> 
       <?php if($paystat=="Not Paid")echo"<form action='pay-one.php' method='post' > <input type='hidden' name='tid' value='$tid '><input type='hidden' name='fee' value='$fee '>&nbsp;<button type='submit' class='btn btn-success btn-sm'>Pay</button> <br></form>"; ?>
     
  </td>
                                                    </tr>
													
													
													
													
													
													
	<?php
																        
		}
	
    ?>
                                            
                                                </tbody>
                                            </table>
											<br><br>
								  <center> <form action='pay-tot.php' method='post' > <input type='hidden' name='tid' value='$tid '><input type='hidden' name='fee' value='$tot'>&nbsp;<button type='submit' class='btn btn-success btn-sm'>Pay Total <?php echo$tot ?>.00</button> <br></form></center>
								   
								   <br>
                                </div> <!-- / profile -->
								



                                     <!-- profile -->
                                <div class="tab-pane fade" id="account-profile">
                                    <div class="card-body media align-items-center">
                                        
                                        <div class="media-body ml-4">
                                           &nbsp;
                                             <form method="POST" action="image.php" enctype="multipart/form-data">        

            <input type="file" name="choosefile" value="" />
			<input type="hidden"  name="id" value="<?php echo $id ?>">

            <div>
				<br>
                <button type="submit" name="uploadfile" class="btn btn-success">
				 

                Change Picture

                </button>

            </div>

        </form> 
                                        </div>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body">
									<form method="post" action="updateprofile.php">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control mb-1" name="name" value="<?php echo $name ?>">
											
                                            <input type="hidden" class="form-control mb-1" name="id" value="<?php echo $id ?>">
                                        </div><br>
                                        <div class="form-group">
                                            <label class="form-label">Adress</label>
                                            <input type="text" class="form-control" name="adress" value="<?php echo $adress ?>">
                                        </div><br>
                                        <div class="form-group">
                                            <label class="form-label">E-mail</label>
                                            <input type="text" class="form-control mb-1" name="email" value="<?php echo $email ?>">
                                        </div><br>
                                        <div class="form-group">
                                            <label class="form-label">Phone no</label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
                                        </div><br>
                                        <div class="form-group">
                                            <label class="form-label">NIC No</label>
                                            <input type="text" class="form-control" name="passport" value="<?php echo $passport ?>">
                                        </div><br>
										<button type='submit' class="btn btn-primary">Save changes</button>
										</form>
                                    </div>
                                </div> <!-- / profile -->

                      <!-- password change -->
                                <div class="tab-pane fade" id="account-change-password">
                                    <div class="card-body pb-2">
									<form method="post" action="changepass.php">
                                        <div class="form-group">
                                            <label class="form-label">Current password</label>
                                            <input name="pass" type="password" class="form-control">
											<input type="hidden" class="form-control mb-1" name="id" value="<?php echo $id ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">New password</label>
                                            <input name="newpass" type="password" class="form-control">
                                        </div>
                                       <br>
											<button type='submit' class='btn btn-success' name='uploadfile'>Change</button>
										</form>
                                    </div>
                                </div>
                                <!-- / password change -->

                                <!-- vehicle info -->
                                <div class="tab-pane fade" id="vehicle-info">
                                    <div class="card-body pb-2">
                                        
										
										                          		    <?php
	  $id=$_SESSION['id'];
	  $name=$_SESSION['name'];
	  
	  $conn = mysqli_connect("localhost", "root", "", "ll"); 
	  
      $sql= "SELECT * FROM vehicles where ownerid=$id";
	  
      $result = $conn->query($sql);

        while($row = mysqli_fetch_array($result)) {
			
			$plateno=$row['plateno'];
			$make=$row['make'];
			$model=$row['model'];
			//$phone=$row['maxpax'];
			
			
		}

	
				if(isset($make))
				{
										
										echo"<div class='form-group'>";
                                           echo" <label class='form-label'>Plate no</label>";
                                           echo" <input type='text' class='form-control' value='$plateno' readonly>";
                                       echo" </div><br>";
                                        echo"<div class='form-group'>";
                                          echo"  <label class='form-label'>Manufacture</label>";
                                           echo" <input type='text' class='form-control' value='$make'readonly>";
                                       echo" </div><br>";
                                     
                                       echo" <div class='form-group'>";
                                         echo"<label class='form-label'>Model</label>";
                                         echo"   <input type='text' class='form-control' value='$model' readonly>";
                                       echo" </div><br>";
										
				} else
				{
					
					echo" <a href='add-vehicle.php'><button type='submit' class='btn btn-success'>Add Vehicle Details</button></a>";
					
				}
				
                                            ?>
                                    </div>
                                </div>
                                <!-- / vehicle info -->

                                <!-- vehicle documents -->
                                <div class="tab-pane fade" id="vehicle-documents">
                                    <div class="card-body pb-2">
									 <h6>Revenue licence</h6>
                                                       <div class="media-body ml-4">
                                           &nbsp;
                                             <form method="POST" action="rimg.php" enctype="multipart/form-data">        

            <input type="file" name="choosefile" value="" />
			<input type="hidden"  name="id" value="<?php echo $id ?>">

            <div>
				<br>
                <button type="submit" name="uploadfile" class="btn btn-success">
				 

                Change 

                </button>

            </div>

        </form> 
                                        </div>
                                    </div>
                                    <hr class="border-light m-0"><br>
                                     <div class="card-body pb-2">
									 <h6>Registration document</h6>
                                                       <div class="media-body ml-4">
                                           &nbsp;
                                             <form method="POST" action="regimg.php" enctype="multipart/form-data">        

            <input type="file" name="choosefile" value="" />
			<input type="hidden"  name="id" value="<?php echo $id ?>">

            <div>
				<br>
                <button type="submit" name="uploadfile" class="btn btn-success">
				 

                Change 

                </button>

            </div>

        </form> 
                                        </div>
                                    </div>
                                    <hr class="border-light m-0"><br>
                     <div class="card-body pb-2">
									 <h6>Insurance document</h6>
                                                       <div class="media-body ml-4">
                                           &nbsp;
                                             <form method="POST" action="insimg.php" enctype="multipart/form-data">        

            <input type="file" name="choosefile" value="" />
			<input type="hidden"  name="id" value="<?php echo $id ?>">

            <div>
				<br>
                <button type="submit" name="uploadfile" class="btn btn-success">
				 

                Change 

                </button>

            </div>

        </form> 
                                        </div>
                                    </div>
                                    <hr class="border-light m-0"><br>
                                      
                                    </div>
                                </div>
                                <!-- / vehicle documents -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                  
                </div>
        </div>
    </div>

    </section>
    <!-- D profile end -->

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