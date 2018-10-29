<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/novus/grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:15 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Novus Admin Theme | Grid &apm; layout</title>

	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad-retina.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-iphone.png" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    

	<link href="css/style.css" rel="stylesheet" type="text/css" />

	
</head>
<body>
	<div id="loading">
		<div>
			<div></div>
		    <div></div>
		    <div></div>
		</div>
	</div>
	<div id="wrapper" class="container">

		<div id="top">
			<div id="topBar">
				<?php 
				include 'topbar.html';
				?>
			</div> <!-- /topBar -->

			<div id="profile">
	<?php
			include 'profilehead.php';
			?>
			

	</div> <!-- /profile -->
		</div> <!-- /top -->

		<div id="sidebar">
			<?php 
			include 'sidebar.html';
			?>

			
		</div> <!-- /sidebar -->

		<div id="main" class="clearfix">

						<div class="secInfo">
							<h1 class="secTitle">Grids</h1>
							<span class="secExtra">Layout stuff</span>
						</div> <!-- /SecInfo -->
			
			<div class="fluid">
				
				<div class="widget leftcontent grid12">

					<div class="widget-header">
						<h3 class="widget-title">Grid 12</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-grid1" checked />
	  						<label class="slider" for="slider-grid1"></label>
	  						<div class="btn-group xtra"> <!-- btn dd -->
								<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
								<ul class="dropdown-menu pull-right">
	                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#"> Other actions</a></li>
	                                </ul>
                            </div><!-- /btn dd -->
						</div>
					</div>
					<div class="widget-content pad20f">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus. Suspendisse potenti. In hac habitasse platea dictumst. Proin molestie commodo placerat. Vestibulum vestibulum, ipsum vitae sodales consequat, urna libero tincidunt ante, vel hendrerit felis tortor a justo. Mauris eget lorem eros. Aenean cursus accumsan dolor vitae condimentum. Suspendisse fringilla sodales lobortis. Morbi varius neque sed lorem congue feugiat.</p>
					</div> <!-- /widget-content -->

				</div> <!-- /widget -->
				
				</div> <!-- /fluid -->



				<div class="fluid">

					<div class="widget leftcontent grid6">
						<div class="widget-header">
							<h3 class="widget-title w-off">Grid 6</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid2" />
		  						<label class="slider" for="slider-grid2"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f w-off">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus. Suspendisse potenti. In hac habitasse platea dictumst. Proin molestie commodo placerat.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid6">
						<div class="widget-header">
							<h3 class="widget-title">Grid 6</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid3" checked />
		  						<label class="slider" for="slider-grid3"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus. Suspendisse potenti. In hac habitasse platea dictumst. Proin molestie commodo placerat.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

				</div> <!-- /fluid:6+6 -->


				<div class="fluid">

					<div class="widget leftcontent grid4">
						<div class="widget-header">
							<h3 class="widget-title">Grid 4</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid4" checked />
		  						<label class="slider" for="slider-grid4"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid4">
						<div class="widget-header">
							<h3 class="widget-title w-off">Grid 4</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid5" />
		  						<label class="slider" for="slider-grid5"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f w-off">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid4">
						<div class="widget-header">
							<h3 class="widget-title">Grid 4</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid6" checked />
		  						<label class="slider" for="slider-grid6"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

				</div> <!-- /fluid:4+4+4-->

				
				<div class="fluid">

					<div class="widget leftcontent grid3">
						<div class="widget-header">
							<h3 class="widget-title w-off">Grid 3</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid7" />
		  						<label class="slider sl-small" for="slider-grid7"></label>
							</div>
						</div>
						<div class="widget-content pad20f w-off">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid3">
						<div class="widget-header">
							<h3 class="widget-title">Grid 3</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid8" checked />
		  						<label class="slider sl-small" for="slider-grid8"></label>
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid3">
						<div class="widget-header">
							<h3 class="widget-title">Grid 3</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid9" checked />
		  						<label class="slider sl-small" for="slider-grid9"></label>
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid3">
						<div class="widget-header">
							<h3 class="widget-title">Grid 3</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid10" checked />
		  						<label class="slider sl-small" for="slider-grid10"></label>
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->


				</div> <!-- /fluid:3+3+3+3-->

				

				<div class="fluid">
					
					<div class="widget leftcontent grid2">
						<div class="widget-header">
							<h3 class="widget-title">Grid 2</h3>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid2">
						<div class="widget-header">
							<h3 class="widget-title">Grid 2</h3>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid2">
						<div class="widget-header">
							<h3 class="widget-title">Grid 2</h3>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid2">
						<div class="widget-header">
							<h3 class="widget-title">Grid 2</h3>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid2">
						<div class="widget-header">
							<h3 class="widget-title">Grid 2</h3>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid2">
						<div class="widget-header">
							<h3 class="widget-title">Grid 2</h3>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

				</div> <!-- /fluid:2+2+2+2+2+2 -->

				<div class="fluid">

					<div class="widget leftcontent grid4">
						<div class="widget-header">
							<h3 class="widget-title">Grid 4</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid11" checked />
		  						<label class="slider" for="slider-grid11"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid8">
						<div class="widget-header">
							<h3 class="widget-title">Grid 8</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid12" checked />
		  						<label class="slider" for="slider-grid12"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus. Suspendisse potenti. In hac habitasse platea dictumst. Proin molestie commodo placerat. Vestibulum vestibulum, ipsum vitae sodales consequat, urna libero tincidunt ante, vel hendrerit felis tortor a justo.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->
				
				</div> <!-- /fluid:4+8 -->


				<div class="fluid">

					<div class="widget leftcontent grid9">
						<div class="widget-header">
							<h3 class="widget-title">Grid 9</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid13" checked />
		  						<label class="slider" for="slider-grid13"></label>
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
									<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"> Other actions</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->
							</div>
						</div>
						<div class="widget-content pad20f">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est. Pellentesque id elit massa. Duis tempor condimentum lacus quis mattis. Proin dapibus libero id dui faucibus tempus. Suspendisse potenti. In hac habitasse platea dictumst. Proin molestie commodo placerat.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div class="widget grid3">
						<div class="widget-header">
							<h3 class="widget-title w-off">Grid 3</h3>
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-grid14" />
		  						<label class="slider sl-small" for="slider-grid14"></label>
							</div>
						</div>
						<div class="widget-content pad20f w-off">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id placerat diam, vitae sodales est.</p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

				</div> <!-- /fluid:4+8 -->


			</div> <!-- /main -->


		</div>  <!-- /wrapper -->

	<div class="clearfix"></div>
	<div id="footer">
		2013 &copy; Novus Admin v1.0. Powered by <a href="http://www.pixeden.com/" target="_blank">Pixeden</a>
	</div>

	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
	<script type="text/javascript" src="js/excanvas.min.js"></script>
	<script type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript" src="js/jquery.flot.resize.js"></script>
	
	
	<script type="text/javascript" src="js/main.js"></script>

	
</body>

<!-- Mirrored from themes-pixeden.com/demos/novus/grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:15 GMT -->
</html>