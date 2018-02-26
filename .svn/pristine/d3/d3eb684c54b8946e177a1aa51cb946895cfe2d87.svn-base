<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php

// ----------------------------------------- 

//  The Web Help .com

// ----------------------------------------- 

// remember to replace you@email.com with your own email address lower in this code.



// load the variables form address bar

$reason = $_REQUEST["rd"];

$complaints = $_REQUEST["complaints"];

$Complaint_mem = $_REQUEST["Complaint_mem"];

$eviddence = $_REQUEST["eviddence"];

$email = $_REQUEST["email"];

$mem_id = $_REQUEST["mem_id"];



// remove the backslashes that normally appears when entering " or '

$message ="<p>reason: $reason  </p>"; 
$message.="<p>complaints: $complaints  </p>"; 
$message.="<p>complaint against member : $Complaint_mem  </p>"; 
$message.="<p>Past evidence : $eviddence  </p>"; 
$message.="<p>email : $email  </p>"; 

$message.="<p>member id : $mem_id  </p>"; 


$subject = "$sitename: Report Misuse"; 

$from = stripslashes($mem_id); 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$to = $info['ToEmail']; 
ini_set("SMTP",$smtphost);
	
$to = $siteadmin; 
mail($to, 'Report Misuse: '.$info['WebFriendlyname']. '-' .$subject, $_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from");
// check to see if verificaton code was correct


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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Confirmation</span> </div>
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
          <h2 class="float_left title"> <span class="black" style="color:#333;">Confirmation</span></h2>
        </div>
        <div class="body">
          <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails"  bgcolor="#FFDDCC">
            <tr>
              <td><br>
                <table width="593" border="0" align="center" cellpadding="0" cellspacing="3" class="tbl_profiledetails" >
                  <tr>
                    <td width="587" height="19">.
                      <div align="center">
                        <div align="center">
                          <div align="left">Your request has been submitted!<br />
                            <br />

Our business hours are 9 AM to 5 PM every day excluding holidays. E-mails received outside of business hours will be answered on the next business day.<br />
<br />

Thank you!<br />
<br />

<?php echo $sitename ?> Customer Service
<br>
                          </div>
                        </div>
                    </div></td>
                  </tr>
                </table>
              <br></td>
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
