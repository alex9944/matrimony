<?php 
session_start();
include "../config/error.php";
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
var cat=document.frmadd.source.value
if(cat=="")
{
alert("Please Enter the Source Link");
document.frmadd.source.focus();
return false
}
return true
}
</script>
<?php 
//$id_edit=$_REQUEST['ad_id'];
//$result=mysql_query("select * from google_ad where ad_id='$id_edit'");
//$row=mysql_fetch_array($result);
//$source=$row['source'];
//$image=$row['image'];
//$file="bannerlogo/".$image;

//error_reporting(E_ALL ^ E_NOTICE);
if($_POST['submit']!="")
{
$image=$_FILES['file_up']['name'];
if($image!="")
{
//$image=$_FILES['file_up']['name'];
	
	$ext=explode(".",$image);
	$extension=$ext[1];	

  
	if($extension=='jpg' || $extension=='gif' || $extension=='BMP' || $extension=='PNG')
	{
	$uploaddir="../bannerlogo/";
	
	$tmpfilename1 = $_FILES['file_up']['tmp_name'];
	$uploadfile=$uploaddir.$image;	
	//$upload1="bannerlogo/".$adimage;
	//echo $upload1;
    //move_uploaded_file($tmpfilename1,$upload1);
	//echo move_uploaded_file($tmpfilename1,$upload1);
	//exit;
	//error_reporting(1);
	move_uploaded_file($tmpfilename1,$uploadfile) or die("error");
	
	//unlink($file);
	$newfilename=basename($_FILES['file_up']['name']);
	
	$ftimages1="../smallbannerlogo/".$newfilename;
	
	$thumb1= createThumbnail($uploadfile, $ftimages1, 100,50);
     $ftimages2="../largebannerlogo/".$newfilename;
	$thumb2= createThumbnail($uploadfile, $ftimages2, 300,250);
	
	$location=$_POST['location'];
	$source=$_POST['source'];
	$type=$_POST["type"];
	$status=$_POST["status"];
	//$sql="update google_ad set source='$ename',image='$image',type='$type',status='$status' where ad_id='$id_edit'";
	$sql="insert into google_ad (location, source, image, type, status) values ('$location', '$source','$image','$type','$status')";

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
    $location=$_POST['location'];
	$source=$_POST['source'];
	$type=$_POST["type"];
	$status=$_POST["status"];
	//$image=$_FILES["file_up"]["name"];
	$sql="insert into google_ad (location, source, type, status) values ('$location', '$source','$type','$status')";
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
 <!-- <link href="../css/style.css" rel="stylesheet" type="text/css"> -->
 </head>
<body>
<table width="200" border="0" align="center" cellpadding="3" cellspacing="0">

  <tr>
    <td colspan="3" align="center">Add Your Banner </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"></div></td>
  </tr>
  <form name="frmadd" action="" method="post"  tmt:validate="true" enctype="multipart/form-data">
    <tr>
    <td width="67" class="txt"><span class="bold">Location</span></td>
    <td width="11"> : </td>
    <td width="322">
	<input type="text" name="location" value="" />
	</td>
  </tr>
  <tr>
    <td width="67" class="txt"><span class="bold">Source</span></td>
    <td width="11"> : </td>
    <td width="322">
	<textarea name="source" cols="35" rows="8"></textarea>
	</td>
  </tr>
        <?php
  if($err!=NULL)
  { ?>
  <tr>
    <td colspan="3" height="10" class="bold"><font color="#FF0000"><?php echo $err;?></font></td>
  </tr>
 <?php } ?>
  
  <tr>
    <td width="67" class="bold"><span class="textbold">Image</span></td>
    <td width="11"> : </td>
    <td width="322"><input type="file" name="file_up"></td>
  </tr>
  <tr>
    <td width="67" class="bold"><span class="textbold">Type</span></td>
    <td width="11"> : </td>
    <td width="322"><select name="type">
		<option value="Script">Script</option>
		<option value="Image">Image</option>
	</select></td>
  </tr>
  <tr>
    <td width="67" class="bold"><span class="textbold">Status</span></td>
    <td width="11"> : </td>
    <td width="322"><select name="status">
		<option value="1">Active</option>
		<option value="0">Inactive</option>
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