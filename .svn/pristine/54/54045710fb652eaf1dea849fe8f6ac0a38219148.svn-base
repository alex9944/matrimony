<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}

//-->

</script>
<SCRIPT LANGUAGE="JavaScript">

<!-- Begin

var win = null;

function newWindow(mypage,myname,w,h,features) {

  var winl = (screen.width-w)/2;

  var wint = (screen.height-h)/2;

  if (winl < 0) winl = 0;

  if (wint < 0) wint = 0;

  var settings = 'height=' + h + ',';

  settings += 'width=' + w + ',';

  settings += 'top=' + wint + ',';

  settings += 'left=' + winl + ',';

  settings += features;

  win = window.open(mypage,myname,settings);

  win.window.focus();

}

//  End -->

</script>
</head>

<body>
<?php include("config.php"); 
$strid=$_SESSION['username']; 
$memchk = mysql_query("SELECT * FROM paiddetails where Pmatriid='$strid' order by Paidid  desc");
$ordercount = mysql_affected_rows();
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Orders</span> </div>
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
      <div id="inner_right" > 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">My Orders</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><div align="center"> <br>
                  <table width="100%" height="30" border="0" align="center" cellpadding="3" cellspacing="0" style="border:1px solid #F9D6A5;">
                    <tr>
                      <td width="5" class="header">&nbsp;</td>
                      <td width="23%" class="header"><strong>Membership</strong></td>
                      <td width="18%" class="header"><strong>Duration</strong></td>
                      <td width="21%" class="header"><strong>No of Contacts</strong></td>
                      <td width="17%" class="header"><strong>Amount</strong></td>
                      <td width="21%" class="header"><strong>View Invoice</strong></td>
                    </tr>
                    <?php if($ordercount > 0) { while($row = mysql_fetch_array($memchk)){ ?>
                    <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
                    <td>&nbsp;</td>
                      <td class="Partext1"><?php  echo $row['Pplan']?></td>
                      <td class="Partext1"><?php  echo $row['Pplanduration']?>
                        days</td>
                      <td class="Partext1"><?php  echo $row['Pnocontct']?></td>
                      <td class="Partext1"><?php  echo $row['Pamount']?></td>
                      <td class="Partext1"><a href="#null" title="Edit <?php  echo $row['planname']?>" onClick="newWindow('invoice.php?id=<?php  echo $row['Paidid']?>','','790','500')">Invoice </a></td>
                    </tr>
                    <tr>
                      <td colspan="5" background="images/dot.gif" height="2"></td>
                    </tr>
                    <? } }
					else
					 { ?>
					   <tr>
                        <td colspan="5" style="text-align:center; color:red;">There is no orders placed.</td>
                       </tr> <?php 
					 } ?>
                  </table>
                  <br>
                  <br>
                </div></td>
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