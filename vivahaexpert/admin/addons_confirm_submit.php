<?php include('protect.php'); ?>
<?php
include '../dbconnect.php';
$str1 = $_POST['txtp1'];
$str2 = $_POST['txtp2'];
$str3 = $_POST['txtp3'];
$str4 = $_POST['txtp4'];
$str5 = $_POST['txtp5'];
$str6 = $_POST['txtp6'];
$str7 = $_POST['txtp7'];
$str8 = $_POST['txtp8'];
$str82 = $_POST['txtp82'];
$str9 = $_POST['txtp9'];
$str10 = $_POST['txtp10'];
$str11 = $_POST['txtp11'];
$str12 = $_POST['txtp12'];

// insert the data
$insert = mysql_query("insert into paiddetails (Pmatriid,Pname,Pemail,Paddress,Ppaymode,Pactivedate,Pplan,Pplanduration,Pnocontct,Pamount,Pbankdet,addons,profile_spotlight_amount,profile_spotlight_duration ) values ('$str1','$str2','$str3','$str4','$str5','$str6','$str7','$str82','$str8','$str9','$str10','addons','$str11','$str12')")
or die("Could not insert data because ".mysql_error());




    $matri_id           =  $_POST['matri_id'];
	$astro_match        =  $_POST['astro_match'];
	$profile_spotlight  =  $_POST['profile_spotlight'];
	$astro_match_count  =  $_POST['astro_match_count'];
	$ctime              =  time();
	
	$astro_1match  = 0;
	$astro_3months = 0;
	$astro_6month  = 0;
	
	if($astro_match == '1')
	{
	  $astro_1match    = 1;
	  $profile_spotlight = 1;
	}  
	else if($astro_match == '2')
	{
	  $astro_3months  = 1;
	  $profile_spotlight = 1;
	}  
	else if($astro_match == '3')
	{
	  $astro_6month   = 1;  
	  $profile_spotlight = 1;  
	}  
	
	//print_r($_POST);
	
	$amount   =  $_POST['txtp9'] + $_POST['txtp11']; 
	$transaction_date  =  date('Y-m-d');
	$payment_type   =  $_POST['txtp5'];
	
	$sql_qry = "select * from payment_details where matriid = '$matri_id' ";
	$results = mysql_query($sql_qry);
	$rescount   = mysql_affected_rows();
	if($rescount > 0)
	{
	    $sqls = "update  payment_details set payment_type = '$payment_type', transaction_date = '$transaction_date', amount = '$amount', astro_match = '$astro_1match', spot_light = '$profile_spotlight', astro_3months = '$astro_3months', astro_6month ='$astro_6month' where matriid = '$matri_id'";	
		$result = mysql_query($sqls);
	}
	else
	{
		$sqls = "insert into payment_details (payment_type, transaction_date, matriid, astro_match, spot_light, astro_3months, astro_6month, payer_email, payment_status, amount ) values ('$payment_type', '$transaction_date', '$matri_id', '$astro_1match', '$profile_spotlight', '$astro_3months', '$astro_6month', 'admin', 'Completed', '$amount')"; 	
		$result = mysql_query($sqls);
	}
	
	$sql  = "insert into addons (matriid, astro_match_plan, astro_match_count, profile_spotlight, created_date ) values ('$matri_id', '$astro_match', '$astro_match_count', '$profile_spotlight', '$ctime' ) ";
	$result = mysql_query($sql);
	$count = mysql_affected_rows();
	if($count > 0)
	 {
	    $old_balance  = 0;
	    $sqlq   = "select horoscope_remaining from register where MatriID = '$matri_id'";
		$result = mysql_query($sqlq);
		$count  = mysql_affected_rows();
		if($count > 0)
		 {
		    while($res = mysql_fetch_array($result))
			 {
			    $old_balance  =  $res['horoscope_remaining'];
			 }
		 }
		//echo $astro_match_count; 
		$new_balance  =  $old_balance + $astro_match_count;
		
		//exit;
		
	    $sql    = "update register set horoscope_remaining = '$new_balance' where MatriID = '$matri_id' ";
	    $result = mysql_query($sql);
	    $msg    = "<p style='color:green; text-align:center;'>Addons Updated Successfully.</p>";
	 }


?>

<?php 

////////////////// UPDATE INTO REGISTER TABLE ////////////////////////

