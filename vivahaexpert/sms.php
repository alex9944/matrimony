<?php

$sms_api_username  = "test";
$sms_api_password  = "test";
$sms_api_sender    = "test";
$sms_mobile        = "9965177545";
$sms_message       = "this is test";
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
curl_close($ch);

?>