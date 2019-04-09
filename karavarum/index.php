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
							<h2>Добро пожаловать</h2>
						</div>
						
						<!--[if !IE]>start section inner<![endif]-->
						<div class="section_inner">
							<div id="dashboard">
									<p>
									<strong>Спасибо, что воспользовались услугами <a href="http://www.greegy.com" target="_blank">Greegy</a></strong></p>
									</div>
						</div>
						<!--[if !IE]>end section inner<![endif]-->
						
					</div>
					<!--[if !IE]>end section<![endif]-->
					
					

					
						<!--[if !IE]>start section<![endif]-->
						<div class="section">
                          <div class="title_wrapper">
                            <h2>Последние проекты</h2>
                          </div>
						  <!--[if !IE]>start section_inner<![endif]-->
                          <div class="section_inner">
                            <div  id="product_list2">
                              <!--[if !IE]>start table_wrapper<![endif]-->
                              <div class="table_wrapper">
                                <div class="table_wrapper_inner">
                                  <table cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                      <tr>
                                        <th>No.</th>
                                        <th>Название</th>
                                        <th>Действие</th>
                                      </tr>
                                 <? 
								$zapros = mysql_query("SELECT * FROM plans ORDER BY id DESC LIMIT 5");
								$qanak = mysql_num_rows($zapros);
								if($qanak != 0){
								while ($qanak != 0){
								$rezult = mysql_fetch_array($zapros);
								$anun = $rezult['name'];
								$hamar = $rezult['id'];
								$gin = $rezult['price'];
								if($qanak % 2 == 0)	{ $syun = "first";} else {$syun = "second";}
								$picname = '../images/uploads/hotels/'.$hamar.'/1.jpg';
	  							if (!file_exists($picname)) { $picname = '../images/uploads/hotels/'.$hamar.'/1.JPG'; } 
								echo '<tr class="'.$syun.'">
									<td>'.$hamar.'</td>
									
									<td><a href="planedit.php?id='.$hamar.'" class="product_name">'.$anun.'</a></td>
									
									
									<td>
										<div class="actions_menu">
											<ul>
												
												<li><a class="edit" href="planedit.php?id='.$hamar.'">Изм..</a></li>
												<li><a class="delete" href="plandelete.php?id='.$hamar.'">Удалить</a></li>
											</ul>
										</div>									</td>
								</tr>';
								$qanak--;
								}
								}
								else {echo '<li class="yellow" style="height:30px;"><span class="ico"></span><strong class="system_title">&nbsp;&nbsp;&nbsp;Нет проектов!</strong></li>';}
								?>
                                    </tbody>
                                  </table>
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
