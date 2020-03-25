<?php

$conn=new mysqli("localhost","root","","loginsystem");
if($conn->connect_error){
	
	die("Failed to connect!".$conn->connect_error);
	
	
}
if(isset($_POST['query'])){
$inpuText=$_POST['query'];	

/*$query="SELECT name FROM tbl_suets WHERE name LIKE '%$inpuText%' ";*/
$query="SELECT * FROM (
        SELECT * FROM tbl_birdfeeders
        UNION ALL
        SELECT * FROM tbl_birdfeedersaccessories
		UNION ALL
        SELECT * FROM tbl_product
		UNION ALL
        SELECT * FROM tbl_sale
		UNION ALL
        SELECT * FROM tbl_seedmixes
		UNION ALL
        SELECT * FROM tbl_straights
		UNION ALL
        SELECT * FROM tbl_suets
        
               ) AS Total
WHERE NAME LIKE '%$inpuText%' ";


$result = $conn->query($query);	
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['name']."</a>";



       }
   }
   else{
	  echo "<p class='list-group-item border-1'>No Record</p>";
	   
   }
}
?>