<?php include("memprotect.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>

</head>



<body>

<?php include("config.php"); ?>

<?php 

$streiid = $_GET['eiid'];

$streiidgen = $_SESSION['matriid'];

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

        <div id="breadcrumb_text">You are Here: <span class="pathway"> <a href="#">Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">How it Works</span> </div>

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

      <h1><a name="top" id="top"></a>

        </strong></h1>

      <div class="profile_block">

        <div class="header">

          <h3 class="float_left title">Horoscope Upload Request </h3>

        </div>

        <div class="body" align="left">

          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

            <tr>

              <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td><form name="eiform" id="eiform" action="horoscope_int_send_submit.php"  method="post">

                        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">

                          <tbody>

                            <tr>

                              <td colspan="2" valign="center" bgcolor="#FFFFFF"><strong>Horoscope Upload Request  : <?php echo $streiid ?></span>

                                <input name="txteiid" type="hidden" id="txteiid" value="<?php echo $streiid ?>">

                                <input name="txteiidgen" type="hidden" id="txteiidgen" value="<?php echo $streiidgen ?>">

                                </strong></td>
                            </tr>

                            <tr>

                              <td valign="center"><input name="INTERESTMSG" type="radio" id="INTERESTMSG" value="1" checked="checked"/></td>

                              <td valign="center">I am interested in   your profile. Request you to generate or upload your horoscope in the profile </td>
                            </tr>

                            <tr>

                              <td colspan="2" valign="center"> <input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:65px;" name="Submit" type="image" value="Submit"></td>
                            </tr>
                          </tbody>
                        </table>

                      </form></td>
                  </tr>

                  <tr>

                <!--    <td><div align="right">Ready to take the next step?</div></td> -->
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                </table></td>

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