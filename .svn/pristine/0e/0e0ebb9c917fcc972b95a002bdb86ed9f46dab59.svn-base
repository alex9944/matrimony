<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Horoscope</title>
</head>

<body>

<?php 

//$horoscopememberid = $_REQUEST["id"];
$get_horos_detail = "SELECT * FROM onlinehoroscope WHERE custid ='".$id."'";
$get_horos_exec = mysql_query($get_horos_detail);
$get_horos_fetch = mysql_fetch_array($get_horos_exec);
$get_horos_count = mysql_num_rows($get_horos_exec);

$get_reg_detail = "SELECT ID,Photo1,Age,Maritalstatus,Religion,Gender,State,Country FROM register WHERE MatriID ='".$id."'";
$get_reg_exec = mysql_query($get_reg_detail);
$row = mysql_fetch_array($get_reg_exec);

 
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
		
	$timezone = $get_horos_fetch["timezone"];	
	if($timezone=="") {$timezone ="05.30"; } 
	
	$arguments  =  "http://www.astrovisiononline.com/avservices/singlepagehoro/inserttolsdb.php?data=<DATA><BIRTHDATA><CUSTID>".$get_horos_fetch['custid']."</CUSTID><SEX>".$get_horos_fetch['sex']."</SEX><NAME>".$get_horos_fetch['name']."</NAME><DAY>".$dob_date."</DAY><MONTH>".$dob_month."</MONTH><YEAR>".$dob_year."</YEAR><TIME24HR>".$tob_hour.".".$tob_minute.".".$tob_second."</TIME24HR><CORR>".$get_horos_fetch['timecorrection']."</CORR><PLACE>".$get_horos_fetch['place']."</PLACE><LONG>076.14</LONG><LAT>09.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>".$timezone."</TZONE><TZONEDIR>E</TZONEDIR></BIRTHDATA><OPTIONS><CHARTSTYLE>".$get_horos_fetch['chartstyle']."</CHARTSTYLE><LANGUAGE>".$get_horos_fetch['language']."</LANGUAGE><REPTYPE>LS-SP</REPTYPE><REPDMN>".$sitename."</REPDMN><HSETTINGS><AYANAMSA>1</AYANAMSA><DASASYSTEM>1</DASASYSTEM><GULIKATYPE>1</GULIKATYPE><PARYANTHARSTART>0</PARYANTHARSTART><PARYANTHAREND>25</PARYANTHAREND><FAVMARPERIOD>50</FAVMARPERIOD><BHAVABALAMETHOD>1</BHAVABALAMETHOD><ADVANCEDOPTION1>0</ADVANCEDOPTION1><ADVANCEDOPTION2>0</ADVANCEDOPTION2><ADVANCEDOPTION3>0</ADVANCEDOPTION3><ADVANCEDOPTION4>0</ADVANCEDOPTION4></HSETTINGS></OPTIONS></DATA>"; 
	
	$arguments  =  "http://www.astrovisiononline.com/avservices/singlepagehoro/inserttolsdb.php?data=<DATA><BIRTHDATA><CUSTID>NM57653</CUSTID><SEX>Male</SEX><NAME>abhilash menon</NAME><DAY>09</DAY><MONTH>10</MONTH><YEAR>1991</YEAR><TIME24HR>00.00.00</TIME24HR><CORR>1</CORR><PLACE></PLACE><LONG>076.14</LONG><LAT>09.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>05.30E</TZONE><TZONEDIR>E</TZONEDIR></BIRTHDATA><OPTIONS><CHARTSTYLE>3</CHARTSTYLE><LANGUAGE>ENG</LANGUAGE><REPTYPE>LS-SP</REPTYPE><REPDMN>".$sitename."</REPDMN><HSETTINGS><AYANAMSA>1</AYANAMSA><DASASYSTEM>1</DASASYSTEM><GULIKATYPE>1</GULIKATYPE><PARYANTHARSTART>0</PARYANTHARSTART><PARYANTHAREND>25</PARYANTHAREND><FAVMARPERIOD>50</FAVMARPERIOD><BHAVABALAMETHOD>1</BHAVABALAMETHOD><ADVANCEDOPTION1>0</ADVANCEDOPTION1><ADVANCEDOPTION2>0</ADVANCEDOPTION2><ADVANCEDOPTION3>0</ADVANCEDOPTION3><ADVANCEDOPTION4>0</ADVANCEDOPTION4></HSETTINGS></OPTIONS></DATA>";
	//exit;
	?>
	
	<!--<iframe style="border:thin" src="<? echo $arguments; ?>" width="666" height="1300" ></iframe> -->
	
</body>
</html>
