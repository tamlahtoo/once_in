<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title >Once In A Life</title>
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
		<?php include 'includes/header.php'?>	

		<div class="w3layouts-banner-slider">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="agileits-banner-info">
									<h3>Enjoy <span>your best day ever</span></h3>
									<div class="w3-button">
										<a href="single.html">More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="agileits-banner-info">
									<h3>Create <span>your special day</span></h3>
									<div class="w3-button">
										<a href="single.html">More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	
	<!-- //banner-bottom -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="welcome-grids">
				<div class="col-md-6 w3ls-welcome-left">
					<div class="w3ls-welcome-left-img">
						
					</div>
				</div>
				<div class="col-md-6 w3ls-welcome-right">
					<div class="w3ls-welcome-right-info">
						<h2>Some Words <span>About Us</span></h2>
						<p class="one"> With the largest network of local wedding vendors, we offers the most comprehensive wedding site out there. You will be able to find the best vendor for your budget and plan your wedding exactly the way you envisioned it. We make it simple to get the pricing, availability, and answers you need from wedding venues and wedding vendors across every town.

In addition to the wedding industry’s best and brightest wedding vendors, we offers free, easy-to-use wedding planning tools like customizable wedding checklists to keep your tasks in order.

Meanwhile, our dedicated team of editors provides you with the very best wedding ideas and curated wedding photos filled with inspiration to help you choose between florists, photographers and wedding venues when you start planning the details. We will help turn your vision into a reality!</span></p>
					</div>
					<div class="agileits-border">
						<div class="agileinfo-red"> </div>
						<div class="agileinfo-red agileinfo-green"> </div>
						<div class="agileinfo-red agileinfo-blue"> </div>
						<div class="agileinfo-red agileinfo-yellow"> </div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3-agileits-heading">
				<h3>Best <span>Services</span></h3>
			</div>
			<div class="wthree-services-grids">
				<div class="col-md-4 w3-agileits-services-grid">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					<h4>Customize</h4>
					<p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur volutpat.</p>
				</div>
				<div class="col-md-4 w3-agileits-services-grid agile-services1">
					<i class="fa fa-comments" aria-hidden="true"></i>
					<h4>Best Reviews</h4>
					<p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur volutpat.</p>
				</div>
				<div class="col-md-4 w3-agileits-services-grid">
					<i class="fa fa-heart" aria-hidden="true"></i>
					<h4>Loving Facilities</h4>
					<p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur volutpat.</p>
				</div>
				<div class="col-md-4 w3-agileits-services-grid">
					<i class="fa fa-plane" aria-hidden="true"></i>
					<h4>Travel</h4>
					<p>Make your wedding at your dream destinati.</p>
				</div>
				<div class="col-md-4 w3-agileits-services-grid agile-services2">
					<i class="fa fa-paper-plane" aria-hidden="true"></i>
					<h4>Lifetime Memories</h4>
					<p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur volutpat.</p>
				</div>
				<div class="col-md-4 w3-agileits-services-grid">
					<i class="fa fa-road" aria-hidden="true"></i>
					<h4>Quisque a rhoncus tortor</h4>
					<p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur volutpat.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- posts -->
	<div class="posts">
		<div class="container">
			<div class="w3-agileits-heading">
				<h3>Recent <span>Posts</span></h3>
			</div>
			<div class="posts-grids">
				<div class="col-md-4 w3-agile-post-grids">
					<div class="w3-agile-post-img">
						<a href="single.html"> 
							<ul>
								<li>Sept</li>
								<li>24</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="single.html">Quisque a rhoncus tortor</a></h4>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="col-md-4 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img1">
						<a href="single.html"> 
							<ul>
								<li>Oct</li>
								<li>06</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="single.html">Suspendisse in nisl at ipsum</a></h4>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="col-md-4 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img2">
						<a href="single.html"> 
							<ul>
								<li>Nov</li>
								<li>17</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="single.html">Mauris pellentesque ultricies</a></h4>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //posts -->
	<!-- footer -->
<!-- 	<footer>
		<div class="agileits-w3layouts-footer-top">
			<div class="container">
				<div class="col-md-6 agileits-w3layouts-footer-top-left">
					<p><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 8901</p>
				</div>
				<div class="col-md-6 agileits-w3layouts-footer-top-left">
					<p><i class="fa fa-envelope" aria-hidden="true"></i> Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="agileits-footer-bottom">
			<div class="container">
				<div class="agileits-footer-bottom-grids">
					<div class="col-md-6 footer-bottom-left">
						<h5>About Us</h5>
						<div class="footer-img-grids">
							<div class="footer-img">
								<img src="images/f1.jpg" alt="" />
							</div>
							<div class="footer-img-info">
								<p>Suspendisse potenti. Pellentesque pulvinar tellus at est ullamcorper, at elementum nibh laoreet. Nunc id diam in nulla sollicitudin auctor. Donec elementum felis turpis, vel interdum libero congue non. Mauris non magna convallis</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-3 footer-bottom-right">
						<h5>Newsletter</h5>
						<p>Maecenas volutpat arcu at massa lacinia, ut interdum lorem venenatis.</p>
						<form action="#" method="post">
							<input type="text" placeholder="Subscribe" name="Subscribe" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="col-md-3 footer-bottom-right">
						<h5>We are social</h5>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<p>© 2017 Events Venue. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</footer> -->
	<?php include 'includes/footer.php'?>			
	<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
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