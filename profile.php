<?php
session_start();
include_once 'mysql.php';


if (!isset($_SESSION['stuid']))
	header("Location: index.php");
	
$id = $_SESSION['stuid'];
$filename='';


/* Get the profileid whose profile we are visiting */


$profileid='';

if (!isset($_GET['profileid']))
	$profileid=$id;
else
	$profileid = $_GET['profileid'];



	
	
if(isset($_POST['friend1'])) /* Send friendshpip request */
{

mysql_query("INSERT INTO `addfriends`(`addid`, `meid`, `friendid`, `status`) VALUES ('','$id','$profileid','pending')");

//echo '<script>alert("add as friend");</script>';
}
if(isset($_POST['friend2'])) /* delete friendship request */
{
mysql_query("delete from addfriends where meid='$id' and friendid='$profileid'");

}
if(isset($_POST['friend3'])) /* Accept friendship request */
{

mysql_query("update addfriends set status='accepted' where meid='$profileid' and friendid='$id'");
//echo '<script>alert("accept");</script>';

}
if(isset($_POST['friend4']) )/* reject friendship request */
{
mysql_query("delete from addfriends where meid='$profileid' and friendid='$id'");
//echo '<script>alert("reject");</script>';
}
if(isset($_POST['friend5'])) /* Unfriend */
{
mysql_query("delete from addfriends where (meid='$id' and friendid='$profileid') or  (meid='$profileid' and friendid='$id')");
//echo '<script>alert("unfriend");</script>';
}









if(isset($_POST['coversubmit']))  /* If user has selected a file to upload (for cover picture); */
{
/* Upload the file */
	if (($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/bmp")
	|| ($_FILES["file"]["type"] == "image/png"))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
	
		
	
		
		$ext = end((explode(".", $_FILES["file"]["name"])));
	
		$filename= $id . '.' .  $ext;
		
		if (file_exists("coverimg/" . $filename))
		{
		// Delete the previous image
			unlink("coverimg/" . $filename);
		}
	
		
		
		move_uploaded_file($_FILES["file"]["tmp_name"], "coverimg/" . $filename);
		//echo "Stored in: " . "coverimg/" . $_FILES["file"]["name"];
	
		}
	}
	else
	{
		echo "Invalid file";
	}

	mysql_query("UPDATE profile SET coverimage = 'coverimg/$filename' WHERE userid = '$id' ");

		//echo "<script>alert('$id');</script>";	

}

else if(isset($_FILES["file"]["type"]))  /* If user has selected a file to upload (for profile picture); */
{
/* Upload the file */
	if (($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/bmp")
	|| ($_FILES["file"]["type"] == "image/png"))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
	
		
	
		
		$ext = end((explode(".", $_FILES["file"]["name"])));
	
		$filename= $id . '.' .  $ext;
		
		if (file_exists("usersimg/" . $filename))
		{
		// Delete the previous image
			unlink("usersimg/" . $filename);
		}
	
		
		
		move_uploaded_file($_FILES["file"]["tmp_name"], "usersimg/" . $filename);
		//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	
		}
	}
	else
	{
		echo "Invalid file";
	}

	mysql_query("UPDATE profile SET image = 'usersimg/$filename' WHERE userid = '$id' ");

		//echo "<script>alert('$id');</script>";	

}

$filename='';


	
	
	
	
	
	
	
	
// Retrieve user profile data //



$result= mysql_query("select * from stuacc where id=" . $profileid);
$row = mysql_fetch_array($result);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$designation =$row['designation'];
$gender =$row['gender'];
$dob = $row['dob']; /* in YYYY-MM-DD */
$t = explode("-",$dob);
$yy = $t[0];
$dd = $t[2];
$mm ='';
switch($t[1])
{
	case '01':$mm ='January'; break;
	case '02':$mm ='February'; break;
	case '03':$mm ='March'; break;
	case '04':$mm ='April'; break;
	case '05':$mm ='May'; break;
	case '06':$mm ='June'; break;
	case '07':$mm ='July'; break;
	case '08':$mm ='August'; break;
	case '09':$mm ='September'; break;
	case '10':$mm ='October'; break;
	case '11':$mm ='November'; break;
	case '12':$mm ='December'; break;
	
}


/* Get other details */

$result= mysql_query("select * from profile where userid=" . $profileid);
$row = mysql_fetch_array($result);
$city = $row['city'];
$course = $row['course'];



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
		<link rel="stylesheet" type="text/css" href="googlefonts/google.css">
	<!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />

	<link href="css/style.css" rel="stylesheet" type="text/css" />
