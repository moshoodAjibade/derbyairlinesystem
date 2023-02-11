<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mosh Airplane Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mosh Airplane </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Flight Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Passenger</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Components:</h6>
                        <a class="collapse-item" href="psreg.php">Register</a>
                        <a class="collapse-item" href="searchflight.php">Book for Flight</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Staff</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Components:</h6>
                        <a class="collapse-item" href="staffreg.php">Staff Register</a>
                        <a class="collapse-item" href="crewreg.php">Crew</a>
                        <a class="collapse-item" href="pilotreg.php">Pilot</a>
                       
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Airplane
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Machine</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Components:</h6>
						<a class="collapse-item" href="machinereg.php">Register</a>
                        <a class="collapse-item" href="machinelog.php">Airplane Machine Operations </a>
                        
                        <a class="collapse-item" href="city.php">City</a>
                        
                    </div>
                </div>
            </li>

           

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="flighthome.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Manage Flight Operations</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Mosh Airline</strong> is packed with premium features, components, and more!</p>
            
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  
                       

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    

                
						   
					<?php 
					
					 $host = 'localhost';  // server 
$user = 'root';   
$pass = "";   
$database = 'derbyairlinesystem';   //Database Name  

// establishing connection
  $conn = mysqli_connect($host,$user,$pass,$database);   

 // for displaying an error msg in case the connection is not established
  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
				
	if(isset($_GET['flight_id']))
    {
      $flight_id = $_GET['flight_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM flight_details WHERE flight_no = $flight_id ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
           $flight_no = $row['flight_no'];
		   $from_city = $row['from_city'];
		   $to_city = $row['to_city'];				
		   $departure_date = $row['departure_date'];
		   $arrival_date = $row['arrival_date'];
		   $departure_time = $row['departure_time'];
		   $arrival_time = $row['arrival_time'];				
		   $seats_economy = $row['seats_economy'];
		   $seats_business = $row['seats_business'];
		   $price_economy = $row['price_economy'];
		   $price_business = $row['price_business'];				
		   $numser = $row['numser'];
      
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['Submit'])) 
    {
		   $from_city = $_POST['from_city'];
		   $to_city = $_POST['to_city'];				
		   $departure_date = $_POST['departure_date'];
		   $arrival_date = $_POST['arrival_date'];
		   $departure_time = $_POST['departure_time'];
		   $arrival_time = $_POST['arrival_time'];				
		   $seats_economy = $_POST['seats_economy'];
		   $seats_business = $_POST['seats_business'];
		   $price_economy = $_POST['price_economy'];
		   $price_business = $_POST['price_business'];				
		   $numser = $_POST['numser'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE flight_details SET from_city = '{$from_city}' , to_city = '{$to_city}' , 
	  departure_date = '{$departure_date}' , arrival_date = '{$arrival_date}' ,
	  departure_time = '{$departure_time}' , arrival_time = '{$arrival_time}' ,
	  seats_economy = '{$seats_economy}' , seats_business = '{$seats_business}' ,
	  price_economy = '{$price_economy}' , price_business = '{$price_business}' ,
	  
	  numser = '{$numser}' WHERE flight_no = $flight_no";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Flight data updated successfully!')</script>";
    }  

					
?>
                    
   <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">update Flight Details!</h1>
                            </div>
                            <form class="user" action="" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="flight_no"
                                            placeholder="flight_no"  value="<?php echo $flight_no  ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="from_city"
                                            placeholder="from_city" value="<?php echo $from_city  ?>">
                                    </div>
                                </div>
                               
								<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            name="to_city" placeholder="to_city" value="<?php echo $to_city  ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="example" name="departure_date" placeholder="departure_date" value="<?php echo $departure_date  ?>">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="arrival_date"
                                            placeholder="arrival_date"  value="<?php echo $arrival_date  ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="departure_time"
                                            placeholder="departure_time" value="<?php echo $departure_time  ?>">
                                    </div>
                                </div>
                               
								<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            name="arrival_time" placeholder="arrival_time" value="<?php echo $arrival_time  ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="example" name="seats_economy" placeholder="seats_economy" value="<?php echo $seats_economy  ?>">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="seats_business"
                                            placeholder="seats_business"  value="<?php echo $seats_business  ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="price_economy"
                                            placeholder="price_economy" value="<?php echo $price_economy  ?>">
                                    </div>
                                </div>
                               
								<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            name="price_business" placeholder="price_business" value="<?php echo $price_business  ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="example" name="numser" placeholder="numser" value="<?php echo $numser  ?>">
                                    </div>
                                </div>
                                
                                <input type ="submit" name="Submit" value="Submit" class="btn btn-primary btn-user btn-block">
                                 
                             
                               
                            </form>
                            <hr>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>					
				
				
				
				
				
            </div>
				
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your mosh 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>