<?php
session_start();
include('dbconnect.php');
$id             = $_REQUEST['id'];
$user_id        = $_REQUEST['user_id'];

//print_r($_REQUEST);
//echo stripslashes($text);

//print_r($_SESSION['mobile']);

$verify             =  'no';
$verification_code  =  time();


$verify             =  'no';
$verification_code  =  time();

$verification_code  =  rand(00000, 99999);

$update_qry  = "select verification_code from register where verification_code = '$mobile_pin' and ID = '$user_id' ";
$result = mysql_query($update_qry);
$count  = mysql_affected_rows();
if($count >0)
 {
   while($res = mysql_fetch_array($result))
    {
      $mobile  =  $res['Mobile'];
	}  
 } 

$mobile = $_SESSION['mobile'];

$_SESSION['mobile']  =  $mobile;

$update_qry  = "update register set  verify = '$verify', verification_code = '$verification_code', Mobile = '$mobile' where ID = '$user_id' ";
$result = mysql_query($update_qry);

/*
$sms_api_username  = "test";
$sms_api_password  = "test";
$sms_api_sender    = "test";
$sms_mobile        = $mobile;
$sms_message       = "Dear ".$_SESSION['Name'].", Greetings from phpmatrimonialscript.in! Your mobile verification code is ".$verification_code.". Please enter it in the box provided.";
$sms_format        = "text";
$sms_date          = date('d-m-Y').'TO'.date('h:i:s');  // 11-01-2014T01:11:05

$sendsms_url = "http://login.smsindiahub.in/API/WebSMS/Http/v1.0a/index.php?username=$sms_api_username&password=$sms_api_password&sender=$sms_api_sender&to=$sms_mobile&message=$sms_message&reqid=1&format=$sms_format&route_id=#&callback=#&unique=0&sendondate=$sms_date";

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $sendsms_url);
curl_setopt($ch, CURLOPT_HEADER, 0); 

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);*/

echo "<p style='color:green'>Verification Code Sent.</p>";

?>