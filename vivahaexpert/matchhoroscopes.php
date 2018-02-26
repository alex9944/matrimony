<?Php
include("memprotect.php");
?>
<?Php include("include/innerheadersection.php"); ?>
<?php  

$matriid = $_SESSION['matriid'];

$horoscope_remaining  = 0;
$new_balance          = 0;

$sql      = "select horoscope_remaining from register where MatriID = '$matriid' ";
$results  = mysql_query($sql);
$count    = mysql_affected_rows();
if($count > 0)
{
   while($res = mysql_fetch_array($results))
    {
	   $horoscope_remaining  =  $res['horoscope_remaining'];
	}
}

$matri_id  = $_POST["matchid"];
$viewer_id = $_POST["gmatchid"];
//exit;

$viewed_count  = 0;
$view_sql  = "select count(*) as viewed_count from horoscope_viewed where matriid = '$matri_id' and viewer_id = '$viewer_id' ";
$resultss  = mysql_query($view_sql);
$count     = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($resultss))
    {
	   $viewed_count   = $res['viewed_count'];
    }
 }


 
//if($viewed_count <= 0)

if(true)
 {
    $new_count   =  $horoscope_remaining - 1;
	$update_qry  =  "update register set horoscope_remaining = $new_count where MatriID = '$matriid' ";
	$resultss    =  mysql_query($update_qry);
	$ctime       =  time();
	$ip_address  =  $_SERVER['SERVER_ADDR'];
	//echo '<pre>'; print_r($_SERVER); exit;
	$insert_qry  = "insert into horoscope_viewed (matriid, viewer_id, ip_address, viewed_date) values ('$matri_id', '$viewer_id', '$ip_address', '$ctime')";
	$resultss    =  mysql_query($insert_qry);
 }
//exit; 
//horoscope_viewed

$horoscopememberid = $_POST["gmatchid"];
$horoscopememberidf= $_POST["matchid"];
$lang = $_POST["language"];
$chartformat=$_POST["chartformat"];

$get_horos_detail = "SELECT * FROM onlinehoroscope WHERE custid ='".$horoscopememberid."'";
$get_horos_exec = mysql_query($get_horos_detail);
$get_horos_fetch = mysql_fetch_array($get_horos_exec);
$get_horos_count = mysql_num_rows($get_horos_exec);

