<?php
	
	
		
	include_once "connection.php";
	
	if (isset($_POST['submit'])) {
		
		
		$product_name = $_POST['a1'];
		$prodect_quantity = $_POST['a2'];
		$manufacture_date = $_POST['a3'];
		$expire_date = $_POST['a4'];
		$Price = $_POST['a5'];
		$product_image=$_POST['a6'];
		$query1 = "INSERT INTO product(productname ,prodectquantity, 	manufacturedate ,	expiredate ,	price,image)
		
		VALUES ('$product_name ','$prodect_quantity', '$manufacture_date', '$expire_date', '$Price','$product_image')";

				
				
		
		
		
		
         
		
		if ($conn->query($query1) === TRUE ) {
			echo "New record created successfully";
		} else {
			echo "Error: ";
		}
		$conn->close();
		
		
				
		
	}
?>