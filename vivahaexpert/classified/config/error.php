<?php

error_reporting(1);

	
		
	/*$db_host="localhost";
	$db_username="mangalat_classi";
	$db_pwd="classi1234";
	$db_name="mangalat_classified";*/
	
	$db_host="localhost";
	$db_username="root";
	$db_pwd="";
	$db_name="matrimonial_classified";
	
	$conn= @mysql_connect($db_host,$db_username,$db_pwd);
	
	$db = @mysql_select_db($db_name,$conn);
		
	
	
	//include "db_configue.php";
	
	
	//$sitename="clickOne.com";
	$sql=mysql_query("select * from generalsettings");
	$fetch=mysql_fetch_assoc($sql);
	//echo "<pre>";print_r($fetch);echo "</pre>";
	$sitename= $fetch['site_name'];
	$site_keyword= $fetch['webkeyword'];
	$site_desc= $fetch['webdes'];
	$site_team= $fetch['site_team'];
	$site_url_reg = $fetch['site_com'];
	$logo_url = $fetch['sitelogo'];
	//$site_url_reg="http://freeindiaclassifiedwebsite.com/";
	//$logo_url="http://freeindiaclassifiedwebsite.com/images/logo.jpg";
	
	
	//$adminsitename="clickOne.com Admin Panel";
	$adminsitename=$sitename;
	
	//$paypalmail="alagirivimal@i-netsolution.com";
	//$paypalmail="alagirivimal@i-netsolution.com";
	
	$adminmail=$fetch['site_admin'];
 	//$site_url = "http://98.131.95.136/products/classified/index.php";
	//$site_url = "http://2daybiz.com/products/classified/index.php";
	
	//$site_url_reg="http://98.131.95.136/products/classified";
	//$site_url_reg="http://2daybiz.com/products/classified";
	
	
	//$logo_url="http://98.131.95.136/products/classified";
	//$logo_url="http://2daybiz.com/products/classified";
	
?>
