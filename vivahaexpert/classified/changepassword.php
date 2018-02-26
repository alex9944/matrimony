<?php session_start();
ob_start();
include("config/error.php");

if(isset($_POST['Submit']))
{
	$passid=$_SESSION['userid'];
	$oldpassword=$_REQUEST['oldpass'];
	$newpassword=$_REQUEST['newpass'];
	$newcpassword=$_REQUEST['newconfirmpass'];
	
	if($newpassword==$newcpassword) {
		$row=mysql_fetch_array(mysql_query("SELECT * FROM `class_register` WHERE `reg_id`='$passid'"));
		$dbpassword=$row['reg_password'];
		
		if($dbpassword != $newcpassword && $dbpassword == $oldpassword) {
			$update=mysql_query("UPDATE `class_register` SET `reg_password`='$newpassword' WHERE `reg_id`='$passid'");
			$to=$row['reg_email'];
			$subject="Change password Information - $siteadmin";
			$msg="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
			<table width=\"766\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
			<tr>
			<td><a href=\"$site_url\" target=\"_blank\">
			<img  src=\"$sitelogo\" border=\"0\"></a></td>
			</tr>
			<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
			<tr><td>
			<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
			<tr valign=\"top\">
			<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
			<div style=\"color:#0195C5;font-size:14px;font-weight:bold;\">Dear ".$row['reg_name']."!</div>
			<br/>
			<div style=\"font-weight:bold;font-size:12px;\">
			Your Password Detail!
			</div>
			<br/>
			<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
			<tr><td colspan=\"2\">The following are your login details :<br/><br/></td></tr>
			<tr><td>Old Password :</td><td><span style=\"font-weight:bold\">$oldpassword</span></td></tr>
			<tr><td>New Password :</td><td><span style=\"font-weight:bold\">$newpassword</span></td></tr>
			</table>
			<br/>
			<br/>
			
			If you need any help along the way, please contact <a href=\"mailto:$siteadmin\">$siteadmin</a>
			<br/><br/>Thanks for $sitename Classfied!
			<br/> - $sitename Team
			</td>
			</tr>
			</table>
			</td></tr>
			</table>
			<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
			<tbody>
			<tr>
			<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date('Y')." $sitename All Rights Reserved.</td>
			</tr>
			</tbody>
			</table>
			</font>";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			// Additional headers
			$headers .= "From: $$siteadmin"."\r\n";
			//echo $msg;die();
			mail($to,$subject,$msg,$headers);
			header("Location:changepassword.php?msg=1");
		} else {
			header("Location:changepassword.php?msg=2");
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
<script language="javascript">
function passCheck()
{
var oldpass=document.passForm.oldpass.value;

			if(oldpass=="")
			{
					alert("Please Enter Your Old Password");
					document.passForm.oldpass.focus();
					return false;
			}
			if(oldpass.length < 6)
				{
					alert("Your Old Password Sould Be Minimum 6 Char");
					document.passForm.oldpass.focus();
					return false;
				}	
var newpass=document.passForm.newpass.value;
			if(newpass=="")
			{
					alert("Please Enter Your New Possword");
					document.passForm.newpass.focus();
					return false;
			}
			if(newpass.length < 6)
				{
					alert("Your New Password Sould Be Minimum 6 Char");
					document.passForm.newpass.focus();
					return false;
				}
				
var newconfirmpass=document.passForm.newconfirmpass.value;
			if(newconfirmpass=="")
			{
					alert("Please Enter Your Conform Possword");
					document.passForm.newconfirmpass.focus();
					return false;
			}
			if(newconfirmpass.length < 6)
				{
					alert("Your Conform Password Sould Be Minimum 6 Char");
					document.passForm.newconfirmpass.focus();
					return false;
				}						
				if(newconfirmpass!=newpass)
				{
				alert("Password and Confirm Password Sould match");
				document.passForm.newconfirmpass.value="";
					document.passForm.newconfirmpass.focus();
					return false;
				}
	return true;			
}


</script>
</head>

<body>
<div id="container">
	<h1 id="header_font">
	  <strong><?php echo $sitename;?> classifieds</strong>
	</h1>
	<div class="contend_main">
		<?php include("includes/header.php");?>
	<div class="clr"></div>
	<div class="con_lft">	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m" style="height:500px;">
				<?php include("includes/left.php");?>
			</div>
			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
		</div>
		<!-- left ads -->
		<?php include("includes/left-ads.php");?>
	</div>
	<div class="con_rgt">
	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
		<div class="m" style="padding-left:10px;padding-right:10px;">
		<div class="in_head">
			<div class="in_head">
				<div class="in_head">
					<div class="head_txt">Change Password</font></div>
				</div>
			</div>
		</div>
		
		<div class="frmcont">
			<form id="form1" name="passForm" method="post" action="" onsubmit="return passCheck();">
                       <table width="100%" border="0" cellpadding="0" cellspacing="0">
                         <tr>
                           <td align="center" class="welcome" nowrap="nowrap" colspan="3">
                               <?php
if($_REQUEST['msg']==1)
{

 echo "<font color='green' align='center'><strong>Password Changed Successfully! 
 new password sent to mail</strong></font><input type='hidden' name='uname' value='124' />";

}
elseif($_REQUEST['msg']==2)
{

  echo "<font color='red'>Please check the password!</font><input type='hidden' name='uname' value='124' />";

}
elseif($_REQUEST['msg']==3)
{
 echo "<font color='red'>Invalid Confirm Password!</font><input type='hidden' name='uname' value='124' />";
}
?></td>
                         </tr>
                         <tr>
                           <td align="center" valign="top" ><table width="95%" border="0" align="right" cellpadding="0" cellspacing="2">
                               <tr>
                                 <td>&nbsp;</td>
                               </tr>
                               <tr>
                                 <td width="25%" height="30" align="left" valign="middle">Old Password</td>
                                 <td width="4%" align="left" valign="middle">:</td>
                                 <td width="62%" align="left" valign="middle"><label>
						  <input name="oldpass" type="password" class="text_box" id="oldpass" value="" />
                                 </label></td>
                               </tr>
                               <tr>
                                 <td height="30" align="left" valign="middle">New Password</td>
                                 <td height="30" align="left" valign="middle">:</td>
                                 <td align="left" valign="middle"><input name="newpass" type="password" class="text_box" id="newpass" value=""/></td>
                               </tr>
                               <tr>
                                 <td height="30" align="left" valign="middle">Confirm Password</td>
                                 <td height="30" align="left" valign="middle">:</td>
                                 <td align="left" valign="middle"><input name="newconfirmpass" type="password" class="text_box" id="newconfirmpass" value=""/></td>
                               </tr>
                               <tr>
                                 <td height="5"></td>
                               </tr>
                           </table></td>
                         </tr>
                         <tr>
                           <td align="right"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                               <tr>
                                 <td align="center" valign="top" height="30">
								 <input name="Submit" type="submit" class="but_bg" value="Submit" <?php if(isset($_SESSION['dlogin'])) { ?> disabled="disabled" <?php } ?> />
								 </td>
                               </tr>
                           </table></td>
                         </tr>
                       </table>
                    </form>
		</div>
		<div class="clr"></div>
		</div>
		<div class="b">
			<div class="b">
				<div class="b"></div>
			</div>
		</div>
		</div>
		<!-- center ads -->
		<?php include("includes/center-ads.php");?>
	</div>
	<div class="clr"></div>
	<?php include("includes/footer.php");?>
	</div>
</div>
<div class="bottom_line"></div>
</body>
</html>
