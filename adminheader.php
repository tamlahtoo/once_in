		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.php">Admin <span>Panel</span></a>
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
								<li><a class="<?php if(basename($_SERVER['PHP_SELF'])=="adminhome.php"){echo('active');}; ?>" href="adminhome.php">Orders</a></li>
								<li><a class="<?php if(basename($_SERVER['PHP_SELF'])=="letter.php"){echo('active');}; ?>" href="letter.php">Letters</a></li>
															
								
								<li><a class="<?php if(basename($_SERVER['PHP_SELF'])=="blog.php"){echo('active');}; ?>" href="adminblog.php">Blog</a></li>
								<li><a class="<?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo('active');}; ?>" href="contact.php">Contact</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>