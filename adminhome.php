<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'config/database.php';

$sql = 'SELECT * FROM standard';

$result = mysqli_query($link, $sql);

$standards = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql1 = 'SELECT * FROM premium';
$result2 = mysqli_query($link, $sql1);
$premiums = mysqli_fetch_all($result2, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Events Venue a Wedding Category Bootstrap responsive Website Template | About :: w3layouts</title>
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
		<?php include 'adminheader.php'?>	

	</div>
	<!-- //banner -->
	<div>
		<h4>
			<div class="container">
				<div class="row">
					<div class="col s6 md3">
						<div class="card z-depth 0">
							<div style="width: 100%;padding-left:20%;padding-top: 6%;padding-right: 20%;padding-bottom: 6%">
								<section id="new">
									<h1 style="color: #F44336">Standard Orders</h1>
								</section>
								<form action="config/deletestandard.php" method="POST">
									<table style="width:100%">
										<tr>
											<th></th>
											<th>id</th>
											<th>Gown</th>
											<th>room</th>
											<th>floral</th>
											<th>guest</th>
											<th>date</th>
										</tr>
										<?php
										foreach ($standards as $item) {
											?>



											<tr style="margin-top: 20px">
												<td><input type="checkbox"  name="checkbox[]" value="<?php echo $item['id'];?>"></td>
												<td><?php echo$item['id'];?></td>
												<td><?php echo$item['gown'];?></td>
												<td><?php echo$item['room'];?></td>
												<td><?php echo$item['floral'];?></td>
												<td><?php echo$item['guest'];?></td>
												<td><?php echo$item['date'];?></td>
											</tr>


											<?php	
										}
										?>


									</table>
									<button class="btn1" >Delete</button>
								</form>
								<br><br> 
								<section id="new">
									<h1 style="color: #F44336">Premium Orders</h1>

									<form action="config/deletepremium.php" method="POST">
									</section>


									<table style="width:100%">
										<tr>
											<th></th>
											<th>id</th>
											<th>Gown</th>
											<th>room</th>
											<th>floral</th>
											<th>guest</th>
											<th>date</th>
										</tr>
										<?php
										foreach ($premiums as $item) {
											?>



											<tr style="margin-top: 20px">
												<td><input type="checkbox"  name="checkbox[]" value="<?php echo $item['id'];?>"></td>
												<td><?php echo$item['id'];?></td>
												<td><?php echo$item['gown'];?></td>
												<td><?php echo$item['room'];?></td>
												<td><?php echo$item['floral'];?></td>
												<td><?php echo$item['guest'];?></td>
												<td><?php echo$item['date'];?></td>
											</tr>


											<?php	
										}
										?>

									</table>
									<button class="btn1" >Delete</button>
								</form>


							</div>


						</div>

					</div>
				</div>

			</div>


		</h4>
	</div>
</div>
<!-- //team -->
<!-- //about -->
<!-- footer -->

<!-- //footer -->
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