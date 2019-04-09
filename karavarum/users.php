<? require("blocks/baza.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Uplanit - Administration</title>

<link rel="stylesheet" type="text/css" href="css/meta-admin.css" />

<!-- blue theme is default -->



<!--[if lte IE 6]><link media="screen" rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->

<script type="text/javascript" src="js/css.js"></script>

<script type="text/javascript" src="js/behaviour.js"></script>

</head>



<body>

	<!--[if !IE]>start wrapper<![endif]-->

	<div id="wrapper">

		<!--[if !IE]>start head<![endif]-->

<? require("blocks/header.php");?>

		<!--[if !IE]>end head<![endif]-->

		<!--[if !IE]>start content<![endif]-->

		<div id="content">

			

			<!--[if !IE]>start content bottom<![endif]-->

			<div id="content_bottom">

			

			<div class="inner">

				

				<!--[if !IE]>start info<![endif]-->

				<div id="info">




			    <!--[if !IE]>start section<![endif]-->

					

					<div class="section">

					<div class="title_wrapper">

						<h2>Пользователи</h2>

						<a href="usernew.php" class="view_all_orders">Новый пользователь</a>


					</div>


					<!--[if !IE]>start section_inner<![endif]-->

					<div class="section_inner">

					

					<div  id="product_list">

						

						<!--[if !IE]>start table_wrapper<![endif]-->

						<div class="table_wrapper">

							<div class="table_wrapper_inner">

							<table cellpadding="0" cellspacing="0" width="100%">

								<tbody><tr>

									<th>No.</th>

									<th>Название</th>

									<th>Действие</th>

								</tr>

                                <? 

								$zapros = mysql_query("SELECT * FROM users ORDER BY id DESC");

								$qanak = mysql_num_rows($zapros);

								if($qanak != 0){

								while ($qanak != 0){

								$rezult = mysql_fetch_array($zapros);

								$anun = $rezult['name'];

								$hamar = $rezult['id'];

								if($qanak % 2 == 0)	{ $syun = "first";} else {$syun = "second";}

								echo '<tr class="'.$syun.'">

									<td>'.$hamar.'</td>

									<td><a href="useredit.php?id='.$hamar.'" class="product_name">'.$anun.'</a></td>

									<td>

										<div class="actions_menu">

											<ul>

												

												<li><a class="edit" href="useredit.php?id='.$hamar.'">Изм.</a></li>

												<li><a class="delete" href="userdelete.php?id='.$hamar.'">Удалить</a></li>

											</ul>

										</div>									</td>

								</tr>';

								$qanak--;

								}

								}

								else {echo '<li class="yellow" style="height:30px;"><span class="ico"></span><strong class="system_title">&nbsp;&nbsp;&nbsp;Пользователи не найдены</strong></li>';}

								?>

							</tbody></table>

						  </div>

						</div>

						<!--[if !IE]>end table_wrapper<![endif]-->


					</div>

					</div>

					<!--[if !IE]>end section inner<![endif]-->

					

					</div>

					<!--[if !IE]>end section<![endif]-->

					
				</div>

				<!--[if !IE]>end info<![endif]-->

				<!--[if !IE]>start sidebar<![endif]-->

	<? require("blocks/sidebar.php");?>

				<!--[if !IE]>end sidebar<![endif]-->


			</div>

			<!--[if !IE]>end content bottom<![endif]-->

			</div>

			

		</div>

		<!--[if !IE]>end content<![endif]-->

	</div>

	<!--[if !IE]>end wrapper<![endif]-->

	

	<!--[if !IE]>start footer<![endif]-->

	<? require("blocks/footer.php");?>

	<!--[if !IE]>end footer<![endif]-->

	

	

</body>

</html>

