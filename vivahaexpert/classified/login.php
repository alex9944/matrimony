<?php session_start();
ob_start();
include("config/error.php");
include("config/db_configue.php");
/*if(isset($_SESSION['userid']))
{
header("location:welcome.php");
}*/

$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_GET['maction'])){
		mysql_query("UPDATE class_register SET `reg_status` = '0' WHERE reg_id = '".$_GET['maction']."'");
}

if(isset($_REQUEST['loginbutton']) || isset($_REQUEST['dlogin']))
{
$login_userid=$_REQUEST['email'];
$login_pass=$_REQUEST['password'];

if(isset($_REQUEST['dlogin']))
{
$login_userid=base64_decode($_REQUEST['username']);
$login_pass=base64_decode($_REQUEST['password']);
}

$login_select=mysql_query("select * from `class_register` where `reg_email`='$login_userid' AND `reg_password`='$login_pass' AND `reg_status`='0' "  );

 $login_count=mysql_num_rows($login_select);

if($login_count > 0)
{

$login_fetch=mysql_fetch_array($login_select);
$user_id=$login_fetch['reg_id'];
$_SESSION['userid']=$user_id;
$_SESSION['username']=$login_fetch['reg_name'];
$_SESSION['emailid']=$login_userid;

if($login_fetch['reg_status']==0)
{
if(isset($_REQUEST['dlogin'])){
   $_SESSION['dlogin']=1;
}
else{
  unset($_SESSION['dlogin']);
}

header("location:welcome.php");
}
else
{
header("location:login.php?loginerror=3");
}
}
else
{
header("location:login.php?loginerror=2");
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
		   alert("Invalid Email ID");
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid Email ID");
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid Email ID");
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid Email ID");
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid Email ID");
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid Email ID");
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid Email ID");
		    return false;
		 }
 		 return true;					
	}

function logincheck()
{

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
			
var password=document.loginForm.password.value;
			if(password=="")
			{
					alert("Please Enter Your Possword");
					document.loginForm.password.focus();
					return false;
			}
			//if(password.length < 6)
				//{
				//	alert("Your Password Sould Be Minimum 6 Char");
				//	document.loginForm.password.focus();
				//	return false;
				//}	
				
		
					
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
		<div class="m" style="padding-left:10px;padding-right:10px;" align="center">
		<div class="in_head">
			<div class="in_head">
				<div class="in_head">
					<div class="head_txt" align="left">Login</font></div>
				</div>
			</div>
		</div>
		
		<div class="frmcont">
			<form name="loginForm" method="post" action="" onsubmit="return logincheck();">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" >
	    <tr><td colspan="4" height="10">&nbsp;</td></tr>
        <tr>
          <td colspan="4" align="center" valign="top" height="30">
		  <?php
		  if($_REQUEST['success']==1)
		  {
		  echo "<font color='green'><strong>Thanks for Join! Registration successfull!</strong> </font><input type='hidden' name='uname' value='124' />";
		  }
		  ?>
		  
		  <?php 
		  if($_REQUEST['loginerror']==2)
		  {
		    echo "<font color='red'><strong>Invalid Email Id & Password</strong></font><input type='hidden' name='uname' value='124' />";
		  
		  }
		   ?> 
		   
		    <?php 
		  if($_REQUEST['loginerror']==2)
		  {
		    echo "<font color='red'><strong>Your Login ID is Blocked. Please Contact to admin.</strong></font><input type='hidden' name='uname' value='124' />";
		  
		  }
		   ?> 
		   
		   <?php 
							  if($_REQUEST['success']==2)
							  {
							  echo "<font color='green'><strong>Your Email Id and password send to your Mail</strong></font><input type='hidden' name='uname' value='124' />";
							  }
							  elseif($_REQUEST['fail']==2)
							  {
							  echo "<font color='red'><strong>Your User ID is Wrong. Enter Correct User ID</strong></font><input type='hidden' name='uname' value='124' />";
							  }
							  
							  ?>		    </td>
        </tr>
		
        <tr>
          <td width="10%" height="40" align="right">&nbsp;</td>
          <td width="23%" align="left" class="bold"><font color="#FF0000">*</font><span class="bold">Email ID</span></td>
          <td width="5%" align="center" class="bold">:</td>
          <td width="62%"><label>
            <input name="email" type="text" class="text_box" id="email">
          </label></td>
        </tr>
        <tr>
          <td height="40" align="right">&nbsp;</td>
          <td height="40" align="left" class="bold"><font color="#FF0000">*</font>Password</td>
          <td align="center" class="bold">:</td>
          <td><label>
            <input name="password" type="password" class="text_box" id="password" value="" />
          </label></td>
        </tr>
        
        <tr>
          <td colspan="4" align="center" valign="top" >
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
              <td align="center">
                <input name="loginbutton" type="submit" class="but_bg" id="loginbutton" value="Submit" />              </td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td width="49%" align="center" class="link1">
			  	<span class="ad_text_color"><a class="siteLink" href="forgotpassword.php">Forgot Password</a>
				</span>
			  </td>
			 </tr>
			 <tr>
			 	<td>&nbsp;
					
				</td>
			</tr>
			 <tr>
              <td width="25%" align="center" class="link1">
			  <span class="ad_text_color"><a class="siteLink" href="registration.php">New User</a></span>
			  </td>
			  <?php /* ?><td width="25%" align="left" class="link1"><span class="ad_text_color"><a class="siteLink" href="javascript:void(0);" onclick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=classified', 'Demo', 'scrollbars,resizable,width=480, height=270'); return false;">for Demo</a></span> </td><?php */ ?>
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
