<html>
	<head>
		<title>Add New staff</title>
	</head>
	<body>
		<?php
			
	


	$conn = mysqli_connect("localhost", "root",'',"derbyairlinesystem");

	$query = " SELECT  max(EmpNum) as 'max'
            FROM staff ";


    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result);

   	$EmpNum =  $row['max'];
    $EmpNum++;
   

	if(isset($_POST['Submit'])){
	    $firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		
		
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$username = $_POST['username'];
		$password = $_POST['Password'];


		$query2 = "INSERT INTO staff (EmpNum, firstname, surname,  phone, address, username, password )
					VALUES ('$EmpNum', '$firstname', '$surname','$phone', '$address', '$username', '$password')";


		$result2 = mysqli_query($conn, $query2); 

		header('Location: staffreg.php'); 

	}
		?>
	</body>
</html>