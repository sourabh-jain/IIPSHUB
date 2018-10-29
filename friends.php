<?php

session_start();

$id = $_SESSION['stuid'];
if(isset($_GET['profileid']))
	$profileid= $_GET['profileid'];
else 
	$profileid=$id;
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/novus/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:06 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Novus Admin Theme | Messages</title>

	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad-retina.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-iphone.png" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    
    
    <link rel="stylesheet" type="text/css" href="css/vex/vex.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-default.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-flat-attack.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-os.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-plain.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-top.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-wireframe.css">

    <link rel="stylesheet" type="text/css" href="css/messenger/messenger.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-future.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-air.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-block.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-flat.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-ice.css">


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
				include 'topbar.php';
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
			include 'sidebar.php';
			?>

		</div> <!-- /sidebar -->

		<div id="main" class="clearfix">

						
<?php
/* Get the name whose profile we are viewing */

$result = mysql_query("select firstname,lastname from stuacc where id='$profileid'");
$row = mysql_fetch_array($result);
$name = $row['firstname'] . ' ' . $row['lastname'];?>
			
			<div class="fluid">
				
				<div class="widget leftcontent grid12">
					<div class="widget-header">
						<h3 class="widget-title">Friends of <?php echo $name;?> </h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-inputs" checked />
	  						<label class="slider" for="slider-inputs"></label>
	  						<div class="btn-group xtra"> <!-- btn dd -->
								
								
                            </div><!-- /btn dd -->
						</div>
					</div>
					
					<div id="writeme2" class="widget-content pad10">
					
					<?php
					
					/* Get friends of the profileid*/
					
					
					
					
					$result = mysql_query("select (friendid + meid) as sumf from addfriends where friendid='$profileid' or meid='$profileid'");
				
					while($row=mysql_fetch_array($result))
					{
					
							$idtoprint =$row['sumf'] - $profileid;
					//		echo $idtoprint;
							
							/* Get details of this idtoprint */
							
							
					/* Get the names of the idtoprint */
					
					$r = mysql_query("select firstname,lastname from stuacc where id ='$idtoprint'");
					$rw = mysql_fetch_array($r);
					$name = $rw['firstname'] . ' ' . $rw['lastname'];
					
					
					/*Get the profile picture of the idtoprint */
					$r = mysql_query("select image from profile where userid ='$idtoprint'");
					$rw = mysql_fetch_array($r);
					$profile = $rw['image'];
					
					
					
					
					
					echo "<div class='comment'>  <!-- print message received -->
							<div class='comment-header'>
								<div class='comment-person'>
									<div class='comment-img'>
										<img src='$profile' rel='comment-1'>
									</div>
									<!--<div class='comment-hex hex-yellow'></div>-->
								</div>
								<div class='comment-info'>
						<a href='profile.php?profileid=$idtoprint'>
						<div class='c-name'>$name</div></a>
									
								</div>
								
								
							</div> <!-- /comment-header -->
						</div>
					
					";
					
					
					
					}
					
					
					
					
					/*	<div class='comment'>  <!-- print message received -->
							<div class='comment-header'>
								<div class='comment-person'>
									<div class='comment-img'>
										<img src='$profile2' rel='comment-1'>
									</div>
									<!--<div class='comment-hex hex-yellow'></div>-->
								</div>
								<div class='comment-info'>
						<a href='profile.php?profileid=$otherid'><div class='c-name'>$name2</div></a>
									<!--<div class='c-time'>6 hours ago</div>-->
								</div>
								
								
							</div> <!-- /comment-header -->
						</div>
					</div> <!-- /widget-content -->
					
					*/
					?>
					
					
					

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
	<script type="text/javascript" src="js/toastr.min.js"></script>
	<script type="text/javascript" src="js/vex.combined.min.js"></script>
	<script type="text/javascript" src="js/messenger.min.js"></script>
	<script type="text/javascript" src="js/messenger-theme-future.js"></script>

	<script type="text/javascript" src="js/main.js"></script>

	<script>vex.defaultOptions.className = 'vex-theme-default';</script>
	

						
	
</body>

<!-- Mirrored from themes-pixeden.com/demos/novus/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:13 GMT -->
</html>