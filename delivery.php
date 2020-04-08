<?php
session_start();
error_reporting(0);
include("connection.php");
/*echo " ".$_SESSION['user_name'];*/
$userprofile=$_SESSION['user_name'];
$query="SELECT * FROM  registration WHERE username='$userprofile'";
$data =mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
/*echo " Welcome ".$result['firstname'];*/
?>
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
 <script src="js/store.js"></script>

 <style>
.reg {
  max-width: 500px;
  margin: auto;
}

h3{
	
	list-style-type: none;
	color:#e8491d;

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

<hr/>

 <section class="about">
 <h1 class="about1">Delivery is FREE on all orders over 500 Dollar</h1>

<h2 class="about2">Orders under 500 Dollar incur a delivery charge of 99 Dollar<h2>
<br/><br/>
<h3 class="about3">Good To Know</h3>
<ul>
    <li><h3>Same Day Despatch :</h3></li><p>If you order before 2pm, your order will be shipped the same day by 24 hour courier or first class post. 
	In some cases, you may receive your order the next working day,
	however it can take 24-72 hours for some areas and during the busier times of the year. 
	Please note no deliveries are made on a weekend and all delivery timescales refer to working days (Monday to Friday).</p>
    <li><h3>Delivery Timeframes :</h3></li><p>If you order at 1pm on Monday, you can expect to receive your order on Tuesday or Wednesday. 
	If you order after 2pm on Monday, you can expect to receive your order on Wednesday or Thursday.
    <li><h3>Out of Areas Deliveries:</h3></li><p>Unlike a lot of companies, we deliver to Northern Ireland, Scottish Highlands and Islands,
	Isle of Man and outlying areas at no extra cost to you. Due to geographical location, deliveries to these locations will
	take a little longer. Please note that delivery times and methods may vary to these locations 
	(e.g. the 'Signed For' delivery option isn't available in certain locations).</p>
    <li><h3>Small Items:</h3></li><p> For smaller items, delivery options may vary. For example, the 'Leave Safe' delivery option may not be available.</p>
    <li><h3>Signed For/Leave Safe:</h3></li><p> DPD offer 'Signed For' and 'Leave Safe' options. You'll need to be in for 'Signed For'
	deliveries and DPD will leave your parcel in your safe place with the 'Leave Safe' delivery. You can set your leave safe 
	location via their app or via the email they send you the day before your delivery.</p>
    <li><h3>Item Availability:</h3></li><p>If for any reason part of your order is unavailable within the delivery timescales, 
	we will ship all available items and send the unavailable item as soon as possible.</p>
   <li><h3> Package Weights:</h3></li><p>Our boxes are shipped in weights of up to 30kg. If you are unable to carry this much,
   please ask a neighbour or family member for help, or consider opening the box and taking the items out one at a time to move.</p>
    <li><h3>Delivery Notifications:</h3></li><p>The delivery company will email you the day before your parcel is sent out to let you know. 
	They may offer options in the email to have your order redelivered, 
	delivered to a neighbour and more options (depending on the courier and the delivery method you have chosen).</p>
   <li> <h3>International Deliveries:</h3></li><p>We do not currently offer deliveries abroad.</p>
</ul>
 
<h3>DPD Delivery Options:</h3>

<p>DPD offer two options for delivery, the biggest difference being whether or not you need to be in for the delivery.</p>

<b>Leave Safe Delivery Option:</b><p>Select 'Leave Safe' if you think you won't be in when the parcel arrives. 
You must provide instructions when DPD email you with your delivery confirmation, 
which is sent to you both the day before and in the morning on the day of delivery.
 If you do not provide leave safe instructions, then the driver will leave your parcel at their discretion. 
 By nominating a safe place, you accept responsibility once it is left at your property.</p>

<b>Signed For Delivery Option:</b><p> The driver will attempt to hand you the parcel.
 If you aren't in, you can provide instructions via the links in the delivery confirmation email DPD will send you both the day 
 before your delivery and on the morning of your delivery. You can also provide instructions via the DPD app.</p>


 
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