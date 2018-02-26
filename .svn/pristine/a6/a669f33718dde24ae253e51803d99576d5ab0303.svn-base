<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/composemsg.js"></script>
</head>

<body>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Send Personalised Message</span> </div>
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
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Send Personalised Message</h3>
        </div>
        <div class="body">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

    <tr>

      <td>

	  <?php 

	  if ($_SESSION['status'] != 'InActive' and $_SESSION['status'] != 'Active')

	  {

	  ?>

	  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

        <tr>

          <td><div align="left">You can use this option to send your PERSONALIZED message to  Interested  member.</div></td>

        </tr>

        <tr>

          <td><form name="form" action="composemsg_submit.php" method="post" onSubmit="return validate()">

            <table width="100%" border="0" cellspacing="1" cellpadding="1">

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr>

                <td>Message To : <?php $strTo = $_POST['txtTo']; echo $strTo; ?>

                  <input name="txtTo" type="hidden" id="txtTo" value="<?php echo $strTo ?>"></td>

              </tr>

              <tr>

                <td><textarea name="txtmsg" cols="65" rows="12" wrap="physical" id="txtmsg"

onKeyDown="textCounter(document.form.txtmsg,document.form.remLen1,1000)" onKeyUp="textCounter(document.form.txtmsg,document.form.remLen1,1000)" runat="server"></textarea>

                    <input name="remLen1" type="text" class="bodylight" value="1000" size="4" maxlength="4" readonly="readonly" />

                  Characters left </td>

              </tr>

              <tr>

                <td><div align="right">

                  <input name="Submit" type="image" value="Submit" src="pics/button-send.gif" />

                &nbsp;&nbsp;&nbsp;</div></td>

              </tr>

            </table>

          </form></td>

        </tr>

        

      </table>        

	  <? } else { ?>

	  <table width="100%" border="0" cellspacing="1" cellpadding="1" class="tbl_profiledetails">

  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><div align="center"><b>Only Paid Members can send the Personalised message.</b></div></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

  </tr>

</table>
	 <? } ?>

	  

	  </td>

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