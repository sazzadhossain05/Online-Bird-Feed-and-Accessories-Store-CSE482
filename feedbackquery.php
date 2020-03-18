<?php
include_once "connection.php";
if (isset($_POST['submit'])) {
		
		// Registration Form
		$name=$_POST['nme'];
		$email= $_POST['eml'];
		$message= $_POST['msg'];
		
		$query2 = "INSERT INTO  feedback(
		name,email,message)
		
		VALUES ('$name','$email', '$message')";
				
		if ($conn->query($query2) === TRUE ) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
		}
		$conn->close();
		
		
				
		
	}
?>