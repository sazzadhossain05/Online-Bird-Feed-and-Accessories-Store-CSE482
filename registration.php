<!DOCTYPE html>
<html lang="en">
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
.reg {
  max-width: 500px;
  margin: auto;
}

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
	<section style="background-color:powderblue;">
	<h1 style="text-align:center;">Registration</h1>
	
	<form method="POST"action="registrationquery.php" class="reg">
<table >
	<tr>
		<td>Username</td>
	    <td><input type="text" name="uname" value="" ></td>
	</tr>
	
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="" ></td>
	</tr>
	
	<tr>
		<td>Password</td>
	    <td><input type="password" name="pass" value="" ></td>
	</tr>
	<tr>
		<td>Repeat Password</td>
		<td><input type="password" name="repeat_pass" value="" ></td>
	</tr>
	<tr>
		<td>First Name</td>
	    <td><input type="text" name="first_name" value="" ></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="last_name"value=""  ></td>
	</tr>
	<tr>
		<td>Phone</td>
	    <td><input type="number" name="phone"value=""  ></td>
	</tr>
	<tr>
		<td>Street</td>
		<td><input type="text" name="street" value="" ></td>
	</tr>
	<tr>
		<td>City</td>
	    <td><input type="text" name="city" value="" ></td>
	</tr>
	<tr>
		<td>State</td>
		<td><input type="text" name="state" value=""  ></td>
	</tr>
	<tr>
		<td>Zipcode</td>
	    <td><input type="number" name="zip"value=""  ></td>
	</tr>
	<tr>
		<td>Country</td>
		<td><input type="text" name="country" value="" ></td>
	</tr>
	
</table>
<input type="submit" class="button_2"name="submit" >
<button class="button_2 " type="button" ><a href="login.php" style="text-decoration:none;color:white">Login</a></button>
<button class="button_2" type="button" ><a href="cart.php" style="text-decoration:none;color:white">Basket</a></button>
</form>

</section>



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