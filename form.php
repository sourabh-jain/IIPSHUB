<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/novus/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:13 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Novus Admin Theme | Form stuff</title>

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
							<h1 class="secTitle">Form Stuff</h1>
							<span class="secExtra">Inputs &amp; buttons</span>
						</div> <!-- /SecInfo -->
	
			<div class="fluid">
				
				<div class="widget leftcontent grid10">
					<div class="widget-header">
						<h3 class="widget-title">Usual inputs</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-inputs" checked />
	  						<label class="slider" for="slider-inputs"></label>
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

						<input type="text" class="input-text" placeholder="Usual input field" />
						<div class="dropdown">
								<select name="one" class="dropdown-select">
									<option value="">Dropdown Menu</option>
									<option value="1">Option #1</option>
									<option value="2">Option #2</option>
									<option value="3">Option #3</option>
								</select>
							</div>

                            <input type="file" name="uploader" id="uploader">
                            <label for="uploader">Single file uploader</label>

                            <textarea class="textarea" rows="6">Usual Text Area</textarea>
                            <span class="custom-input">
                            	<input type="checkbox" id="chkbx-1"><label for="chkbx-1">Checkbox</label>
                            	<input type="radio" id="radio-1" name="input-radio"><label for="radio-1">Say yes!</label>
                            	<input type="radio" id="radio-2" name="input-radio"><label for="radio-2">Say no :( </label>
                            	<button type="submit">Submit</button>
                            </span>
						
					</div> <!-- /widget-content -->

					<div class="divider"></div>

				</div> <!-- /widget -->

				<div class="widget grid2">
					<div class="widget-header">
						<h3 class="widget-title">Switches </h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-more" checked />
		  					<label class="slider" for="slider-more"></label>	  						
						</div>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="widget-content pad20">
					
						<input type="checkbox" class="sl" id="slider-01" checked />
	  					<label class="slider center" for="slider-01"></label>

	  					<input type="checkbox" class="sl" id="slider-02" checked />
	  					<label class="slider aqua center" for="slider-02"></label>

	  					<input type="checkbox" class="sl" id="slider-03" checked />
	  					<label class="slider turquoise center" for="slider-03"></label>

	  					<input type="checkbox" class="sl" id="slider-04" checked />
	  					<label class="slider blue center" for="slider-04"></label>

	  					<input type="checkbox" class="sl" id="slider-05" checked />
	  					<label class="slider lavender center" for="slider-05"></label>

	  					<input type="checkbox" class="sl" id="slider-06" checked />
	  					<label class="slider red center" for="slider-06"></label>

	  					<input type="checkbox" class="sl" id="slider-07" checked />
	  					<label class="slider orange center" for="slider-07"></label>

	  					<input type="checkbox" class="sl" id="slider-08" checked />
	  					<label class="slider yellow center" for="slider-08"></label>

	  					<input type="checkbox" class="sl" id="slider-09" checked />
	  					<label class="slider grey center" for="slider-09"></label>

					</div> <!-- /widget-content -->

					<div class="divider"></div>

				</div> <!-- /widget -->
				
			</div> <!-- /fluid -->

			<div class="fluid">

				<div class="widget leftcontent grid6">
					<div class="widget-header">
						<h3 class="widget-title">Simple Buttons</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-comm" checked />
	  						<label class="slider" for="slider-comm"></label>
	  						
	  						<div class="btn-group xtra"> <!-- btn dd -->
								<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
							 		<ul class="dropdown-menu pull-right">
	                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#"><i class="i"></i> Make admin</a></li>
	                                </ul>
                            </div><!-- /btn dd -->

						</div> <!-- /widget-controls -->
					</div> <!-- /widget-header -->
					<div class="widget-content pad10">
						
					<div class="btns sd-btns">	
						<button class="btn">Simple</button>
						<button class="btn btn-green">Green</button>
						<button class="btn btn-turquoise">Turquoise</button>
						<button class="btn btn-blue">Blue</button>
						<button class="btn btn-lavender">Lavender</button>
						<button class="btn btn-red">Red</button>
						<button class="btn btn-orange">Orange</button>
						<button class="btn btn-yellow">Yellow</button>
						<button class="btn btn-grey">Grey</button>
						<button class="btn btn-black">Black</button>
						<button class="btn btn-dark-grey">Dark Grey</button>
						<button class="btn btn-light-grey">Light Grey</button>
						<button class="btn btn-white">White</button>
					</div>
						
					</div> <!-- /widget-content -->

					<div class="divider"></div>
					
				</div>  <!-- /widget -->

				<div class="widget grid6">
						<div class="widget-header">
							<h3 class="widget-title marginLeft0">Drop Down Buttons</h3>

							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-ddb" checked />
		  						<label class="slider" for="slider-ddb"></label>	  						
							</div>
						</div>
						
						<div class="clearfix"></div>

						<div class="widget-content pad20">
							
							<div class="btns dp-btns">

								<div class="btn-group">
								  <a class="btn btn dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group">
								  <a class="btn btn-green dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu pull-right">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group">
								  <a class="btn btn-turquoise dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group">
								  <a class="btn btn-blue dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu pull-right">
									<li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group">
								  <a class="btn btn-lavender dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group dropup">
								  <a class="btn btn-red dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu pull-right">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group dropup">
								  <a class="btn btn-grey dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group dropup">
								  <a class="btn btn-black dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu pull-right">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group dropup">
								  <a class="btn btn-dark-grey dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group dropup">
								  <a class="btn btn-light-grey dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu pull-right">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

								<div class="btn-group dropup">
								  <a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#">
								    Action
								    <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
								  </ul>
								</div> <!-- /btn-group -->

							</div>

						</div> <!-- /widget-content -->
						
						<div class="divider"></div>

					</div> <!-- /widget -->
				</div>  <!-- /fluid -->

				<div class="fluid">

					<div class="widget leftcontent grid12">
						<div class="widget-header">
							<h3 class="widget-title marginLeft0">Pagination</h3>
							
							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-pagination" checked />
		  						<label class="slider" for="slider-pagination"></label>
		  						
		  						<div class="btn-group xtra"> <!-- btn dd -->
									<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
								 		<ul class="dropdown-menu pull-right">
		                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
		                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
		                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
		                                    <li class="divider"></li>
		                                    <li><a href="#"><i class="i"></i> Make admin</a></li>
		                                </ul>
	                            </div><!-- /btn dd -->

							</div> <!-- /widget-controls -->
						</div>
						<div class="widget-content pad10">

	                        <div class="text-center">
                          	  <ul class="pagination pagination-sm">
	                            <li class="active"><a href="#" onclick="return false;">1</a></li>
	                            <li><a href="#" onclick="return false;">2</a></li>
	                            <li><a href="#" onclick="return false;">3</a></li>
	                            <li><a href="#" onclick="return false;">4</a></li>
	                            <li><a href="#" onclick="return false;">5</a></li>
	                            <li><a href="#" onclick="return false;">6</a></li>
	                            <li><a href="#" onclick="return false;">7</a></li>
	                            <li class="disabled period"><a href="#" onclick="return false;">...</a></li>
	                            <li><a href="#" onclick="return false;">15</a></li>
	                            <li class="arrow"><a href="#" onclick="return false;"><i class="fa fa-angle-right"></i></a></li>
	                          </ul>
	                        </div> <!-- /pagination -->

	                        <div class="text-center">
                          		<ul class="pagination pagination-sm">
	                          	<li class="arrow"><a href="#" onclick="return false;"><i class="fa fa-angle-left"></i></a></li>
	                            <li><a href="#" onclick="return false;">1</a></li>
	                            <li class="active"><a href="#" onclick="return false;">2</a></li>
	                            <li><a href="#" onclick="return false;">3</a></li>
	                            <li><a href="#" onclick="return false;">4</a></li>
	                            <li><a href="#" onclick="return false;">5</a></li>
	                            <li><a href="#" onclick="return false;">6</a></li>
	                            <li class="disabled period"><a href="#" onclick="return false;">...</a></li>
	                            <li><a href="#" onclick="return false;">15</a></li>
	                            <li class="arrow"><a href="#" onclick="return false;"><i class="fa fa-angle-right"></i></a></li>
	                          </ul>
	                        </div> <!-- /pagination -->

	                        <div class="text-center">
	                        	<span class="center light">Disabled pages</span>
                          	  <ul class="pagination pagination-sm">
	                          	<li class="arrow disabled"><a href="#" onclick="return false;"><i class="fa fa-angle-left"></i></a></li>
	                            <li><a href="#" onclick="return false;">1</a></li>
	                            <li><a href="#" onclick="return false;">2</a></li>
	                            <li class="disabled"><a href="#" onclick="return false;">3</a></li>
	                            <li class="disabled"><a href="#" onclick="return false;">4</a></li>
	                            <li class="active"><a href="#" onclick="return false;">5</a></li>
	                            <li><a href="#" onclick="return false;">6</a></li>
	                            <li class="disabled period"><a href="#" onclick="return false;">...</a></li>
	                            <li><a href="#" onclick="return false;">15</a></li>
	                            <li class="arrow"><a href="#" onclick="return false;"><i class="fa fa-angle-right"></i></a></li>
	                          </ul>
	                        </div> <!-- /pagination -->

	                        <div class="text-center">
	                        	<span class="center light">Active colors</span>
	                          <ul class="pagination pagination-sm">
	                          	<li class="arrow"><a href="#" onclick="return false;"><i class="fa fa-angle-left"></i></a></li>
	                            <li><a href="#" onclick="return false;">1</a></li>
	                            <li class="active green"><a href="#" onclick="return false;">2</a></li>
	                            <li class="active turquoise"><a href="#" onclick="return false;">3</a></li>
	                            <li class="active blue"><a href="#" onclick="return false;">4</a></li>
	                            <li class="active lavender"><a href="#" onclick="return false;">5</a></li>
	                            <li class="active red"><a href="#" onclick="return false;">6</a></li>
	                            <li class="disabled period"><a href="#" onclick="return false;">...</a></li>
	                            <li><a href="#" onclick="return false;">15</a></li>
	                            <li class="arrow"><a href="#" onclick="return false;"><i class="fa fa-angle-right"></i></a></li>
	                          </ul>
	                        </div> <!-- /pagination -->

						</div>

						<div class="divider"></div>

					</div> <!-- /widget -->

				</div> <!-- /fluid -->

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

<!-- Mirrored from themes-pixeden.com/demos/novus/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:13 GMT -->
</html>