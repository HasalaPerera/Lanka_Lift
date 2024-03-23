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
                <h1>Admin Dashboard</h1>
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
                                    href="#account-profile">Driver Look Up</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-change-password">Rider Look Up </a>
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
	  
	  
	
    ?>
	
	     
        
 
  							
									
                                       
                                        <div class="media-body ml-4">
                                            <h2>Hello, <span id="name"><?php echo $name ?></span></h2>

                                           
											 <div class="card-body pb-2">
									       
                                          <div class="media-body ml-4">
                   
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                       
                                      
                                       
                                      
                                        <div class="container mt-4">
                                           <h4><b>Active Trips on the platform</b></h4>

                                        <div class="container mt-4">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Trip ID</th>
                                                        <th scope="col">Pickup Date</th>
                                                        <th scope="col">Rider ID</th>
                                                        <th scope="col">Driver ID</th>
                                                      
														<th scope="col">Status</th>
														<th scope="col">Rider PN</th>
														
                                                    </tr>
                                                </thead>
                                                <tbody>
	 <?php																													   
	  $id=$_SESSION['id'];
	
	  
	  $conn = mysqli_connect("localhost", "root", "", "ll"); 
	  
						
	  
	  
      $sql= "SELECT * FROM trips where tripStatus!='6'";
	  
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
			$driverid=$row['confirmedDriverId'];
			
		
			if($tripStatus==0)
			{
				$stat="Waiting";
			}
			else if($tripStatus==1)
			{
				$stat="Driver Choosen";
			}
			else if($tripStatus==2)
			{
				$stat="Rider Paused";
			}
			else if($tripStatus==3)
			{
				$stat=" Driver Completed";
			}
			else if($tripStatus==4)
			{
				$stat="Finished";
			}
			if($tripStatus==5)
			{
				$stat="Rider Deleted";
			}
			
			
			
			
     
                                                echo"    <tr>
                                                         <td>$tid</td>
                                                         <td>$pickuDdate</td>
                                                         <td>$rid</td>
                                                         <td>$driverid</td>
														
														  <td>$stat</td>
														  <td>$riderphone</td>
														
                                                         <td> <div class='dropdown'>
    
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
                                           &nbsp;   <h4><b>Search Drivers</b></h4>
                                             <form method="POST" action="image.php" enctype="multipart/form-data">        
			<label>Driver Id</label>
            <input type="text" name="Driver Id" value="" />
			

            <div>
				<br>
                <button type="submit" name="uploadfile" class="btn btn-success">
				 

                Check

                </button>

            </div>

        </form> 
                                        </div>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body">
								
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