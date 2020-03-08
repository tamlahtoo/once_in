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

<?php
		include 'includes/header.php';
		if(isset($_SESSION['suname']))
		{
			header("Location: http://localhost/happy-wedding/index.php");
		}
		
?>
	<div class="col-md-10" style="background: url('images/8.jpg') no-repeat;background-size: 100%;min-height:570px;">
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<center>
		<form action="admin/adminLoginHandler.php" name="reg" onSubmit="return validate()">
			<p><input type="text" required name="uname" style="color:black;font-weight:bold;" placeholder="Username or Email"></p>
			<p><input type="password" required name="pass" style="color:black;font-weight:bold;" placeholder="Password"></p>
			<p class="remember_me">
			<a href="register.php" style="color:red;">
			  <label>
					don't have an account
			  </label>
			 </a>
			</p>
			<p class="submit"><input class="btn btn1" type="submit" name="commit" style="color:black;font-weight:bold;" value="Admin Login"></p>
		</form>
	  </center>
	</div>
	</div>
<?php include 'includes/footer.php'?>

</body>
</html>
