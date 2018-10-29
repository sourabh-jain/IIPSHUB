<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once 'mysql.php';
$id=$_SESSION["stuid"];


$result = mysql_query("select * from stuacc where id='$id'");
$row = mysql_fetch_array($result);

$name = $row['firstname'];

$result = mysql_query("select * from profile where userid='$id'");
$row = mysql_fetch_array($result);
$image = $row['image'];



if(!isset($image) || $image==null)
						{
							/* Get gender */
							$result= mysql_query("select * from stuacc where id=" . $_SESSION['stuid']);
							$row = mysql_fetch_array($result);
							if($row['gender']=='male')
								$image = 'usersimg/male.jpg';
							else if($row['gender']=='Female')
								$image = 'usersimg/female.jpg';
								
							
						}


?>

		<div class="wrapper20">
					<div class="userInfo">
						<div class="userImg">
							<img style=" position: relative; "src="<?php echo $image; ?>" rel="user">
							
						</div>
						<div class="userTxt">
							<span class="fullname"><?php  echo $name; ?></span> <i class="fa fa-chevron-right"></i><br>
							<span class="username"></span>
						</div> 	
					</div> <!-- /userInfo -->
					<div class="userStats">
						<div class="uStat">
							<div class="stat-name">
								Friends <!--<div class="stat-badge"></div>-->
							</div>
							<div class="stat-number">10</div>
						</div>
						<div class="uStat">
							<div class="stat-name">
							Messages
								 <!--<div class="stat-badge"></div>-->
							</div>
							<div class="stat-number">90</div>
						</div>
						<div class="uStat graph">
							<div id="stats_visits" class="stat-chart" values="7,18,34,29,20,18,22,31,32,18,13,23,34"></div>
							<div class="stat-name">
								 Visits <!--<div class="stat-badge">+109</div>-->
							</div>
							<div class="stat-number">749</div>

						</div>
						<div class="uStat graph">
							<!--<div id="stats_balance" class="stat-chart" values="7,18,34,29,20,18,22,31,32,18,13,23,34"></div>-->
							
							<div class="stat-name">
								Blogs
							</div>
							<div class="stat-number">5</div>
						</div>
					</div>

					<i class="fa fa-bars icon-nav-mobile"></i>

				</div>
		