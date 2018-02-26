<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
$strtoid = $_GET['MatriID'];

$strsenderid = $_SESSION['matriid'];

$strsenderppp = $_SESSION['ppp'];

/////////////////// SEND PHOTO PASSWORD TO THE MEMBER  //////////////////////////////////////////////	
$result = mysql_query("SELECT * FROM register,siteconfig where MatriID = '$strtoid' ");
while($row = mysql_fetch_array($result))

  {

	$website = $row['Webname'];
	
	$webfriendlyname = $row['WebFriendlyname'];
	
	$logo = $row['Weblogopath'];
	
	$strname = $row['Name'];
	
	$to = $row['ConfirmEmail'];
	
	$strmatriid = $row['MatriID'];
	
	$strsitename = $info['Webname'];
	
	$from = $info['ContactEmail'];
	
	$status       = $_GET['key'];
	
	if($status == 'accept')
	 {
	    $photostatus  =  "<p>Heres your Request Phone Password<br> MatriID :$strsenderid<br> Phone Password : $strsenderppp </p>";
	 }
	else
	 {
	    $photostatus  =  "<p>Heres your Request Phone Password has been declined.</p>";
	 } 
	
	$subject = "Your request Phone Password status : $sitename";
	
	$message = "
	
	<html>
	
	<style type='text/css'>
	
	<!--
	
	.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
	
	.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
	
	-->
	
	</style>
	
	<body>
	
	<table width='600' border='0' cellspacing='0' cellpadding='0'>
	
	<tr>
	
	<td background=$site_url/pics/email_top.gif width=600 height=22><img src='$logo' border=0></td>
	
	</tr>
	
	<tr>
	
	<td background=$site_url/pics/email_middle.gif><table width=600 border=0 cellspacing=2 cellpadding=2>
	
	<tr>
	
	<td width=10>&nbsp;</td>
	
	<td width=562 rowspan=3 valign=top><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
	
	<tr>
	
	<td width=562 valign=top class=style3>Dear $strname,</td>
	
	</tr>
	
	
	
	<tr>
	
	<td valign=top class=style3><p>Thank you for requesting member's Phone Password.</p>
	
	<p>$sitename, the Most Successful Matrimony Portal for Indians.</p>
	
	$photostatus
	
	<p>Warm regards<br>
	
	$sitename's Team<br>
	
	</p></td>
	
	</tr>
	
	<tr>
	
	<td valign=top class=style3>&nbsp;</td>
	
	</tr>
	
	<tr>
	
	<td valign=top class=style2>You are receiving this mail as a registered member of $sitename. This is a computer auto generated message. Please do not Reply.</td>
	
	</tr>
	
	</table>
	
	<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'></p>
	
	</td>
	
	<td width=8>&nbsp;</td>
	
	</tr>
	
	<tr>
	
	</tr>
	
	<tr>
	
	</tr>
	
	</table></td>
	
	</tr>
	
	<tr>
	
	<td><img src=$site_url/pics/email_bottom.gif width=600 height=22></td>
	
	</tr>
	
	</table>
	
	</body>
	
	</html>
	
			";
	
			// To send HTML mail, the Content-type header must be set
	
			
	
			ini_set("SMTP",$smtphost);
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
	
			$success = mail($to,$subject, $message, $headers); 
			
			$db_message = "<p>Thank you for requesting member\'s Phone Password.</p>
			<p>$sitename, the Most Successful Matrimony Portal for Indians.</p>
			$photostatus ";

}	

	

//////////////// UPDATE //////////////////////////

$strsenderid  = $_GET['MatriID'];
$strtoid      = $_GET['ReqID'];
$SendDate     = date('d-M-Y');
$status       = $_GET['key'];
$ctime        = time();

//$sql  = "insert into photo_request_status (sender_id, receiver_id, status, created_date) values ('$strtoid', '$strsenderid', '$status', '$ctime')";
$sql  = "update phone_request_status set status = '$status', updated_date = '$ctime' where sender_id = '$strtoid' and receiver_id = '$strsenderid' and type = 'phone_password'";
$sql  = mysql_query($sql);

$sql  = "update phone_request set status = '$status', updated_date = '$ctime' where sender  = '$strtoid' and receiver  = '$strsenderid' and type = 'phone_password'";
$sql  = mysql_query($sql);

$qry  = "insert into receivemessage (ToID, FromID , Msg, SendDate ) values ('$strtoid', '$strsenderid', '$db_message', '$SendDate')";
$sql  = mysql_query($qry);

$update1 = mysql_query("update phoneprotectrequesters  set ReceiverResponse ='Sent' WHERE RequesterID = '$strtoid' ");


?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Send Photo Password</h3>
  </div>
  <div class="body" align="left">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
      <tr>
        <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="center">Your Phone Password Status has been sent to this Member <?php echo $strtoid; ?> successfully. </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
            </tr>
          </table></td>
      </tr>
    </table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>