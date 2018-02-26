<?php
session_start();
include('dbconnect.php');
$mobile_pin     = $_REQUEST['mobile_pin'];
$id             = $_REQUEST['id'];
$user_id        = $_REQUEST['user_id'];

//print_r($_REQUEST);
//echo stripslashes($text);

$verify             =  'no';
$verification_code  =  time();

$update_qry  = "select verification_code from register where verification_code = '$mobile_pin' and ID = '$user_id' ";
$result = mysql_query($update_qry);
$count  = mysql_affected_rows();
if($count >0)
 {
   $update_qry  = "update register set verify = 'yes' where ID = '$user_id' ";
   $result = mysql_query($update_qry);
   echo "<p style='color:green; padding:10px; margin:0;'>Mobile Verification Success</p>";
 }
else
 {
   echo "<p style='color:red; padding:10px; margin:0;'>Please enter correct Pin Number</p>";
 }

?>