<html>
	<head>
		<title>Add New pilot</title>
	</head>
	<body>
		<?php
			
	


	$conn = mysqli_connect("localhost", "root",'',"derbyairlinesystem");

	$query = " SELECT  max(pilotid) as 'max'
            FROM pilot ";


    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result);

   	$pilotid =  $row['max'];
    $pilotid++;
   

	if(isset($_POST['Submit'])){
	    $crewtype = $_POST['crewtype'];
		$EmpNum = $_POST['EmpNum'];
		
		

		$query2 = "INSERT INTO crew (crewid, pilotratings, EmpNum)
					VALUES ('$pilotid', '$pilotratings', '$EmpNum')";


		$result2 = mysqli_query($conn, $query2); 

		header('Location: pilotreg.php'); 

	}
		?>
	</body>
</html>