<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" type="text/javascript">
function addphotovalidation()
{
	if(document.addphoto.addpho.value == "")
	{
		alert("Kindly Select Photo.");
		document.addphoto.addpho.focus();
		return false;
	}
	if(document.addphoto.addpho.value != "")
	{
		var photoname = document.addphoto.addpho.value;
		var explodephoto = photoname.split(".");
//		alert(explodephoto[1]);
		if((explodephoto[1] != "jpg") && (explodephoto[1] != "jpeg") && (explodephoto[1] != "png") && (explodephoto[1] != "gif"))
		{
			alert("Kindly select valid image format");
			return false;
		}
	}
	return true;
}
</script>
</head>

<body>
<?php
$photo = $_FILES["addpho"]["name"];
if($photo != "")
{
	$photoname = $_SESSION['matriid']."_".$_FILES["addpho"]["name"];
	if (file_exists("photoalbum/" . $photoname))
      {
    	  $msg = $photoname . " already exists. ";
      }
    else
      {
	      move_uploaded_file($_FILES["addpho"]["tmp_name"],"photoalbum/" . $photoname);
		  mysql_query("INSERT INTO photoalbum(matriid,imagename,status) VALUES('".$_SESSION['matriid']."','".$photoname."','InActive')");
		  echo "<script>
		  			opener.window.location.href = 'managephotoalbum.php';
					window.close();
				</script>";
      }
}
?>
<form name="addphoto" id="addphoto" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" width="90%" align="center">
<?php if($msg != "") { ?>
<tr>
<td colspan="2"><div align="center"><strong><?php echo $msg; ?></strong></div></td>
</tr>
<?php } ?>
<tr>
<td><div align="left">Select Photo</div></td>
<td><div align="left"> : <input type="file" name="addpho" id="addpho" class="textbox1" style="height:24px;" /></div></td>
</tr>
<tr>
<td><div align="left">&nbsp;</div></td>
<td><div align="left"> &nbsp; <strong>Image type must be .jpg, .jpeg, .png or .gif.</strong></div></td>
</tr>
<tr><td>&nbsp;</td>
<td><div align="left"><input type="submit" name="submit" id="submit" value="Submit" onclick="return addphotovalidation();" /> &nbsp; <input type="button" name="close" id="close" value="Close" onclick="window.close();" /></div></td></tr>
</table>
</form>
</body>
</html>