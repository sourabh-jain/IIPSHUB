<?php

$id = $_SESSION['stuid'];
$nresult = mysql_query("select * from addfriends where friendid ='$id' and status='pending'");
@$count = mysql_num_rows($nresult);


/* Get the no of pending friendship request to the user */

?>
<div class="wrapper20">
					<a class="logo" href="#" title="">
						<img src="images/logo.png" rel="logo">
					</a>
					<div class="topNav clearfix">
						<input class="topSearch" type="text" placeholder="Search...">
						<ul class="tNav clearfix">
							<li><a href="#" onclick="return false;"><i class="fa fa-search icon-white"></i></a></li>
							<li>
								<a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-globe"></i></a>
								
								<?php
								if($count!=null)
								echo'<span class="badge badge-tNav">' . $count . '</span>';
								
									

								?>
								
								
								  <ul class="dropdown-menu pull-right">
								
								<?php 

								
								  if($count!=null)  /* Get list of friendship requests */
								  {

									while($nrow = mysql_fetch_array($nresult))
									{
										/* get name of friend */
		
										$fid= $nrow['meid'];
										$r = mysql_query("select firstname,lastname from stuacc where id ='$fid'");
										$rw = mysql_fetch_array($r);
										$name = $rw['firstname'] . ' ' . $rw['lastname'];
					
										/* Echo the name */
										echo '<li><a href="profile.php?profileid=' . $fid . '"><i class="fa fa-group"></i> ' . $name . '</a></li>';
					
					
									}

								}

							  ?>
								    
									
									
									
									
								  </ul>
							</li>
							<li>
								<a href="messages.php"><i class="fa fa-comment icon-white"></i></a>
							<!--	<span class="badge badge-tNav">4</span>-->
							</li>
							<li><a href="logout.php"><i class="fa fa-times icon-white"></i></a></li>
						</ul>
					</div> <!-- /topNav -->
				</div>