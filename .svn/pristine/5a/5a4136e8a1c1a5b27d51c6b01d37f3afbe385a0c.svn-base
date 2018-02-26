<?php session_start();
ob_start();
include("config/error.php");
/*if(isset($_SESSION['userid']))
{
header("location:welcome.php");
}*/


if(isset($_REQUEST['Submit']))
{

$reg_email=$_REQUEST['email'];
 
$login_select=mysql_query("select * from `class_register` where `reg_email`='$reg_email'" );

 $login_count=mysql_num_rows($login_select);

if($login_count > 0)
{
$login_fetch=mysql_fetch_array($login_select);

$password=$login_fetch['reg_password'];
 
$reg_firstname=$login_fetch['reg_name'];
	   //  mail starts  ///
  
		  
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: $adminmail" . "\r\n";
  $to      = $reg_email;
  $subject = "Password Details From clickone.com ";


$message ="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
<table width=\"766\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
<tr>
<td><a href=\"$site_url_reg\" target=\"_blank\">
<img  src=\"$logo_url\" border=\"0\"></a></td>
</tr>
<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
<tr><td>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
<tr valign=\"top\">
<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
<div style=\"color:#0195C5;font-size:14px;font-weight:bold;\">Dear $reg_firstname!</div>
<br/>
<div style=\"font-weight:bold;font-size:12px;\">
Your Password is here!
</div>
<br/>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
<tr><td colspan=\"2\">The following are your login details :<br/><br/></td></tr>
<tr><td>EmailId :</td><td><span style=\"font-weight:bold\">$reg_email</span></td></tr>
<tr><td>Password :&nbsp;</td><td><span style=\"font-weight:bold\">$password </span></td></tr>
</table>
<br/>
<br/>

If you need any help along the way, please contact <a href=\"mailto:$adminmail\">$adminmail</a>
<br/><br/>Thanks for using Classfied!
<br/> - $site_team
</td>
</tr>
</table>
</td></tr>
</table>
<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
<tbody>
<tr>
<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date("Y")." clickone.com. All Rights Reserved.</td>
</tr>
</tbody>
</table>
</font>";
		  //echo $message;die();
			 	 mail($to,$subject,$message,$headers); 
// mail ends ////			  

	   
	   
	   
	   
	   
	   
	   
	   
       header("location:forgotpassword.php?msg=1");
}
else
{
       header("location:forgotpassword.php?msg=2");
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

function echeck(str) 
{

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid User ID");
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid User ID");
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid User ID");
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid User ID");
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid User ID");
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid User ID");
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid User ID");
		    return false;
		 }
 		 return true;					
	}

function logincheck()
{
//alert("hai");
var email=document.loginForm.email.value;
			if(email=="")
			{
					alert("Please Enter Your Email ID");
					document.loginForm.email.focus();
					return false;
			}
			else
				{
					var as=echeck(email);
					if(as==false)
					{
						return false;
					}
				}	
			

		
					
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
					<div class="head_txt">Forget Password</font></div>
				</div>
			</div>
		</div>
		<div class="frmcont">
			<form action="#" method="post"  name="loginForm" id="loginForm" onsubmit="return logincheck();">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td align="left" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="6">
                                            <tr>
                                              <td height="22" colspan="3" align="center" valign="middle" class="register"><?php 
							  if($_REQUEST['msg']==1)
							  {
							  echo "<font color='green'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your password sent to your Mail</strong></font><input type='hidden' name='uname' value='124' />";
							  }
							  elseif($_REQUEST['msg']==2)
							  {
							  echo "<font color='red'>E-mail does not Exist, Please Enter Correct Email Id</font><input type='hidden' name='uname' value='124' />";
							  }
							  
							  ?>                                              </td>
                                            </tr>
                                            <tr>
                                              <td width="32%" height="19" align="right">E-MAIL ID</td>
                                              <td width="4%" align="center" valign="middle">:</td>
                                              <td width="64%" align="left" valign="middle"><input name="email" type="text" class="text_box" id="textfield4" size="30" /></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td align="center" valign="top">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center" valign="top"><input name="Submit" type="submit" class="but_bg" value="Submit" /></td>
                                      </tr>
                                      <tr>
                                        <td align="center" valign="top"><table width="241" border="0" cellpadding="0" cellspacing="0">
                                            <tr height="30">
                                              <td width="59" align="left" valign="middle" class="link1"><a href="login.php" class="siteLink">Login</strong></a></td>
                                              <td width="182" align="right" valign="middle" class="link1"><a href="registration.php" class="siteLink">New User</a></td>
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
