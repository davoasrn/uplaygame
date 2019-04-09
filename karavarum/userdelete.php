<? require("blocks/baza.php");

if(isset($_GET['id'])) {

$id = $_GET['id'];

$harcum = mysql_query("SELECT * FROM users WHERE id='$id'");

$pagik = mysql_fetch_array($harcum);

$name = $pagik['name'];

}

if(isset($_POST['submit'])) 

{

	$zapros = mysql_query("DELETE FROM users WHERE id='$id'");

 if ($zapros == "true") { $noerror = '<li class="green"><span class="ico"></span><strong class="system_title">Удачно удалена!</strong></li>'; $name = ''; $description = '';}

 else {$error .= '<li class="red"><span class="ico"></span><strong class="system_title">Неизвестная ошибка</strong></li>';}

}

?>

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

<script type="text/javascript" src="includes/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

	tinyMCE.init({

		// General options

		mode : "textareas",

		theme : "advanced",

		skin : "o2k7",

		skin_variant : "silver",

		plugins : "safari,pagebreak,layer,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Example content CSS (should be your site CSS)

		content_css : "css/content.css",



		// Drop lists for link/image/media/template dialogs

		template_external_list_url : "lists/template_list.js",

		external_link_list_url : "lists/link_list.js",

		external_image_list_url : "lists/image_list.js",

		media_external_list_url : "lists/media_list.js",



		// Replace values for the template plugin

		template_replace_values : {

			username : "Some User",

			staffid : "991234"

		}

	});

</script>

<!-- /TinyMCE -->

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

							<h2>Удаление</h2>

						</div>


						<!--[if !IE]>start section inner <![endif]-->

						<div class="section_inner">

						
						<!--[if !IE]>start forms<![endif]-->

                        <?

                        if(isset($noerror)) { echo '<ul class="system_messages">'.$noerror.'</ul>';} else {echo '<ul class="system_messages">'.$error.'</ul>';}

						?>

						<form action="" class="search_form general_form" method="post">

							<!--[if !IE]>start fieldset<![endif]-->

							<fieldset>

								<!--[if !IE]>start forms<![endif]-->

								<div class="forms">

								<h3>Данные</h3>

								<!--[if !IE]>start row<![endif]-->

								<div class="row">

									<label>Название</label>

									<div class="inputs">

										<span class="input_wrapper"><? echo $name; ?></span>

									</div>

								</div>

								<!--[if !IE]>end row<![endif]-->

								

								<!--[if !IE]>start row<![endif]-->

<input name="id" value="<? echo $id; ?>" type="hidden" />

									</span>

									</div>

								</div>

								<!--[if !IE]>end row<![endif]-->

								<div class="row">

								</div>

								<!--[if !IE]>start row<![endif]-->

								<div class="row">

									<div class="inputs">

										<span class="button orange_button"><span><span>Удалить</span></span><input name="submit" type="submit" /></span>

									</div>

								</div>

								<!--[if !IE]>end row<![endif]-->

								
								</div>

								<!--[if !IE]>end forms<![endif]-->

							</fieldset>

							<!--[if !IE]>end fieldset<![endif]-->

							
						</form>

						<!--[if !IE]>end forms<![endif]-->

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

