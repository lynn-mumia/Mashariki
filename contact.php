<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eteina Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Alegreya:400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<?php
   require("php/contactvalidation.php");
?>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="wthree_logo">
				    <h1><a class="navbar-brand" href="index.html"><strong>Eteina</strong></a></h1>
					</div>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="index.html" data-hover="Home" style="color:#FF8C00">Home</a></li>
							<li><a href="about.html" data-hover="About Us" style="color:#FF8C00">About us</a></li>
							<li><a href="seedlings.html" data-hover="Seedlings" style="color:#FF8C00">Seedlings</a></li>
							<li><a href="farm.html" data-hover="Services" style="color:#FF8C00">Services</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Resources" style="color:#FF8C00">Resources <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="guides.html">Farming guides</a></li>
									<li><a href="stories.html">Farming Stories</a></li>
									<li><a href="careers.html">Careers</a></li>
								</ul>
							</li>
							<li class="active"><a href="contact.php" data-hover="Contact Us" style="color:#FF8C00">Contact Us</a></li>
						</ul>
						<div class="w3_social_icons">
							<ul class="w3layouts_social">	
								<li><a href="http://www.facebook.com/Eteinaraisers/" class="w3l_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3l_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="http://www.instagram.com/eteina.fa/" class="w3l_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->

<!-- mail -->
	<div class="mail">
		<div class="container">
			<div class="agileits_w3layouts_mail">
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="w3_agileits_mail_left">
						<h4><i class="fa fa-home" aria-hidden="true"></i>Address</h4>
						<p class="wthree_address">P.O Box 79697, Athi River, 00200. Machakos County, Kenya.</p>
					</div>
				</div>
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="w3_agileits_mail_left">
						<h4><i class="fa fa-envelope" aria-hidden="true"></i>Email</h4>
						<div class="w3_agileits_mail_left1">
							<a href="http://info@eteina.co.ke">info@eteina.co.ke</a>
							<a href="http://farm.eteina.co.ke">web: farm.eteina.co.ke</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="w3_agileits_mail_left">
						<h4><i class="fa fa-phone" aria-hidden="true"></i>Call Us</h4>
						<div class="w3_agileits_mail_left1">
							<p class="agileinfo_para"> +254 799 087 083 / +254 714 350 016</p>
							<p class="agileinfo_para">+254 722 907 203</p>
							
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<h3 class="agileits_head">Contact Us To Place Your Order</h3>
	
			<div class="w3_agile_mail_grids">	
				<form action="contact.php" method="post">
					<div class="col-md-6 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-25" name="name" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " name="email" required="" />
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " name="phone"  required="" />
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
							</label>
						</span>
						<span class="input input--ichiro">
								<input class="input__field input__field--ichiro" type="text" id="input-28" placeholder=" " name="crop"  required="" />
								<label class="input__label input__label--ichiro" for="input-28">
									<span class="input__label-content input__label-content--ichiro">Crop</span>
								</label>
							</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-29" placeholder=" " name="variety"  required="" />
							<label class="input__label input__label--ichiro" for="input-29">
								<span class="input__label-content input__label-content--ichiro">Variety</span>
							</label>
						</span>
						<span class="input input--ichiro">
								<input class="input__field input__field--ichiro" type="text" id="input-30" placeholder=" " name="quantity"  required="" />
								<label class="input__label input__label--ichiro" for="input-30">
									<span class="input__label-content input__label-content--ichiro">Quantity</span>
								</label>
						</span>
						</div>
					    <div class=" col-md-6 w3_agile_mail_grid">
					    <span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-31" placeholder=" " name="location" required="" />
							<label class="input__label input__label--ichiro" for="input-31">
								<span class="input__label-content input__label-content--ichiro">Farm Location</span>
							</label>
						</span>
					    <span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-32" placeholder=" " name="date" required="" />
							<label class="input__label input__label--ichiro" for="input-31">
								<span class="input__label-content input__label-content--ichiro">Date</span>
							</label>
						</span>
						<textarea name="Message" placeholder="Your message here..."  required=""></textarea>
						<input type="submit" value="Submit" name="submit" onclick="submitDetails()">
					    </div>                   		
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
<!-- //mail -->

   <?php
		if($_POST['submit']){
			$recipient="marketing@eteina.co.ke";
		    $subject="New Order placed from Website";
		    $sender=$_POST["name"];
		    $senderEmail=$_POST["email"];
		    $phone=$_POST["phone"];
		    $crop=$_POST["crop"];
		    $variety=$_POST["variety"];
		    $quantity=$_POST['quantity'];
		    $location=$_POST['location'];
		    $date=$_POST["date"];
            $message=$_POST["Message"];
		    $mailBody="Name: $sender\nEmail: $senderEmail\n\nPhoneNumber: $phone\nCrop: $crop
		    \nVariety: $variety\nQuantity: $quantity\nFarm Location: $location\nDate: $date\nMessage: $message";
		    
		    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

		    $thankYou="<p>Thank you! Your message has been sent.</p>";
			}
	?>


<!-- footer -->
	<div class="footer">
		<div class="container"> 
			<div class="clearfix"> </div>
			<div class="w3layouts_footer_grid">
				<div class="w3layouts_footer_grid_left">
					<h2><a href="index.html" style="font-family: mistral;">....we care from the start</a></h2>
				</div>
				<div class="w3layouts_footer_grid_right">
					<p>© 2017 Eteina. All rights reserved | Design by <a href="http://www.facebook.com/MasharikiAdz/">The Mashariki Adverts</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
<!-- //footer -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>