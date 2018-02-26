<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
$strid=$_SESSION['username']; 
$memchk = mysql_query("SELECT *, MatriID,Name,date_format(MemshipExpiryDate,'%d-%m-%Y') as memexpdate FROM register where MatriID='$strid' ");




if(isset($_POST['Submit'])) {


$post1 = $_POST['member_activity_alerts'];
$post2 = $_POST['membership_information'];
$post3 = $_POST['member_match'];
$post4 = $_POST['special_offers'];
$post5 = $_POST['confirmation_emails'];

$post6 = $_POST['administrator_offer'];
$post7 = $_POST['site_offer'];


 $memchk = mysql_query("INSERT INTO `maxasia_numinous`.`opts_settings` (`Member_activity_alerts`, `Membership_Information`, `Member_Match`, `Special_Offers`, `Confirmation_emails`, `Administrator_mails`, `Site_Offers`) VALUES ('$post1', '$post2', '$post3', '$post4', '$post5', '$post5', '$post6');");
$succ = "Your message has been updated successfully";


}



?>

<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
 <!--  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Opt Ins</span> </div>
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
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Opt Ins</h3>
        </div>
        <div class="body" align="left">
		<form name="frm" action="" method="post"> 
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
           <tr class="hline2">
		   <font color="#00CC00"><b><?=$succ?></b> </font>
		   </tr>
		    <tr class="hline2">
              <td><div align="left">Member activity alerts</div></td>
              <td><div align="left"><input type="radio" name="member_activity_alerts" id="member_activity_alerts" value="1" /> Yes</div></td>
              <td><div align="left"><input type="radio" name="member_activity_alerts" id="member_activity_alerts" value="0" /> No</div></td>
            </tr>  
            <tr class="hline2">
              <td><div align="left">Membership Information</div></td>
              <td><div align="left"><input type="radio" name="membership_information" id="membership_information" value="1" /> Yes</div></td>
              <td><div align="left"><input type="radio" name="membership_information" id="membership_information" value="0" /> No</div></td>
            </tr>  
            <tr class="hline2">
              <td><div align="left">Member Match</div></td>
              <td><div align="left"><input type="radio" name="member_match" id="member_match" value="1" /> Yes</div></td>
              <td><div align="left"><input type="radio" name="member_match" id="member_match" value="0" /> No</div></td>
            </tr>  
            <tr class="hline2">
              <td><div align="left">Special Offers</div></td>
              <td><div align="left"><input type="radio" name="special_offers" id="special_offers" value="1" /> Yes</div></td>
              <td><div align="left"><input type="radio" name="special_offers" id="special_offers" value="0" /> No</div></td>
            </tr>  
            <tr class="hline2">
              <td><div align="left">Confirmation emails</div></td>
              <td><div align="left"><input type="radio" name="confirmation_emails" id="confirmation_emails" value="1" /> Yes</div></td>
              <td><div align="left"><input type="radio" name="confirmation_emails" id="confirmation_emails" value="0" /> No</div></td>
            </tr>  
            <tr class="hline2">
              <td><div align="left">Administrator mails</div></td>
              <td><div align="left"><input type="radio" name="administrator_offer" id="administrator_offer" value="1" /> Yes</div></td>
              <td><div align="left"><input type="radio" name="administrator_offer" id="administrator_offer" value="0" /> No</div></td>
            </tr>  
            <tr class="hline2">
              <td><div align="left">Site Offers</div></td>
              <td><div align="left"><input type="radio" name="site_offer" id="site_offer" value="1" /> Yes</div></td>
              <td><div align="left"><input type="radio" name="site_offer" id="site_offer" value="0" /> No</div></td>
            </tr>
            <tr class="hline2">
              <td colspan="3"><div align="center"><input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Update My Profile" alt="Update My Profile" ></div></td>
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
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>


</body>
</html>