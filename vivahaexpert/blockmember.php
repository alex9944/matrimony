<?Php
include("memprotect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?Php
$blockmember = 	$_REQUEST["id"];
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Block Member</span> </div>
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
          <h3 class="float_left title">Add To Block Member Of <?Php echo $blockmember;?></h3>
        </div>
        <div class="body" align="left">
<?Php

    

    if(isset($_REQUEST['id']) and $_REQUEST['id'] != '')
	 {
		$matri_id  =  $_REQUEST['id'];
		$qry       =  "delete from addtofavorite where memberid = '".$_SESSION['matriid']."' AND favmemberid = '$matri_id'";
		$result    =  mysql_query($qry);  
	 }

	$searchalreadyblockmember_sql = "SELECT COUNT(*) AS blockmembercount FROM blockmember WHERE memberid = '".$_SESSION['matriid']."' AND blockmemberid = '".$blockmember."'";
	$searchalreadyblockmember_exec = mysql_query($searchalreadyblockmember_sql);
	$searchalreadyblockmember_fetch = mysql_fetch_array($searchalreadyblockmember_exec);
	if($searchalreadyblockmember_fetch["blockmembercount"] == 0)
	{
		$add_to_block_member_sql = "INSERT INTO blockmember(memberid,blockmemberid) VALUES('".$_SESSION['matriid']."','".$blockmember."')";
		mysql_query($add_to_block_member_sql);
?>
		<div class="tbl_profiledetails" align="center">You  have successfully blocked this member.<br />
        <a href="javascript:history.go(-1);"><strong>BACK</strong></a>
        </div>		
<?Php 
	}
	else
	{
?>
		<div class="tbl_profiledetails" align="center">This  member is already in your blocked list.<br />
        <a href="javascript:history.go(-1);"><strong>BACK</strong></a>
        </div>
<?Php 
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