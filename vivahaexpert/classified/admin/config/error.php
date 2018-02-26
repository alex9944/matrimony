<?php

error_reporting(1);
 	
	$db_host="localhost";
	$db_username="freeindi_classi";
	$db_pwd="classi&*^";
	$db_name="freeindi_classidb";
	$conn= @mysql_connect($db_host,$db_username,$db_pwd);
	$db = @mysql_select_db($db_name,$conn);
	
	
		
		
	
	//include "db_configue.php";
	
	
	//$sitename="clickOne.com";
	$sql=mysql_query("select * from generalsettings");
	$fetch=mysql_fetch_array($sql);
	$sitename="2daybiz Classified";
	//$adminsitename="clickOne.com Admin Panel";
	$adminsitename="2daybiz Classified Admin Panel";
	
	//$paypalmail="alagirivimal@i-netsolution.com";
	$paypalmail="alagirivimal@i-netsolution.com";
	
	$adminmail=$fetch['site_admin'];
 	//$site_url = "http://98.131.95.136/products/classified/index.php";
	$site_url = "http://2daybiz.com/products/classified/index.php";
	
	//$site_url_reg="http://98.131.95.136/products/classified";
	$site_url_reg="http://2daybiz.com/products/classified";

	//$logo_url="http://98.131.95.136/products/classified";
	$logo_url="http://2daybiz.com/products/classified";
	
?>