$strmid = $_POST['txtp1'];
//$stractivedate = $_POST['txtp6'];
//echo $str82;
$strexpdate = date('Y-m-d', strtotime(".$str82 days"));
$expdays    = date('Y-m-d h:i:s', strtotime(".$str82 days"));
$strplan = $_POST['txtp7'];
$strnoc = $_POST['txtp8'];
$update=mysql_query("Update register set MemshipExpiryDate='$strexpdate', expdays = '$expdays',Noofcontacts='$strnoc' where MatriID = '$strmid' ")
or die("Could not update data because ".mysql_error());

////////////////// PAID MEMBERSHIP MAIL SENDING TO MEMBER ////////////////////////

$result = mysql_query("SELECT * FROM register,siteconfig where MatriID = '$strmid' ");
while($row = mysql_fetch_array($result))
	{
	
		//$to =$confirmemail; 
		$name  = $row['Name']; 
		$to  = $row['ConfirmEmail'];
		$matriid  = $row['MatriID'];
		$email  = $row['ConfirmEmail'];
		$pass = $row['ConfirmPassword'];
		//$strpass = md5($pass); 
		$website = $row['Webname'];
		$webfriendlyname = $row['WebFriendlyname'];
		$webtomail = $row['ToEmail'];
		$webfrommail = $row['Fromemail'];
		$logo = $row['Weblogopath'];
		
		$from =  $row['Fromemail'];  // website config From Email
		$subject = "Your Paid Membership on $sitename has been activated";
			
		$message = "	
		<html>
		<body>
		<table width='600' border='0' cellspacing='0' cellpadding='0'>
		<tr>
		<td background=$site_url/pics/email_top.gif width=600 height=22><img src=$sitelogo border=0></td>
		</tr>
		<tr>
		<td background=$site_url/pics/email_middle.gif><table width=600 border=0 cellspacing=2 cellpadding=2>
		<tr>
		<td width=10>&nbsp;</td>
<td width=562 rowspan=3 valign=top><p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Dear $name </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Congratulations! Your Addons on $webfriendlyname has been activated. You are now ready to use our addons to check Astromatch Compatibility with the validated profiles.<br />
		<br />
		Log on to <a href='$site_url' target='_blank' rel='nofollow'>$webfriendlyname</a> now using the follwing information to find your dream partner.</p>
		<table width=382 border=0 align='center' cellpadding=2  cellspacing=0 bordercolor=#FF6600 rules=all style='BORDER-RIGHT: #FF6600 1px ridge; BORDER-TOP: #FF6600 1px ridge; BORDER-LEFT: #FF6600 1px ridge; BORDER-BOTTOM: #FF6600 1px ridge'>
		<tr>
		<td style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'><div align='left'>Login ID: $matriid (or) $email</div></td>
		</tr>
		
		</table>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>And while you   are on the site we strongly encourage you to use as many features. This way you   will understand how easy it is to use our site and more importantly find your   life partner. Some of the key features that you could straight away start using   are: </p>
		
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Everybody   here at $webfriendlyname, wish you all the very best in your search for a   life partner. Should you require any further assistance, do not hesitate to call    our office  OR visit our 24/7 live support. OR send mail us to <a href='mailto:$webtomail'>$webtomail</a> </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Good luck in   your search for a life partner. </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>With warm   regards,<br />
		Customer Support Manager. <br>
		$webfriendlyname </p>
		<p style='font:normal 10px Arial, MS Sans serif, tahoma;color:#000000;'>You are receiving this mail as a registered member of $webfriendlyname. This is a computer auto generated message. Please do not Reply . </p></td>
		<td width=8>&nbsp;</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		</table></td>
		</tr>
		<tr>
		<td><img src=$site_url/pics/email_bottom.gif width=600 height=22></td>
		</tr>
		</table>
		</body>
		</html>
";
			
	
	ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
			
			
			mail($to, $subject, $message, $headers); 
			
			
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Confirm</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
<!-- 
function win(){
window.opener.location.href="addons.php";
self.close();
//-->
}
</SCRIPT>
<body>
<table width="400" height="400" border="0" cellpadding="0" cellspacing="0" class="GreenBox">
  <tr>
    <td>
	
	
	<table width="100%" height="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
	
      <tr>
        <td width="3%" >&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td colspan="2" rowspan="10" class="Partext1"><table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="21%"><div align="center" class="H1Text"><? echo $_POST['txtp1']; ?></div></td>
            <td width="79%"><div align="center"><span class="smalltextred">Update Addons Successful and <br />
  Confirmation mail has been sent Successful.</span> </div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        <td colspan="2">&nbsp;</td></tr>
      <tr>
        <td height="24" colspan="3"><div align="center">
          <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
          </div>
        </div></td>
      </tr>
    </table>
	
	
	</td>
  </tr>
</table>

</body>
</html>
