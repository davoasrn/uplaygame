				<div id="sidebar">

					<h2 style="text-align:center;"><a href="dirlist.php" target="blank">Каталог файлов</a></h2>

                    <hr /><br /><br />

					<!--[if !IE]>start sidebar module<![endif]-->

					<div class="sidebar_module">

						<div class="title_wrapper">

							<h3>Статистка</h3>

						</div>



						<div id="statistics">

							<dl>
								<dt>Страны - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM countries");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							
<dl>
								<dt>Города - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM cities");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							
                            <dl>
								<dt>Участки - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM areas");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							

                            <dl>
								<dt>Страницы - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM pages");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							
                            <dl>
								<dt>Пользователи - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM users");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							

							<dl>
								<dt>Проекты - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM plans");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							
                            <dl>
								<dt>События - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM events");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							<dl>
								<dt>Категории иконок - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM icons_categories");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							<dl>
								<dt>Иконки - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM icons");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							<dl>
								<dt>Новости - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM news");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							<dl>
								<dt>Видео - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM videos");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							<dl>
								<dt>Партнеры - </dt>
								<dd>
								<?
                        $zapros = mysql_query("SELECT * FROM partners");
						$qanak = mysql_num_rows($zapros);
						echo $qanak;
								?>
                        		</dd>
							</dl>

							







                            
                            
                            
                            

                            
						</div>

					</div>

					<!--[if !IE]>end sidebar module<![endif]-->

					

					

				</div>