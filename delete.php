<?php
include("connection.php");
$product_id=$_GET['pid'];

$query = "DELETE FROM product WHERE productid='$product_id'";

$data=mysqli_query($conn, $query);
if($data)
{
  echo "<script>alert('Record Deleted, Press OK')</script>";	
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/final1/ONLINE%20BIRD%20FOOD%20STORE1/adminpanel.php">
  
  <?php
}
else
{
	
echo "<font color='red'>Delete Process Failed"	;
}
?>