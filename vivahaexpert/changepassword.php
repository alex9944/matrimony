<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/changepassword.js"></script>
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
  <!-- <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Change Password</span> </div>
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
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Change Password</h3>
        </div>
        <div class="body" align="left">
          <form name="signupForm" id="signupForm" action="changepassword_submit.php" method="post">
            <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
              <tr>
                <td colspan="2"><div align="center" class="Alert"><strong>
                    <?php $straction =  $_GET['action'];

		  if ($straction == "wrong old password") {

		  echo "<img src=pics/warning.png width=32 height=32 align=absmiddle>  You did enter Wrong Old Password";

		  } ?>
                    </strong></div></td>
              </tr>
              <tr class="hline2">
                <td width="50%"><div align="left">Enter Old Password</div></td>
                <td width="50%"><div align="left">: &nbsp;<input name="txtop" type="password" Class="textbox1" id="txtop" maxlength="50" ></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Enter New Password</div></td>
                <td><div align="left">: &nbsp;<input name="txtp" type="password" Class="textbox1" id="txtp" maxlength="50" onKeyDown="nospaces(this)"></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Enter New Confirm Password</div></td>
                <td><div align="left">: &nbsp;<input name="txtcp" type="password" Class="textbox1" id="txtcp" maxlength="50"  /></div></td>
              </tr>
              <tr class="hline2">
                <td>&nbsp;</td>
                <td><div align="left"><!--<input name="Submit" type="submit" value="Submit" src="pics/submit_but.gif" onclick="return Check_form();">-->
				
				 <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return Check_form();">
				
				</div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form>
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
  </div></div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>