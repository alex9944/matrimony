<?php include("memprotect.php"); ?>

<?php include("config.php"); ?>  

  

 <?php

$strid = $_SESSION['matriid'];

$strrm  = 0;
$strsm  = 0;
$strppr = 0;

//|||||||||||||||| COUNT RECEIVED PERSONALIZED MESSAGES ||||||||||||||||||||||||\\

  $strrmsql = mysql_query("select Count(ToID) AS TotReceive from receivemessage Where ToID= '$strid' Group by ToID LIMIT 0 , 30 ");

  while($row = mysql_fetch_array($strrmsql))

  {

  $strrm = $row['TotReceive'];

  }

////////////////////////////////////////////////////////////////







// ||||||||||||| COUNT SENT PERSONALIZED MESSAGES ||||||||||||||||||||||////////////

$sql = "select Count(sender) AS TotSent from sendmessage Where receiver= '$strid' Group by sender LIMIT 0 , 30 ";
$strsmsql = mysql_query($sql);

  while($row = mysql_fetch_array($strsmsql))

  {

  $send_count = $row['TotSent'];

  }


$sql = "select Count(sender) AS TotSent from sendmessage Where sender= '$strid' Group by sender LIMIT 0 , 30 ";
$strsmsql = mysql_query($sql);

  while($row = mysql_fetch_array($strsmsql))

  {

  $receive_count = $row['TotSent'];

  }


// ||||||||||||| COUNT RECEIVED Photo Password Requesters Message ||||||||||||||||||||||////////////

$strsmsql = mysql_query("select Count(ReceiverID) AS TotReceive from photoprotectrequesters  Where ReceiverID= '$strid' and ReceiverResponse = 'Pending' Group by ReceiverID LIMIT 0 , 30 ");

  while($row = mysql_fetch_array($strsmsql))

  {

  $strppr = $row['TotReceive'];

  }







  

?>



 

  <div class="profiledetails">
 <h2>Send Message</h2>
        <hr>
        <table cellspacing="10" cellpadding="10" border="0" width="100%">
  <tbody><tr>
    <td width="50%">
    
    <ul class="alerts">
	<li>&nbsp;Personalized Message Received</li>
	<li style="padding-left:15px;"><a class="btn_alerts alerts_email" href="inbox_msg.php">Inbox<span class="pink"> (<?php if (empty ($send_count)) { print  "0"; } else { print $send_count;} ?>)</span></a></li>
    </ul>
    
    </td>
    <td>
    
    <ul class="alerts">
	<li>&nbsp;Personalized Message Sent</li>
<li style="padding-left:15px;"><a class="btn_alerts alerts_email" href="sent_msg.php">Sent<span class="pink">(<?php if (empty ($receive_count)) { print  "0"; } else { print $receive_count;} ?>)</span></a></li>
    </ul>
    </td>
  </tr>
  <tr style="display:none;">
    <td width="50%">
    
    <ul class="alerts">
	<li>&nbsp;Photo Protect Password Requesters</li>
	<li style="padding-left:15px;"><a class="btn_alerts alerts_email" href="pp_inbox_msg.php">Inbox<span class="pink"> (<?php if (empty ($strppr)) { print  "0"; } else { print $strppr;} ?>)</span></a></li>
    </ul>
    
    </td>
    <td>
    </td>
  </tr>
</tbody></table>
</div>