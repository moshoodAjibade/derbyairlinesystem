<html>
	<head>
		<title>Add New staff</title>
	</head>
	<body>
		<?php
			
	


	$conn = mysqli_connect("localhost", "root",'',"derbyairlinesystem");

	$query = " SELECT  max(crewid) as 'max'
            FROM crew ";


    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result);

   	$crewid =  $row['max'];
    $crewid++;
   

	if(isset($_POST['Submit'])){
	    $crewtype = $_POST['crewtype'];
		$EmpNum = $_POST['EmpNum'];
		
		

		$query2 = "INSERT INTO crew (crewid, crewtype, EmpNum)
					VALUES ('$crewid', '$crewtype', '$EmpNum')";


		$result2 = mysqli_query($conn, $query2); 

		header('Location: crewreg.php'); 

	}
		?>
	</body>
</html>