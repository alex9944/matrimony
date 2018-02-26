<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>
<body>
<?

function createRandomPassword() {

				

				$chars = "abcdefghijkmnopqrstuvwxyz023456789";

				srand((double)microtime()*1000000);

				$i = 0;

				$pass = '' ;

				

				while ($i <= 7) {

				$num = rand() % 33;

				$tmp = substr($chars, $num, 1);

				$pass = $pass . $tmp;

				$i++;

				}

				

				return $pass;

				

				}

				

				// Usage

				$password = createRandomPassword();

				//echo $password;

?>

<?php

session_start();

include('dbconnect.php');

$stremail= strip_tags($_POST['email']);

			 



$sql="SELECT MatriID,ConfirmEmail,ConfirmPassword FROM register  WHERE ConfirmEmail='$stremail' ";

$result=mysql_query($sql);

$count=@mysql_num_rows($result);

if($count==1){



 





				

				//echo "Your random password is: $password";



		$setnewpassword = md5($password);

			

		$update1 = mysql_query("UPDATE register SET ConfirmPassword='$setnewpassword' WHERE ConfirmEmail = '$stremail' ")

		or die("Could not update data because ".mysql_error());

		

		/////////////////// SEND FORGOT PASSWORD TO MEMBER EMAIL //////////////////////////////////////////////	

		//$strmememail = $row['ConfirmEmail'];

		$reccontrol = mysql_query("SELECT * FROM register where ConfirmEmail = '$stremail' ");

		while($row = mysql_fetch_array($reccontrol))

		{

		

		$strmemname = $row['Name'];

		$strmatid = $row['MatriId'];

		$strsitename = $info['Webname'];

		$logo = $info['Weblogopath'];

		

		

		$to =  $row['ConfirmEmail'];

		$from = $info['ContactEmail'];

		$subject = "$strmemname ($strmatid) - Your forgot password at $strsitename.";

		

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

		<td background=$sitename/pics/email_top.gif width=600 height=90><table width=97% border=0 align=center cellpadding=2 cellspacing=2>

		<tr>

		<td><img src=$sitelogo border=0></td>

		</tr>

		</table></td>

		</tr>

		<tr>

		<td background=$siteurl/pics/email_middle.gif><table width=573 border=0 align=center cellpadding=2 cellspacing=2>

		<tr>

		<td width=562 valign=top class=style3>Dear $strmemname </td>

		</tr>

		<tr>

		<td valign=top class=style3>Hi, we have reset your password at $sitename

		<br>

		New Password : $password

		</td>

		</tr>

		<tr>

		<td valign=top class=style3> <br>

		Kindly logon to $sitename and change your password. </td>

		

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

		}	

		





}

else 

{

 print "<script>";

     print " self.location='forgotpassword.php?Action=err';"; // Comment this line if you don't want to redirect

     print "</script>";

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
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Forgot Password</span></h2>
        </div>
        <div class="body">
	<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="tbl_profiledetails">

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><div align="center">Your Password has been Sent to your Email.<br>

          <br>

          Kindly check your Email and note your new Password.

</div></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

    </table>
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
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
