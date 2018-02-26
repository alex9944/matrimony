<?php
ob_start();
session_start();
include "../config/error.php";
if(isset($_SESSION['adminusername']))
{
header("location:manageuser.php");
}
if(isset($_REQUEST['submit']) || isset($_REQUEST['dlogin']))
	{
		$username_adminis=$_REQUEST['username'];
		$password=$_REQUEST['pass'];
		
		if(isset($_REQUEST['dlogin']))
		{
		$username_adminis=base64_decode($_REQUEST['username']);
		$password=base64_decode($_REQUEST['password']);
		}
		
		$result=mysql_query("select * from class_admin where adm_username='$username_adminis' and adm_password='$password'");
		$count=mysql_num_rows($result);
		
		if($count>0)
		{
			$details=mysql_fetch_array($result);
			$uname=$details['adm_username'];
			session_register("adminusername");
			$_SESSION['adminusername']=$uname;
			header("Location:manageuser.php");
		}
		else
		{
			header("Location:index.php?msg");
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo $adminsitename;?></title>

<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {color: #FF0000}
.random:link{font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; text-decoration:none; color:#034371;}
.random:active{font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; text-decoration:underline; color:#034371;}
.random:visited{font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; text-decoration:underline; color:#034371;}
.random:hover{font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; text-decoration:none; color:#e56702;}

-->
</style>
<script language="javascript">
function trimAll(sString)
{
	while (sString.substring(0,1) == ' '){
		sString = sString.substring(1, sString.length);
	}
	while (sString.substring(sString.length-1, sString.length) == ' '){
		sString = sString.substring(0,sString.length-1);
	}
	return sString;
}

function newpass()
{
var name=document.login.pass.value;
if(name!="")
	      {
	       var iChars = " ";
    	      for (var i = 0; i < name.length; i++)
	        	 {
  		           if (iChars.indexOf(name.charAt(i)) != -1)
			         {name="";
  			 alert (" Space is not allowed.\n Please remove them and try again.");
			          return false;
			        }
					
  		          }
 	         } 

}

function validatelogin()
{
	var username=document.login.username.value;
	var pass=document.login.pass.value;
	if(trimAll(username)=="")
	{
		alert("Username should not be empty");
		document.login.username.value='';
		document.login.username.focus();
		return false;
	}
	
	if(trimAll(pass)=="")
	{
		alert("Password should not be empty");
		document.login.pass.value='';
		document.login.pass.focus();
		return false;
	}
	else
 	{
	    var result= newpass();
		if(result==false)
  		{  
		   	document.login.pass.focus();
			return false; 
  	    }
		
 	}
}
</script>
</head>

<body>
<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<?php include("includes/adminheader.php");?>
		</td>
	</tr>
	<tr><td height="40" colspan="2"></td>
	</tr>
	<?php
	$res=mysql_fetch_array(mysql_query("select * from class_admin"));
	?>
	<tr>
		<td height="223" colspan="2">
			<form name="login" action="" method="post" onsubmit="return validatelogin();">
		<!-- demo	<form name="login" action="" method="post"> -->
			<table width="38%" align="center" cellspacing="0" style="border:solid 1px #0F507F;">
				<tr bgcolor="#669966"><td height="34" colspan="3" align="center" bgcolor="#edcfde"><span class="style1">LOGIN FORM</span></td>
				</tr>
				<tr>
				  <td width="2%" bgcolor="#faf3f7">&nbsp;</td>
				  <td width="36%" height="53" bgcolor="#faf3f7"><strong>Username</strong></td>
				<td width="62%" bgcolor="#faf3f7"><input type="text" class="text_box" name="username" /></td></tr>
			    <tr>
			      <td bgcolor="#faf3f7">&nbsp;</td>
			      <td height="43" bgcolor="#faf3f7"><strong>Password</strong></td>
			      <td bgcolor="#faf3f7"><input type="password" class="text_box" name="pass" /></td>
		      </tr>
			  <?php 
			  $select=mysql_fetch_array(mysql_query("select * from `class_admin`"));
			  ?>
		      <?php /*?><tr>
			    <td bgcolor="#faf3f7">&nbsp;</td>
			    <td height="43" bgcolor="#faf3f7"><strong>Username</strong> <strong>:</strong> <font color="#FE027D" style="font-weight:bold"><?php echo $select['adm_username'];?></font></td>
			  <td bgcolor="#faf3f7"><strong>Password : </strong><font color="#FE027D" style="font-weight:bold"><?php echo $select['adm_password'];?></font></td>
		      </tr><?php */?>
			  
			    <!-- demo       <tr>
							<td height="35" valign="middle" align="center" colspan="3"><div align="center"><span class="x5TopMenu"><a href="javascript:void(0)" class="random" onClick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=classified_admin', 'windowname1', 'scrollbars,resizable,width=480, height=270'); return false;"/>Click here to get demo login information</a></span></div></td>
						</tr> -->
						
			  <?php /*?><tr><td height="20" colspan="3" align="center"><strong>Username:</strong> <span class="style3"><strong><?php echo $res['username'];?></strong></span> &nbsp;&nbsp;<strong>Password:</strong><span class="style3"> <strong><?php echo $res['password'];?></strong></span></td>
			  </tr><?php */?>
			  <tr bgcolor="#faf3f7">
			    <td height="39" colspan="3" align="center"><input type="submit" class="but_bg" name="submit" value="Login" /></td>
			  </tr>
			  
			  <tr bgcolor="#faf3f7"><td colspan="3" align="center"><span class="style2">
		      <?php 
			  if(isset($_REQUEST['msg']))
			  {
			  echo "Invalid Username or Password";
			  }
			  ?>
			  </span></td>
			  </tr>
		  </table>
		  </form>
	  </td>
	</tr>
</table>
</body>
</html>