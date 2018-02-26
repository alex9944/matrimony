<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}


        if(isset($_REQUEST['submit']))
	    {
		$adminusername=$_REQUEST['adminusername'];
		$password=$_REQUEST['pass'];
		
		mysql_query("UPDATE `class_admin` SET `adm_username` = '$adminusername',`adm_password` = '$password' where `adm_id`='1'");
		header("location:changeadmin.php?msg=1");		
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


	var adminusername=document.login.adminusername.value;
	var pass=document.login.pass.value;
	if(trimAll(adminusername)=="")
	{
		alert("Username should not be empty");
		document.login.adminusername.value='';
		document.login.adminusername.focus();
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
	
  alert("This is demo version not allowed to change");
  return false;	
}
</script>
</head>

<body>
<table width="98%" cellpadding="3" cellspacing="1" align="center">
	<tr>
		<td height="26" colspan="9">
			<?php include("includes/adminheader.php");?>		</td>
	</tr>
	<tr><td height="10" colspan="9">&nbsp;</td>
	</tr>
	
	<tr>
	  <td height="20" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
	<?php
	$select_admin=mysql_query("select * from `class_admin`");
     $fetch_admin=mysql_fetch_array($select_admin);
	?>
	<tr>
		<td height="223" colspan="2">
			<form name="login" action="" method="post" >
			<table width="38%" align="center" cellspacing="0" style="border:solid 1px #0F507F;">
				<tr bgcolor="#edcfde"><td height="34" colspan="3" align="center" bgcolor="#edcfde"><span class="style1">Change Admin Login</span></td>
				</tr>
				<tr>
				  <td width="2%" bgcolor="#faf3f7">&nbsp;</td>
				  <td width="36%" height="53" bgcolor="#faf3f7" class="link1"><strong>Username</strong></td>
				<td width="62%" bgcolor="#faf3f7"><input type="text" class="text_box" name="adminusername" value="<?php echo $fetch_admin['adm_username'];?>" /></td></tr>
			  <tr>
			    <td bgcolor="#faf3f7">&nbsp;</td>
			    <td height="43" bgcolor="#faf3f7" class="link1"><strong>Password</strong></td>
			  <td bgcolor="#faf3f7"><input type="password" name="pass" class="text_box" value="<?php echo $fetch_admin['adm_password'];?>" /></td></tr>
			  
			  <tr bgcolor="#faf3f7"><td height="39" colspan="3" align="center">
              <!-- demo <input type="submit" name="submit" value="Submit" disabled="disabled" onclick="return democheck();return validatelogin();"/>This feature is disabled in the demo version...-->
			    <input type="submit" name="submit" class="but_bg" value="Submit"/>
			  </td></tr>
			  <tr bgcolor="#faf3f7"><td colspan="3" align="center"><span class="style2"><?php if($_REQUEST['msg'])
		  {
		  echo("Admin username & password is Successfully updated");
		  }
		  ?>       
		      
			  </span></td>
			  </tr>
		  </table>
		  </form>	  </td>
	</tr>
</table>
</body>
</html>