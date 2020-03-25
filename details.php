<?php
$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
die("Failed to connect!".$conn->connect_error);	
}
if(isset($_POST['submit'])){
$data=$_POST['search'];	
$sql="SELECT * FROM tbl_suets WHERE name='$data'";	
$result=$conn->query($sql);	
$row=$result->fetch_assoc();


echo "Product Name :".$row['name']."<br>";	
echo "Price :".$row['price']."<br>";
			
}

?>
<?php
$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
die("Failed to connect!".$conn->connect_error);	
}
if(isset($_POST['submit'])){
$data=$_POST['search'];	
$sql="SELECT * FROM tbl_birdfeeders WHERE name='$data'";	
$result=$conn->query($sql);	
$row=$result->fetch_assoc();


echo "Product Name :".$row['name']."<br>";	
echo "Price :".$row['price']."<br>";
			
}

?>
<?php
$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
die("Failed to connect!".$conn->connect_error);	
}
if(isset($_POST['submit'])){
$data=$_POST['search'];	
$sql="SELECT * FROM tbl_birdfeedersaccessories WHERE name='$data'";	
$result=$conn->query($sql);	
$row=$result->fetch_assoc();


echo "Product Name :".$row['name']."<br>";	
echo "Price :".$row['price']."<br>";
			
}

?>
<?php
$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
die("Failed to connect!".$conn->connect_error);	
}
if(isset($_POST['submit'])){
$data=$_POST['search'];	
$sql="SELECT * FROM tbl_product WHERE name='$data'";	
$result=$conn->query($sql);	
$row=$result->fetch_assoc();


echo "Product Name :".$row['name']."<br>";	
echo "Price :".$row['price']."<br>";
			
}

?>
<?php
$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
die("Failed to connect!".$conn->connect_error);	
}
if(isset($_POST['submit'])){
$data=$_POST['search'];	
$sql="SELECT * FROM tbl_sale WHERE name='$data'";	
$result=$conn->query($sql);	
$row=$result->fetch_assoc();


echo "Product Name :".$row['name']."<br>";	
echo "Price :".$row['price']."<br>";
			
}

?>
<?php
$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
die("Failed to connect!".$conn->connect_error);	
}
if(isset($_POST['submit'])){
$data=$_POST['search'];	
$sql="SELECT * FROM tbl_seedmixes WHERE name='$data'";	
$result=$conn->query($sql);	
$row=$result->fetch_assoc();


echo "Product Name :".$row['name']."<br>";	
echo "Price :".$row['price']."<br>";
			
}

?>
<?php
$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
die("Failed to connect!".$conn->connect_error);	
}
if(isset($_POST['submit'])){
$data=$_POST['search'];	
$sql="SELECT * FROM tbl_straights WHERE name='$data'";	
$result=$conn->query($sql);	
$row=$result->fetch_assoc();


echo "Product Name :".$row['name']."<br>";	
echo "Price :".$row['price']."<br>";
			
}

?>