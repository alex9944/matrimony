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

  <!-- <div id="breadcrumb">

    <ul class="breadcrumbs">

      <li class="left"></li>

      <li class="center">

        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Photo Upload</span> </div>

      </li>

      <li class="right"></li>

    </ul>

  </div> -->

  <!-- BREADCRUMBS ENDS HERE ########################################  -->

  
<div class="container">
  <div id="content_area" class="content-bg">

    <?Php include('include/loginsidebar.php'); 

	$row = mysql_fetch_array($memcontrol)

	?>
<div class="col-md-9">
    <div id="inner_right"> 

      

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

      <h1><a name="top" id="top"></a>Nice to See You..., <strong>

        <?php  echo $_SESSION['name'];?>

        </strong></h1>

      <div class="profile_block">

        <div class="header">

          <h3 class="float_left title">Photo Upload</h3>

        </div>

        <div class="body" align="left">

          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

            <tr>

              <td><form method="post" enctype="multipart/form-data" action="<?=$im->path?>">

                  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">

                    <tr>

                      <td colspan="2" align="left">Add Your photo : Choice-1<br>

                        Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>

                    </tr>

                    <tr>

                      <td colspan="2">&nbsp;</td>

                    </tr>

                    <tr class="hline2">

                      <td width="23%"><div align="left">Select your Photo</div></td>

                      <td width="77%"><div align="left"><input name="__upload" type="file" class="textbox1" height="60" size="35" /></div></td>

                    </tr>

                    <tr class="hline2">

                      <td>&nbsp;</td>

                      <td><a onclick="javascript: window.history.back();" href="javascript:;"><b>&lt;&lt; Go Back</b></a> &nbsp;&nbsp;&nbsp;<input type="submit" style="height: 25px; width: 90px;" value="Upload" name="submit" class="button-small square-orange uppercase"></td>

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


				//if ($im->_im_status == true)
				
				if(isset($_POST['submit'])) 	
				



				{



				



				include('dbconnect.php'); 



				



$strid=$_SESSION['username']; 















if($_GET['Choice']=="1")



{ 			



$update1 = mysql_query("update register set Photo1='$im->imgurl' where MatriID='$strid'")



or die("Could not update data because ".mysql_error());







	 print "<script>";



     print " self.location='photouploadconfirm.php?choice=1';"; // Comment this line if you don't want to redirect



     print "</script>";







}



elseif ($_GET['Choice']=="2")



{



$update2 = mysql_query("update register set Photo2='$im->imgurl' where MatriID='$strid'")



or die("Could not update data because ".mysql_error());







	 print "<script>";



     print " self.location='photouploadconfirm.php?choice=2';"; // Comment this line if you don't want to redirect



     print "</script>";



	 



}



elseif ($_GET['Choice']=="3")



{



$update3 = mysql_query("update register set Photo3='$im->imgurl' where MatriID='$strid'")



or die("Could not update data because ".mysql_error());







	 print "<script>";



     print " self.location='photouploadconfirm.php?choice=3';"; // Comment this line if you don't want to redirect



     print "</script>";



}


elseif ($_GET['Choice']=="4")



{



$update4 = mysql_query("update register set Photo4='$im->imgurl' where MatriID='$strid'")



or die("Could not update data because ".mysql_error());







	 print "<script>";



     print " self.location='photouploadconfirm.php?choice=4';"; // Comment this line if you don't want to redirect



     print "</script>";



}

elseif ($_GET['Choice']=="5")



{



$update5 = mysql_query("update register set Photo5='$im->imgurl' where MatriID='$strid'")



or die("Could not update data because ".mysql_error());







	 print "<script>";



     print " self.location='photouploadconfirm.php?choice=5';"; // Comment this line if you don't want to redirect



     print "</script>";



}

elseif ($_GET['Choice']=="6")



{



$update6 = mysql_query("update register set Photo6='$im->imgurl' where MatriID='$strid'")



or die("Could not update data because ".mysql_error());







	 print "<script>";



     print " self.location='photouploadconfirm.php?choice=6';"; // Comment this line if you don't want to redirect



     print "</script>";



}

elseif ($_GET['Choice']=="7")



{



$update7 = mysql_query("update register set Photo7='$im->imgurl' where MatriID='$strid'")



or die("Could not update data because ".mysql_error());







	 print "<script>";



     print " self.location='photouploadconfirm.php?choice=7';"; // Comment this line if you don't want to redirect



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

  </div>

  </div>

  <!-- CONTENT AREA ENDS HERE ###################################################  --> 

  

  <!-- FOOTER STARTS HERE ###################################################  -->

  <?php include("include/footermenu.php") ?>

  <!-- FOOTER ENDS HERE ###################################################  --> 

  

</div>

</body>

</html>