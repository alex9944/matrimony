<?php
session_start();
ob_start(); 
include("config/error.php");
include("pagination.php");
 $cd=date("Y-m-d");

if(isset($_REQUEST['loginbutton']))
{
$login_userid=$_REQUEST['email'];
$login_pass=$_REQUEST['password'];

$login_select=mysql_query("select * from `class_register` where `reg_email`='$login_userid' AND `reg_password`='$login_pass' AND reg_status='0'");

$login_count=mysql_num_rows($login_select);
 

if($login_count > 0)
{

$login_fetch=mysql_fetch_array($login_select);
$user_id=$login_fetch['reg_id'];
$_SESSION['userid']=$user_id;
$_SESSION['username']=$login_fetch['reg_name'];
$_SESSION['emailid']=$login_fetch['reg_email'];
header("location:welcome.php");
}
else
{
header("location:login.php?loginerror=2");
}
}
if(isset($_REQUEST['maction']))
{

$select_user=mysql_query("select * from `class_register` where reg_id='".$_REQUEST['maction']."'");
$login_count=mysql_num_rows($select_user);
//$exe=select_query("select * from `class_register` where reg_id='".$_REQUEST['maction']."'");
//$login_count=countt("select * from `class_register` where reg_id='".$_REQUEST['maction']."'");
if($login_count > 0)
{
$login_fetch=mysql_fetch_array($select_user);
mysql_query("update class_register set reg_status='1' where reg_id='".$_REQUEST['maction']."'");
$user_id=$login_fetch['reg_id'];
$_SESSION['userid']=$user_id;
$_SESSION['username']=$login_fetch['reg_name'];
$_SESSION['emailid']=$login_fetch['reg_email'];
header("location:welcome.php");
}
else
{
header("location:login.php?loginerror=2");
}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="google-site-verification" content="DfKwZCiat1kpDn9hSa5KYUBx4YDsiiGDll4I-rcUgto" />

<title><?php echo $sitename;?></title>

<META NAME="Description" CONTENT="<?php echo $site_desc;?>">

<META NAME="Keywords" CONTENT="<?php echo $site_keyword;?>">

<META NAME="author" CONTENT="FreeIndiaClassifiedWebsite.com">
<META NAME="subject" CONTENT="Free Classified Website">
<META NAME="Geography" CONTENT="India">
<META NAME="Language" CONTENT="English">
<META HTTP-EQUIV="Expires" CONTENT="never">
<META NAME="Copyright" CONTENT="FreeIndiaClassifiedWebsite">
<META NAME="Publisher" CONTENT="FreeIndiaClassifiedWebsite">
<META NAME="Revisit-After" CONTENT="7 days">
<META NAME="distribution" CONTENT="Global">
<META NAME="Robots" CONTENT="INDEX,FOLLOW">
<META NAME="country" CONTENT="India">

<link type="text/css" rel="stylesheet" href="style/main.css"  />
<link type="text/css" rel="stylesheet" href="style/styles.css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21872743-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

function fun(){
new_window = window.open('http://www.inetcomplaints.com','_blank');
}
</script>
</head>
<body>
<div id="container">
  <h1 id="header_font"> <strong><?php echo $sitename;?> classifieds</strong> </h1>
  <div class="contend_main" align="center">
    <?php include("includes/header.php");?>
    
    <div class="termofuse">
    
        <div class="static-page-container">
               <table width="100%" align="center" border="0" cellspacing="0" cellpadding="5" align="center" style="font-size:12px;">
                  <tr>
                    <td colspan="3" class="head_bg" align="center"><strong>Terms And Conditions</strong> </td>
                  </tr>
                  <tr>
                  <?php $select_text=mysql_query("select `termtext` from sitesetting");
                  $fetch_text=mysql_fetch_array($select_text);
                  
                  ?>
                  <td width="95%" align="center" valign="top" class="">
				  <div align="center"><?php echo stripslashes($fetch_text['termtext']); ?></div><br />
				</td>
                   
                  </tr>                               

                  <tr>
                    <td align="center" colspan="3"><span class="ad_text_color"></span></td>
                  </tr>
                </table>
            </div>
        </div>
      </div>
      <!-- center ads -->
      <?php include("includes/center-ads.php");?>
    </div>
    <div class="clr"></div>
    <?php include("includes/footer.php");?>
  </div>
</div>
<div class="bottom_line"></div>
</body>
</html>
