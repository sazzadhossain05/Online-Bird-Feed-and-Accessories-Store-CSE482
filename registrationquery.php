<?php
include_once "connection.php";
if (isset($_POST['submit'])) {
		
		// Registration Form
		$username=$_POST['uname'];
		$email= $_POST['email'];
		$password= $_POST['pass'];
		$repeat_password= $_POST['repeat_pass'];
		$first_name = $_POST['first_name'];
		
		$last_name = $_POST['last_name'];
		$phone = $_POST['phone'];
		$street= $_POST['street'];
		$city = $_POST['city'];
		
		$state = $_POST['state'];
		$zip_code = $_POST['zip'];
		$country = $_POST['country'];
		
		
		
		$query1 = "INSERT INTO  registration(
		username,email,password,repeatpassword,firstname,
		                         lastname,phone,street,city,state,zipcode,country
		
		                           )
		
		VALUES ('$username','$email', '$password', '$repeat_password', '$first_name',
		        '$last_name', '$phone','$street','$city ','$state',
				'$zip_code','$country')";
				
				
				
				
		if ($conn->query($query1) === TRUE ) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
		}
		$conn->close();
		
		
				
		
	}
?>