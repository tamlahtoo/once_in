<!-- <?php
include 'config/database.php';

$sql = 'SELECT * FROM posts order by id desc';

$result = mysqli_query($link, $sql);

$standards = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($standards as $item) {
	$created = date_parse($item['created_at']);
	$year =($created['year']);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<div class="banner">
		<?php include 'adminheader.php'?>	
	</div>

	<div style="padding-top: 50px" class="container">
		<div class="col-md-6 contact-form-left">
			<?php
			foreach ($standards as $item) {
				$created = $item['created_at'];
				$year =date("Y",strtotime($created));
				$day =date("d",strtotime($created));
				$month =date("F",strtotime($created));
				$text = $item['text'];
				$title = $item['title'];
				$image = $item['image'];




				?>
				<div  class="w3-blog-left-grid">

					<div class="w3ls-blog-leftr">
						<h3><?php echo "$title"; ?></h3>
						<a href="single.php"><img src="<?php echo "images/$image" ?>" alt=" " class="img-responsive" /></a>
						<p><?php echo substr($text, 0, 200); ?>.....</p>

						<br>
						<div class="more">
							<a href="single.php">Read More</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

			<?php }
			?>
		</div>
		<div  style="margin-left: 100px;width: 400px" class="col-md-6 contact-form-right">
			<div class="contact-form-top">
				<h3>Send us a message</h3>
			</div>
			<div class="agileinfo-contact-form-grid">
				<form action="config/admin_post.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">
					<div>
						<input type="file" name="image">
					</div>
					<h4>Tags</h4>

					<select ="hi" id="cars" name="tag" style="height: 40px;width: 200px;color: gray">
						<option value="50">Rings</option>
						<option value="100">Dinner</option>
						<option value="150">Costumes</option>
						<option value="200">Groomsman</option>
					</select>
					<br><br>
					<input type="text" name="title">
					<textarea name="text" placeholder="Write post" required=""></textarea>
					<button class="btn1" >Post</button>
				</form>
			</div>
		</div>

	</div>
	

</body>
</html>

 -->
