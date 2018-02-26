<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script type="text/javascript">
function validatesettingfrm()
{
	if(document.settingfrm.txtemail.value == "")
	{
		alert("Please enter email address.");
		document.settingfrm.txtemail.focus();
		return false;
	}
	if(document.getElementById("txtemail").value != "")
    {
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       var address = document.getElementById("txtemail").value;
       if(reg.test(address) == false)
       {
          alert('Please enter valid email address.');
          return false;
       }
    }
	return true;
}
</script>
</head>

<body>
<?php include("config.php"); 
$strid=$_SESSION['username']; 

if(isset($_POST['chksettingfrm']))
{
  $txtemail  = trim($_POST['txtemail']);
  $userid    = '';
  $sqls = "select * from register where ConfirmEmail = '$txtemail' ";
  $results = mysql_query($sqls);
  $counts  = mysql_affected_rows();
  if($counts > 0)
   {
      while($res = mysql_fetch_array($results))
	   {
	      $userid  =  $res['MatriID'];
	   }
   }
   if($counts > 0 and $userid != $strid)
    {
	   $msg = "<p style='text-align:center; color:red; font-weight:bold;'>Email is already used. Please try some other email id.</p>";
	}
   else if($counts == 0 and $userid != $strid)
    {
	   $newsql =  "update register set ConfirmEmail = '$txtemail' where MatriID='$strid'";
	   mysql_query($newsql);
	   $msg  = "<p style='text-align:center; color:green; font-weight:bold;'>Email updated successfully.</p>";
	}	
   	
   //echo $msg;	
 // print_r($_POST);
}

if(isset($_REQUEST["chksettingfrm"]))
{
	$txtemail = $_REQUEST["txtemail"];
}
$memchk = mysql_query("SELECT ConfirmEmail FROM register where MatriID='$strid' ");
$mem_mail_fetch = mysql_fetch_array($memchk);
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Edit Email Setting</span> </div>
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
          <h3 class="float_left title">Edit Email Setting</h3>
        </div>
        <div class="body" align="left">
		 <?php if(isset($msg)) echo $msg; ?>
        <form name="settingfrm" id="settingfrm" method="post">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr class="hline2">
              <td width="30%"><div align="left">Email Address</div></td>
              <td width="70%"><div align="left">: <input type="text" name="txtemail" id="txtemail" value="<?php echo $mem_mail_fetch["ConfirmEmail"]; ?>" class="textbox1" size="50" /></div></td>
            </tr>  
            <tr class="hline2">
              <td colspan="2"><div align="center"><input type="hidden" name="chksettingfrm" id="chksettingfrm" value="true" />
			<!--  <input name="Submit" type="submit" value="Submit" onclick="return validatesettingfrm();">-->
			  
			   <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return validatesettingfrm();">
			  </div></td>
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