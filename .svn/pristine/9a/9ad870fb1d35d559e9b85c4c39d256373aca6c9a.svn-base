<?php
session_start();
function nxs_cURLTest($url, $msg, $testText){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
$response = curl_exec($ch);
$errmsg = curl_error($ch);
$cInfo = curl_getinfo($ch);
curl_close($ch);
echo "Testing ... ".$url." - ".$cInfo['url']."<br />";
if (stripos($response, $testText)!==false)
echo "....".$msg." - OK<br />";
else
{
echo "....<b style='color:red;'>".$msg." - Problem</b><br /><pre>";
print_r($errmsg);
print_r($cInfo);
print_r(htmlentities($response));
echo "</pre>There is a problem with cURL. You need to contact your server admin or hosting provider.";
}
}

$sms_api_username  = "test";
$sms_api_password  = "test";
$sms_api_sender    = "test";
$sms_mobile        = $mobile;
$sms_message       = "Dear ".$_SESSION['Name'].",  Your mobile verification code is ".$verification_code.". Please enter it in the box provided.";
$sms_format        = "text";
$sms_date          = date('d-m-Y').'TO'.date('h:i:s');  // 11-01-2014T01:11:05

nxs_cURLTest("http://login.smsindiahub.in/API/WebSMS/Http/v1.0a/index.php?username=$sms_api_username&password=$sms_api_password&sender=$sms_api_sender&to=$sms_mobile&message=$sms_message&reqid=1&format=$sms_format&route_id=#&callback=#&unique=0&sendondate=$sms_date", "HTTP to Google", "Mountain View, CA");
nxs_cURLTest("https://www.google.com/intl/en/contact/", "HTTPS to Google", "Mountain View, CA");
nxs_cURLTest("https://www.facebook.com/", "HTTPS to Facebook", 'id="facebook"');
nxs_cURLTest("https://www.linkedin.com/", "HTTPS to LinkedIn", 'link rel="canonical" href="https://www.linkedin.com/"');
nxs_cURLTest("https://twitter.com/", "HTTPS to Twitter", 'link rel="canonical" href="https://twitter.com/"');
nxs_cURLTest("http://pinterest.com/", "HTTPS to Pinterest", 'content="Pinterest"');
?>