<?php
session_start();
$id = $_POST['id'];

/* call for request to dm */


include 'mysql.php';
					/* Fetch different ids whose last messsage we want to load */
					$result =mysql_query("select distinct (senderid + recieverid) as sum, max(scrapid) as maxs FROM scrap WHERE senderid = '$id' OR recieverid = '$id' group by sum order by scrapid desc");

					
					$messages = array();
					while($row = mysql_fetch_array($result))
					{
					
					//echo $row['sum'] . ' : ' . $row['maxs']  . '<br>' ;
					$messages[] = $row['maxs'];
					
					
					}
					$mess = implode(",",$messages);  /* Get a list of top scrapids which we need */
					$mess = '(' . $mess . ')';
				//	echo $mess . ' ';
					
					
					$result = mysql_query("select (senderid + recieverid) as sum, scrapid, senderid, recieverid, smessage, time, date, `read` from scrap where scrapid in $mess order by scrapid desc");
					while($row = mysql_fetch_array($result))
					{
					
					$otherid = $row['sum']-$id;
			//		echo $otherid;
					
					/* Get name of other id */
					$r = mysql_query("select * from stuacc where id='$otherid'");
					$rw= mysql_fetch_array($r);
					//echo $rw['firstname'] . ' ' . $rw['lastname'];
					
					
					echo"	
					<div onclick='ajaxmesscall(this.id)' id='". $row['sum'] ."' style='cursor:pointer;border-bottom:2px solid rgba(0, 0, 0, 0.1);border-right:2px solid rgba(0, 0, 0, 0.1);' class='widget-content pad20'>
					<br>
					<b>" . $rw['firstname'] . ' ' . $rw['lastname'] . "</b>
					<br>
					" . $row['smessage'] . 
					"
					</div>";
			
					
					}
					
					

if( isset($_SESSION['sum']))
	echo "<script>ajaxmesscall(" . $_SESSION['sum'] . ")</script>";
					
					
?>
						
					