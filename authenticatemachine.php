<html>
	<head>
		<title>Add New machine</title>
	</head>
	<body>
		<?php
			
	


	$conn = mysqli_connect("localhost", "root",'',"derbyairlinesystem");

	$query = " SELECT  max(numser) as 'max'
            FROM airplane_details ";


    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result);

   	$numser =  $row['max'];
    $numser++;
   

	if(isset($_POST['Submit'])){
	    $numser = $_POST['numser'];
		$plane_type = $_POST['plane_type'];
		$total_capacity = $_POST['total_capacity'];				
		$active = $_POST['active'];
		


		$query2 = "INSERT INTO airplane_details (numser, plane_type, total_capacity, active )
					VALUES ('$numser', '$plane_type', '$total_capacity', '$active')";


		$result2 = mysqli_query($conn, $query2); 

		header('Location: machinereg.php'); 

	}
		?>
	</body>
</html>