<?php 
require("blocks/baza.php");
?>

<!DOCTYPE HTML>
<!--
	Verti 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Partners</title>
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
							<div class="map-info" style="text-align:center">
								<span id="user_count">76</span>
								<span id="user_count_text">users have made their plans for this area</span>
								<nav id="sort_by">
									<ul>
										<li><a href="">DATE</a></li>
										<li id="sort_active"><a href="">POPULARITY</a></li>
										<li><a href="">COMMENTS</a></li>
										<li><a href="">EDITOR</a></li>
									</ul>
									<span>Sort by:</span>
								</nav>
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="1u" style="width:12%; padding-left:0px;">		
							<!-- Box -->
							<section class="box box-feature">
								<div class="user_avatars">
									<a href="" id="gov" class="gov"><img src="images/gov.png"></a>
								</div>
							</section>																	
						</div>					
							
						
                         <?php 
								$zapros = mysql_query("SELECT * FROM partners");
								$part = mysql_fetch_array($zapros);
								do 
								{
									?>
                        
                        <div class="new3u">								
							<!-- Box -->
								<section class="box box-feature">
									<div class="user_avatars">
										<a href="<?php echo $part['website'] ?>">
                                        <img src="<?php echo $part['pic'] ?>" id="avatar_3" class="avatar_image">
                                        </a>
										<div class="user_description">
											<span class="user_descripton_name" id="user_descripton_name"><?php echo $part['name'] ?></span>
											<br/>	
											<span class="user_descripton_map" id="user_descripton_map">Map ID: <?php echo $part['area_id'] ?></span>
										</div>
									</div>
								</section>
                                </div>	
                                 <?php     
                                }
									
								while($part = mysql_fetch_array($zapros));
								?>
							
											
					</div>
					<div class="row">
						<div class="12u">
							<div class="pagination" style="text-align:center">
								<nav id="pagination-results">
									<span>Page</span>
									<ul>
										<li><a href="#">1</a></li>
										<li id="pagination_active"><a href="#">2</a></li>
										<li><a href="#">...</a></li>
										<li><a href="#">7</a></li>
									</ul>
								</nav>
							</div> 
						</div>
					</div>													
				</div>
			</div>

		<?php 
		require_once("blocks/footer.php");
		?>


	</body>
</html>