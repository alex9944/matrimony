<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
	$StrRequesterid  = $_POST['txtsendid1'];

	$StrRequestermsg  = $_POST['reqmsg'];

	$StrReceiverid  = $_POST['txthidid'];

	$strdate = date('d-M-Y'); 

	$strresponse = "Pending";



if ($StrRequestermsg == "1")

{ 

$StrMsg = "We found your profile to be a good match. Please send me Photo Album password to proceed further.";

}

else if ($StrRequestermsg == "2")

{ 

$StrMsg = "I am interested in your profile. I would like to view Photo Album now, send me password.";

}



$insert = mysql_query("insert into albumprotectrequesters (RequesterID,ReceiverID,PPReqmsg,ReqDate,ReceiverResponse) values ('$StrRequesterid','$StrReceiverid','$StrMsg','$strdate','$strresponse')")

or die("Could not insert data because ".mysql_error());

//print_r($_POST);

$strsenderid  = $_POST['txthidid'];
$strtoid      = $_POST['txtsendid1'];
$SendDate     = date('d-M-Y');
$status       = 'pending';
$ctime        = time();

$sql  = mysql_query("insert into album_request_status (sender_id, receiver_id, status, created_date, updated_date, type) values ('$strtoid', '$strsenderid', '$status', '$ctime', '$ctime', 'album_password')");

$subject = "Photo Album Password Request";
$body = 'I am interested in   your profile. Please send your Photo album password.';

$insert = "INSERT INTO `album_request` ( `receiver`, `sender`, `subject`, `message`, `date_sent`, `status`, `type`, `updated_date`) VALUES ('$strsenderid', '$strtoid', '$subject', '$body', now(), 'pending', 'album_password', '$ctime');"; 
$exe_insert = mysql_query($insert );


?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Password Request Form</h3>
  </div>
  <div class="body" align="left">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
      <tr>
        <td><form action="albumpass_send_request_submit.php" method="post" name="form">
            <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">Your Request has been Sent to the member Successful. </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">Note : Your Request password has been sent to your email after your receiver responsed. </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
              </tr>
            </table>
          </form></td>
      </tr>
    </table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>