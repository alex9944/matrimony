<?php session_start();
ob_start();
include "../config/error.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

if(isset($_REQUEST['upload']))
{
	
	
	
	 $filename1=basename($_FILES['image1']['name']);
	$tmpfilename1=$_FILES['image1']['tmp_name'];
	$uploadpath1="uploads/".$filename1;
   	move_uploaded_file($tmpfilename1,$uploadpath1); 
	
	$filename2=basename($_FILES['image2']['name']);
	$tmpfilename2=$_FILES['image2']['tmp_name'];
	$uploadpath2="uploads/".$filename2;
   	move_uploaded_file($tmpfilename2,$uploadpath2); 	
	
	$filename3=basename($_FILES['image3']['name']);
	$tmpfilename3=$_FILES['image3']['tmp_name'];
	$uploadpath3="uploads/".$filename3;
   	move_uploaded_file($tmpfilename3,$uploadpath3); 	
			
	
	 $sql="update `premiumads` set `image1`='$uploadpath1',`image2`='$uploadpath2',`image3`='$uploadpath3' where `pre_id`='1'";				  	     
	    
	
	
	$result=mysql_query($sql);


}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $adminsitename;?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function validate()
{
if(document.frmadd.image1.value!= "" )
			{
				var ss=document.frmadd.image1.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
			}
	if(document.frmadd.image2.value!= "" )
			{
				var ss=document.frmadd.image2.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
			}
			if(document.frmadd.image.value!= "" )
			{
				var ss=document.frmadd.image.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
			}
					
			}
</script>
<body>
<table width="98%" border="0" cellpadding="3" cellspacing="1" align="center">
  <tr>
    <td colspan="9"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr>
  <form action="#" method="post" enctype="multipart/form-data" name="frmadd" onsubmit="return validate();">
      <td bgcolor="#FFFFFF"><br />
        <table width="65%" height="65%"border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="4%" align="right" valign="bottom"><img src="images/box_left_top.jpg" width="17" height="17" /></td>
          <td width="92%" background="images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
          <td width="4%" align="left" valign="bottom"><img src="images/box_right_top.jpg" width="17" height="17" /></td>
        </tr>
        <tr>
          <td background="images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
          <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td height="60" colspan="3" align="center" class="head_bg"><div align="left">Premium Classified Ads </div></td>
            </tr>
            <tr>
              <td colspan="3" align="center"></td>
            </tr>
            <tr>
              <td height="35" colspan="3" align="left" class="bold"><label>Double Image(size:200X200) : </label></td>
              </tr>
                  <tr>
                    <td colspan="3" class="bold">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="bold">Image1</td>
                    <td align="center" class="bold">:</td>
                    <td class="bold"><input name="image1" type="file" id="image1" /></td>
                  </tr>
                  <tr>
                    <td width="32%" class="bold">Image2</td>
                    <td width="6%" align="center" class="bold">&nbsp;</td>
                    <td width="62%"><input name="image2" type="file" id="image2" /></td>
                  </tr>
                  <tr>
                    <td height="25" align="right" class="bold">&nbsp;</td>
                    <td align="center" class="bold">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="30" align="left" class="bold">Single Image(300X150): </td>
                    <td align="center" class="bold">&nbsp;</td>
              <td><label></label></td>
            </tr>
                  <!--<tr>
                    <td height="35" align="right" class="bold"><div align="left"><font color="#FF0000"></font>Email ID </div></td>
                    <td align="center" class="bold">:</td>
                    <td><input name="eemail" type="text" id="eemail" value="<?php echo $editemail;?>" /></td>
                  </tr>-->
                  <tr>
              <td height="35" align="left" class="bold">Image</td>
              <td align="center" class="bold">&nbsp;</td>
              <td><label>
                <input name="image3" type="file" id="image" />
              </label></td>
            </tr>
            <tr>
              <td colspan="3" align="center" ><input type="submit" name="upload" id="upload" value="Upload" />              </td>
            </tr>
            <tr>
              <td colspan="3" align="right" class="link1"><span class="ad_text_color"><a href="welcome.php" style="padding-right:30px;">Back</a></span></td>
            </tr>
          </table></td>
          <td background="images/box_right_center.jpg" style="background-position:left; background-repeat:repeat-y;">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" valign="top"><img src="images/box_left_bottom.jpg" width="17" height="17" /></td>
          <td background="images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
          <td align="left" valign="top"><img src="images/box_right_bottom.jpg" width="17" height="17" /></td>
        </tr>
      </table></td>
    </form>
  </tr>
</table>
</body>
</html>
