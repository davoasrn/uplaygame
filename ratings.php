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
		<title>Ratings</title>
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

		<!-- Facebook Comments -->
			<div id="fb-root"></div>
			<script> (function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

		
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
									
									<div class="row blank-row">
										<div class="12u">

										</div>
									</div>
									
									<div class="row">
										<div class="12u">
											<div id="tab2">
												<p id="tab2_button1" class="tab2_active">Buildings</p>
										   <!-- <p id="tab2_button2">Roofs</p>
												<p id="tab2_button3">People/cars</p> -->
												<div id="tab2_content1"></div>	
										   <!-- <div id="tab2_content2"></div>	
												<div id="tab2_content3"></div> -->	
											</div>
											<img src="images/page4_content.png" class="page4_content">
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
						<div class="12u">
							<div class="rating_comment">
								<a href="" id="rating_comment-like" style="rating_comment-like">
									<img src="images/rating_comment-like.png">
								</a>
								<span id="rating-like" class="rating-like">23</span>												
								
								<a href="" id="rating_comment-dislike" style="rating_comment-dislike">
									<img src="images/rating_comment-dislike.png">
								</a>
								<span id="rating-dislike" class="rating-dislike">5</span>
								<span class="rating-text">Rate and leave a comment</span>
							</div>
						</div>									
					</div>	

					<div class="row">
						<div class="7u">
							<!-- Box -->
							<section class="box box-feature facebook-comment">
								<div class="comments-header">
									<span>Comments </span><span id="comment-count">(8)</span>
								</div>	
								<div class="fb-comments" data-href="http://example.com/comments" data-width="660" data-numposts="5" data-colorscheme="light"></div>
							</section>
						</div>		
						<div class="5u">	
							<!-- Box -->
								<section class="box box-feature">
									<div class="outer">
										<header>
											<h2 class="outer-orange">People's version of this area<h2>
										</header>
										<div class="row right-box">
											
                                             <?php 
								$zapros = mysql_query("SELECT * FROM users");
								$pic = mysql_fetch_array($zapros);
								do 
								{
									?>
                                            <div class="6u">
												<!-- Box -->
												<section class="box box-feature">
													<div class="user_avatars">
														<img src="<?php echo $pic['pic'] ?>" id="avatar_1_small" class="avatar_image_small">
														<div class="user_description">
															<span class="user_descripton_name_small" id="user_descripton_name_small"><?php echo $pic['name'] ?></span>
															<span class="user_descripton_like_small" id="user_descripton_like_small"><?php echo $pic['rating'] ?></span>
															<img src="images/avatar_like_small.png" class="avatar_like_small">	
															<br>	
															<span class="user_descripton_map_small" id="user_descripton_map_small">Map ID: 345</span>
															<span class="user_descripton_dislike_small" id="user_descripton_dislike_small">5</span>
															<img src="images/avatar_dislike_small.png" class="avatar_dislike_small">										
														</div>
													</div>
												</section>
											</div>		
                                            
                                            <?php     
                                }
									
								while($pic = mysql_fetch_array($zapros));
								?>
                                            
											<div class="6u">
												<!-- Box -->
												<section class="box box-feature">
													<div class="user_avatars">
														<img src="images/avatar_2_thumb.png" id="avatar_2_small" class="avatar_image_small">
														<div class="user_description">
															<span class="user_descripton_name_small" id="user_descripton_name_small">Andrey Mimko</span>
															<span class="user_descripton_like_small" id="user_descripton_like_small">20</span>
															<img src="images/avatar_like_small.png" class="avatar_like_small">										
															<br>	
															<span class="user_descripton_map_small" id="user_descripton_map_small">Map ID: 39</span>
															<span class="user_descripton_dislike_small" id="user_descripton_dislike_small">8</span>
															<img src="images/avatar_dislike_small.png" class="avatar_dislike_small">										
														</div>
													</div>
												</section>
											</div>
										</div>
										<div class="row right-box">
											<div class="6u">								
												<!-- Box -->
												<section class="box box-feature">
													<div class="user_avatars">
														<img src="images/avatar_3_thumb.png" id="avatar_3_small" class="avatar_image_small">
														<div class="user_description">
															<span class="user_descripton_name_small" id="user_descripton_name_small">Anna Rudland</span>
															<span class="user_descripton_like_small" id="user_descripton_like_small">18</span>
															<img src="images/avatar_like_small.png" class="avatar_like_small">											
															<br>	
															<span class="user_descripton_map_small" id="user_descripton_map_small">Map ID: 102</span>
															<span class="user_descripton_dislike_small" id="user_descripton_dislike_small">12</span>
															<img src="images/avatar_dislike_small.png" class="avatar_dislike_small">
														</div>
													</div>
												</section>
											</div>		
											<div class="6u">	
												<!-- Box -->
												<section class="box box-feature">
													<div class="user_avatars">
														<img src="images/avatar_4_thumb.png" id="avatar_4_small" class="avatar_image_small">
														<div class="user_description">
															<span class="user_descripton_name_small" id="user_descripton_name_small">Armen Antonyan</span>
															<span class="user_descripton_like_small" id="user_descripton_like_small">15</span>
															<img src="images/avatar_like_small.png" class="avatar_like_small">
															<br>	
															<span class="user_descripton_map_small" id="user_descripton_map_small">Map ID: 5</span>
															<span class="user_descripton_dislike_small" id="user_descripton_dislike_small">3</span>
															<img src="images/avatar_dislike_small.png" class="avatar_dislike_small">
														</div>
													</div>
												</section>																	
											</div>						
										</div>
									</div>
								</section>																
						</div>						

					</div>
				</div>
			</div>			

		<?php 
		require_once("blocks/footer.php");
		?>


	</body>
</html>