<? require("blocks/baza.php");

if(isset($_GET['id'])){ $id = $_GET['id'];

$zapros = mysql_query("SELECT * FROM icons WHERE id='$id'");

if(mysql_num_rows($zapros) != 0) { $petut = mysql_fetch_array($zapros);}

}

if(isset($_POST['submit'])) 

{

$error = "";

if(!isset($_POST['name']) || $_POST['name'] == '') { $error .= '<li class="red"><span class="ico"></span><strong class="system_title">Вы не ввели название иконки</strong></li>';} else {$name = $_POST['name'];}

if(!isset($_POST['category_id']) || $_POST['category_id'] == '') { $error .= '<li class="red"><span class="ico"></span><strong class="system_title">Вы не выбрали категорию</strong></li>';} else {$category_id = $_POST['category_id'];}

if(!isset($_POST['user_id']) || $_POST['user_id'] == '') { $error .= '<li class="red"><span class="ico"></span><strong class="system_title">Вы не выбрали пользователя</strong></li>';} else {$user_id = $_POST['user_id'];}

if(!isset($_POST['status']) || $_POST['status'] == '') { $error .= '<li class="red"><span class="ico"></span><strong class="system_title">Вы не ввели статус иконки</strong></li>';} else {$status = $_POST['status'];}


if(isset($name) && isset($category_id) && isset($user_id) && isset($status))

	{

	$zapros = mysql_query("UPDATE icons SET name = '$name', category_id = '$category_id', user_id = '$user_id', status = '$status' WHERE id='$id'");

 if ($zapros == "true") { $noerror = '<li class="green"><span class="ico"></span><strong class="system_title">Удачно обновлен!</strong></li>';}

 else {$error .= '<li class="red"><span class="ico"></span><strong class="system_title">Неизвестная ошибка</strong></li>';}

	}

	$zapros = mysql_query("SELECT * FROM icons WHERE id='$id'");

if(mysql_num_rows($zapros) != 0) { $petut = mysql_fetch_array($zapros);}

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

		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",



		



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

							<h2>Обновление иконки</h2>

							
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

										

								<!--[if !IE]>start row<![endif]-->

								<div class="row">

									<label>Название иконки</label>

									<div class="inputs">

										<span class="input_wrapper"><input class="text" name="name" type="text" value="<? echo $petut['name']; ?>" /></span>

									</div>

								</div>

								<!--[if !IE]>end row<![endif]-->

                               
                               
                                <!--[if !IE]>start row<![endif]-->

								<div class="row">

									<label>Категория:</label>

									<div class="inputs">

										<span class="input_wrapper blank">

											<select name="category_id" id="category_id">

                                            <option value="">--</option>

                                            <?

											$zapros = mysql_query("SELECT * FROM icons_categories");

											$tox = mysql_fetch_array($zapros);

											do{

											$pid = $tox['id'];

											$pname = $tox['name']; $checked="";

											if($qaxaq['city_id']==$pid) { $checked="selected='selected'";}

											echo "<option value='".$pid."' ".$checked.">".$pname."</option>";

											}

											while($tox = mysql_fetch_array($zapros)); 

											?>

											</select>

										</span>
									</div>
								</div>

								<!--[if !IE]>end row<![endif]-->

                                

                                <!--[if !IE]>start row<![endif]-->

								<div class="row">

									<label>Пользователь:</label>

									<div class="inputs">

										<span class="input_wrapper blank">

											<select name="user_id" id="user_id">

                                            <option value="">--</option>

                                            <?

											$zapros = mysql_query("SELECT * FROM users");

											$tox = mysql_fetch_array($zapros);

											do{

											$pid = $tox['id'];

											$pname = $tox['name']; $checked="";

											if($qaxaq['country_id']==$pid) { $checked="selected='selected'";}

											echo "<option value='".$pid."' ".$checked.">".$pname."</option>";

											}

											while($tox = mysql_fetch_array($zapros)); 

											?>

											</select>

										</span>
									</div>
								</div>

								<!--[if !IE]>end row<![endif]-->
                                
                                
								<!--[if !IE]>start row<![endif]-->

								<div class="row">

									<label>Статус</label>

									<div class="inputs">

										<span class="input_wrapper"><input class="text" name="status" type="text" value="<? echo $petut['status']; ?>" /></span>

									</div>

								</div>

								<!--[if !IE]>end row<![endif]-->
                                
                               
								<input class="text" name="id" type="hidden" value="<? echo $id; ?>" />

								<!--[if !IE]>start row<![endif]-->

								<div class="row">

									<div class="inputs">

										<span class="button orange_button"><span><span>Сохранить</span></span><input name="submit" type="submit" /></span>

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
