<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
require 'php4upload.class.php';
if($_GET['horoschoice']=="1")
{ 			
require 'horosuploaddir.php';
}
$im = new imageupload();
if ($_POST['__upload'])
{
	header('location: '.'http://'.$_SERVER['HTTP_HOST'].preg_replace('/\/([^\/]+?)$/', '/', $_SERVER['PHP_SELF']));
}
?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Modify/Change Horoscope</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	?>
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Modify/Change Horoscope</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><form method="post" enctype="multipart/form-data" action="<?=$im->path?>">
                  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                    <tr>
                      <td colspan="2" align="left">Change  Your Horoscope here.<br>
                        Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>
                    </tr>
                    <tr>
                      <td colspan="2"><p class="normaltext">&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td width="32%"><div align="left">Select your horoscope image :</div></td>
                      <td width="68%"><div align="left"><input name="__upload" type="file" class="textbox1" size="35" /></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><input name="submit" type="submit" class="" value="Upload" /></div></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                  </table>
                </form>
                <table width="100%" border="0" align="center">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><div class="block">
                        <?php
				if ($im->_im_status == true)
				{
				include('dbconnect.php'); 
$strid=$_SESSION['username']; 
if($_GET['horoschoice']=="1")
{ 		
// DELETE OLD FILE
	$stroldhoros = $_GET['oh'];
	$myFile = "horosphotos/".$stroldhoros;
	unlink($myFile);
$update1 = mysql_query("update register set Horoscheck='$im->imgurl', HorosApprove='No' where MatriID='$strid'")
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
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>