$get_horos_detailg = "SELECT * FROM onlinehoroscope WHERE custid ='".$horoscopememberidf."'";
$get_horos_execg = mysql_query($get_horos_detailg);
$get_horos_fetchg = mysql_fetch_array($get_horos_execg);
$get_horos_countg = mysql_num_rows($get_horos_execg);




	/*if($get_horos_fetch["horos_html"] != "")
	{
		//$url = "../numinousmatch/Reports/".$get_horos_fetch["horos_html"];
	}
	else
	{*/
	
	$dob_date = $get_horos_fetch["dob_date"];
		if (strlen($dob_date)<2) { $dob_date=str_pad($dob_date, 2, "0", STR_PAD_LEFT);  }
	$dob_month = $get_horos_fetch["dob_month"];
		if (strlen($dob_month)<2) { $dob_month=str_pad($dob_month, 2, "0", STR_PAD_LEFT);  }
	$dob_year = $get_horos_fetch["dob_year"];
		if (strlen($dob_year)<2) { $dob_year=str_pad($dob_year, 2, "0", STR_PAD_LEFT);  }
	$tob_hour= $get_horos_fetch["tob_hour"];
		if (strlen($tob_hour)<2) { $tob_hour=str_pad($tob_hour, 2, "0", STR_PAD_LEFT);  }
	$tob_minute= $get_horos_fetch["tob_minute"];
		if (strlen($tob_minute)<2) { $tob_minute=str_pad($tob_minute, 2, "0", STR_PAD_LEFT);  }
	$tob_second= $get_horos_fetch["tob_second"];
		if (strlen($tob_second)<2) { $tob_second=str_pad($tob_second, 2, "0", STR_PAD_LEFT);  }
	$longitude =$get_horos_fetch["longitude"];
		if (strlen($longitude )<6) { $longitude =str_pad($longitude , 6, "0", STR_PAD_LEFT);  }
	$longitudeg =$get_horos_fetchg["longitude"];
		if (strlen($longitudeg )<6) { $longitudeg =str_pad($longitudeg , 6, "0", STR_PAD_LEFT);  }
	$latitude= $get_horos_fetch["latitude"]	;
		if (strlen($latitude)<5) { $latitude=str_pad($latitude, 5, "0", STR_PAD_LEFT);  }
	$latitudeg= $get_horos_fetchg["latitude"]	;
		if (strlen($latitudeg)<5) { $latitudeg=str_pad($latitudeg, 5, "0", STR_PAD_LEFT);  }
		
	
	$timezone = $get_horos_fetch["timezone"];	
	if($timezone=="") {$timezone ="05.30"; } 
	
	$dob_dateg = $get_horos_fetchg["dob_date"];
		if (strlen($dob_dateg)<2) { $dob_dateg=str_pad($dob_dateg, 2, "0", STR_PAD_LEFT);  }
	$dob_monthg = $get_horos_fetchg["dob_month"];
		if (strlen($dob_monthg)<2) { $dob_monthg=str_pad($dob_monthg, 2, "0", STR_PAD_LEFT);  }
	$dob_yearg = $get_horos_fetchg["dob_year"];
		if (strlen($dob_yearg)<2) { $dob_yearg=str_pad($dob_yearg, 2, "0", STR_PAD_LEFT);  }
	$tob_hourg= $get_horos_fetchg["tob_hour"];
		if (strlen($tob_hourg)<2) { $tob_hourg=str_pad($tob_hourg, 2, "0", STR_PAD_LEFT);  }
	$tob_minuteg= $get_horos_fetchg["tob_minute"];
		if (strlen($tob_minuteg)<2) { $tob_minuteg=str_pad($tob_minuteg, 2, "0", STR_PAD_LEFT);  }
	$tob_secondg= $get_horos_fetchg["tob_second"];
		if (strlen($tob_secondg)<2) { $tob_secondg=str_pad($tob_secondg, 2, "0", STR_PAD_LEFT);  }

	
		
	$timezoneg = $get_horos_fetch["timezone"];	
	if($timezoneg=="") {$timezone ="05.30"; } 
	//echo 'http://www.astrovisiononline.com/avservices/horomatch/inserttodb.php?data=<DATA><BOYDATA><REGNO>'.$get_horos_fetch["custid"].'</REGNO><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$dob_date.'</DAY><MONTH>'.$dob_month.'</MONTH><YEAR>'.$dob_year.'</YEAR><TIME24HR>'.$tob_hour.'.'.$tob_minute.'.'.$tob_second.'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>'.$longitude.'</LONG><LAT>'.$latitude.'</LAT><LONGDIR>'.$get_horos_fetch["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetch["latdir"].'</LATDIR><TZONE>'.$get_horos_fetch["timezone"].'</TZONE><TZONEDIR>'.$get_horos_fetch["timezonedir"].'</TZONEDIR></BOYDATA><GIRLDATA><REGNO>'.$get_horos_fetchg["custid"].'</REGNO><NAME>'.$get_horos_fetchg["name"].'</NAME><DAY>'.$dob_dateg.'</DAY><MONTH>'.$dob_monthg.'</MONTH><YEAR>'.$dob_yearg.'</YEAR><TIME24HR>'.$tob_hourg.'.'.$tob_minuteg.'.'.$tob_secondg.'</TIME24HR><CORR>'.$get_horos_fetchg["timecorrection"].'</CORR><PLACE>'.$get_horos_fetchg["place"].'</PLACE><LONG>'.$longitudeg.'</LONG><LAT>'.$latitudeg.'</LAT><LONGDIR>'.$get_horos_fetchg["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetchg["latdir"].'</LATDIR><TZONE>'.$timezoneg.'</TZONE><TZONEDIR>'.$get_horos_fetchg["timezonedir"].'</TZONEDIR></GIRLDATA><OPTIONS><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><CHARTSTYLE>'.$chartformat.'</CHARTSTYLE><LANGUAGE>'.$lang.'</LANGUAGE><REPTYPE>1</REPTYPE><REPDMN>numinousmatch</REPDMN><PSETTINGS><METHOD>S1</METHOD><KUJADOSHACHECK>K0</KUJADOSHACHECK><PAPASAMYA>P0</PAPASAMYA><DASACHECK>D00</DASACHECK></PSETTINGS></OPTIONS></DATA>';
	
	?>
	
	<iframe src="<? echo ('http://www.astrovisiononline.com/avservices/horomatch/inserttodb.php?data=<DATA><BOYDATA><REGNO>'.$get_horos_fetchg["custid"].'</REGNO><NAME>'.$get_horos_fetchg["name"].'</NAME><DAY>'.$dob_dateg.'</DAY><MONTH>'.$dob_monthg.'</MONTH><YEAR>'.$dob_yearg.'</YEAR><TIME24HR>'.$tob_hourg.'.'.$tob_minuteg.'.'.$tob_secondg.'</TIME24HR><CORR>'.$get_horos_fetchg["timecorrection"].'</CORR><PLACE>'.$get_horos_fetchg["place"].'</PLACE><LONG>'.$longitudeg.'</LONG><LAT>'.$latitudeg.'</LAT><LONGDIR>'.$get_horos_fetchg["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetchg["latdir"].'</LATDIR><TZONE>'.$timezoneg.'</TZONE><TZONEDIR>'.$get_horos_fetchg["timezonedir"].'</TZONEDIR></BOYDATA><GIRLDATA><REGNO>'.$get_horos_fetch["custid"].'</REGNO><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$dob_date.'</DAY><MONTH>'.$dob_month.'</MONTH><YEAR>'.$dob_year.'</YEAR><TIME24HR>'.$tob_hour.'.'.$tob_minute.'.'.$tob_second.'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>'.$longitude.'</LONG><LAT>'.$latitude.'</LAT><LONGDIR>'.$get_horos_fetch["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetch["latdir"].'</LATDIR><TZONE>'.$get_horos_fetch["timezone"].'</TZONE><TZONEDIR>'.$get_horos_fetch["timezonedir"].'</TZONEDIR></GIRLDATA><OPTIONS><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><CHARTSTYLE>'.$chartformat.'</CHARTSTYLE><LANGUAGE>'.$lang.'</LANGUAGE><REPTYPE>1</REPTYPE><REPDMN>'.$sitename.'</REPDMN><PSETTINGS><METHOD>S1</METHOD><KUJADOSHACHECK>K0</KUJADOSHACHECK><PAPASAMYA>P0</PAPASAMYA><DASACHECK>D00</DASACHECK></PSETTINGS></OPTIONS></DATA>'); ?>" width="666" height="1300" ></iframe> 


	
	

</html>