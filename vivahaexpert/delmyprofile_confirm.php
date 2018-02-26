<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="JavaScript">

<!--

function Check_form() {



if(document.form1.reason.value == "") {

alert("Kindly enter your reason.");

document.form1.reason.focus();

return false;

}





if(document.form1.reason.value.length > 500 ) {

alert("Please do not enter more than 500 chars. Please shorten your reason and submit again.");

document.form1.reason.focus();

return false;

}



return true;

}



//-->

</script>
</head>

<body>
<?php include("config.php"); 
$strid=$_SESSION['username']; 
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Delete My Profile</span> </div>
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
          <h3 class="float_left title">Delete My Profile</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left"><span class="Alert">Below is the form of delete your profile completly from the site. You must submit the reason to delete.</span></td>
                  </tr>
                  <tr>
                    <td><p class="normaltext">&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td><form name="form1" id="form1" action="delmyprofile_submit.php" method="post" onSubmit="return Check_form()">
                        <?php while($row = mysql_fetch_array($memcontrol)) { ?>
                        <table width="100%" border="0" align="center" cellpadding="1" cellspacing="3">
                          <tr>
                            <td>Matri ID </td>
                            <td class="bodysg"><? echo $row['MatriID']; ?>
                              <input name="hidid" type="hidden" id="hidid" value="<? echo  $row['MatriID']; ?>">
                              <input name="hidemail" type="hidden" id="hidemail" value="<? echo $row['ConfirmEmail']; ?>"></td>
                          </tr>
                          <tr>
                            <td width="16%" align="left">Name</td>
                            <td width="84%" align="left"><? echo $row['Name']; ?></td>
                          </tr>
                          <tr>
                            <td align="left">Email</td>
                            <td align="left"><? echo $row['ConfirmEmail']; ?></td>
                          </tr>
                          <tr>
                            <td align="left">Address</td>
                            <td align="left"><? echo $row['Address']; ?></td>
                          </tr>
                          <tr>
                            <td align="left">Enter reason </td>
                            <td align="left"><textarea name="reason" cols="40" rows="6" id="reason"></textarea></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td align="left"><!--<input type="submit" name="Submit" value="Delete my profile">-->
							<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Delete my profile" type="image" value="Delete my profile" alt="Delete my profile" onclick="">
							
							</td>
                          </tr>
                        </table>
                        <? } ?>
                      </form></td>
                  </tr>
                  <tr>
                    <td height="20"></td>
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
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>