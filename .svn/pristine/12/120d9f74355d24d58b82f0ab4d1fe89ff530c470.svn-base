<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
$strid=$_SESSION['username']; 
///// TICK Photo Check List //////////////
$update1 = mysql_query("UPDATE register SET Horoschecklist='chklist-tick.gif' WHERE MatriID='$strid' ");
$horoschk = mysql_query("SELECT MatriID,Horoscheck FROM register where MatriID='$strid' ");
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Horos Upload Confirmation</span> </div>
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
          <h3 class="float_left title">Horos Upload Confirmation</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><?php  while($row = mysql_fetch_array($horoschk)){ ?>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><p class="normaltext">&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td><div align="center">
                        <table width="450" border="0" cellpadding="2" cellspacing="2" class="tbl_profiledetails" align="center" >
                          <tr>
                            <td width="107" height="19"><? if ($_GET['horoschoice']=="1") { ?>
                              <div align="center"> <!--<img src="photoprocess.php?image=<?php  //echo $row['Horoscheck']?>&maxim_size=100;"  hspace="1" vspace="1" border="0" class="submenubox">--><img src="horosphotos/<?php  echo $row['Horoscheck']?>"  hspace="1" vspace="1" border="0" class="submenubox" width="100" height="100"> </div>
                              <? } ?></td>
                            <td width="327"><div align="center">
                                <div align="center">
                                  <div align="center">Horoscope has been Uploaded Successfully. <br>
                                    It will be online after Validate.<br>
                                  </div>
                                </div>
                              </div></td>
                          </tr>
                        </table>
                      </div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="20"></td>
                  </tr>
                </table>
                <?php } mysql_close($con); ?></td>
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