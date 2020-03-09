	<!--A Design by W3layouts
	Author: W3layout
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include 'config/database.php';

$sql = 'SELECT * FROM gown where package ="standard"' ;
$sql1 = 'SELECT * FROM suit where package ="standard"' ;
$sql2 = 'SELECT * FROM room where package ="standard"' ;
$sql3 = 'SELECT * FROM floral where package ="standard"' ;

$result = mysqli_query($link, $sql);
$result1 = mysqli_query($link, $sql1);
$result2 = mysqli_query($link, $sql2);
$result3 = mysqli_query($link, $sql3);

$gowns = mysqli_fetch_all($result, MYSQLI_ASSOC);
$suits = mysqli_fetch_all($result1, MYSQLI_ASSOC);
$rooms = mysqli_fetch_all($result2, MYSQLI_ASSOC);
$florals = mysqli_fetch_all($result3, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Events Venue a Wedding Category Bootstrap responsive Website Template | Icons :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Events Venue Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- font -->
	<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.php">Events <span>Venue</span></a>
						</h1>
					</div>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li class=""><a class="active" href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="active hvr-bounce-to-bottom" href="standard.php">Standard Package</a></li>
										<li><a class="hvr-bounce-to-bottom" href="premium.php">Premium Package</a></li>          
									</ul>
								</li>								
								<li><a href="gallery.php">Jewelery</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="agileinfo-top-heading">
			<h2>Standard Package</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- icons -->
	<div class="codes icons main-grid-border">
		<div class="container"> 
			<div class="grid_3 grid_4 w3_agileits_icons_page">
				<div class="icons">
					<!-- //still adduser.php -->
							<!-- 	<div id="popup">
									<h3>Record added successfully</h3>
								</div> -->
								<form action="config/db_standard.php" method="post">

									<!-- where gown start -->
									<section id="new">														  
										<div class="row fontawesome-icon-list">
											<h2 style="text-align: center;" class="page-header page-header icon-subheading">Gown</h2>	
											<?php foreach ($gowns as $gown) {?>
											<div style="-webkit-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);margin-top:40px;margin-left: 2%;margin-right: 14%;position: relative;float: left;width: 150px;text-align: center;background-color: gray;height: 350px;width: 200px">
												
												

													<img style="height: 300px;width: 100%" src="<?php echo($gown['image_link']);?>"  >
													<div style="height: 500px;color: pink;width: 100%">
														<label ><input style="margin-top: 10px;margin-right: 20px" type="radio" name="gown" value="<?php echo($gown['id']);?>" checked>
															<p style="position: relative;float: left;color: white;margin-top: 6px;">  <?php echo($gown['text']);?></p></label>
														</div>
													</div>

												<?php } ?>						
											</section>

											<!-- This is where the suit start -->
											<section id="new">														  
										<div class="row fontawesome-icon-list">
											<h2 style="text-align: center;" class="page-header page-header icon-subheading">Gown</h2>	
											<?php foreach ($suits as $suit) {?>
											<div style="-webkit-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);margin-top:40px;margin-left: 2%;margin-right: 14%;position: relative;float: left;width: 150px;text-align: center;background-color: gray;height: 350px;width: 200px">
												
												

													<img style="height: 300px;width: 100%" src="<?php echo($suit['image_link']);?>"  >
													<div style="height: 500px;color: pink;width: 100%">
														<label ><input style="margin-top: 10px;margin-right: 20px" type="radio" name="suit" value="<?php echo($suit['id']);?>" checked>
															<p style="position: relative;float: left;color: white;margin-top: 6px;">  <?php echo($suit['text']);?></p></label>
														</div>
													</div>

												<?php } ?>						
											</section>

											<!-- This is room start -->

											<section id="new">														  
										<div class="row fontawesome-icon-list">
											<h2 style="text-align: center;" class="page-header page-header icon-subheading">Ballrooms</h2>	
											<?php foreach ($rooms as $room) {?>
											<div style="-webkit-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);margin-top:40px;margin-left: 2%;margin-right: 14%;position: relative;float: left;width: 150px;text-align: center;background-color: gray;height: 350px;width: 200px">
												
												

													<img style="height: 300px;width: 100%" src="<?php echo($room['image_link']);?>"  >
													<div style="height: 500px;color: pink;width: 100%">
														<label ><input style="margin-top: 10px;margin-right: 20px" type="radio" name="room" value="<?php echo($room['id']);?>" checked>
															<p style="position: relative;float: left;color: white;margin-top: 6px;">  <?php echo($room['text']);?></p></label>
														</div>
													</div>

												<?php } ?>						
											</section>

											<!-- this is floral start -->

											<section id="new">														  
										<div class="row fontawesome-icon-list">
											<h2 style="text-align: center;" class="page-header page-header icon-subheading">Ballrooms</h2>	
											<?php foreach ($florals as $floral) {?>
											<div style="-webkit-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);
box-shadow: -1px 12px 32px -4px rgba(0,0,0,0.75);margin-top:40px;margin-left: 2%;margin-right: 14%;position: relative;float: left;width: 150px;text-align: center;background-color: gray;height: 350px;width: 200px">
												
												

													<img style="height: 300px;width: 100%" src="<?php echo($floral['image_link']);?>"  >
													<div style="height: 500px;color: pink;width: 100%">
														<label ><input style="margin-top: 10px;margin-right: 20px" type="radio" name="floral" value="<?php echo($floral['id']);?>" checked>
															<p style="position: relative;float: left;color: white;margin-top: 6px;">  <?php echo($floral['text']);?></p></label>
														</div>
													</div>

												<?php } ?>						
											</section>


											<!-- Floral ends -->


											<section id="new">
												<h3 class="page-header page-header icon-subheading">Guests Numbers</h3>							  

												<div class="row fontawesome-icon-list">
													<select id="cars" name="guest" style="height: 40px;width: 200px;color: gray">
														<option value="50">50</option>
														<option value="100">100</option>
														<option value="150">150</option>
														<option value="200">200</option>
													</select>
												</div>

											</section>
											<h3 class="page-header page-header icon-subheading">Photography</h3>
											<p>Photography of 100 pictures Included</p>		
											<section id="new">
												<h3 class="page-header page-header icon-subheading">Choose Date</h3>							  

												<div class="row fontawesome-icon-list">
													<input type="date" name="date">
												</div>

											</section>	

											<section id="new">
												<h3 class="page-header page-header icon-subheading">Your Info</h3>
												<div class="agileinfo-contact-form-grid" style="width: 300px">
													<input type="text" name="name" placeholder="Name" required="">
													<input type="text" name="phone" placeholder="Phone" required="">
												</div>


											</section>

											<div style="height: 200px"></div>								
											<button class="btn1" >Book</button>
										</form>

									</div>
								</div>


							</div>	
						</div>
						<!-- //icons -->
						<!-- footer -->

						<!-- //footer -->
						<script src="js/SmoothScroll.min.js"></script>
						<script type="text/javascript" src="js/move-top.js"></script>
						<script type="text/javascript" src="js/easing.js"></script>
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