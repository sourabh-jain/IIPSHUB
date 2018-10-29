<?php
hasession_start();
include_once("mysql.php");

$error_message='';
if(isset($_SESSION["logid"]))
{
	header("Location: profile.php");
}
if(isset($_POST["logiin"]))
{
	$logres = mysql_query("SELECT * FROM stuacc WHERE email='$_POST[username]' AND password='$_POST[pass]' ");

	if(mysql_num_rows($logres) == 1)
	{
	
	$row = mysql_fetch_array($logres);
	$_SESSION["logid"] = $_POST["username"];
	$_SESSION['stuid']=$row['id'];
	header("Location: profile.php");
	}
	else
	{
	$_SESSION["logfa"] = "Invalid username or password";
	$error_message="Invalid Username or Password!";
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/novus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:13 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Novus Admin Theme | Login</title>

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
	<div id="wrapper" class="login">

		<div id="top">
			<div id="topBar" class="clearfix widget-content pad10">
					<a class="logo" href="index.html">
						<img src="images/logo.png" rel="logo">
					</a>
				<div class="topNav clearfix">
						<ul class="tNav clearfix">
							<li>
								<a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-gear icon-white"></i></a>
								  <ul class="dropdown-menu pull-right">
								    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
	                                <li class="divider"></li>
	                                <li><a href="#"> Other actions</a></li>
								  </ul>
							</li>
						</ul>
					</div> <!-- /topNav -->		
			</div> <!-- /topBar -->
			
		</div> <!-- /top -->

<div class="widget-content pad20 clearfix">
	<!--	<div class="userImg">
		<img src="images/user.jpg" rel="user">
		</div>-->
		<h3 class="center"></h3>
		
		<span style="color:#FF0000">
		<?php 
		
		echo $error_message;
		
		
		?>
		</span>
		
		<span class="center light">Login</span>
		<form action="login.php" method="post">
		
			<input type="email" class="input-text" name = "username" placeholder="Email" />
			<input type="password" class="input-text" name = "pass" placeholder="Password" />
			<input type="checkbox" id="">
			<label for="chkbx-1">Remember me</label>
			<span class="custom-input center">
			
			
                <input class="btn btn-blue btn-full"name="logiin" type="submit" id="logiin" value="Click Here to Login">
				
                
				
				
		</form>
            </span>
</div>	<!-- /widget-content -->	


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

<!-- Mirrored from themes-pixeden.com/demos/novus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:13 GMT -->
</html>