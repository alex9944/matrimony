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
  
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	     $row = mysql_fetch_array($memcontrol)
	   ?>
    <div class="col-md-9"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Change Password</h3>
        </div>
        <div class="body" align="left">
          <FORM action="changepassword_submit.php" name="signupForm" id="signupForm" class="form-horizontal" role="form" method="post" style="margin-left:15%;">
           <div class="form-group">
            <div class="col-md-10 Alert" align="center">
              <strong>
                    <?php $straction =  $_GET['action'];

      if ($straction == "wrong old password") {

      echo "<img src=pics/warning.png width=32 height=32 align=absmiddle>  You did enter Wrong Old Password";

      } ?>
                    </strong>
            </div>
            <div class="col-md-10">
              <input name="txtop" type="password" Class="form-control" syyle="width:65%" placeholder="Enter Old Password" id="txtop" maxlength="50" >
            </div>
           </div>
           <div class="form-group">
            <div class="col-md-10">
              <input name="txtp" type="password" Class="form-control" syyle="width:65%" placeholder="Enter New Password" id="txtp" maxlength="50" onKeyDown="nospaces(this)">
            </div>
           </div>
           <div class="form-group">
            <div class="col-md-10">
              <input name="txtcp" type="password" Class="form-control" syyle="width:65%" placeholder="Enter New Confirm Password" id="txtcp" maxlength="50"  />
            </div>
           </div>
           <div class="form-group">
            <div class="col-md-2">
              <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit" onclick="return Check_form();">
            </div>
           </div>
          
             
          </FORM>
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