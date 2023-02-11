<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Derby Airplane Dashboard</title>

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

                    

                </div>
                <!-- /.container-fluid -->

				
				   <div class="container">

                           
						   
					<div class="container">
    <h1 class="text-center" >Ticket Details</h1>
      <a href="flightcreate.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> UPDATE TICKET</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">pnr</th>
              <th  scope="col">date_of_reservation</th>
              <th  scope="col">flight_no</th>
              <th  scope="col"> journey_date</th>
			  <th  scope="col">no_of_passengers</th>
              <th  scope="col">payment_id</th>
              <th  scope="col">username</th>
             <!-- <th  scope="col"> seats_economy</th>
			  <th  scope="col">seats_business</th>
              <th  scope="col">price_economy</th> 
              <th  scope="col">price_business</th>
			 
              <!-- <th  scope="col"> numser</th> --->
              <th  scope="col" colspan="3" class="text-center">Ticket Details</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
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
		  
            $query="SELECT * FROM ticket_details";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $pnr = $row['pnr'];                
              $date_of_reservation = $row['date_of_reservation'];        
              $flight_no = $row['flight_no'];    
              $journey_date = $row['journey_date'];  
              $no_of_passengers = $row['no_of_passengers'];                
              $payment_id = $row['payment_id'];        
              $username = $row['username'];         
               			  

              echo "<tr >";
              echo " <th scope='row' >{$pnr}</th>";
              echo " <td > {$date_of_reservation}</td>";
              echo " <td > {$flight_no}</td>";
              echo " <td >{$journey_date} </td>";
			  echo " <td>{$no_of_passengers}</th>";
              echo " <td > {$payment_id}</td>";
              echo " <td > {$username}</td>";
           #   echo " <td >{$seats_economy} </td>";
			#  echo " <td>{$seats_business}</th>";
             #echo " <td > {$price_economy}</td>";
             #echo " <td > {$price_business}</td>";
              #echo " <td >{$numser} </td>";

              echo " <td class='text-center'> <a href='ticketview.php?user_id={$pnr}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='ticketupdate.php?edit&user_id={$pnr}' class='btn btn-secondary'><i class='bi bi-pencil'></i> UPDATE</a> </td>";

              echo " <td  class='text-center'>  <a href='ticketdelete.php?delete={$pnr}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="tickethome.php" class="btn btn-warning mt-5"> Back </a>
    <div>
				
				
				
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