<html>
	<head>
		<title>Add New Passenger</title>
	</head>
	<body>
		<?php
			
	


	$conn = mysqli_connect("localhost", "root",'',"derbyairlinesystem");

	$query = " SELECT  max(passenger_id) as 'max'
            FROM passenger ";


    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result);

   	$pass_id =  $row['max'];
    $pass_id++;
   

	if(isset($_POST['Submit'])){
	    $firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		$Email = $_POST['Email'];
		
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$username = $_POST['username'];
		$password = $_POST['Password'];


		$query2 = "INSERT INTO passenger (passenger_id, firstname, surname, Email, phone, address, username, password )
					VALUES ('$pass_id', '$firstname', '$surname','$Email', '$phone', '$address', '$username', '$password')";


		$result2 = mysqli_query($conn, $query2); 

		header('Location: psreg.php'); 

	}
		?>
	</body>
</html>