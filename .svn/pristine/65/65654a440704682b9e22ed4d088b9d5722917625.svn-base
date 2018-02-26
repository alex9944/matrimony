<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
require 'php4upload.class.php';



if($_GET['Choice']=="1")

{ 			

require 'Photouploddir1.php';

}

elseif ($_GET['Choice']=="2")

{

require 'Photouploddir2.php';

}

elseif ($_GET['Choice']=="3")

{

require 'Photouploddir3.php';

}

elseif ($_GET['Choice']=="4")

{

require 'Photouploddir4.php';

}
elseif ($_GET['Choice']=="5")

{

require 'Photouploddir5.php';

}

elseif ($_GET['Choice']=="6")

{

require 'Photouploddir6.php';

}
elseif ($_GET['Choice']=="7")

{

require 'Photouploddir7.php';

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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Modify Photo</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Modify Main Photo</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><form method="post" enctype="multipart/form-data" action="<?=$im->path?>">
                  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                    <tr>
                      <td colspan="2"><div align="left">Modify/Change  your main photo<br>
                        Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>.</div></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="27%"><div align="left">Select your main photo :</div></td>
                      <td width="73%"><div align="left"><input name="__upload" type="file" class="textbox1" size="35" style="height:25px; border:none;" /></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>
					  <input type="image" onclick="return addphotovalidation();" alt="Upload" value="Upload" name="submit" style="float:none; clear:both; border:0px;" class="button-small square-orange uppercase float_right">
					  <?php /*?><input name="submit" type="submit" value="Upload" /><?php */?>
					  </td>
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
                        <?

				if ($im->_im_status == true)

				{

				

				include('dbconnect.php'); 

				

$strid=$_SESSION['username']; 







if($_GET['Choice']=="1")

{ 	



// REMOVE OLD PHOTO1 FROM THE SERVER -- memphoto1 folder

	$stroldphoto1 = $_GET['op'];

	$myFile = "memphoto1/".$stroldphoto1;

	unlink($myFile); 

			

$update1 = mysql_query("update register set Photo1='$im->imgurl', Photo1Approve='No' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());



	 print "<script>";

     print " self.location='photouploadconfirm.php?choice=1';"; // Comment this line if you don't want to redirect

     print "</script>";



}

elseif ($_GET['Choice']=="2")



{



// REMOVE OLD PHOTO2 FROM THE SERVER -- memphoto2 folder

	$stroldphoto2 = $_GET['op'];

	$myFile = "memphoto2/".$stroldphoto2;

	unlink($myFile);

	

	

$update2 = mysql_query("update register set Photo2='$im->imgurl', Photo2Approve='No' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());



	 print "<script>";

     print " self.location='photouploadconfirm.php?choice=2';"; // Comment this line if you don't want to redirect

     print "</script>";

	 

}

elseif ($_GET['Choice']=="3")

{



// REMOVE OLD PHOTO3 FROM THE SERVER -- memphoto3 folder

	$stroldphoto3 = $_GET['op'];

	$myFile = "memphoto3/".$stroldphoto3;

	unlink($myFile);

	

$update3 = mysql_query("update register set Photo3='$im->imgurl', Photo3Approve='No' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());



	 print "<script>";

     print " self.location='photouploadconfirm.php?choice=3';"; // Comment this line if you don't want to redirect

     print "</script>";

}

elseif ($_GET['Choice']=="4")

{



// REMOVE OLD PHOTO3 FROM THE SERVER -- memphoto3 folder

	$stroldphoto3 = $_GET['op'];

	$myFile = "memphoto4/".$stroldphoto3;

	unlink($myFile);

	

$update3 = mysql_query("update register set Photo4='$im->imgurl', Photo4Approve='No' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());



	 print "<script>";

     print " self.location='photouploadconfirm.php?choice=4;"; // Comment this line if you don't want to redirect

     print "</script>";

}
elseif ($_GET['Choice']=="5")

{



// REMOVE OLD PHOTO3 FROM THE SERVER -- memphoto3 folder

	$stroldphoto3 = $_GET['op'];

	$myFile = "memphoto4/".$stroldphoto3;

	unlink($myFile);

	

$update3 = mysql_query("update register set Photo5='$im->imgurl', Photo5Approve='No' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());



	 print "<script>";

     print " self.location='photouploadconfirm.php?choice=5;"; // Comment this line if you don't want to redirect

     print "</script>";

}
	
elseif ($_GET['Choice']=="6")

{



// REMOVE OLD PHOTO3 FROM THE SERVER -- memphoto3 folder

	$stroldphoto3 = $_GET['op'];

	$myFile = "memphoto6/".$stroldphoto3;

	unlink($myFile);

	

$update3 = mysql_query("update register set Photo6='$im->imgurl', Photo6Approve='No' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());



	 print "<script>";

     print " self.location='photouploadconfirm.php?choice=6;"; // Comment this line if you don't want to redirect

     print "</script>";

}

elseif ($_GET['Choice']=="7")

{



// REMOVE OLD PHOTO3 FROM THE SERVER -- memphoto3 folder

	$stroldphoto3 = $_GET['op'];

	$myFile = "memphoto7/".$stroldphoto3;

	unlink($myFile);

	

$update3 = mysql_query("update register set Photo7='$im->imgurl', Photo7Approve='No' where MatriID='$strid'")

or die("Could not update data because ".mysql_error());



	 print "<script>";

     print " self.location='photouploadconfirm.php?choice=7;"; // Comment this line if you don't want to redirect

     print "</script>";

}
					

					//echo '<h2>Upload Successful!</h2>';	

					

					//print '<a href="'.$im->imgurl.'">Photo </a>';

					//print '<br>';

					//print "$im->imgurl" ;

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