<style>
      .lr {
        font-family: 'Tangerine', serif;
        font-size: 48px;
      }
	  
	  
	  .lr1{-
	font-family: 'Lobster', Georgia, Times, serif;
	font-size: 70px;
	line-height: 100px;
}

.lr2 {
	font-family: 'Cabin', Helvetica, Arial, sans-serif;
	font-size: 15px;
	line-height: 25px;
}
	  .lr3{
	  
 font-family: 'Dancing Script', Georgia, Times, serif;
 font-size: 59px;
 line-height: 60px;
}
	  
	  
    </style>
	
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

		<div id="main" class="clearfix" style="height:800px">

						<div class="secInfo">
							
						</div> <!-- /SecInfo -->

				
				<div class="fluid" style="border:0px solid">

					
					
					<div style="border:0px solid" class="widget grid9">
					
					<?php
					/* get cover photo */
					$coverimage='';
					$result = mysql_query("select * from profile where userid='$profileid'");
					$row = mysql_fetch_array($result);
					$coverimage = $row['coverimage'];
					
					?>
					
					<img src="<?php echo $coverimage; ?>" onmouseover="$('#uploadcover').show();" 
				onmouseout ="$('#uploadcover').show();"  width="640px" height="382px" style="border-radius:6px"	>
		


  <?php
				if($profileid ==$id)
				
				echo'		
	<form id="editcover" name="editcover" method="post" action="profile.php" enctype="multipart/form-data" ><br />
   				
   <div class="image-upload">
    <label for="file-input2">
					
	<span id="uploadcover"  class="btn btn-light-grey" style="opacity:0.2;position: absolute; 
   top: 30px; 
   left: 500px; 
   width: %; " >Change</span>
   </label>
	<button id="coversubmit" name="coversubmit" type="submit" class="btn btn-light-grey" style="display:none;opacity:0.4;position: absolute; 
   top: 30px; 
   left: 500px; 
   width: %; "  >Submit</button>
	
    <input name="file" onchange="$(\'#uploadcover\').hide();$(\'#coversubmit\').show();" id="file-input2" type="file">
	
	</div>
	</form>';
	
	else
	
	{
	
	
	/* Find if profileid is friend or not */
	$f='';   /* Add as a friend OR Unfriend text */
	$fs='';  
				/* 1. Add as a friend
				   2. Frienship request is sent
				   3. Accept Friendship Request
				   4. Delete Friendship Request
				   5. Unfriend
				
				*/
	
	
	
	$fsum  = $profileid + $id;
	$r = mysql_query("select * from addfriends where (meid + friendid = $fsum) and (meid  = $id or friendid = $id)");
	$rw = mysql_fetch_array($r);
	
	
	
	if ($rw==null) /* Not friend */
	{
		$f =" Add as a friend";
		$fs=1;
	}
	
	else if($rw['status']=='pending')  /* If friendship request is sent by him or user */
	{
		if($rw['meid']==$id)  /* If user has sent request */
		{
			$f = 'Friendship Request sent';
			$fs=2;
		}
		else if($rw['meid']==$profileid) /* If other user has sent request */
		{
			$f = 'Accept';
			$fs=3;
		}
		
	}
	else
	{
		$f =" Unfriend";
		$fs = 5;
	}
	
	
	echo '
	<form name="friendshipform" method="post"><input type="hidden" name="status" value=' .$fs .'>
	<div></div>
	<button id="addfriend" name="friend' . $fs .'" type="submit" class="btn btn-light-grey" style="opacity:0.9;position: absolute; 
   top: 350px; 
   left: 460px; 
   width: %; "  >'.$f.'</button>';
   
   if($fs==3)
   {
	echo '
		<button id="addfriend" name="friend4" type="submit" class="btn btn-light-grey" style="opacity:0.9;position: absolute; 
   top: 350px; 
   left: 550px; 
   width: %; "  >Reject</button>';

   }
   
   
   echo'
   </form>
	
	
	';
	
	
	}
	
	
	
	?>


   
   
   
						<div class="widget-header">
						
							
						</div>		
							<!--<div class="widget-controls">
							
								<div class="btn-group xtra"> <!-- btn dd 
										                            </div><!-- /btn dd 
							</div>
						</div>-->	
						<!--<div class="widget-content pad20f">
							<p></p>
						</div> <!-- /widget-content -->
					</div> <!-- /widget -->

					<div style="border:0px solid" class="widget grid3" >
						<div class="userInfo" onmouseover="$('#uploadpics').html('Upload Photo!');" 
				onmouseout="$('#uploadpics').html('');">
						<div style="border:0px solid" 	style="margin-left:100px;border:0px solid"  class="userImgFull">
						
						
						<?php
						
						/*if(!isset($image) || $image==null)
						{
							/* Get gender */
							/*$result= mysql_query("select * from stuacc where id=" . $profileid);
						/*	$row = mysql_fetch_array($result);
							if($row['gender']=='male')
								$image = 'usersimg/male.jpg';
							else if($row['gender']=='Female')
								$image = 'usersimg/female.jpg';
								
							
						}
						*/
						
						
						
						$result = mysql_query("select * from stuacc where id='$profileid'");
						$row = mysql_fetch_array($result);

						$name = $row['firstname'];

						$result = mysql_query("select * from profile where userid='$profileid'");
						$row = mysql_fetch_array($result);
						$image = $row['image'];
	


						if(!isset($image) || $image==null)
						{
								/* Get gender */
								$result= mysql_query("select * from stuacc where id=" . $profileid);
								$row = mysql_fetch_array($result);
								if($row['gender']=='male')
									$image = 'usersimg/male.jpg';
								else if($row['gender']=='Female')
									$image = 'usersimg/female.jpg';
									
								
						}


						?>		

						
						
						
						
						
						
						
						?>
							<img src="<?php echo $image; ?>" rel="user">
							
						</div>	
							
					</div> <!-- /userInfo -->
							
					<div class="widget-content pad20">
					
					</div> <!-- /widget-content -->
						
					<div class="divider">
					
					
					
					<span>
					<?php
					
					if($gender=="Male")
					echo"
							<br>
							<i class='fa fa-male'></i>";
					else
					echo"
							<br>
							<i class='fa fa-female'></i>";
					
					echo"
							<b>$firstname $lastname</b>
							<br><br>
							<i class='fa fa-linux'></i> <b> $designation</b>
							 <br><br>";
							 
					if(!empty($city))
					echo"
							<i class='fa fa-home'></i> Lives in <b> $city</b><br><br>";
							
					if(!empty($course))							
					echo"
							 <i class='fa fa-book'></i> Doing	<b> $course</b><br><br>";
							 
							 
					echo"
							 
							 <i class='fa fa-calendar'></i> Born on <b>$dd $mm, $yy<b>
							 
							 ";
							 
						?>	 
							 
							 
					</span>
					
					
					
					</div>

				</div> <!-- /widget -->
				
				
				<?php
				if($profileid ==$id)
				
				echo'
   <form id="edit" name="edit" method="post" action="profile.php" enctype="multipart/form-data" ><br />
   
   
   <div class="image-upload" >
    <label for="file-input">
        <span id="uploadpics" style="color:blue;text-decoration:underline;position: absolute; 
   top: 320px; 
   left: 785px; 
   width: 100%; " ></span>
    </label>

    <input name="file" onchange="this.form.submit()" id="file-input" type="file"/>
	</div>
	</form>
	';
	?>
	
	
	

