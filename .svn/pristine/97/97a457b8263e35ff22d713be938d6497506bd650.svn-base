<?php include('protect.php'); ?>
<?php
include('../dbconnect.php');
include("../config.php"); 

$strid = $_GET['ID'];
$strphoto1 = $_GET['delphoto'];
$stremail = $_GET['email'];
$strname = $_GET['name'];

	// DELETE PHOTO1 FILE
	$myFile = "../memphoto5/".$strphoto1;
	unlink($myFile);
	
	
	// UPDATE PHOTO1 STATUS from Yes to No
	$update1 = mysql_query("update register set Photo5 = 'nophoto.gif',Photo5Approve='No' where MatriID = '$strid'")
	or die("Could not update data because ".mysql_error());
	

	// PHOTO1 UnAPPROVED / DELETE INFORM MESSAGE TO  MEMBER 

$to = $stremail;
$strsitename = $info['Webname'];
$from = $info['ContactEmail'];
$subject = "Your $sitename photo5 has been unapproved or Deleted.";
$message = "
		<html>
<style type=text/css>
<!--
.style4 {font-family: Arial; font-size:16px; font color=#FF6600 }
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
-->
</style>
<body>		
<table width=600 border=0 cellspacing=0 cellpadding=0>
<tr>
<td background=pics/email_top.gif width=600 height=90><table width=97% border=0 align=center cellpadding=2 cellspacing=2>
<tr>
<td><img src=$sitelogo border=0></td>
</tr>
</table></td>
</tr>
<tr>
<td background=pics/email_middle.gif><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
<tr>
<td width=562 valign=top class=style3>Dear $strname,</td>
</tr>
<tr>
<td width=562 valign=top class=style3>Welcome to $sitename,</td>
</tr>
<tr>
<td valign=top class=style3><p>Thanks for choosing our matrimony services to find your life partner. This is to inform you that your photo has been Disapproved/Deleted due inappropriate for the website. Kindly Upload/Add another suitable photo again.</p>

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
		
		$success = mail($to,$subject, $message, $headers); 
		




	
	 print "<script>";
     print " self.location='unapprove_photo_confirm.php?Action=UnApproved';"; // Comment this line if you don't want to redirect
     print "</script>";
	
	//header('location:approve_photo1.php?Action=UnApproved ');
?>