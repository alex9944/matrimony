<?php

include("dbconnect.php");

header("Content-Type: text/html; charset=Windows-1256n");

//function chk_mail(){

if($_REQUEST['target']=='chk_mail'){



$mail=$_REQUEST['EMAIL'];



$query="SELECT ConfirmEmail FROM register WHERE ConfirmEmail='".$mail."'";

$exe=mysql_query($query);

$Num=mysql_num_rows($exe);

if($Num==1)

{

echo '<script language="javascript" type="text/javascript">alert("Use another email to proceed");</script>';

}

}





if($_REQUEST['target']=='logitude'){

$place=$_REQUEST['place'];

$longQ="SELECT *  FROM `citydata` WHERE `place_name` LIKE '".$place."'";

$longexe=mysql_query($longQ);

$longfetch=mysql_fetch_array($longexe);

//echo $longfetch['longitude_deg'];$longfetch['longitude_min']."'".$longfetch['long_dir'];



//echo $longfetch['longitude_deg'].utf8_encode("°").$longfetch['longitude_min']."'".$longfetch['long_dir']."|".$longfetch['latitude_deg'].utf8_encode("°").$longfetch['latitude_min']."'".$longfetch['lat_dir'];
echo str_pad($longfetch['longitude_deg'],3,'0',STR_PAD_LEFT).".".$longfetch['longitude_min']."|".$longfetch['latitude_deg'].".".$longfetch['latitude_min']."|".$longfetch['time_zone'];
}



?>