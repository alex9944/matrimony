<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo $adminsitename;?></title>

</head>

<body>
<table width="98%" cellpadding="3" cellspacing="1" align="center">
	<tr>
		<td height="26" colspan="9">
			<?php include("includes/adminheader.php");?>
		</td>
	</tr>
	<tr>
		<td height="10" colspan="9">&nbsp;</td>
	</tr>
	<tr>
		<td height="20" colspan="9"><?php include("includes/adminmenu.php");?></td>
	</tr>
	<tr>
		<td height="243" colspan="2">
		<form name="sitesetting" action="" method="post">
			<table width="89%" align="center" cellspacing="0" style="border:solid 1px #0F507F;">
				<tr bgcolor="#669966">
					<td height="34" colspan="7	" align="left" bgcolor="#edcfde"><span class="link1">Site Setting</span></td>
				</tr>
				<tr>
					<td height="30" colspan="7" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr>
					<td height="34" width="15%" align="center" bgcolor="#faf3f7">
						<span class="link1">
							<a href="welcometext.php">Welcome Text</a>
						</span>
					</td>
					<td height="34" width="15%" align="center" bgcolor="#faf3f7">
						<span class="link1">
							<a href="termcondition.php">Terms And Condition</a>
						</span>
					</td>
					<td height="34" width="14%" align="center" bgcolor="#faf3f7">
						<span class="link1">
							<a href="admin_privacy.php">Privacy Content</a>
						</span>
					</td>
					<td height="34" width="14%" align="center" bgcolor="#faf3f7">
						<span class="link1"><a href="aboutus.php">About us</a></span>
					</td>
					<td height="34" width="14%" align="center" bgcolor="#faf3f7">
						<span class="link1">
							<a href="admin_help.php">Help Content</a>
						</span>
					</td>
					<td height="34" width="14%" align="center" bgcolor="#faf3f7">
						<span class="link1">
							<a href="currency.php">Currency</a>
						</span>
					</td>
					<td height="34" width="16%" align="center" bgcolor="#faf3f7">
						<span class="link1">
							<a href="changecountry.php">Country management</a>
						</span>
					</td>
				</tr>
				<tr>
					<td height="30" colspan="7" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="7" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
			</table>
		</form>	  
		</td>
	</tr>
</table>
</body>
</html>
