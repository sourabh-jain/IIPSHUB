<?php	
session_start();

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





if (isset($_POST['register']))
{

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$designation = $_POST['designation'];


mysql_query("INSERT INTO `stuacc`(`id`, `designation`, `firstname`, `lastname`, `email`, `password`, `gender`, `dob`) VALUES ('','$designation','$firstname','$lastname','$email','$password','$gender','$dob') ");


/* After register get the id */

$result = mysql_query("SELECT * from stuacc where email = '$email'");
$row = mysql_fetch_array($result);
$id = $row['id'];



/* Create empty profile */
mysql_query("INSERT INTO `profile`(`profileid`, `userid`, `relstat`, `city`, `state`, `pincode`, `country`, `image`, `hschool`, `coluni`, `course`) VALUES ('','$id') ");


$_SESSION['stuid']=$id;
$_SESSION['logid']=$email;
header("Location: profile.php");  /* Redirect to profile page */






}


?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
		<link rel="stylesheet" href="assets/css/style.css">
		
		 <!--<script src="js/jquery-1.9.1.min.js"></script>-->
        

		
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="googlefonts/google.css">
		<!--<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
		-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

		
		
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
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1 class="lr3"><strong>IIPS<b><i>HUB</i></b></strong></h1>
                            <div class="description">
                            	<p class="lr2">
	                            	IIPS Social Networking
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div id="lf" class="form-box" onmouseover="$(this).css('opacity','0.85');" onmouseout="$(this).css('opacity','0.3');" style="opacity:0.3;width:150px">
	                        	<div onmouseover="$('body').css('cursor','pointer');" 
								
								onmouseout="$('body').css('cursor','auto');" 
								onclick="$('.hidebr1').hide();$('#lf').css('width','350px');$('#loginf').show(300);$('#loginfi').show(300)" class="form-top"  style="border-radius:100px">
	                        		<div class="form-top-left">
									<br class="hidebr1">
	                        			<h3  class="lr">Login</h3>
									<br class="hidebr1">
	                            		<!--<p></p>-->
										<div id="loginf" style="display:none">
										<form role="form" action="" method="post" class="login-form">
										<br>
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Email" class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                       &nbsp;&nbsp;&nbsp;&nbsp; <button type="submit"  name="logiin" class="btn">Sign in!</button>
				                    </form>
									</div>
	                        		</div>
									
	                        		<div id="loginfi"style="display:none" class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
		                    </div>
		                
		                	
                        </div>
                        
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"></div>
                        	
                        <div class="col-sm-4">
                        	
                        	<div id="rf" class="form-box" onmouseover="$(this).css('opacity','0.85');" onmouseout="$(this).css('opacity','0.3');" style="opacity:0.3;width:150px">
                        		<div onmouseover="$('body').css('cursor','pointer');" 
								
								onmouseout="$('body').css('cursor','auto');" 
								onclick="$('.hidebr2').hide();$('#rf').css('width','350px');$('#registerf').show(300);$('#registerfi').show(300)" class="form-top"  style="border-radius:75px"class="form-top">
	                        		<div class="form-top-left">
	                        			<br class="hidebr2">
										<h3 class="lr">Register</h3>
	                            		<br class="hidebr2">
										<p></p>
										
									
										<div id="registerf" style="display:none">
											<br>
												                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name" >First name</label>
				                        	<input type="text" name="firstname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lastname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-email">Password</label>
				                        	<input type="password" name="pass" placeholder="Password" class="form-email form-control" id="form-email">
				                        </div>
										<b>
										<div class="form-group">
										<span class="lr2"> 
										
										<input name="designation"  value="student" type="radio"> I am student<br>
										<input name="designation" value="faculty" type="radio"> I am faculty</span>
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-email">Gender</label>
				                        	<select class="form-control" name="gender">
											<option value="">Select Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											</select>	
											</div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-email">Date Of Birth</label>
												<input  type="date" placeholder="Date of Birth"  name="dob">
											
											
											
											
											
				                        </div>
											
								
											
											
										
										</b>
										
										
				                       <!-- <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
				                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>-->
				                        &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register" class="btn">Sign me up!</button>
				                    </form>
									</div>
			
	                        		</div>
	                        		<div id="registerfi" class="form-top-right" style="display:none">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class=""></div>
        				<p></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        
		<!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

		
    </body>

</html>