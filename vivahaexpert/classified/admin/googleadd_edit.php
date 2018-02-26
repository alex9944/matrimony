<?php 
session_start();
include "config/error.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
include("image.php"); 
//error_reporting(E_ALL ^ E_NOTICE);
?>
<script language="javascript">
function validate()
{
/*var cat=document.frmedit.ename.value;
if(cat=="")
{
alert("Please Enter the Source Link");
document.frmedit.ename.focus();
return false;
} */
  //var img = document.getElementById('file_up');
  
  
 var img = document.frmedit.file_up;
 if(img!="")
 {
  var width = img.clientWidth;
  var height = img.clientHeight;
  alert(width + 'x' + height + '<?php echo $id_edit; ?>');  
 }

return true;
}
</script>
<?php 
$id_edit=$_REQUEST['ad_id'];
$result=mysql_query("select * from google_ad where ad_id='$id_edit'");
$row=mysql_fetch_array($result);
$source=$row['source'];
$image=$row['image'];
$file="../bannerlogo/".$image;

error_reporting(E_ALL ^ E_NOTICE);
if($_POST['submit']!="")
{
$imageup=$_FILES['file_up']['name'];
if($imageup!="")
{
//$imageup=$_FILES['file_up']['name'];
	
	$ext=explode(".",$imageup);
	$extension=$ext[1];
	
	
	if($extension=='jpg' || $extension=='gif' || $extension=='BMP' || $extension=='PNG')
	{
	$uploaddir="../bannerlogo/";
	$uploadfile=$uploaddir.basename($imageup);
	move_uploaded_file($_FILES['file_up']['tmp_name'],$uploadfile);	
	unlink($file);
	$newfilename=basename($_FILES['file_up']['name']);
	$ftimages1="../smallbannerlogo/".$newfilename;
	$thumb1= createThumbnail($uploadfile, $ftimages1, 100,50);
     $ftimages2="../largebannerlogo/".$newfilename;
	$thumb2= createThumbnail($uploadfile, $ftimages2, 300,250);
	
	$ename=$_POST['ename'];
	$type=$_POST["type"];
	$status=$_POST["status"];
	$sql="update google_ad set source='$ename',image='$imageup',type='$type',status='$status' where ad_id='$id_edit'";
	$reult=mysql_query($sql);
	//echo $_SESSION['newCategoryId']=mysql_insert_id(); 
	//unset($_SESSION['CategoryId']);
	echo"<script language='javascript'>
		opener.location.reload();
        self.close();
	</script>";
	}
	else
	{
	$err="You can not upload ".$extension." files";
	}
}
else
{
	$ename=$_POST['ename'];
	$type=$_POST["type"];
	$status=$_POST["status"];
	//$image=$_FILES["file_up"]["name"];
	$sql="update google_ad set source='$ename',type='$type',status='$status' where ad_id='$id_edit'";
	$reult=mysql_query($sql);
	//echo $_SESSION['newCategoryId']=mysql_insert_id(); 
	//unset($_SESSION['CategoryId']);
	echo"<script language='javascript'>
		opener.location.reload();
        self.close();
	</script>";
}	

}
?>
 <html>
 <head>
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $webkeyword;?>" />
<meta name="description" content="<?php echo $webdes;?>" />
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <script src="script_tmt_validator.js" type="text/javascript"></script>
<!-- <link href="../css/style.css" rel="stylesheet" type="text/css">-->
 </head>
<body>
<table width="200" border="0" align="center" cellpadding="3" cellspacing="0">

  <tr>
    <td colspan="3" align="center">Edit Your Banner </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"></div></td>
  </tr>
  <!-- <form name="frmedit" action="" method="post"  tmt:validate="true" enctype="multipart/form-data"> -->
  <form name="frmedit" action="" method="post"  onSubmit="return validate()" enctype="multipart/form-data">
  <!-- <tr>
    <td width="67" class="txt"><span class="bold">Source</span></td>
    <td width="11"> : </td>
    <td width="322">
	<textarea name="ename" cols="35" rows="8"><?php //echo "$source" ?></textarea>
	</td>
  </tr> -->
        <?php
  if($err!=NULL)
  { ?>
  <tr>
    <td colspan="3" height="10" class="bold"><font color="#FF0000"><?php echo $err;?></font></td>
  </tr>
 <?php } ?>
  <?php
  if($row["image"]!="")
  { ?>
  <tr>
    <td height="10" colspan="3" align="center" ><img src="../bannerlogo/<?php echo $row["image"]; ?>" ></td>
  </tr>
 <?php } ?>
  <tr>
    <td width="67" class="bold"><span class="textbold">Image</span></td>
    <td width="11"> : </td>
    <td width="322"><input type="file" name="file_up"></td>
  </tr>
 <!-- <tr>
    <td width="67" class="bold"><span class="textbold">Type</span></td>
    <td width="11"> : </td>
    <td width="322"><select name="type">
		<option value="Script" <?php //if($row["type"]=="Script") { echo "selected"; } ?> >Script</option>
		<option value="Image" <?php //if($row["type"]=="Image") { echo "selected"; } ?> >Image</option>
	</select></td>
  </tr> -->
  <tr>
    <td width="67" class="bold"><span class="textbold">Status</span></td>
    <td width="11"> : </td>
    <td width="322"><select name="status">
		<option value="1" <?php if($row["status"]=="1") { echo "selected"; } ?> >Active</option>
		<option value="0" <?php if($row["status"]=="0") { echo "selected"; } ?>>Inactive</option>
	</select></td>
  </tr>
  
  
  <tr>
    <td colspan="2" align="center">&nbsp;&nbsp;</td>
    <td align="center" class="linkNor1S">
	  
	<input name="submit" type="submit" class="loginbg" value="Send">
      <input name="buton" type="button" class="loginbg" onClick="window.close()" value="Cancel"></td>
  </tr>
 
  </form>
  
</table>
</body>
</html>