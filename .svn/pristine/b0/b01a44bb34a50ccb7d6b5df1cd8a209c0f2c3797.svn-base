<?Php
include("memprotect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}
</script>

</head>

<body>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">View Phone Number</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	?>
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">
          <?php
		
		if(isset($_REQUEST['key']) and $_REQUEST['key'] =='release')
		 {
		   $update1 = mysql_query("update register set phone_protect='',phone_password ='' WHERE MatriID='".$_SESSION['matriid']."' OR ConfirmEmail = '".$_SESSION['username']."'"); ?>
		   <script>location='protect_phone.php'; </script> 
		   <?php 
		 }
		
		$memberid = $_SESSION['matriid'];
		$mem_det_sql = mysql_query("SELECT MatriID,Name,phone_protect, phone_password FROM register Where ID = '$memberid' or matriid = '$memberid'");
		$mem_det_fetch = mysql_fetch_array($mem_det_sql);
	?>
          View Phone Number Of <?php echo ucfirst($mem_det_fetch["Name"]); ?> (<?php echo $mem_det_fetch["MatriID"]; ?>)
          </h3>
        </div>
        <div class="body" align="left">
<?php  

if(!isset($_SESSION['payment_status'])) {?>
<script>location='membershipform.php'; </script>
<?
 exit;
}
if(($_SESSION['status'] != "Active") && ($_SESSION['status'] != "InActive") && ($_SESSION['status'] != ""))
{
$memberid = $_SESSION['matriid'];
$result = mysql_query("SELECT Fathername,Mothersname,Phone,Mobile, phone_protect, phone_password FROM register Where ID = '$memberid' or matriid = '$memberid' ");
$fetch = mysql_fetch_array($result);
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td align="left">Father's Name</td>
            <td align="left"> : <?php echo $fetch["Fathername"]; ?></td>
          </tr>
          <tr>
            <td align="left">Mother's Name</td>
            <td align="left"> : <?php echo $fetch["Mothersname"]; ?></td>
          </tr>
          <tr>
            <td align="left">Phone Number</td>
            <td align="left"> : 
			<?php 
			echo str_replace("Area Code-","",$fetch["Phone"]);
			
				if(($fetch["Phone"] != "") && ($fetch["Mobile"] != "")) { echo ", "; }
			echo $fetch["Mobile"];
			?>
            </td>
          </tr>
		  
		  <tr>
            <td align="left">&nbsp;</td>
            <td align="left">
			<?php
			if($fetch["phone_protect"] == '')
			{ ?>
			<a onclick="MM_openBrWindow('phone_protect_password.php?id=<?php echo $memberid; ?>','ppm','width=590,height=420')" href="javascript:;">Protect Password</a></td> <?php
			} else { ?> <a onclick="" href="protect_phone.php?key=release">Release Protect Password</a> <?php 
			} ?>
          </tr>
		  
		  <tr>
            <td align="left"><a class="pageNum" style="float:left; font-size:11px; " href="javascript:;" onclick="window.history.go(-1)"><< Go Back</a></td>
            <td align="left">&nbsp;</td>
          </tr>
		  
		  
		  
        </table>
<?Php
}
else {
?>    
<center>Paid member only view phone number of this member.</center>
<?php
}
?>
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