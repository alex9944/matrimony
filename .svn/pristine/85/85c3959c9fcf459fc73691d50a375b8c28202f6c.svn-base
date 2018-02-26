<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

if(isset($_REQUEST['bannersubmit']))
{
	if($_FILES['image']['name'] != "") {
		$getid = 1;
		$userfile_type = $_FILES['image']['type'];
		$filename = basename($_FILES['image']['name']);
		$file_ext = strtolower(substr($filename, strrpos($filename, '.') + 1));
		
		$tmpfilename3=$_FILES['image']['tmp_name'];
		$upload3="../largebannerlogo/".$getid.'.'.$file_ext;
		move_uploaded_file($tmpfilename3,$upload3);
	}
	
	if($_POST['adslink'] != "") $adslink = $_POST['adslink']; else $adslink = NULL;
	if($_FILES['image']['error'] == 0 && $_FILES['image']['name'] != "") $adsimg = "bannerimage = '".$file_ext."',";
	
	mysql_query("update banner_ads set bannerlink = '".$adslink."', $adsimg bannerstatus = ".$_POST['bannerstatus'].", bannerdate = now() where bannerid = 1");
	header("location:bannerads.php?ran=".rand());
}
$result=mysql_query("select * from banner_ads where bannerid = 1");
$final=mysql_fetch_array($result);

if(isset($_REQUEST['bannersubmit2']))
{
	if($_FILES['image']['name'] != "") {
		$getid = 2;
		$userfile_type = $_FILES['image']['type'];
		$filename = basename($_FILES['image']['name']);
		$file_ext = strtolower(substr($filename, strrpos($filename, '.') + 1));
		
		$tmpfilename3=$_FILES['image']['tmp_name'];
		$upload3="../largebannerlogo/".$getid.'.'.$file_ext;
		move_uploaded_file($tmpfilename3,$upload3);
	}
	
	if($_POST['adslink'] != "") $adslink = $_POST['adslink']; else $adslink = NULL;
	if($_FILES['image']['error'] == 0 && $_FILES['image']['name'] != "") $adsimg = "bannerimage = '".$file_ext."',";
	
	mysql_query("update banner_ads set bannerlink = '".$adslink."', $adsimg bannerstatus = ".$_POST['bannerstatus'].", bannerdate = now() where bannerid = 2");
	header("location:bannerads.php?ran=".rand());
}
$result2=mysql_query("select * from banner_ads where bannerid = 2");
$final2=mysql_fetch_array($result2);

if(isset($_REQUEST['bannersubmit3']))
{
	if($_FILES['image']['name'] != "") {
		$getid = 3;
		$userfile_type = $_FILES['image']['type'];
		$filename = basename($_FILES['image']['name']);
		$file_ext = strtolower(substr($filename, strrpos($filename, '.') + 1));
		
		$tmpfilename3=$_FILES['image']['tmp_name'];
		$upload3="../largebannerlogo/".$getid.'.'.$file_ext;
		move_uploaded_file($tmpfilename3,$upload3);
	}
	
	if($_POST['adslink'] != "") $adslink = $_POST['adslink']; else $adslink = NULL;
	if($_FILES['image']['error'] == 0 && $_FILES['image']['name'] != "") $adsimg = "bannerimage = '".$file_ext."',";
	
	mysql_query("update banner_ads set bannerlink = '".$adslink."', $adsimg bannerstatus = ".$_POST['bannerstatus'].", bannerdate = now() where bannerid = 3");
	header("location:bannerads.php?ran=".rand());
}
$result3=mysql_query("select * from banner_ads where bannerid = 3");
$final3=mysql_fetch_array($result3);

