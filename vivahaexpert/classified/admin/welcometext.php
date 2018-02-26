<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
if(isset($_REQUEST['ADD']))
{
$des=$_REQUEST['description'];
$select_text=mysql_query("SELECT * FROM sitesetting");
$count=mysql_num_rows($select_text);
if($count!=0)
{
mysql_query("update sitesetting set weltext='$des'");
}
else
{
if(mysql_query("INSERT INTO sitesetting(weltext)values('$des')"))
{
echo "<font>('Your Description added successfully');</font>";
}
else
{
echo "failed to add";
}
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
<script>
function valid()
{

if(document.welcometext.description.value=="")
{
alert("Please Enter The Text");
document.welcometext.description.focus();
return false;
}
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
	
	<tr>
		<td height="223" colspan="2">
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #669966;">
				<tr>
				  <td height="27" bgcolor="#edcfde" class="link1">&nbsp;&nbsp;Welcome Text</td>
				</tr>
				<tr>
				  <td align="right" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="welcometext" action="" method="post"><table width="372" height="79" align="center" cellspacing="0" style="border:0px solid #D8F1E4;">
					
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1" align="center">&nbsp;&nbsp;Text</td>
						  <td width="195" align="center">
						  <?php $select_text=mysql_query("SELECT `weltext` FROM sitesetting"); 
						  $fetch_text=mysql_fetch_array($select_text);
						  ?>
						    <textarea name="description" id="description" rows="15" cols="60"><?php echo $fetch_text['weltext']; ?></textarea>
						  </td>
						</tr>
					
						<tr><td colspan="2" align="center" bgcolor="#faf3f7">
						<!-- <input name="ADD" type="submit" id="ADD" value="ADD" disabled="disabled"  onclick="return valid();"/>This feature is disabled in the demo version... -->
						<input  type="submit" class="but_bg" name="ADD"  value="ADD" onclick="return valid();"/>						
						  &nbsp;&nbsp;<input type="button" name="Submit" class="but_bg" value="Back" onclick="javascript:history.back();"/></td></tr>
						
				  </table></form>
				</td></tr>
				<tr bgcolor="#faf3f7"><td>&nbsp;</td></tr>
		  </table>	  </td>
	</tr>
</table>
</body>
</html>
