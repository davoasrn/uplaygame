		<? $anun = basename($_SERVER['REQUEST_URI'], ".php"); ?>

        <div id="head">

			<div class="inner">

				<h1><a href="index.php">www.uplanit.com</a></h1>

				<!--[if !IE]>start user details<![endif]-->

			  <!--[if !IE]>end user details<![endif]-->

				

			  <!--[if !IE]>start main menu<![endif]-->

  <div id="main_menu">

					<ul>

						<li><a href="countries.php" class="<? if($anun=="countries"){echo "selected";} ?>"><span><span>Страны</span></span></a></li>

                       <li><a href="cities.php" class="<? if($anun=="cities"){echo "selected";} ?>"><span><span>Города</span></span></a></li>

                       <li><a href="areas.php" class="<? if($anun=="areas"){echo "selected";} ?>"><span><span>Участки</span></span></a></li>

                       <li><a href="pages.php" class="<? if($anun=="pages"){echo "selected";} ?>"><span><span>Страницы</span></span></a></li>

					    <li><a href="users.php" class="<? if($anun=="users"){echo "selected";} ?>"><span><span>Пользователи</span></span></a></li>

                      <li><a href="plans.php" class="<? if($anun=="plans"){echo "selected";} ?>"><span><span>Проекты</span></span></a></li>

						
                        <li><a href="events.php" class="<? if($anun=="events"){echo "selected";} ?>"><span><span>События</span></span></a></li>

                       <li><a href="iconscat.php" class="<? if($anun=="iconscat"){echo "selected";} ?>"><span><span>Категории иконок</span></span></a></li>
					   
					   <li><a href="icons.php" class="<? if($anun=="icons"){echo "selected";} ?>"><span><span>Иконки</span></span></a></li>
					   
					   <li><a href="news.php" class="<? if($anun=="news"){echo "selected";} ?>"><span><span>Новости</span></span></a></li>
                       
					   <li><a href="videos.php" class="<? if($anun=="videos"){echo "selected";} ?>"><span><span>Видео</span></span></a></li>
					   
					   <li><a href="partners.php" class="<? if($anun=="partners"){echo "selected";} ?>"><span><span>Партнеры</span></span></a></li>
						
					</ul>

				</div>

				<!--[if !IE]>end main menu<![endif]-->

				

			</div>

		</div>