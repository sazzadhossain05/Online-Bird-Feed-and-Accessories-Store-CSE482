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

h3,h1{
	
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
<section class="termsandconditions">

<h1>Terms & Conditions</h1>

<p>All products are subject to availability.<p>

<p>All promotional offers cannot be used in conjunction with any other offer from Bird's Food.</p>

<p>Bird's Food will accept payment by most major credit and debit cards. Payment will be taken from your account at the time of ordering.</p>

<p>All credit/debit card payments are subject to validation checks and authorisation by the card issuer. 
If the issuer of your payment card refuses to authorise payment to us, we will not be liable for any delay or non–delivery.</p>

<p>Your order will be carefully packed and despatched by either courier or first class post to any  address. 
Please allow up to three working days for orders to be delivered from time of ordering.</p>

<p>Unfortunately, Bird's Food is unable to deliver to PO Box numbers.</p>

<p>If possible we suggest that you obtain the full postal address before ordering.
 However, we cannot accept responsibility, on the rare occasions, if your order is not delivered by VIP mail or our courier service.</p>

<p>Bird's Food cannot be held liable for incorrectly provided recipient's addresses.</p>

<p>Your statutory rights are not affected.</p>

<p>We pack some sizes of bag including our 5kg bags at the point of purchase.
 Unfortunately this can sometimes add an extra to the time taken to dispatch your order.</p>

<p>Please see our Guarantee Information page</p>

<p>Please refer to our delivery section for terms specific to our deliveries.</p>

 
<h2>Competitions</h2>

<p>We run competitions periodically. The below terms and conditions set out your rights when you participate:</p>

<p>- All prizes are as stated, non-transferable and have no cash value.</p>

<p>- If you send us your photos for any reason (not just competitions), you agree that we may use these in our marketing materials.
 Where appropriate and at our discretion, we will give credit to the photographer.</p>

<p>- Winners have 30 days to claim their prize from when we first attempt contact. We will do our utmost to contact the winners using the details provided.</p>

<p>- While we do not anticipate needing to, we reserve the right to alter the prize at any time.</p>

<p>- We do not offer exchanges for prizes, nor do we offer a cash alternative.</p>

<p>- Please refer to the marketing material for any additional terms and conditions relating to that competition 
(e.g. if its a competition, check the email for additional terms).</p>

 
<h2>Discounts</h2>

<p>- Discounts are as specified in the marketing material associated with them.</p>

<p>- Offers, discount codes and free gifts cannot be added to an order after you have placed it. 
Please make sure you have entered any discount codes before you place an order.</p>

<p>- Please double check before you pay that your free gift and basket are as you expected them to be.
 For example if you successfully add a discount voucher to your order, then alter your order, your basket may change and you could lose your discount code.</p>

<p>- Promotional offers/discount codes cannot be used in conjunction with any other offer unless specified otherwise on the marketing material. 
If you have multiple discount codes, it is up to you which one you want to use.</p>

<p>- We reserve the right to withdraw an offer at any time, although we will try and avoid this</p>

<p>- We reserve the right to alter the discount or gift at any time. Again we will try and avoid this if we can.</p>

<p>- All discount codes are single use unless we specifically specify a quantity.</p>

<p>- The welcome offer is limited to one per customer/household. You must log in or create an account to use this offer. 
The code cannot be used on sale items or during sales (e.g. black friday).</p>

<p>- We reserve the right to prevent certain offers from being used alongside other offers. 
For example discount codes cannot be used with refer a friend of reward points.</p>

<p>- We reserve the right to cancel any order found to be abusing our vouchers. i.e. using discount vouchers to get more
 than intended off the purchase price. Whilst we do everything we can to avoid this, we do reserve this right to protect our business.</p>

<p>- All offers have a specified time frame on them. We cannot accept offer codes after the expiration time - even just a few minutes past.</p>



 
<h2>Reward Points</h2>

<p>- Reward Points expire 1 year after earning. We will notify you by email 30 days before to give you an opportunity to spend points before they expire.</p>

<p>- There is no cash alternative. The points do not, at any time become equivalent to cash.</p>

<p>- Discounts cannot be redeemed retrospectively after you have made a purchase - please ensure 
you are logged in to your account in order to redeem your points at the checkout.</p>

<p>- We reserve the right to prevent certain offers and discount codes being used alongside reward points.</p>

<p>- We reserve the right to amend the terms and conditions, including withdrawal of this scheme at any time without notice or recompense.</p>

<p>- We reserve the right to remove items on promotion, in a sale or discounted from the Reward Points scheme.</p>

<p>- We reserve the right to withdraw a members reward points at our discretion. This will only be done in extreme circumstances
(for example if a member is found to be abusing the scheme or any other aspect of our site not necessarily related to reward points).</p>



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