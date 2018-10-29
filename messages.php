<?php

session_start();
if(isset($_GET['msgid']))
{
	$_SESSION['sum'] = $_SESSION['stuid'] + $_GET['msgid'];
	
}
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

						<div class="secInfo">
							<h1 class="secTitle">Messages</h1>
							<span class="secExtra">Chat &amp; other things</span>
						</div> <!-- /SecInfo -->

			
			<div class="fluid">
				
				<div class="widget leftcontent grid8">
					<div class="widget-header">
						<h3 class="widget-title">Messaging System</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-inputs" checked />
	  						<label class="slider" for="slider-inputs"></label>
	  						<div class="btn-group xtra"> <!-- btn dd -->
								
								
                            </div><!-- /btn dd -->
						</div>
					</div>
					
					<div id="writeme2" class="widget-content pad10">
						
					</div> <!-- /widget-content -->
					
					
					<!-- Submit a new message -->
					
					<textarea id="msg" style="display:none" class="textarea" rows="2" placeholder="Enter Message"></textarea>
						<input id="smsg" type="submit"  style="display:none" class="btn" value="Submit" onclick="submitmessage()">
					<script>
					function submitmessage()
					{
					
					
					var msg = $('#msg').val();
					$('#msg').val('');
					//alert(msg);
					
				/* post call to add the message to database */
					
					$.post( "msg.php", 
					{
						senderid: "<?php echo $id; ?>" ,
						
						message : msg
	
					}


					)
					.done(function( data ) {
   
					//$("#writeme2").html(data);
					
					//alert(data);
					
					
					});	
					
					
					
					
					}
					
					
					
					
					
					</script>
					

				</div> <!-- /widget -->

				<div class="widget grid4">

					<div class="widget-header">
						<h3 class="widget-title">Senders/Receivers</h3>
						<div class="widget-controls">
								
						</div>
					</div>
					
					<span id="writeme"></span>
					

		<!--			<div style='cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);' class='widget-content pad20'>
					<br>
					<b>Abhishek Sharma</b>
					<br>
					Hi bhai kaisa hai?
					</div>
					
					<div style="cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);" class="widget-content pad20">
					<br>
					<b>Amita Sanole</b>
					<br>
					Another message
					<br>
					</div>	
					
					
					

				</div> <!-- /widget -->


				<div class="widget grid4">
				</div>

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
	
<script type="text/javascript">
sss = 0;
function ajaxmesscall(sum1)
					{	
	 
	 
		sss = sum1;			
		
		
		$('#msg').show();
		$('#smsg').show();
					$.post( "dm.php", 
					{
						id: "<?php echo $id; ?>" ,
						sum : sum1
	
	
					}


					)
					.done(function( data ) {
   
					$("#writeme2").html(data);
					});	
					}
					
					
</script>
	
	

	
	
	<script>
					function ajaxcall()
					{	
	
					//alert("hi i am calling u ");
					$.post( "d.php", 
					{
						id: "<?php echo $id; ?>" 
	
	
					}


					)
					.done(function( data ) {
   
					$("#writeme").html(data);
					});	
					}
					
					
					
					ajaxcall();
					
					

					
					</script>		
					
					

<script>
setInterval("ajaxcall();",1000);


//function callme()
//{
	//setInterval("ajaxcall()",10000);
//}


</script>

						
	
</body>

<!-- Mirrored from themes-pixeden.com/demos/novus/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:13 GMT -->
</html>