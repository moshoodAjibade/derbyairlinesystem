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
                        <a class="collapse-item" href="machinelog.html">login </a>
                        
                        <a class="collapse-item" href="city.php">City</a>
                        
                    </div>
                </div>
            </li>

           

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
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
                                    src="img/undraw_profile.svg"> update staff account
                            </a>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


               


 	<form method="post">
		<div class=" row">
		 		
		 		<div class="col-11">
		 			
		 		</div>
		 		<div class=" col-1 mt-4">
		 			<form>
		 				 <button class="btn-sm btn-primary" name="btnHome">Home</button>
		 			</form>
		 		</div>

		</div>

	</form>

 	<div class="mt-4 ml-5">
 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Name</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="name" placeholder="Name" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upName" >Update</button>
 					
 				</div>
 			</div>

 		</form>

 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Surname</b></h3></div>
 				<div class="col-2"> 
 					<input type="email"  name="surname" placeholder="Email" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upSurname" >Update</button>
 					
 				</div>
 			</div>

 		</form>


 		

 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>phone</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="phone" placeholder="Mobile Number" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upMobile" >Update</button>
 					
 				</div>
 			</div>
 		</form>


 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Address</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="address" placeholder="Address" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upAddress" >Update</button>
 					
 				</div>
 			</div>
 		</form>


 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Username</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="username" placeholder="username" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upUsername" >Update</button>
 					
 				</div>
 			</div>
 		</form>


 		

 		<form method="post">
 			<div class="row">
 				<div class="col-2"></div>
 				<div class="col-3"><h3><b>Password</b></h3></div>
 				<div class="col-2"> 
 					<input type="text"  name="Password" placeholder="***********************" required="" autofocus="" />
 				</div>
 				<div class="col-5 ">
 						<button class="btn btn-sm btn-primary" name="upPassword" >Update</button>
 					
 				</div>
 			</div>

 		</form>

				
				
				<?php

	session_start();

	$conn = mysqli_connect("localhost", "root",'',"derbyairlinesystem");



  if(mysqli_connect_errno()){
    echo 'connction Failed';
  }
  

  $EmpNum = $_SESSION['EmpNum'];


  if(isset($_POST['btnHome'])){
  	header('Location: staffupdate.php'); 
  }


// name uodate

  if(isset($_POST['upName'])){

  	

  	$cName = $_POST['name'];

  	

  	$query = "UPDATE staff
  	SET name = '$cName' 
  	WHERE EmpNum=  '$EmpNum' " ;


  	$result = mysqli_query($conn, $query);

  }

 // email update 

  if(isset($_POST['upSurname'])){

  	
  	$cEmail = $_POST['surname'];

  	$query2 = "UPDATE staff
  	SET surname = ' $cEmail ' 
  	WHERE EmpNum=  '$EmpNum' " ;


  	$result2 = mysqli_query($conn, $query2);

  }







// mobile update

  if(isset($_POST['upMobile'])){

 	
    $cMobile = $_POST['phone']; 	

  	$query4 = "UPDATE staff
  	SET phone = '$cMobile' 
  	WHERE EmpNum=  '$EmpNum' " ;

  	$result4 = mysqli_query($conn, $query4);

  }




   
// addres update

   if(isset($_POST['upAddress'])){
	
  	$cAddress = $_POST['address'];


  	$query5 = "UPDATE staff
  	SET address = '$cAddress' 
  	WHERE EmpNum=  '$EmpNum' " ;


  	$result5 = mysqli_query($conn, $query5);

  }

// country update

  if(isset($_POST['upUsername'])){  	

  	$cCountry = $_POST['username'];
 	

  	$query6 = "UPDATE staff
  	SET username = '$cCountry' 
  	WHERE EmpNum=  '$EmpNum' " ;


  	$result6 = mysqli_query($conn, $query6);

  }


// password Update

 if(isset($_POST['upPassword'])){
 	
  	$cPassword = $_POST['password'];

  	
  	$query7 = "UPDATE agent
  	SET password = '$cPassword' 
  	WHERE EmpNum=  '$EmpNum' " ;


  	$result7 = mysqli_query($conn, $query7);

  }



?>

				
				
				
            </div>
				
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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