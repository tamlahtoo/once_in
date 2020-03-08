<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include 'config/database.php';

$sql = 'SELECT * FROM posts';

$result = mysqli_query($link, $sql);

$standards = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($standards as $item) {
		$created = date_parse($item['created_at']);
		$year =($created['year']);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Events Venue a Wedding Category Bootstrap responsive Website Template | Blog :: w3layouts</title>
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
		<div class="agileinfo-top-heading">
			<h2>Blog</h2>
		</div>
	</div>
	<!-- //banner -->
	<div class="blog">
			<div class="container">
				<!-- news -->
				<div class="w3layouts-news">
						<div class="agile-its-news-grid">
							<div class="col-md-8 w3ls-blog-left">
								<?php
								foreach ($standards as $item) {
									$created = $item['created_at'];
									$year =date("Y",strtotime($created));
									$day =date("d",strtotime($created));
									$month =date("F",strtotime($created));
									$text = $item['text'];



								?>
								<div class="w3-blog-left-grid">
									<div class="w3ls-blog-leftl">
										<h4><?php echo "$month"; ?> <span><?php echo "$day"; ?></span></h4>
										<a href="#"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><?php echo "$year"; ?> </a>
									</div>
									<div class="w3ls-blog-leftr">
										<a href="single.html"><img src="images/p1.jpg" alt=" " class="img-responsive" /></a>
										<p><?php echo substr($text, 0, 200); ?>.....</p>
										
										<br>
										<div class="more">
											<a href="single.html">Read More</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>

							<?php }
							?>
								
								
						<nav>
							<ul class="pagination page-blog">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">«</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">»</span>
									</a>
								</li>
							</ul>
						</nav>
							</div>
							<div class="col-md-4 w3-agile-blog-right">
								<h3>Categories</h3>
								<ul>
									<li><a href="#">Aliquam erat volutpat</a></li>
									<li><a href="#">Integer rutrum ante eu lacus</a></li>
									<li><a href="#">Cum sociis natoque penatibus</a></li>
									<li><a href="#">Mauris fermentum dictum magna</a></li>
									<li><a href="#">Sed laoreet aliquam leo</a></li>
									<li><a href="#">Cum sociis natoque penatibus</a></li>
								</ul>
								<div class="agile-info-recent">
									<h3>Recent Posts</h3>
									<div class="w3ls-recent-grids">
										<div class="w3l-recent-grid">
											<div class="wom">
												<a href="#"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
											</div>
											<div class="wom-right">
												<h4><a href="#">Integer rutrum ante eu</a></h4>
												<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
													Ut tellus dolor, dapibus eget.</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3l-recent-grid">
											<div class="wom">
												<a href="#"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
											</div>
											<div class="wom-right">
												<h4><a href="#">Integer rutrum ante eu</a></h4>
												<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
													Ut tellus dolor, dapibus eget.</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3l-recent-grid">
											<div class="wom">
												<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive" /></a>
											</div>
											<div class="wom-right">
												<h4><a href="#">Integer rutrum ante eu</a></h4>
												<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
													Ut tellus dolor, dapibus eget.</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="footer-top-grid1">
									<h3>Tags</h3>
									<ul class="w3-tag2">
										<li><a href="#">Wedding</a></li>
										<li><a href="#">Rings</a></li>
										<li><a href="#">Costumes</a></li>
										<li><a href="#">Dinner</a></li>
										<li><a href="#">Groomsman</a></li>
										<li><a href="#">Bridesmaid</a></li>
										<li><a href="#">Wedding</a></li>
										<li><a href="#">Rings</a></li>
										<li><a href="#">Costumes</a></li>
										<li><a href="#">Dinner</a></li>
										<li><a href="#">Groomsman</a></li>
										<li><a href="#">Bridesmaid</a></li>
										<li><a href="#">Wedding</a></li>
										<li><a href="#">Rings</a></li>
										<li><a href="#">Costumes</a></li>
										<li><a href="#">Dinner</a></li>
										<li><a href="#">Groomsman</a></li>
										<li><a href="#">Bridesmaid</a></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>
				<!-- //news -->
			</div>
		</div>
		<!-- // Blog -->
	<!-- footer -->
	<?php include 'includes/footer.php'?>	
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