if(isset($_REQUEST['bannersubmit4']))
{
	if($_FILES['image']['name'] != "") {
		$getid = 4;
		$userfile_type = $_FILES['image']['type'];
		$filename = basename($_FILES['image']['name']);
		$file_ext = strtolower(substr($filename, strrpos($filename, '.') + 1));
		
		$tmpfilename3=$_FILES['image']['tmp_name'];
		$upload3="../largebannerlogo/".$getid.'.'.$file_ext;
		move_uploaded_file($tmpfilename3,$upload3);
	}
	
	if($_POST['adslink'] != "") $adslink = $_POST['adslink']; else $adslink = NULL;
	if($_FILES['image']['error'] == 0 && $_FILES['image']['name'] != "") $adsimg = "bannerimage = '".$file_ext."',";
	
	mysql_query("update banner_ads set bannerlink = '".$adslink."', $adsimg bannerstatus = ".$_POST['bannerstatus'].", bannerdate = now() where bannerid = 4");
	header("location:bannerads.php?ran=".rand());
}
$result4=mysql_query("select * from banner_ads where bannerid = 4");
$final4=mysql_fetch_array($result4);
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
	
	<tr>
		<td height="223" colspan="2">
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #669966;">
				<tr>
				  <td height="27" bgcolor="#edcfde" class="link1">&nbsp;&nbsp;Banner Ads</td>
				</tr>
				<tr>
				  <td align="right" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="frmbannerads" enctype="multipart/form-data" method="post">
					<table width="90%" height="79" align="center" cellspacing="0" border="0" style="padding:10px;border:1px solid #000;">
						<tr><td colspan="2"><strong>Center Ad (width : 728px, height : 89px)</strong></td></tr>
						<tr><td height="10"></td></tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Ads Link</td>
						  <td width="" align="">
						    <input name="adslink" type="text" id="adslink" class="text_box" value="<?php echo $final['bannerlink'];?>" /><br />
							(eg : http://www.google.com)
						  </td>
						  <td rowspan="3"><img src="../largebannerlogo/<?php echo $final['bannerid'].'.'.$final['bannerimage']; ?>" width="100" height="100" alt="" /></td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1">&nbsp;&nbsp;Banner Image</td>
						  <td width="195" align="">
							<input type="File" name="image" id="image" />
						  </td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Banner Status</td>
						  <td width="" align="">
						    <input type="Radio" name="bannerstatus" <?php if($final['bannerstatus'] == 1) { ?>checked="checked"<?php } ?> value="1" /> Active&nbsp;&nbsp;
							<input type="Radio" name="bannerstatus" <?php if($final['bannerstatus'] == 0) { ?>checked="checked"<?php } ?> value="0" /> Inactive&nbsp;&nbsp;
						  </td>
						</tr>
						<tr><td height="5"></td></tr>
						<tr><td colspan="2" align="center" bgcolor="#faf3f7">
						<input type="submit" name="bannersubmit" value="Submit" class="but_bg" />
						<tr><td height="10"></td></tr>
				  </table></form>
				</td></tr>
				</td></tr>
				<tr><td bgcolor="#faf3f7" height="10"></td></tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="frmbannerads" enctype="multipart/form-data" method="post">
					<table width="90%" height="79" align="center" cellspacing="0" border="0" style="padding:10px;border:1px solid #000;">
						<tr><td colspan="2"><strong>Left Top (width : 209px, height : 191px)</strong></td></tr>
						<tr><td height="10"></td></tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Ads Link</td>
						  <td width="" align="">
						    <input name="adslink" type="text" id="adslink" class="text_box" value="<?php echo $final2['bannerlink'];?>" /><br />
							(eg : http://www.google.com)
						  </td>
						  <td rowspan="3"><img src="../largebannerlogo/<?php echo $final2['bannerid'].'.'.$final2['bannerimage']; ?>" width="100" height="100" alt="" /></td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1">&nbsp;&nbsp;Banner Image</td>
						  <td width="195" align="">
							<input type="File" name="image" id="image" />
						  </td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Banner Status</td>
						  <td width="" align="">
						    <input type="Radio" name="bannerstatus" <?php if($final2['bannerstatus'] == 1) { ?>checked="checked"<?php } ?> value="1" /> Active&nbsp;&nbsp;
							<input type="Radio" name="bannerstatus" <?php if($final2['bannerstatus'] == 0) { ?>checked="checked"<?php } ?> value="0" /> Inactive&nbsp;&nbsp;
						  </td>
						</tr>
						<tr><td height="5"></td></tr>
						<tr><td colspan="2" align="center" bgcolor="#faf3f7">
						<input type="submit" name="bannersubmit2" value="Submit" class="but_bg" />
						<tr><td height="10"></td></tr>
				  </table></form>
				</td></tr>
				<tr><td bgcolor="#faf3f7" height="10"></td></tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="frmbannerads" enctype="multipart/form-data" method="post">
					<table width="90%" height="79" align="center" cellspacing="0" border="0" style="padding:10px;border:1px solid #000;">
						<tr><td colspan="2"><strong>Left Middle (width : 209px, height : 191px)</strong></td></tr>
						<tr><td height="10"></td></tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Ads Link</td>
						  <td width="" align="">
						    <input name="adslink" type="text" id="adslink" class="text_box" value="<?php echo $final3['bannerlink'];?>" /><br />
							(eg : http://www.google.com)
						  </td>
						  <td rowspan="3"><img src="../largebannerlogo/<?php echo $final3['bannerid'].'.'.$final3['bannerimage']; ?>" width="100" height="100" alt="" /></td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1">&nbsp;&nbsp;Banner Image</td>
						  <td width="195" align="">
							<input type="File" name="image" id="image" />
						  </td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Banner Status</td>
						  <td width="" align="">
						    <input type="Radio" name="bannerstatus" <?php if($final3['bannerstatus'] == 1) { ?>checked="checked"<?php } ?> value="1" /> Active&nbsp;&nbsp;
							<input type="Radio" name="bannerstatus" <?php if($final3['bannerstatus'] == 0) { ?>checked="checked"<?php } ?> value="0" /> Inactive&nbsp;&nbsp;
						  </td>
						</tr>
						<tr><td height="5"></td></tr>
						<tr><td colspan="2" align="center" bgcolor="#faf3f7">
						<input type="submit" name="bannersubmit3" value="Submit" class="but_bg" />
						<tr><td height="10"></td></tr>
				  </table></form>
				</td></tr>
				<tr><td bgcolor="#faf3f7" height="10"></td></tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="frmbannerads" enctype="multipart/form-data" method="post">
					<table width="90%" height="79" align="center" cellspacing="0" border="0" style="padding:10px;border:1px solid #000;">
						<tr><td colspan="2"><strong>Left Bottom (width : 217px, height : 89px)</strong></td></tr>
						<tr><td height="10"></td></tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Ads Link</td>
						  <td width="" align="">
						    <input name="adslink" type="text" id="adslink" class="text_box" value="<?php echo $final4['bannerlink'];?>" /><br />
							(eg : http://www.google.com)
						  </td>
						  <td rowspan="3"><img src="../largebannerlogo/<?php echo $final4['bannerid'].'.'.$final4['bannerimage']; ?>" width="100" height="100" alt="" /></td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1">&nbsp;&nbsp;Banner Image</td>
						  <td width="195" align="">
							<input type="File" name="image" id="image" />
						  </td>
						</tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="25%" class="link1">&nbsp;&nbsp;Banner Status</td>
						  <td width="" align="">
						    <input type="Radio" name="bannerstatus" <?php if($final4['bannerstatus'] == 1) { ?>checked="checked"<?php } ?> value="1" /> Active&nbsp;&nbsp;
							<input type="Radio" name="bannerstatus" <?php if($final4['bannerstatus'] == 0) { ?>checked="checked"<?php } ?> value="0" /> Inactive&nbsp;&nbsp;
						  </td>
						</tr>
						<tr><td height="5"></td></tr>
						<tr><td colspan="2" align="center" bgcolor="#faf3f7">
						<input type="submit" name="bannersubmit4" value="Submit" class="but_bg" />
						<tr><td height="10"></td></tr>
				  </table></form>
				</td></tr>
				</td></tr>
				<tr bgcolor="#faf3f7"><td>&nbsp;</td></tr>
		  </table>	  </td>
		  
	</tr>
</table>
</body>
</html>

