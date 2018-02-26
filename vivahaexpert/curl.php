<?Php include("include/innerheadersection.php"); ?>
<?php
$horoscopememberid = $_REQUEST["id"];
$horoscopememberidf= $_REQUEST["gid"];
$get_horos_detail = "SELECT * FROM onlinehoroscope WHERE custid ='".$horoscopememberid."'";
$get_horos_exec = mysql_query($get_horos_detail);
$get_horos_fetch = mysql_fetch_array($get_horos_exec);
$get_horos_count = mysql_num_rows($get_horos_exec);

$get_horos_detailg = "SELECT * FROM onlinehoroscope WHERE custid ='".$horoscopememberidf."'";
$get_horos_execg = mysql_query($get_horos_detailg);
$get_horos_fetchg = mysql_fetch_array($get_horos_execg);
$get_horos_countg = mysql_num_rows($get_horos_execg);



// create a new cURL resource
$ch = curl_init();

//echo 'http://www.astrovisiononline.com/avservices/horomatch/inserttodb.php?data=<DATA><BOYDATA><REGNO>'.$get_horos_fetch["custid"].'</REGNO><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$get_horos_fetch["dob_date"].'</DAY><MONTH>'.$get_horos_fetch["dob_month"].'</MONTH><YEAR>'.$get_horos_fetch["dob_year"].'</YEAR><TIME24HR>'.$get_horos_fetch["tob_hour"].'.'.$get_horos_fetch["tob_minute"].'.'.$get_horos_fetch["tob_second"].'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>'.$get_horos_fetch["longitude"].'</LONG><LAT>'.$get_horos_fetch["latitude"].'</LAT><LONGDIR>'.$get_horos_fetch["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetch["latdir"].'</LATDIR><TZONE>'.$get_horos_fetch["timezone"].'</TZONE><TZONEDIR>'.$get_horos_fetch["timezonedir"].'</TZONEDIR></BOYDATA><GIRLDATA><REGNO>'.$get_horos_fetchg["custid"].'</REGNO><NAME>'.$get_horos_fetchg["name"].'</NAME><DAY>'.$get_horos_fetchg["dob_date"].'</DAY><MONTH>'.$get_horos_fetchg["dob_month"].'</MONTH><YEAR>'.$get_horos_fetchg["dob_year"].'</YEAR><TIME24HR>'.$get_horos_fetchg["tob_hour"].'.'.$get_horos_fetchg["tob_minute"].'.'.$get_horos_fetchg["tob_second"].'</TIME24HR><CORR>'.$get_horos_fetchg["timecorrection"].'</CORR><PLACE>'.$get_horos_fetchg["place"].'</PLACE><LONG>'.$get_horos_fetchg["longitude"].'</LONG><LAT>'.$get_horos_fetchg["latitude"].'</LAT><LONGDIR>'.$get_horos_fetchg["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetchg["latdir"].'</LATDIR><TZONE>'.$get_horos_fetchg["timezone"].'</TZONE><TZONEDIR>'.$get_horos_fetchg["timezonedir"].'</TZONEDIR></GIRLDATA><OPTIONS><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><CHARTSTYLE>1</CHARTSTYLE><LANGUAGE>Eng</LANGUAGE><REPTYPE>1</REPTYPE><REPDMN>numinousmatch</REPDMN><PSETTINGS><METHOD>S1</METHOD><KUJADOSHACHECK>K0</KUJADOSHACHECK><PAPASAMYA>P0</PAPASAMYA><DASACHECK>D00</DASACHECK></PSETTINGS></OPTIONS></DATA>';


// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, 'http://www.astrovisiononline.com/avservices/horomatch/inserttodb.php?data=<DATA><BOYDATA><REGNO>'.$get_horos_fetch["custid"].'</REGNO><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$get_horos_fetch["dob_date"].'</DAY><MONTH>'.$get_horos_fetch["dob_month"].'</MONTH><YEAR>'.$get_horos_fetch["dob_year"].'</YEAR><TIME24HR>'.$get_horos_fetch["tob_hour"].'.'.$get_horos_fetch["tob_minute"].'.'.$get_horos_fetch["tob_second"].'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>'.$get_horos_fetch["longitude"].'</LONG><LAT>'.$get_horos_fetch["latitude"].'</LAT><LONGDIR>'.$get_horos_fetch["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetch["latdir"].'</LATDIR><TZONE>'.$get_horos_fetch["timezone"].'</TZONE><TZONEDIR>'.$get_horos_fetch["timezonedir"].'</TZONEDIR></BOYDATA><GIRLDATA><REGNO>'.$get_horos_fetchg["custid"].'</REGNO><NAME>'.$get_horos_fetchg["name"].'</NAME><DAY>'.$get_horos_fetchg["dob_date"].'</DAY><MONTH>'.$get_horos_fetchg["dob_month"].'</MONTH><YEAR>'.$get_horos_fetchg["dob_year"].'</YEAR><TIME24HR>'.$get_horos_fetchg["tob_hour"].'.'.$get_horos_fetchg["tob_minute"].'.'.$get_horos_fetchg["tob_second"].'</TIME24HR><CORR>'.$get_horos_fetchg["timecorrection"].'</CORR><PLACE>'.$get_horos_fetchg["place"].'</PLACE><LONG>'.$get_horos_fetchg["longitude"].'</LONG><LAT>'.$get_horos_fetchg["latitude"].'</LAT><LONGDIR>'.$get_horos_fetchg["longdir"].'</LONGDIR><LATDIR>'.$get_horos_fetchg["latdir"].'</LATDIR><TZONE>'.$get_horos_fetchg["timezone"].'</TZONE><TZONEDIR>'.$get_horos_fetchg["timezonedir"].'</TZONEDIR></GIRLDATA><OPTIONS><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><CHARTSTYLE>1</CHARTSTYLE><LANGUAGE>Eng</LANGUAGE><REPTYPE>1</REPTYPE><REPDMN>".$sitename."</REPDMN><PSETTINGS><METHOD>S1</METHOD><KUJADOSHACHECK>K0</KUJADOSHACHECK><PAPASAMYA>P0</PAPASAMYA><DASACHECK>D00</DASACHECK></PSETTINGS></OPTIONS></DATA>');
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
?>
