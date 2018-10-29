<?php
session_start();
include 'mysql.php';

$senderid = $_POST['senderid'];
$recieverid =$_SESSION['sum'] - $senderid;
$message = $_POST['message'];

/* donot submit blank messages */
if($message!="")
{
	
	date_default_timezone_set('Asia/Kolkata');
	$td = date('o-m-d'); /* Get current date */
	$tt = date('H:i:s');  /* Get current time */
	

	$result = mysql_query("INSERT INTO `scrap`(`scrapid`, `senderid`, `recieverid`, `smessage`, `time`, `date`, `read`) 
	VALUES ('','$senderid','$recieverid','$message','$tt','$td','yes')");
}



?>