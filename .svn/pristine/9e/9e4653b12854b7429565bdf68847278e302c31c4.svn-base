<?php include("memprotect.php"); ?>

<?php include("config.php"); ?>



<?php

//|||||||||||||||| COUNT EXPRESS SENT ||||||||||||||||||||||||\\

  $streisentsql = mysql_query("SELECT Count( eisender ) AS eisendTot FROM expressinterest WHERE eisender = '$strid' GROUP BY eisender LIMIT 0 , 30 ");

  while($row = mysql_fetch_array($streisentsql))

  {

  $streisent = $row['eisendTot'];

  }

////////////////////////////////////////////////////////////////

?>



<?php

//|||||||||||||||| COUNT EXPRESS RECEIVE ||||||||||||||||||||||||\\

  $streireceivesql = mysql_query("SELECT Count( eireceiver ) AS eireceiveTot FROM expressinterest WHERE eireceiver = '$strid' GROUP BY eireceiver LIMIT 0 , 30 ");

  while($row = mysql_fetch_array($streireceivesql))

 {

  $streireceive = $row['eireceiveTot'];

 }

////////////////////////////////////////////////////////////////

?>



<?php

//|||||||||||||||| COUNT EXPRESS INTEREST SENT ///PENDING STATUS\\\ ||||||||||||||||||||||||\\

  $strsendpendingsql = mysql_query("SELECT Count( eirec_accept ) AS eireceiv_pendingTot FROM expressinterest WHERE eisender = '$strid' AND eirec_accept = 'Pending' GROUP BY eirec_accept LIMIT 0 , 30 ");

 

  while($row = mysql_fetch_array($strsendpendingsql))

 {

  $strsendpending = $row['eireceiv_pendingTot'];

 }

////////////////////////////////////////////////////////////////

?>





<?php ///////////COUNT EXPRESS INTEREST SENT ///ACCEPT STATUS\\\ 

 $strsendacceptsql = mysql_query("select Count(eirec_accept) AS eireceiv_acceptTot from expressinterest Where eisender = '$strid' and eirec_accept='Accept' Group by eirec_accept LIMIT 0 , 30 ");

while($row = mysql_fetch_array($strsendacceptsql))

 {

  $strsendaccept = $row['eireceiv_acceptTot'];

 }

?>







<?php ///////////COUNT EXPRESS INTEREST SENT ///DECLINE STATUS\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 

$strsenddeclinesql = mysql_query("select Count(eirec_accept) AS eireceiv_declineTot from expressinterest Where eisender = '$strid' and eirec_accept='Decline' Group by eirec_accept  LIMIT 0 , 30 ");

 while($row = mysql_fetch_array($strsenddeclinesql))

 {

  $strsenddecline = $row['eireceiv_declineTot'];

 }

?>





<?php ////////COUNT EXPRESS INTEREST RECEIVED ///PENDING STATUS\\\ 



$strrecpendsql = mysql_query("select Count(eisender_accept) AS eisender_pendingTot from expressinterest Where eireceiver = '$strid' and eisender_accept='Pending' Group by eisender_accept LIMIT 0 , 30 ");





 while($row = mysql_fetch_array($strrecpendsql))

 {

  $strrecpend = $row['eisender_pendingTot'];

 }

?>







<?php 



////////COUNT EXPRESS INTEREST RECEIVED ///DECLINE STATUS \\\\\\\\\\\\\\\\\\\\\\\\\\\ 



$strrecdecsql = mysql_query("select Count(eisender_accept) AS eisender_declineTot from expressinterest Where eireceiver = '$strid' and eisender_accept='Decline' Group by eisender_accept LIMIT 0 , 30 ");



 while($row = mysql_fetch_array($strrecdecsql))

 {

  $strrecdec = $row['eisender_declineTot'];

 }

?>





<?php //////////////////////////////COUNT EXPRESS INTEREST RECEIVED ///ACCEPT STATUS\\\

$strrecacceptsql = mysql_query("select Count(eisender_accept) AS eisender_acceptTot from expressinterest Where eireceiver = '$strid' and eisender_accept='Accept' Group by eisender_accept LIMIT 0 , 30 ");



 while($row = mysql_fetch_array($strrecacceptsql))

 {

  $strrecaccept = $row['eisender_acceptTot'];

 }


$strid = $_SESSION['matriid'];

//|||||||||||||||| COUNT RECEIVED PERSONALIZED MESSAGES ||||||||||||||||||||||||\\

  $strrmsql = mysql_query("select Count(receiver) AS TotReceive from sendmessage Where receiver = '$strid' Group by receiver");

  while($row = mysql_fetch_array($strrmsql))

  {

  $strrm = $row['TotReceive'];

  }
  
  
   $strrmsql = mysql_query("select Count(vmemberid) AS TotReceive from visitor Where vmemberid = '$strid'");

  while($row = mysql_fetch_array($strrmsql))

  {

  $strrm1 = $row['TotReceive'];

  }
  
  
   $strrmsql = mysql_query("select Count(memberid) AS cnt  from blockmember Where memberid = '$strid'");

  while($row = mysql_fetch_array($strrmsql))

  {

  $strrm2 = $row['cnt'];

  }
  
  
  
  $strrmsql = mysql_query("select Count(receiver) AS cnt  from photo_request Where 	receiver = '$strid'");

  while($row = mysql_fetch_array($strrmsql))

  {

  $strrm3 = $row['cnt'];

  }
  
  
  $strrmsql = mysql_query("select Count(sender) AS cnt  from photo_request Where sender = '$strid'");

  while($row = mysql_fetch_array($strrmsql))

  {

  $strrm4 = $row['cnt'];

  }
  
  
	$strrmsql = mysql_query("select Count(eisender) AS cnt  from expressinterest Where eisender  = '$strid'");
	
	while($row = mysql_fetch_array($strrmsql))
	
	{
	
	$strrm5 = $row['cnt'];
	
	}
  
  
  $strrmsql = mysql_query("select Count(receiver) AS cnt  from sendmessage Where 	receiver  = '$strid'");
	
	while($row = mysql_fetch_array($strrmsql))
	
	{
	
	$strrm6 = $row['cnt'];
	
	}
  

