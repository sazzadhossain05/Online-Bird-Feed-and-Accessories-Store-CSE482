<?php
include("connection.php");
error_reporting(0);
 $_GET['pid'];
 $_GET['pname'];
 $_GET['pquan'];
 $_GET['md'];
 $_GET['ed'];
 $_GET['pri'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Online Bird Food Store</title>
<meta name="description" content="This is the description">


<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/styleness.css" />
 <script src="js/store.js"></script>
  <style>


h1,h3{
	
	list-style-type: none;
	color:#e8491d;
	text-align:center;

}
a{
	color:black;
	text-decoration:none;
	}
	ul.footer{
	list-style-type:none;
background-color:#F0E68C;
  color:black;
	
}
.product-table {
  max-width: 500px;
  margin: auto;
}
 .button3 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
}
.table-style{
	
	padding-right:10px;
	
    text-align:center;
}

</style>
</head>
<body>
<section id="demo1">
      
 
<a href="https://www.aav.org/page/basiccare"><img src="img/blog.png" style="margin:5px;width:42px;height:42px;border:0"></a>
<a href="https://www.facebook.com"><img src="img/fb.png" style="margin:5px;width:42px;height:42px;border:0"></a>
<a href="https://www.twitter.com"><img src="img/twitter.png" style="margin:5px;width:42px;height:42px;border:0"></a>
<a href="https://www.youtube.com"><img src="img/yt.png" style="margin:5px;width:42px;height:42px;border:0"></a>
<a href="cart.php"><button class="button_2"style="height:42px;">Basket</button></a>
<a href="adminpanel.php"><button class="button_2"style="height:42px;">Admin Panel</button></a>	    

<h1><a href="index.php"style="text-decoration:none;color:#513929;" >Birds's Food<img src="img/icon.jpg" style="width:42px;height:42px;border:0"></a></h1>
	  
	  <form>
	    
	 <button type="submit" class="button_2"><a href="myprofile.php"style="text-decoration:none;color:white;">My Account</a></button>
	 
	 <button type="submit" class="button_2"><a href="login.php"style="text-decoration:none;color:white;">Log In</a></button>
	  
	 
	  <button type="submit" class="button_2"><a href="logout.php"style="text-decoration:none;color:white;">Log out</a></button> 
	  </form>
	 
	 
</section>

<header>
   <div class="container">
      <div id="branding">

          
		 
		  <nav>
		    <ul>
		   <li class="current"><a href="index.php">Home</a></li>
		   <li><a href="SeedMixes.php">Seed Mixes</a></li>
           <li><a href="Straights.php">Straights</a></li>
           <li> <a href="Suets.php">Suets</a></li>
           <li><a href="BirdFeeders.php">Bird Feeders</a></li>
           <li><a href="BirdFeedersAccessories.php">Bird Feeders Accessories</a></li>
           <li><a href="Sale.php">Sale</a></li>
		  
			</ul>
		  </nav>
		   </div> 
      </div>
</header>
<br/>
<section class="container">
 <form action="details.php" method="post">
 
<button type="submit"name="submit"value="search" class="button_1"style="float:right;width:37%;">Search</button>
<input type="text" name="search"id="search" placeholder="search..."style="float:left;width:62%;height:37px;">


</form>
<div class="col-md-5"style="posistion:relative;margin-top:39px;margin-left:-12px; ">
<div class="list-group" id="show-list">

 
</div>
</div>
</section>

