<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
/*require 'php4upload.class.php';
if($_GET['horoschoice']=="1")
{ 			
require 'horosuploaddir.php';
}

$im = new imageupload();
if ($_POST['__upload'])
{
	header('location: '.'http://'.$_SERVER['HTTP_HOST'].preg_replace('/\/([^\/]+?)$/', '/', $_SERVER['PHP_SELF']));
}*/
?>


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

define( 'PROCESSED_IMAGE_DESTINATION', 'horosphotos/' );

if(isset($_FILES['addpho']['name']) and $_FILES['addpho']['name'] != '')
 {
    
     $temp_file_path      = $_FILES['addpho']['tmp_name'];
	 $file_name           = $_SESSION['matriid']."_".$_FILES['addpho']['name'];
	 $uploaded_file_path  = UPLOADED_IMAGE_DESTINATION.$_SESSION['matriid']."_".$_FILES['addpho']['name'];
     move_uploaded_file( $temp_file_path, $uploaded_file_path ); 
	 
	 $SourceFile       =  UPLOADED_IMAGE_DESTINATION.$_SESSION['matriid']."_".$_FILES['addpho']['name'];
	 $DestinationFile  =  PROCESSED_IMAGE_DESTINATION.$_SESSION['matriid']."_".$_FILES['addpho']['name'];
	 
	$WaterMarkText = $siteadmin;
	 watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);
	 
	 //fullsizeimage($temp_file_path);
	 
	 //watermark_text($old_path, $new_path);
	 
	 /*$SourceFile = '/home/user/www/images/image1.jpg';
	 $DestinationFile = '/home/user/www/images/image1-watermark.jpg';
	 $WaterMarkText = 'Copyright phpJabbers.com';
	 watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);*/
	 
	 $strid  =  $_SESSION['matriid'];
	 //$sql  = "INSERT INTO photoalbum(matriid,imagename,status) VALUES('".$_SESSION['matriid']."','".$file_name."','InActive')";
	 $sql  = " update register set HorosApprove ='No', Horoscheck='$file_name' where MatriID='$strid'";
	 mysql_query($sql);
	 
	 $msg  = '<p colspan="3" style="text-align:center; color:green;"><span style="float:left;"><img src="pics/tick.png" /></span><strong style="float:left; padding:3px 0 0 5px;">Your Horoscope Uploaded successfully! </strong></p>';

      print "<script>";

     print " self.location='horosuploadconfirm.php?horoschoice=1';"; // Comment this line if you don't want to redirect

     print "</script>";
 }
?>


<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <!-- <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Horoscope Upload</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	?>
  <div class="col-md-9">
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Horoscope Upload</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><form method="post" enctype="multipart/form-data" action="">
                  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                    <tr>
                      <td colspan="2" align="left">Add Your Horoscope <br>
                        Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>
                    </tr>
                    <tr>
                      <td colspan="2"><p class="normaltext">&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td width="32%" align="left">Select your horoscope image :</td>
                      <td width="68%" align="left"><input name="addpho" type="file" class="textbox1" size="35" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left"><input name="submit" type="submit" class="afterloglightyellow2" value="Upload" /></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                  </table>
                </form>
                <table width="97%" border="0" align="center">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><div class="block">
                        <?

				if ($im->_im_status == true)

				{

				

				include('dbconnect.php'); 

				

$strid=$_SESSION['username']; 







if($_GET['horoschoice']=="1")

{ 			

$update1 = mysql_query("update register set HorosApprove ='No', Horoscheck='$im->imgurl' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());





	 print "<script>";

     print " self.location='horosuploadconfirm.php?horoschoice=1';"; // Comment this line if you don't want to redirect

     print "</script>";

}





				}

				elseif (!empty($im->errorStr))

				{

				echo '<div class="errors">'.$im->errorStr.'</div>';

				}

				

			?>
                      </div></td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
            </tr>
          </table>
          <div class="hline2"></div>
        </div>
      </div>
      <?php include("include/afterloginmenu_active.php"); ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
              <tr>
                <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td class="pg_right"></td>
        </tr>
      </table>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>