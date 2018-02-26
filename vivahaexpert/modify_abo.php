<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/about.js"></script>
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
  
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
  $row = mysql_fetch_array($memcontrol)
  ?>
 <div class="col-md-9"> 
    <div id="inner_right" >
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Edit - Profile</h3>
        </div>
        <div class="body" align="left">
          <FORM action="edit_prof.php" class="form-horizontal" name="MatriForm" id="MatriForm" onSubmit="return Validate()" role="form" method="post" style="margin-left:15%;">
            <div class="form-group">
            <div class="col-md-10">
                 <label>Profile</label>
                </div>

              <div class="col-md-10">
                <textarea name="txtmsg" cols="30" class="form-control" rows="4" id="txtmsg" style="width:65%;"onKeyDown="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}"><? echo $row['Profile']; ?></textarea>
             <br>
                  <input name="remLen1" type="text" class="textbox1" value="1000" size="4" maxlength="4" readonly>
                  <span class="style1">You could enter details about you or a bried description about yourself.<br>
                  <span class="style2">Min 50</span> chas and <span class="style2">Max 1000 chars</span>. (If Profile contains ay details about your <br>
                  contact information like e-mail,phone number, ete. Your profile will be rejected)</span>
              </div>
            </div>
            <div class="form-group">
            <div class="col-md-10">
                 <label>Looking</label>
                </div>
              <div class="col-md-10">
                <select name="txtLooking" class="form-control" id="txtLooking" style="width:65%;">
                    <option value="<? echo $row['Looking']; ?>"><? echo $row['Looking']; ?></option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Widow/Widower">Widow/Widower</option>
                    <option value="Divorcee">Divorcee</option>
                    <option value="Separated">Separated</option>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-2">
                <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit">
              </div>
              <div class="col-md-2">
                <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';">
              </div>
            </div>
             
                
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
  </div>
  </div>

  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>