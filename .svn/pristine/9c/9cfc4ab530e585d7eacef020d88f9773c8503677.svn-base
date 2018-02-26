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

$subject = $_REQUEST["subject"];

$username = $_REQUEST["username"];

$fnames = $_REQUEST["fnames"];

$message = $_REQUEST["message"];

$from = $_REQUEST["from"];

$verif_box = $_REQUEST["verif_box"];


// remove the backslashes that normally appears when entering " or '

$message = stripslashes($message); 

$subject = stripslashes($subject); 

$from = stripslashes($from); 

//$to = $info['ContactEmail']; 
 
$siteadmin =$generalfetch['ContactEmail'];  

// check to see if verificaton code was correct

if(md5($verif_box).'a4xn' == $_COOKIE['tntcon'])
{
	
	// if verification code was correct send the message and show this page
	// mail($to, 'Contact us Message Form: '.$generalfetch['WebFriendlyname']. '-' .$subject, $_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from");
		 
		 
		//$subjectt="Enquiry Details from $generalfetch['WebFriendlyname']";
		
		$mail_url = "http://$_SERVER[HTTP_HOST]".dirname($_SERVER[PHP_SELF]) ;
						$msgg  = "<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#E58B01' style='border:solid 10px #E58B01;'>
		<tr bgcolor='#FFFFFF' height='25'>
						<td><img src=".$sitelogo."  width='250' border='0' /></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr bgcolor='#FFFFFF' height='30'>
						<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Enquiry Details</b></td>
						</tr>
							<tr bgcolor='#FFFFFF' height='35'>
						<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Name : $username</td>
						</tr>
							<tr bgcolor='#FFFFFF' height='35'>
						<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'> Email Id : $from</td>
						</tr>
							<tr bgcolor='#FFFFFF' height='35'>
						<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Subject : $subject</td>
						</tr>
							<tr bgcolor='#FFFFFF' height='35'>
						<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Message : $message</td>
						</tr>
				
						<tr bgcolor='#FFFFFF'>
						<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b> Regards,</b><br>
						".$webname."<br>
						<font><a href='$site_url/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
						
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr height='40'>
						<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #E58B01;
						color: #000000;'>&copy; Copyright " .date("Y")."&nbsp;"."<a href='$site_url/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a>."."</td>
						</tr>
						</table>";
				
	ini_set("SMTP","mail.inetmassmail.com");
	$headerss  = "MIME-Version: 1.0\r\n";
	$headerss .= "Content-type: text/html; charset=iso-8859-1\r\n";
	 
	$headerss .= 'From: '.ucfirst($sitename).' <'.$from.'>'."\r\n";
	
		//echo $siteadmin,$subject,$msgg,$headerss; exit;
	 
	mail($siteadmin,$subject,$msgg,$headerss);	 
		 
	
	$subject1="Enquiry acknowledgement from $title"; 
		$mail_url = "http://$_SERVER[HTTP_HOST]".dirname($_SERVER[PHP_SELF]) ;
			$msg  = "<table width='500' cellpadding='0' cellspacing='0' border='0' bgcolor='#E58B01' style='border:solid 10px #E58B01;'>
						<tr bgcolor='#FFFFFF' height='25'>
						<td><img src=".$sitelogo."  width='250' border='0' /></td>
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr bgcolor='#FFFFFF' height='30'>
						<td valign='top' style='font-family:Arial; font-size:12px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b>Dear $fnames</b></td>
						</tr>
						<tr bgcolor='#FFFFFF' height='35'>
						<td style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000;'>Your valuable Enquiry about $subject is received, Our team contact you as soon as posible.</td>
						</tr>
				
						<tr bgcolor='#FFFFFF'>
						<td align='left' style='padding-left:20px; font-family:Arial; font-size:11px; line-height:18px; text-decoration:none; color:#000000; padding-left:20px;'><b> Regards,</b><br>
						".$webname."<br>
						<font><a href='$site_url/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a></font></td>
						
						</tr>
						<tr bgcolor='#FFFFFF'><td>&nbsp;</td></tr>
						<tr height='40'>
						<td align='right' style='font-family: Arial, Helvetica, sans-serif;font-size: 10px;background-color: #E58B01;
						color: #000000;'>&copy; Copyright " .date("Y")."&nbsp;"."<a href='$site_url/index.php' style='font-family:Arial; font-size:11px; font-weight:bold; text-decoration:none; color:#0c568b;'>".$sitename."</a>."."</td>
						</tr>
						</table>";
						
	ini_set("SMTP","mail.inetmassmail.com");
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	//$headers .= 'From:'.$siteadmin."\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$site_contact.'>'."\r\n";
	
mail($from,$subject1,$msg,$headers);	 
		 	
	// delete the cookie so it cannot sent again by refreshing this page
	
	setcookie('tntcon','');
	
	} 
	else 
	{
	// if verification code was incorrect then return to contact page and show error
	header("Location:".$_SERVER['HTTP_REFERER']."?subject=$subject&from=$from&message=$message&wrong_code=true");
	exit;

}

?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  
  
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
   <div class="container">
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="col-md-12">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Confirmation</span></h2>
        </div>
        <div class="col-md-4" style="margin-left:30%">
          <p>Your request has been submitted!</p>
          <p>Our business hours are 9 AM to 5 PM every day excluding holidays. E-mails received outside of business hours will be answered on the next business day.</p>
			<p>Thank you!</p>
			<p><?=$sitename;?> Customer Service</p>

        </div>
       
      </div>
      
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
