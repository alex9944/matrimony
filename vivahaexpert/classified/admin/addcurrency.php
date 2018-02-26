<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

/*$curid=$_REQUEST['curid'];
$result=mysql_query("select * from class_currency where cid='$curid'");
$num=mysql_num_rows($result);
$final=mysql_fetch_array($result);*/

if(isset($_REQUEST['addcurrency']))
{
	$currsymbol=$_REQUEST['symbol'];
	$currname=$_REQUEST['name'];
	mysql_query("insert into class_currency (currency, name) values ('$currsymbol', '$currname')");
	?>
	<script language="javascript">
		if(confirm("Do you want to add more currency"))
		{
			window.location="addcurrency.php";
		}
		else
		{
			window.location="currency.php";
		}
	</script>
	<?php
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
function val()
{
 if(document.addcurrency.symbol.value=="")
 {
  alert("Please Enter The Currency Symbol");
  document.addcurrency.symbol.focus();
  return false;
 }
 if(document.addcurrency.name.value=="")
 {
  alert("Please Enter The Currency Name");
  document.addcurrency.name.focus();
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
				  <td height="27" bgcolor="#edcfde" class="link1">
				  	<div style="float:left;">&nbsp;&nbsp;Add Currency</div>
					<div style="float:right;">
					<a href="currency.php">Currency List</a>
					&nbsp;&nbsp;
					</div>
				  </td>
				</tr>
				<tr>
				  <td align="right" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="addcurrency" enctype="multipart/form-data" method="post" onSubmit="return val();"><table width="400" height="79" align="center" cellspacing="0" style="border:1px solid #D8F1E4;">
						<tr><td height="10"></td></tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1">&nbsp;&nbsp;Currency Symbol</td>
						  <td width="195" align="">
						    <input name="symbol" type="text" id="category" style="width:100px;" class="text_box" value="" />
							<font color="#676767" face="Verdana" size="-2">Eg..$</font>
						  </td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1">&nbsp;&nbsp;Currency Name</td>
						  <td width="195" align="">
						    <input name="name" type="text" id="category" style="width:100px;" class="text_box" value="" />
							<font color="#676767" face="Verdana" size="-2">Eg..Doller</font>
						  </td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
						<tr><td colspan="2" align="center" bgcolor="#faf3f7">
						<input type="submit" name="addcurrency" value="Submit" class="but_bg" />
						  &nbsp;&nbsp;<input type="button" class="but_bg" name="Submit" value="Back" onClick="javascript:history.back();"/></td></tr>
						<tr><td height="10"></td></tr>
				  </table></form>
				</td></tr>
				<tr bgcolor="#faf3f7"><td>&nbsp;</td></tr>
		  </table>	  </td>
	</tr>
</table>
</body>
</html>
