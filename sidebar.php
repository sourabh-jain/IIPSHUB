<?php
/* get the current filename */
$filename = basename($_SERVER['SCRIPT_NAME']);

//echo $filename;

?>

<ul class="mainNav">
				
				<?php
				
				if($filename=='profile.php')
					echo '<li class="active">';
				else 
					echo '<li>';
					
					
				echo'	<a href="profile.php"><i class="fa fa-user"></i><br>My Profile</a>
				</li>';
				
				if($filename=='friends.php')
					echo '<li class="active">';
				else
					echo '<li>';
					
					
				echo'	<a href="friends.php"><i class="fa fa-group"></i><br>Friends</a>
				</li>';
				
				
				if($filename=='messages.php')
					echo '<li class="active">';
				else
					echo '<li>';
				
				echo'	<a href="messages.php"><i class="fa fa-comments"></i><br>Messages</a>
					<!--<span class="badge badge-mNav">4</span>-->
				</li>';
				
				if($filename=='blogs.php')
					echo '<li class="active">';
				else
					echo '<li>';
				
				echo'	<a href="blogs.php"><i class="fa fa-paperclip"></i><br>Blog</a>
				</li>
				
			</ul>';
			
			?>