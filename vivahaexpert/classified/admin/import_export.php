<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

unset($_SESSION['class_id']);
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
			<?php include("includes/adminheader.php");?>		</td>
	</tr>
	<tr><td height="10" colspan="9">&nbsp;</td>
	</tr>
	
	<tr>
	  <td height="20" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <?php 
			if(isset($_REQUEST['suss'])) { ?>
			<tr >
				  <td colspan="9" align="center" ><span class="link1">File Imported successfully</span></td>
			  </tr>
			<?php } if(isset($_REQUEST['err'])) { ?>
	<tr >
				  <td colspan="9" align="center" ><span class="link1">File Import Failed</span></td>
			  </tr>
			  <?php } ?>
	
	<tr>
		<td height="223" colspan="2">
			<form name="sitesetting" action="" method="post">
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #0F507F;">
			
			
				<tr bgcolor="#669966">
				  <td height="34" colspan="3" align="left" bgcolor="#edcfde"><span class="link1">Import and Export</span></td>
			  </tr>
				<tr>
				  <td height="34" colspan="2" align="left" bgcolor="#faf3f7"><span class="link1"><a href="import_classifieds.php">Import Classifieds</a></span></td>
				  <td width="74%" height="34" align="left" bgcolor="#faf3f7"><span class="link1"><a href="export_classified.php">Export Classifieds</a></span></td></td>
				  
				</tr>
				<tr>
				  <td colspan="3" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
		  </table>
		  </form>	  </td>
	</tr>
</table>
</body>
</html>
