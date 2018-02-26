<?PHP
    $db_host="localhost";
	/*$db_username="daybizc_classif";
	$db_pwd="inetsol";
	$db_name="daybizc_classified";
	$conn= @mysql_connect($db_host,$db_username,$db_pwd);
	$db = @mysql_select_db($db_name,$conn);	*/

                  $db_username="freeindi_classi";
	$db_pwd="classi&*^";
	$db_name="freeindi_classidb";
	$conn= @mysql_connect($db_host,$db_username,$db_pwd);
	$db = @mysql_select_db($db_name,$conn);	
	
	//$sitename="clickOne.com";
	$sitename="2daybiz Classified";
	$adminsitename="2daybiz Classified Admin Panel";
	
	$paypalmail="alagirivimal@i-netsolution.com";
	
	//$site_url="http://localhost/classified/index.php";
	$site_url="http://2daybiz.com/product/classified/index.php";

	//$site_url_reg="http://localhost/classified";
	$site_url_reg="http://2daybiz.com/product/classified";

	//$logo_url="http://localhost/classified";
	$logo_url="http://2daybiz.com/product/classified";
	
?>