<style>

.image-upload > input
{
    display: none;
}
</style>
   
   
		
				</div> <!-- /fluid:4+4+4-->

				

			<div class="fluid">
					<div class="widget-content pad20">
						
						
						
					
				</div>  <!-- /widget -->

				
				<div onmouseover="$(this).css('background','#A6E977')" onmouseout="$(this).css('background','#FFF')" style="border:0px solid" class="widget grid2">
				
				<div class="widget-header" style="cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);">
							<h3 class="widget-title"><span class="lr"><a href="friends.php?profileid=<?php 
							echo $profileid; ?>">Friends</a></span></h3>
						</div>
			
				
				
				
				</div>
				
				<div onmouseover="$(this).css('background','#A6E977')" onmouseout="$(this).css('background','#FFF')" style="border:0px solid" class="widget grid2">
				
				<div class="widget-header" style="cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);">
							<h3 class="widget-title"><span class="lr">Photos</span></h3>
						</div>
			
				
				
				
				</div>
				
				
				
				
				
				
				
				<div onmouseover="$(this).css('background','#A6E977')" onmouseout="$(this).css('background','#FFF')" style="border:0px solid" class="widget grid2">
				
				<div class="widget-header" style="cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);">
							<h3 class="widget-title"><span class="lr"><a href='blogs.php?profileid=<?php echo $profileid; ?>'>Blogs</a></span></h3>
						</div>
			
			</div>
			
			
			<div onmouseover="$(this).css('background','#A6E977')" onmouseout="$(this).css('background','#FFF')" style="border:0px solid" class="widget grid4">
				
				<div class="widget-header" style="cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);">
							<h3 class="widget-title"><span class="lr"><a href="messages.php?msgid=<?php echo $profileid; ?>">Send Message </a></span></h3>
						</div>
			
				
				
				
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