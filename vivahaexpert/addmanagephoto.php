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

function watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile) {
   list($width, $height) = getimagesize($SourceFile);
   $image_p = imagecreatetruecolor($width, $height);
   $image = imagecreatefromjpeg($SourceFile);
   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);
   $black = imagecolorallocate($image_p, 255, 255, 255);
   $font = 'arial.ttf';
   $font_size = 16;
   imagettftext($image_p, $font_size, 0, 10, 20, $black, $font, $WaterMarkText);
   if ($DestinationFile<>'') {
      imagejpeg ($image_p, $DestinationFile, 100);
   } else {
      header('Content-Type: image/jpeg');
      imagejpeg($image_p, null, 100);
   };
   imagedestroy($image);
   imagedestroy($image_p);
};

define( 'UPLOADED_IMAGE_DESTINATION', 'originals/' );

define( 'PROCESSED_IMAGE_DESTINATION', 'photoalbum/' );

if(isset($_FILES['addpho']['name']) and $_FILES['addpho']['name'] != '')
 {
     $temp_file_path      = $_FILES['addpho']['tmp_name'];
	 $file_name           = $_SESSION['matriid']."_".$_FILES['addpho']['name'];
	 $uploaded_file_path  = UPLOADED_IMAGE_DESTINATION.$_SESSION['matriid']."_".$_FILES['addpho']['name'];
     move_uploaded_file( $temp_file_path, $uploaded_file_path ); 
	 
	 $SourceFile       =  UPLOADED_IMAGE_DESTINATION.$_SESSION['matriid']."_".$_FILES['addpho']['name'];
	 $DestinationFile  =  PROCESSED_IMAGE_DESTINATION.$_SESSION['matriid']."_".$_FILES['addpho']['name'];
	 
	 $WaterMarkText = $sitename;
	 watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);
	 
	 //fullsizeimage($temp_file_path);
	 
	 //watermark_text($old_path, $new_path);
	 
	 /*$SourceFile = '/home/user/www/images/image1.jpg';
	 $DestinationFile = '/home/user/www/images/image1-watermark.jpg';
	 $WaterMarkText = 'Copyright phpJabbers.com';
	 watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);*/
	 
	 $sql  = "INSERT INTO photoalbum(matriid,imagename,status) VALUES('".$_SESSION['matriid']."','".$file_name."','InActive')";
	 mysql_query($sql);
	 
	 $msg  = '<p colspan="3" style="text-align:center; color:green;"><span style="float:left;"><img src="pics/tick.png" /></span><strong style="float:left; padding:3px 0 0 5px;">Your Photo Uploaded successfully! </strong></p>';

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

<tr>

<td colspan="2"><div align="left" style="color:red;"> &nbsp; <strong>For better Gallery view the image size must be less than 600px X 600px</strong></div></td>

</tr>


<tr><td>&nbsp;</td>

<td><div align="left"><!--<input type="submit" name="submit" id="submit" value="Submit" onclick="return addphotovalidation();" /> &nbsp; <input type="button" name="close" id="close" value="Close" onclick="window.close();" />-->

	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return addphotovalidation();">
	
	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Close" type="image" value="Close" alt="Close" onclick="window.close();">

</div></td></tr>

</table>

</form>

</body>

</html>