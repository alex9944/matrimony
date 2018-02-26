<?php
error_reporting(1);
session_start();

ini_set('display_error',1);

// This is for Mysql Database Connection String File for Remote Machine
ob_start();
$host="localhost";
$username='root';
$password='k6usn6z2';
$dbname='vivaha';

$con = mysql_connect($host,$username,$password) or die ('Error Connectiong to mysql: '.mysql_error());

mysql_select_db($dbname,$con) or die ("Select Error: ".mysql_error());

$gsetting=mysql_query("select * from siteconfig");
$generalfetch=mysql_fetch_array($gsetting);
$title =$generalfetch['Title'];
$siteadmin =$generalfetch['ContactEmail'];
$sitename =$generalfetch['Webname'];
$site_url =$generalfetch['Weblogopath'];
$site_keyword=$generalfetch['Keywords'];
$site_des=$generalfetch['Description'];
$site_contact=$generalfetch['contact_emailid'];
$site_number=$generalfetch['contact_num'];
$smtphost=$generalfetch['smtp_server'];
$smtp_mail=$generalfetch['smtp_user'];
$smtp_password=$generalfetch['smtp_password'];
$sitelogo=$site_url."/images/".$generalfetch['site_logo']; 
$ftrcont=$generalfetch['Footer'];
$profile_prefix=$generalfetch['profile_prefix'];
$bankdetail=$generalfetch['bank'];
$address=$generalfetch['address'];	
$paypalid=$generalfetch['paypal'];	
//$profileprefix=$generalfetch['profile_prefix'];
$webname=$generalfetch['WebFriendlyname'];
$fblink="#";
$twitlink="#";
$pinterstlink="#";
$blogerlink="#";
?>