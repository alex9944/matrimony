<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); ?>
<?php 
$streimid = $_POST['txteimid1'];

$updated_date = time();

$update1 = mysql_query("UPDATE expressinterest SET eisender_accept = 'Decline',eirec_accept ='Decline', updated_date = '$updated_date' WHERE id = '$streimid'")

or die("Could not update data because ".mysql_error());





/////////////////// SEND EXPRESS INTREST ACCEPTED ALERT EMAIL TO RECEIVER //////////////////////////////////////////////	

$strtoid = $_POST['txttoid1'];

$reccontrol = mysql_query("SELECT * FROM register where MatriID='$strtoid' ");

  while($row = mysql_fetch_array($reccontrol))

  {

  

$streiidname = $row['Name'];

$strsitename = $info['Webname'];

$logo = $row['Weblogopath'];

$strloggedid = $_SESSION['matriid'];



		$to =  $row['ConfirmEmail'];

		$from = $info['ContactEmail'];

		$subject = "Matrimony ID $strloggedid has Declined your interest on $sitename.";

		

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

<td><img src='$sitelogo' border=0></td>

</tr>

</table></td>

</tr>

<tr>

<td background=pics/email_middle.gif><table width=573 border=0 align=center cellpadding=2 cellspacing=2>

<tr>

<td width=562 valign=top class=style3>Dear $streiidname </td>

</tr>

<tr>

  <td valign=top class=style3>Your profile has been viewed and Declined your expressed interest on $sitename</td>

</tr>

<tr>

<td valign=top class=style3>Hi I am $strloggedid, I did see your profile on $sitename and i declined your expresses interest message.<br>

</td>

</tr>

<tr>

<td valign=top class=style2>You are receiving this mail as a registered member of $sitename. This is a computer auto generated message. Please do not Reply.



</td>

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
		
		
		/*$to_matriid = $_POST['txttoid2'];
		$sqlss  =  "SELECT * FROM register where MatriID ='$to_matriid'";
		$smsconfigdata = mysql_query($sqlss) ;
		$sms_res = mysql_fetch_array($smsconfigdata);
		$nick_name = $sms_res['Name'];
		$sender = $_SESSION['matriid'];
		$sms_message  = "Hi ".$nick_name.", ".$sender." likes your profile and has requested you to add photo. Visit http://phpmatrimonialscript.in to add your photo.";
		$body      = urlencode($sms_message." Sent By $sender"); 
		if(isset($sms_res['Status']) and $sms_res['Status'] == 'GOLD' and $sms_res['Status'] == 'DIAMOND')
		{
		  include('adminsms.php');
		} */
		

	 }	
?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <a href="#">Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">How it Works</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	?>
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Decline Express Pending</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

    <tr>

      <td><div align="center"><strong>Your Decline Message has been sent to the Member Successful.</strong></div>
        </td>

    </tr>
  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><div align="center"><a href="javascript:close();">Close Window </a></div></td>

  </tr>

  </table>
          <div class="hline2"></div>
        </div>
      </div>
      <?php include("include/afterloginmenu_active.php"); ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
              <tr>
                <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td class="pg_right"></td>
        </tr>
      </table>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>