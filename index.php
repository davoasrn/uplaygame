<!DOCTYPE HTML>
<!--
	Verti 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>UPlanIt - Home</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="UPlanIt" />
		<meta name="keywords" content="UPlanIt" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,800" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Oleo+Script:400" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
		<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->		
	</head>
	<body>

		
        <?php 
		require_once("blocks/header.php"); 
		?>
        
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							<!-- Main -->
								<div id="main" class="box">
									
									<div class="row">
										<div class="12u">
											<div class="map-info">
												<span id="location">Budapest, Hungary |</span>
												<span id="plans">103 Plans by</span>
												<span id="users">89 Users</span>
												<a href="" id="create_new">Create new</a>
											</div> 
										</div>
									</div>
									
									<div class="row">
										<div class="12u">
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6094.053522657117!2d44.46823973851035!3d40.20846765272215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1391293438646" width="100%" height="590" frameborder="0" style="border:0"></iframe>
										</div>									
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		<!-- Features Wrapper -->
			<div id="features-wrapper">
				<div class="container">
					<div class="row">
						<div class="4u">
						
							<!-- Box -->
								<section class="box box-feature">
									<div class="outer">
										<header>
											<h2 class="outer-orange">How to use website and why</h2>
										</header>
										<img src="images/player.png">
									</div>
								</section>

						</div>
						<div class="4u">
						
							<!-- Box -->
								<section class="box box-feature">
									<div class="outer">
										<header>
											<h2 class="outer-green">Our success examples</h2>
										</header>
										<ul class="left outer-list">
											<li>
												<span id="user-name" class="user-name">Mike</span> has success with <span id="map-number" class="map-number">Map 153</span>
											</li>
											<li>
												<span id="user-name" class="user-name">Gregory</span> has success with <span id="map-number" class="map-number">Map 12</span>
											</li>
											<li>
												<span id="user-name" class="user-name">Andreas</span> has success with <span id="map-number" class="map-number">Map 23</span>
											</li>
											<li>
												<span id="user-name" class="user-name">Armen</span> has success with <span id="map-number" class="map-number">Map 19</span>
											</li>
											<li>
												<span id="user-name" class="user-name">Igor</span> has success with <span id="map-number" class="map-number">Map 35</span>
											</li>
										</ul>
									</div>
								</section>

						</div>
						<div class="4u">
						
							<!-- Box -->
								<section class="box box-feature">
									<div class="outer">
										<header>
											<h2 class="outer-purple">Organizations working here</h2>
										</header>
										<img src="images/organizations.png">
									</div>
								</section>

						</div>
					</div>
				</div>
			</div>

		<!-- Banner Wrapper -->
			<div id="banner-wrapper">
				<div class="container">
					<div class="row">
						<div class="4u">
						</div>
						<div class="8u">
						</div>
					</div>
				</div>
			</div>

		<?php 
		require_once("blocks/footer.php");
		?>

	</body>
</html>