$strrmsql = mysql_query("select Count(memberid) AS cnt  from addtofavorite Where memberid = '$strid'");

  while($row = mysql_fetch_array($strrmsql))

  {

  $fav_count = $row['cnt'];

  }
  
?>
<div class="profiledetails">
        <h2>Personal Alerts</h2>
        <hr>
        <table width="100%" cellspacing="10" cellpadding="10" border="0">
  <tbody><tr>
    <td width="50%" style="vertical-align:top;">
    
    <ul class="alerts">
	<?php /*?><li><a class="btn_alerts alerts_email" href="sendmessagelist.php">Email <span class="pink">(<?php if (empty ($strrm)) { print  "0"; } else { print $strrm;} ?>)</span></a></li><?php */?>
	<li><a class="btn_alerts alerts_viewedPicture" href="visitors.php">Viewed Your Picture <span class="pink">(<?php if (empty ($strrm1)) { print  "0"; } else { print $strrm1;} ?>)</span></a></li>
    <li><a class="btn_alerts alerts_profileViewed" href="visitors.php">Your Profile Viewed <span class="pink">(<?php if (empty ($strrm1)) { print  "0"; } else { print $strrm1;} ?>)</span></a></li>
	<li><a class="btn_alerts alerts_blocklist" href="my_blocked_members.php">Your Blocked List<span class="pink"> (<?php if (empty ($strrm2)) { print  "0"; } else { print $strrm2;} ?>)</span></a></li>
    </ul>
    
    </td>
    <td style="vertical-align:top;">
    
    <ul class="alerts">
	
	<?php /*?><li><a class="btn_alerts alerts_pictReq" href="photoreqreceived.php">Picture  request Received<span class="pink"> (<?php if (empty ($strrm3)) { print  "0"; } else { print $strrm3;} ?>)</span></a></li>
	<li><a class="btn_alerts alerts_pictReqSend" href="photoreqsent.php">Picture  request sent&nbsp;<span class="pink">(<?php if (empty ($strrm4)) { print  "0"; } else { print $strrm4;} ?>)</span></a></li><?php */?>
	
    <li><a class="btn_alerts alerts_membCont" href="contactedbyme.php">Members  Contacted by me&nbsp;<span class="pink">(<?php if (empty ($strrm5)) { print  "0"; } else { print $strrm5;} ?>)</span></a></li>
	<li><a class="btn_alerts alerts_contMemb" href="contactedme.php">Members  who have contacted me&nbsp; <span class="pink">(<?php if (empty ($strrm6)) { print  "0"; } else { print $strrm6;} ?>)</span></a></li>
	<li><a class="btn_alerts alerts_expIntrSend " href="my_favourites.php">Your Favourite List<span class="pink"> (<?php if (empty ($fav_count)) { print  "0"; } else { print $fav_count;} ?>)</span></a></li>
    </ul>
    
    
    
    
    </td>
  </tr>
</tbody></table>



</div>

<div class="profiledetails">

        <h2>Express Interest</h2>
        <hr>
        <table cellspacing="10" cellpadding="10" border="0" width="100%">
  <tbody><tr>
    <td width="50%">
    
    <ul class="alerts">
	<li>&nbsp;<a href='express_received_acceptedlist.php' class="btn_alerts alerts_expIntr">Express Interest Received (<?php if (empty ($streireceive)) { print  "0"; } else { print $streireceive;} ?>)</a></li>
	<li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrAccept" href="express_received_acceptedlist.php">Accepted<span class="pink"> (<?php if (empty ($strrecaccept)) { print  "0"; } else { print $strrecaccept;} ?>)</span></a></li>
    <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrPending" href="express_received_pendinglist.php"> Pending&nbsp;<span class="pink">(<?php if (empty ($strrecpend)) { print  "0"; } else { print $strrecpend;} ?>)</span></a></li>
	<li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrDeclined" href="express_received_declinedlist.php"> Declined&nbsp;<span class="pink"> (<?php if (empty ($strrecdec)) { print  "0"; } else { print $strrecdec;} ?>)</span></a></li>
    </ul>
    
    </td>
    <td>
    
    <ul class="alerts">
	<li>&nbsp;<a href='express_sent_Acceptlist.php' class="btn_alerts alerts_expIntrSend">Express Interest Sent(<?php if (empty ($streisent)) { print  "0"; } else { print $streisent;} ?>)</a></li>
<li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrAccept" href="express_sent_Acceptlist.php">Accepted <span class="pink">(<?php if (empty ($strsendaccept)) { print  "0"; } else { print $strsendaccept;} ?>)</span></a></li>
    <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrPending" href="express_sent_pendinglist.php"> Pending&nbsp;<span class="pink">(<?php if (empty ($strsendpending)) { print  "0"; } else { print $strsendpending;} ?>)</span></a></li>
	<li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrDeclined" href="express_sent_declinelist.php"> Declined&nbsp;<span class="pink"> (<?php if (empty ($strsenddecline)) { print  "0"; } else { print $strsenddecline;} ?>)</span></a></li>
    </ul>
    
    
    
    
    </td>
  </tr>
</tbody></table>
</div>