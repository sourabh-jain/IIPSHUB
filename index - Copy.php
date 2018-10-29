<?php
session_start();
include_once 'mysql.php';
if (!isset($_SESSION['stuid']))
	header("Location: login.php");



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/novus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:01 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Social Networking Website For IIPS</title>

	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad-retina.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-iphone.png" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/toastr.css">

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
			<div class="topTabs">
					
					<div id="topTabs-container-home">
						<div class="topTabs-header clearfix">
	
						<div class="secInfo sec-dashboard">
							<h1 class="secTitle">Dashboard</h1>
							<span class="secExtra">Welcome</span>
						</div> <!-- /SecInfo -->
						
						<ul class="etabs tabs">
							<li class="tab">
								<a href="#tab1">
									<span class="to-hide">
										<i class="fa fa-th"></i><br>Quick Menu Actions
									</span>
									<i class="fa icon-hidden fa-th ttip" data-ttip="Quick Menu"></i>
								</a>
							</li>
							<li class="tab">
								<a href="#tab2">
									<span class="to-hide">
										<i class="fa fa-bar-chart-o"></i><br>Web Site Statistics
									</span>
									<i class="fa icon-hidden fa-bar-chart-o ttip" data-ttip="Site Statistics"></i>
								</a>
							</li>
							<li class="tab">
								<a href="#tab3">
									<span class="to-hide">
										<i class="fa fa-calendar"></i><br>Calendar
									</span>
									<i class="fa icon-hidden fa-calendar ttip" data-ttip="Calendar"></i>
								</a>
							</li>
						</ul> <!-- /tabs -->
						</div><!-- /topTabs-header -->

						<div class="topTabsContent">
								<div id="tab1">
									<a href="#" class="hexagon red ttip" data-ttip="More Info"><i class="fa fa-plus"></i></a>
									<a href="#" class="hexagon aqua ttip" data-ttip="Statistics"><i class="fa fa-signal"></i></a>
									<a href="#" class="hexagon grey ttip" data-ttip="Refresh Data"><i class="fa fa-refresh"></i></a>
									<a href="#" class="hexagon orange ttip" data-ttip="Layout Settings"><i class="fa fa-cog"></i></a>
									<a href="#" class="hexagon blue ttip" data-ttip="Download Data"><i class="fa fa-cloud-download"></i></a>
									<a href="#" class="hexagon grey ttip" data-ttip="View Info"><i class="fa fa-list"></i></a>
								</div>
								<div id="tab2">
								    <div id="chart-quick" class="chart"></div>
								</div>
								<div id="tab3">
								    <div class="small-calendar cal-tab"></div>
								</div>
						</div> <!-- /topTabContent -->

					</div> <!-- /tab-container -->

				<!-- </div> -->
			</div> <!-- /topTabs -->
			
			<div class="divider"></div>
			
			<div class="fluid">
				
				<div class="widget leftcontent grid12">
					<div class="widget-header">
						<div class="widget-controls">
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
					<div id="statsTabs-container">
						<ul class="etabs stats-tabs">
							<li class="tab"><a href="#stat-tab1">Visitors Statistic</a></li>
							<li class="tab"><a href="#stat-tab2">Orders Statistic</a></li>
							<li class="tab"><a href="#stat-tab3">Users Statistic</a></li>
						</ul>
						<div class="statsTabsContent">

							<div id="stat-tab1">
								<div class="chart-desc grid2">
									<div class="stat-tab-title">Today's visitors</div>
									<div class="stat-tab-hour"><i class="fa fa-clock-o"></i> 5:23 pm</div>
									<a class="stat-tab-q">16,481</a>
								</div>
								<div class="chart-wrapper grid10">
									<div id="chart-visitors" class="chart"></div>
								</div>
							</div>

							<div id="stat-tab2">
								<div class="chart-desc grid2">
									<div class="stat-tab-title">Today's orders</div>
									<div class="stat-tab-hour"><i class="fa fa-clock-o"></i> 7:24 pm</div>
									<a class="stat-tab-q">3,280</a>
								</div>
								<div class="chart-wrapper grid10">
									<div id="chart-orders" class="chart"></div>
								</div>
							</div>
							<div id="stat-tab3">
								<div class="chart-desc grid2">
									<div class="stat-tab-title">Today's users</div>
									<div class="stat-tab-hour"><i class="fa fa-clock-o"></i> 1:24 am</div>
									<a class="stat-tab-q">7,060</a>
								</div>
								<div class="chart-wrapper grid10">
									<div id="chart-users" class="chart"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="divider"></div>

				</div> <!-- /widget -->
				
			</div> <!-- /fluid -->

			<div class="fluid">

				<div class="widget leftcontent grid7">
					<div class="widget-header">
						<h3 class="widget-title">Recent Comments</h3>
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
	                                	<li><a href="#"> Other actions</a></li>
	                                </ul>
                            </div><!-- /btn dd -->

						</div> <!-- /widget-controls -->
					</div> <!-- /widget-header -->

					<div class="widget-content pad10">
						<div class="comment">
							
							<div class="comment-header">
								<div class="comment-person">
									<div class="comment-img">
										<img src="images/comm-1.jpg" rel="comment-1">
									</div>
									<div class="comment-hex hex-green"></div>
								</div>
								<div class="comment-info">
									<div class="c-name">John Stone</div>
									<div class="c-time">3 hours ago</div>
								</div>
								<a href="#" onclick="return false;" class="icon-button btn-reply"><i class="fa fa-reply"></i></a>
								<div class="c-ip">IP: <span class="ip">172.10.56.3</span></div>
							</div> <!-- /comment-header -->
							
							<div class="comment-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
							</div> <!-- /comment-text -->
						</div> <!-- /comment -->

						<div class="comment">
							<div class="comment-header">
								<div class="comment-person">
									<div class="comment-img">
										<img src="images/comm-2.jpg" rel="comment-1">
									</div>
									<div class="comment-hex hex-yellow"></div>
								</div>
								<div class="comment-info">
									<div class="c-name">Anna Andreson</div>
									<div class="c-time">6 hours ago</div>
								</div>
								<a href="#" onclick="return false;" class="icon-button btn-reply"><i class="fa fa-reply"></i></a>
								<div class="c-ip">IP: <span class="ip">172.10.56.3</span></div>
							</div> <!-- /comment-header -->
							
							<div class="comment-text">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div> <!-- /comment-text -->

							<div class="comment-reply">
								<div class="reply-header">
									<div class="reply-person">
										<div class="comment-img">
											<img src="images/comm-3.jpg" rel="comment-1">
										</div>
										<div class="comment-hex hex-green"></div>
									</div>
									<div class="reply-info">
										<div class="c-name">John Stone</div>
										<div class="c-time">2:36 pm</div>
									</div>
									<div class="c-ip">IP: <span class="ip">172.10.55.3</span></div>
								</div>

								<div class="comment-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem
								</div> <!-- /comment-text -->
							</div> <!-- /comment-reply -->

						</div> <!-- /comment -->

						<div class="text-center">
                          <ul class="pagination pagination-sm">
                            <li><a href="#" onclick="return false;">1</a></li>
                            <li class="active"><a href="#" onclick="return false;">2</a></li>
                            <li><a href="#" onclick="return false;">3</a></li>
                            <li><a href="#" onclick="return false;">4</a></li>
                            <li><a href="#" onclick="return false;">5</a></li>
                            <li><a href="#" onclick="return false;">6</a></li>
                            <li><a href="#" onclick="return false;">7</a></li>
                            <li class="disabled period"><a href="#" onclick="return false;">...</a></li>
                            <li><a href="#" onclick="return false;">15</a></li>
                            <li class="arrow"><a href="#" onclick="return false;"><i class="fa fa-angle-right"></i></a></li>
                          </ul>
                        </div>

					</div> <!-- /widget-content -->

				</div>  <!-- /widget -->

				<div class="widget grid5 widget-calendar">
						
						<div class="widget-header">
							<h3 class="widget-title">Calendar</h3>

							<div class="widget-controls">
								<div class="date-c xtra">
									<input type="text" id="calendar-date">
									<i class="fa fa-calendar"></i>
								</div>	  						
							</div>
						</div> <!-- /widget-header -->

						<div class="widget-content pad20">
							<div class="small-calendar"></div>
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
                            	<input type="radio" id="radio-1"><label for="radio-1">Radio Button</label>
                            	<button type="submit">Submit</button>
                            </span>
						</div> <!-- /widget-content -->

					</div><!-- /widget -->
				

				</div>  <!-- /fluid -->

			</div> <!-- /main -->

		</div> <!-- /wrapper -->

	
	<div class="clearfix"></div>
	<div id="footer">
		2016 &copy; Social Networking Website For IIPS
	</div>

	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hashchange.min.js"></script>
	<script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
	<script type="text/javascript" src="js/excanvas.min.js"></script>
	<script type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript" src="js/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="js/toastr.min.js"></script>

	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/charts.js"></script>
	<script type="text/javascript">
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "positionClass": "toast-top-right",
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		setTimeout(function(){
			toastr.info('<span style="color:#333;">Social Networking Website for IIPS!.</span>');	
		},2000) ;
		
		setTimeout(function(){
			toastr.warning('<span style="color:#333;">You could navigate the different sections to discover it...</span>');	
		},4500) ;


	</script>
	
</body>

<!-- Mirrored from themes-pixeden.com/demos/novus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:06 GMT -->
</html>