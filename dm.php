<?php
session_start();
$id = $_POST['id'];
$sum = $_POST['sum'];
$_SESSION['sum'] = $sum; /* send sum to session */


$otherid =$sum - $id;

include 'mysql.php';
					/* Fetch different ids whose last messsage we want to load */
					$result =mysql_query("select * from scrap WHERE (senderid = '$id' OR recieverid = '$id') and senderid +  recieverid = '$sum' order by scrapid asc");
					
					/* Get the names of first user */
					
					$r = mysql_query("select firstname,lastname from stuacc where id ='$id'");
					$rw = mysql_fetch_array($r);
					$name1 = $rw['firstname'] . ' ' . $rw['lastname'];
					
			

					/*Get the profile picture of first user */
					$r = mysql_query("select image from profile where userid ='$id'");
					$rw = mysql_fetch_array($r);
					$profile1 = $rw['image'];
					
					
			
					/* Get the names of second user */
					
					$r = mysql_query("select firstname,lastname from stuacc where id ='$otherid'");
					$rw = mysql_fetch_array($r);
					$name2 = $rw['firstname'] . ' ' . $rw['lastname'];
					
					
					/*Get the profile picture of second user */
					$r = mysql_query("select image from profile where userid ='$otherid'");
					$rw = mysql_fetch_array($r);
					$profile2 = $rw['image'];
					
					
					
					//echo 'Name 1 : ' .$name1 . ' Name 2 : ' . $name2;
					//echo $profile1 . $profile2;
					
					
					
					while($row = mysql_fetch_array($result))
					{
					
					
					
			/*			echo"		
							<div style='cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);' class='widget-content pad20'>
							<br>
							<b>" ;
						if($row['senderid'] == $id)	
							echo 	$name1 ;
						else
							echo $name2;
						echo "</b>
							<br>
							" . $row['smessage'] . 
							"
							</div>";
			*/
				
							if($row['senderid'] == $otherid) /* If someone else has send a message */
							{
							
					         echo"				<div class='comment'>  <!-- print message received -->
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
							
							<div class='comment-text'>
								 " . $row['smessage'] . "
							</div> <!-- /comment-text -->

						</div> <!-- /comment -->
						
				";			
							
							}

							else if ($row['senderid'] == $id)	/* When the user has sent message */
							{
							
							
							echo "
<br><br>
				<div class='comment-reply'><!-- print message sent -->
								<div class='reply-header'>
									<div class='reply-person'>
										<div class='comment-img'>
											<img src='$profile1' rel='comment-1'>
										</div>
										<!--<div class='comment-hex hex-green'></div>-->
									</div>
									<div class='reply-info'>
										<a href='profile.php?profileid=$id'><div class='c-name'>$name1</div></a>
										<!--<div class='c-time'>2:36 pm</div>-->
									</div>
									
								</div>

								<div class='comment-text'>
									" . $row['smessage'] . "
								</div> <!-- /comment-text -->
							</div> <!-- /comment-reply -->

			";
							
							
							
							
							
								
							}
							
							
				
					}
					
					
					
					
?>


