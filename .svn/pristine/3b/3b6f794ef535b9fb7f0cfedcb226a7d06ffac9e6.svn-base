<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<style>
.profile_block div.body {
    font-size: 12px !important;
}

div.body {
    background-color: #FFFFFF ;
    border-bottom: 1px solid #F9D6A5;
    font-size: 11px;
    padding: 3px 15px 0 !important;
}


</style>
</head>

<body>
<?Php
$photo = $im->imgurl;

$bn = addslashes($_POST['Groom Name']);

$bid = addslashes($_POST['Bride Matrimony ID']);

$gn = addslashes($_POST['Groom Name']);

$gid = addslashes($_POST['Groom Matrimony ID']);

$mdate = addslashes($_POST['Marriage Date']);

$smsg = addslashes($_POST['Success Message']);



$sql = mysql_query("INSERT INTO successsory (weddingphoto,bridename,brideid,groomname,groomid,marriagedate,successmessage) VALUES ('$photo','$bn','$bid','$gn','$gid','$mdate','$smsg')or die(mysql_error())");
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Success Story</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Success Story  Confirmation</span></h2>
        </div>
        <div class="body">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
           
                 
                  <tr>
                    <td><div align="center">
                         <table width="100%" bgcolor="#FFF5EB" cellspacing="5px">

<tr>
  <td colspan="3" style='padding-left:10px'>&nbsp;</td>
</tr>
<tr><td colspan="3" style='padding-left:10px'><p><strong>Tell your friends that you're a <?php echo $sitename ?>  success story</strong></p></td>
</tr>
<tr>
  <td colspan="3" style='padding-left:10px'>&nbsp;</td>
</tr>
<tr>
  <td colspan="3" style='padding-left:10px'><strong>Thank you for sharing your story with us!</strong></td>
</tr>
<tr>
  <td colspan="3" style='padding-left:10px'>&nbsp;</td>
</tr>
<tr>
  <td colspan="3" style='padding-left:10px'><p>Congratulations on your  wonderful news! We wish you all the love and happiness as you begin your life  together.<br />
We're honored that you chose our service in the  first place and to say thanks. we'd like to send you a free gift. </p></td>
</tr>
<tr>
<td style='padding-left:10px'><a href='#' target="_blank">Like us on Facebook</a></td>
</tr>
<tr>
<td style='padding-left:10px'><a href='http://www.facebook.com' target="_blank">Sign Up </a> to see what your friends like.</td>
</tr>
</table>
                      </div></td>
                  </tr>
                
                 
                </table></td>
            </tr>
          </table>
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
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
