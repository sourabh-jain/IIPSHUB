<?php
include_once 'mysql.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/novus/ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:52:04 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Novus Admin Theme | UI Elements</title>

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
							<h1 class="secTitle">UI Elements</h1>
							<span class="secExtra">Frontend</span>
						</div> <!-- /SecInfo -->

			<div class="fluid">
				
				<div class="widget leftcontent grid12">
					<div class="widget-header">
						<h3 class="widget-title">Icon Buttons &amp; Badges</h3>
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
					
					<div class="widget-content pad20">
						<p class="subtitle">Small buttons</p>
						<div class="icon-grp">
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-adjust"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-anchor"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-archive"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-ban"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-bar-chart-o"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-barcode"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-beer"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-bell"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-bolt"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-book"></i></a>

							<a href="#" onclick="return false;" class="icon-button">
								<i class="fa fa-exclamation"></i>
								<span class="badge badge-yellow">1</span>
							</a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-female"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-flag"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-gamepad"></i></a>
							<a href="#" onclick="return false;" class="icon-button">
								<i class="fa fa-gears"></i>
								<span class="badge">3</span>
							</a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-gift"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-glass"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-globe"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-group"></i></a>
							<a href="#" onclick="return false;" class="icon-button">
								<i class="fa fa-headphones"></i>
								<span class="badge badge-green">5</span>
							</a>

							<a href="#" onclick="return false;" class="icon-button">
								<i class="fa fa-heart"></i>
								<span class="badge badge-red">10</span>
							</a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-home"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-inbox"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-info"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-key"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-laptop"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-keyboard-o"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-leaf"></i></a>

							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-legal"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-aqua"><i class="fa fa-lightbulb-o"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-print"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-red"><i class="fa fa-code-fork"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-puzzle-piece"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-grey"><i class="fa fa-lock"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-magic"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-blue"><i class="fa fa-magnet"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-male"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-green"><i class="fa fa-map-marker"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-location-arrow"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-yellow"><i class="fa fa-microphone"></i></a>
							<a href="#" onclick="return false;" class="icon-button"><i class="fa fa-microphone"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-aqua"><i class="fa fa-mobile-phone"></i></a>
							
						</div>
						<p class="subtitle">Medium buttons</p>
						<div class="icon-grp">
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-briefcase"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-bullhorn"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium">
								<i class="fa fa-calendar"></i>
								<span class="badge badge-red">5</span>
							</a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-camera"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-check"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium">
								<i class="fa fa-cloud"></i>
								<span class="badge badge-blue">2</span>
							</a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-code"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-coffee"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-cog"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium">
								<i class="fa fa-comment"></i>
								<span class="badge">4</span>
							</a>

							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-money"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium icon-color-aqua"><i class="fa fa-arrows"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-dot-circle-o"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium icon-color-red"><i class="fa fa-check"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-pencil"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium icon-color-blue"><i class="fa fa-phone"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-picture-o"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium icon-color-green"><i class="fa fa-plane"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium"><i class="fa fa-pagelines"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-medium icon-color-yellow"><i class="fa fa-quote-left"></i></a>
						</div>
						<p class="subtitle">Big buttons</p>
						<div class="icon-grp">
							<a href="#" onclick="return false;" class="icon-button icon-big"><i class="fa fa-apple"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big"><i class="fa fa-android"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big"><i class="fa fa-linux"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big">
								<i class="fa fa-stack-overflow"></i>
								<span class="badge">5</span>
							</a>
							<a href="#" onclick="return false;" class="icon-button icon-big"><i class="fa fa-html5"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big"><i class="fa fa-css3"></i></a>
							
							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-aqua">
								<i class="fa fa-twitter"></i>
								<span class="badge badge-grey">5</span>
							</a>
							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-red"><i class="fa fa-youtube"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-grey"><i class="fa fa-github"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-blue"><i class="fa fa-facebook"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-green"><i class="fa fa-pinterest"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-yellow"><i class="fa fa-dribbble"></i></a>
						</div>
					</div> <!-- /widget-content -->

					<div class="divider"></div>

				</div> <!-- /widget -->
				
			</div> <!-- /fluid -->

			<div class="fluid">

				<div class="widget leftcontent grid6">
					<div class="widget-header">
						<h3 class="widget-title">Progress Bars</h3>
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
					<div class="widget-content pad20">
						
						<p class="subtitle">Basic</p>
						<div class="progress">
						  <div class="progress-bar bar-blue" style="width: 60%;"></div>
						</div>
						<div class="progress">
						  <div class="progress-bar bar-aqua" style="width: 60%;"></div>
						</div>
						<div class="progress">
						  <div class="progress-bar bar-green" style="width: 60%;"></div>
						</div>

						<p class="subtitle">Striped</p>
						<div class="progress progress-striped">
						  <div class="progress-bar bar-aqua" style="width: 20%;"></div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar bar-grey" style="width: 15%;"></div>
						</div>
						<div class="progress progress-striped">
						  <div class="progress-bar bar-red" style="width: 40%;"></div>
						</div>

						<p class="subtitle">Active</p>
						<div class="progress progress-striped active">
						  <div class="progress-bar bar-aqua" style="width: 40%;"></div>
						</div>
						<div class="progress progress-striped active">
						  <div class="progress-bar bar-red" style="width: 70%;"></div>
						</div>
						<div class="progress progress-striped active">
						  <div class="progress-bar bar-green" style="width: 25%;"></div>
						</div>
						<div class="progress progress-striped active">
						  <div class="progress-bar bar-yellow" style="width: 94%;"></div>
						</div>

						<div class="progress progress-striped active">
						  <div class="bar bar-grey" style="width: 94%;"></div>
						</div>
						
						<p class="subtitle">Stacked</p>
						<div class="progress">
						  <div class="progress-bar bar-green" style="width: 35%;"></div>
						  <div class="progress-bar bar-yellow" style="width: 20%;"></div>
						  <div class="progress-bar bar-red" style="width: 10%;"></div>
						</div>
						<div class="progress">
						  <div class="progress-bar bar-grey" style="width: 15%;"></div>
						  <div class="progress-bar bar-blue" style="width: 40%;"></div>
						  <div class="progress-bar bar-aqua" style="width: 45%;"></div>
						</div>
						<div class="progress">
						  <div class="progress-bar bar-green" style="width: 10%;"></div>
						  <div class="progress-bar bar-turquoise" style="width: 10%;"></div>
						  <div class="progress-bar bar-aqua" style="width: 10%;"></div>
						  <div class="progress-bar bar-blue" style="width: 10%;"></div>
						  <div class="progress-bar bar-lavender" style="width: 10%;"></div>
						  <div class="progress-bar bar-red" style="width: 10%;"></div>
						  <div class="progress-bar bar-orange" style="width: 10%;"></div>
						  <div class="progress-bar bar-yellow" style="width: 10%;"></div>
						  <div class="progress-bar bar-grey" style="width: 10%;"></div>
						  <div class="progress-bar bar-black" style="width: 10%;"></div>
						</div>
					</div> <!-- /widget-content -->

					
				</div>  <!-- /widget -->

				<div class="widget grid6">
						<div class="widget-header">
							<h3 class="widget-title">More Things</h3>

							<div class="widget-controls">
								<input type="checkbox" class="sl" id="slider-more" checked />
		  						<label class="slider" for="slider-more"></label>	  						
							</div>
						</div>
						<div class="widget-content pad20">
							
							<p class="subtitle">Alerts</p>

							<div class="alert alert-warning">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Warning!</strong> Best check yo self, you're not...
							</div>

							<div class="alert alert-danger">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Uh Oh!</strong> Lorem ipsum dolor sit amet...
							</div>

							<div class="alert alert-success">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>That's Right!</strong> Duis imperdiet magna turpis...
							</div>

							<div class="alert alert-info">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Ring!</strong> Nulla nec semper purus...
							</div>

							<p class="subtitle">Tooltips</p>

							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-grey ttip ttip_medium" data-ttip="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><i class="fa fa-quote-left"></i></a>

							<a href="#" onclick="return false;" class="icon-button icon-big icon-color-red ttip" data-ttip="Youtube"><i class="fa fa-youtube"></i></a>

							<br>

							<a href="#" onclick="return false;" class="icon-button icon-color-aqua ttip" data-ttip="550 Tweets" data-ttip-font="10px"><i class="fa fa-twitter"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-blue ttip" data-ttip="You Like it!" data-ttip-font="10px"><i class="fa fa-facebook"></i></a>
							<a href="#" onclick="return false;" class="icon-button icon-color-grey ttip" data-ttip="Fork Me!" data-ttip-font="10px"><i class="fa fa-github"></i></a>

							<p class="subtitle">Hexagons</p>

							<a href="#" class="hexagon hexa-widget aqua ttip" data-ttip="Add More..."><i class="fa fa-plus"></i></a>
							<a href="#" class="hexagon hexa-widget red ttip" data-ttip="Max Volume"><i class="fa fa-volume-up"></i></a>
							<a href="#" class="hexagon hexa-widget blue ttip" data-ttip="Lorem Euro"><i class="fa fa-euro"></i></a>
							<a href="#" class="hexagon hexa-widget green ttip" data-ttip="cmd + Z 'ing"><i class="fa fa-undo"></i></a>
							<a href="#" class="hexagon hexa-widget grey ttip" data-ttip="View all site"><i class="fa fa-sitemap"></i></a>
							<a href="#" class="hexagon hexa-widget yellow ttip" data-ttip="Shipping-pong"><i class="fa fa-truck"></i></a>
							<a href="#" class="hexagon hexa-widget aqua ttip" data-ttip="Music is life!"><i class="fa fa-music"></i></a>
							<a href="#" class="hexagon hexa-widget orange ttip" data-ttip="Searching..."><i class="fa fa-search"></i></a>

						</div> <!-- /widget-content -->

					</div>
				</div>  <!-- /widget -->

			</div>


		</div> <!-- /main -->

	</div> <!-- /wrap -->
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
	
	<script type="text/javascript">

		$(window).load(function(){
			$('#loading').fadeOut(1000);

		// });
		// $(document).ready(function(){
			$('#stats_visits').sparkline('html', { 
				type: 'bar',
				chartRangeMin: 0,
				height: '40px',
				barWidth: '5px',
				barColor: '#3e3e3e',
				tooltipClassname:'tooltip-sp'
			});
			$('#stats_balance').sparkline('html', { 
				type: 'bar',
				chartRangeMin: 0,
				height: '40px',
				barWidth: '5px',
				barColor: '#ffffff',
				tooltipClassname:'tooltip-sp'
			});


			// $('#topTabs-container, #statsTabs-container').easytabs({
			// 	updateHash: false
			// });

			// checkbox slider change -> hide the widget
			$('.sl').change(function(){
				var thisRoot = $(this)
								.parent() // widget-header
								.parent() // widget-controls
								.parent(); // widget
				if(!this.checked){
					//thisRoot.find('.widget-content').fadeOut();
					thisRoot.find('.widget-content, .widget-title, .xtra').animate({'opacity':0.25}).css({'cursor':'default', 'pointer-events':'none'});
					thisRoot.find('.etabs li a').css({'cursor':'default', 'pointer-events':'none'})
				} else {
					//thisRoot.find('.widget-content').fadeIn();
					thisRoot.find('.widget-content, .widget-title, .xtra').animate({'opacity':1}).css({'cursor':'pointer', 'pointer-events':'auto'});
					thisRoot.find('.etabs li a').css({'cursor':'pointer', 'pointer-events':'auto'});
				}
			})

			
			  


		$('.ttip').hover(
			function(){
				var ttip_c = $(this).data('ttip');
				var ttip_h = $(this).height();
				$(this).append('<div class="ttip_t">' + ttip_c + '</div>');
				if($(this).hasClass('hexagon')){
					$('.ttip_t').css({ 'top' : ttip_h + ttip_h/2 + 10 });
				} else {
					$('.ttip_t').css({ 'top' : ttip_h + 10});	
				}
				
				$('.ttip_t').fadeIn();
			},
			function(){
				$('.ttip_t').fadeOut(function(){
					$(this).remove()
				});
			}
		);


			$('.icon-nav-mobile').click(function(){
				$('.mainNav').toggleClass('open');
			})


		}) //.Ready
	</script>
</body>

<!-- Mirrored from themes-pixeden.com/demos/novus/ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:52:27 GMT -->
</html>