<hr>
<h1>Update Product</h1>
<form method="GET" action="" >
<table class="product-table">
	<tr>
		<td>Product ID</td>
	    <td><input type="number" name="productid" value="<?php echo $_GET['pid']; ?>" ></td>
	</tr>
	<tr>
		<td>Product Name</td>
	    <td><input type="text" name="productname" value="<?php echo $_GET['pname']; ?>" ></td>
	</tr>
	<tr>
		<td>Prodect Quantity</td>
		<td><input type="number" name="productquantity" value="<?php echo $_GET['pquan']; ?>" ></td>
	</tr>
	<tr>
		<td>Manufacture Date</td>
	    <td><input type="date" name="manufacturedate" value="<?php echo $_GET['md']; ?>" ></td>
	</tr>
	<tr>
		<td>Expire Date</td>
		<td><input type="date" name="expiredate" value="<?php echo $_GET['ed']; ?>" ></td>
	</tr>
	<tr>
		<td>Price</td>
	    <td><input type="number" name="price" value="<?php echo $_GET['pri']; ?>" ></td>
	</tr>

	
</table>
<input type="submit" class="button3" name="submit" value="Update">

</form>
<?php 
if($_GET['submit'])
{
	$product_id=$_GET['productid'];
	$product_name=$_GET['productname'];
	$product_quantity=$_GET['productquantity'];
	$product_manufacture_date=$_GET['manufacturedate'];
	$product_expire_date=$_GET['expiredate'];
	$product_price=$_GET['price'];
	$query = "UPDATE product SET  productname='$product_name',prodectquantity='$product_quantity',manufacturedate='$product_manufacture_date',expiredate='$product_expire_date',price='$product_price' WHERE productid='$product_id'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "Record Updated Successfully.<a href='adminpanel.php'><font color='green'>Check Updated List Here</a>";
	}
	else
	{
	 echo "Record Not Updated.<a href='adminpanel.php'><font color='red'>Check Updated List Here</a>";	
	}
}
else
{
	echo "<font color='purple'>Click Update to Save Changes";
}

?>
<hr>
<!--Footer part-->
<footer class="footer"style="border:2px solid #e8491d;">

      
      <div style="text-align:center;float:left; margin:20px;padding:30px;">
	  <h3>Customer Service</h3>
	  <ul class="footer">
	  <p><a href="delivery.php">Delivery</a></p>
	  <p><a href="returns.php">Returns</a></p>
	  <p><a href="secureShopping.php">Secure Shopping</a></p>
	  <p><a href="faqs.php">FAQ's</a></p>
	  </ul>
      </div>
      
      
      <div class="footer"style="text-align:center;float:left; margin:20px;padding:30px">
	  <h3>Company Information</h3>
	  <ul class="footer">
	  <p><a href="aboutus.php">About Us</a></p>
	  <p><a href="contactus.php">Contact Us</a></p>
	  <p><a href="termsandconditions.php">Terms & Conditions</a></p>
	  <p><a href="cookie.php">Cookie Policy</a></p>
	  </ul>
      
      </div>
      
     
	  <div class="footer"style="text-align:center;float:left; margin:20px;padding:30px;">
	 <h3>Contact Information</h3>
	 <ul class="footer">
	  <p><li>Freephone: 01913483542</li></p>
	  <p><li>Lines open: Mon-Fri: 9am - 5pm</li></p>
	  <p><li>help@birdsfood.co.bd</li></p>
	  <p><li>ww.birdsfood.co.bd</li></p>
	  <p><li>Find us on Facebook</li></p>
	  </ul>
     
      </div>
	   <div class="footer"style="text-align:center;float:left; margin:20px;padding:30px;">
	  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ArccPCFHxRZ7DT6blEwE_insoXv8GbIQ" width="250" height="300"></iframe>
	  </div>

</footer>
 <!--ajax for search-->
   <script type="text/javascript">
    $(document).ready(function(){
		
		$("#search").keyup(function(){
		var searchText= $(this).val();
		if(searchText !=''){
			$.ajax({
				url: 'action.php',
				method:'post',
				data:{query:searchText},
				success:function(response){
					$("#show-list").html(response);
					
				}
		});
		}
		else{
			
			$("#show-list").html('');
		}
	});
	$(document).on('click','a',function(){
		$("#search").val($(this).text());
		$("#show-list").html('');
	});
	});
   </script>
</body>
</html>