<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<style type="text/css">
.body .profiledetails {
    background-color: #FFFBF8;
    border: 1px solid #FAD6A6;
    clear: both;
    display: block;
    font-size: 11px;
    height: auto;
    padding: 10px;
    width: 640px;
}</style>
</head>

<body>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
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
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Message</span>
</div>
      </li>
        
        <li class="right"></li>
</ul>
</div> -->
<!-- BREADCRUMBS ENDS HERE ########################################  -->
<div class="container">
  <div id="content_area" class="content-bg">
  
 
    <?Php include('include/loginsidebar.php'); 
	?>
    <div id="inner_right">

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1 style="color:#C8060E;"><a name="top" id="top"></a>Nice to See You..., <strong><?php  echo $_SESSION['name'];?></strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">My Message</h3>
        </div>
        <div class="body" align="left">
		<?php include("mymessage_inc.php");?>
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
<!-- CONTENT AREA ENDS HERE ###################################################  -->  

<!-- FOOTER STARTS HERE ###################################################  -->
<?php include("include/footermenu.php") ?>
<!-- FOOTER ENDS HERE ###################################################  -->    



</div>
</body>
</html>