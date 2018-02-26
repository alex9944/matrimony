<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
$streiid = $_GET['eiid'];

$streiidgen = $_GET['gen'];
?>

<?php 
$streiid = $_GET['eiid'];
$reccontrol = mysql_query("SELECT * FROM register where MatriID='$streiid' ");

  while($row = mysql_fetch_array($reccontrol))

  {

  

$streiidname = $row['Name'];

$strsitename = $info['Webname'];

$logo = $row['Weblogopath'];



		$to =  $row['ConfirmEmail'];

		$from = $info['ContactEmail'];

		$subject = "You have a new Photo upload request Received From ".$sitename;

		$message = "

		<html>

<style type=text/css>

<!--

.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }

.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }

-->

</style>

<body>		

<table width=600 border=0 cellspacing=0 cellpadding=0>

<tr>

<td background=pics/email_top.gif width=600 height=90><table width=97% border=0 align=center cellpadding=2 cellspacing=2>

<tr>

<td><img src=".$sitelogo." border=0></td>

</tr>

</table></td>

</tr>

<tr>

<td background=pics/email_middle.gif><table width=573 border=0 align=center cellpadding=2 cellspacing=2>

<tr>

<td width=562 valign=top class=style3>Dear ".$streiidname." </td>

</tr>

<tr>

  <td valign=top class=style3>Congratulations! You have received a photo Upload request from ".$sitename."</td>

</tr>

<tr>

<td valign=top class=style3>Your Profile on $sitename has been viewed and Some one has sent photo upload request to you<br>

Kindly logon to ".$sitename." and accept or decline the message. </td>

</tr>

<tr>

<td valign=top class=style2>You are receiving this mail as a registered member of ".$sitename.". This is a computer auto generated message. Please do not Reply.</td>

</tr>

</table></td>

</tr>

<tr>

<td><img src=pics/email_bottom.gif width=600 height=18></td>

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
			

		//$success = mail($to,$subject, $message, $headers); 

	 }	

?>


<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
 <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Photo Upload Request </h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="0" align="center" cellpadding="4" cellspacing="6" >
                        <tr>
                          <td align="center"><b>You have successfully send photo upload request to <? echo $streiid ?></b></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <div class="hline2"></div>
        </div>
      </div>
</body>
</html>