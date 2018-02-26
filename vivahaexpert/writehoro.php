<?Php
session_start();
include('dbconnect.php');
$horoscope=urldecode($_POST["RegData"]);
$custid =$_POST["Userid"];
$rasireg=$_POST["RegRasi"];
$navreg=$_POST["RegNavamsa"];


$horofname =$_POST["RegDataFname"];
$rasifname =$_POST["RegRasiFname"];
$navamsafname =$_POST["RegNavamsaFname"];


$rasireg=base64_decode($rasireg);
$navreg=base64_decode($navreg);

writelog("Reports/".$horofname,$horoscope);
writelog("Reports/".$rasifname,$rasireg);
writelog("Reports/".$navamsafname,$navreg);

mysql_query("update onlinehoroscope set horos_html ='".$horofname."', rasifname = '".$rasifname."', navamsafname='".$navamsafname."'  where custid = '".$_SESSION['matriid']."'");
echo $horoscope;


function writelog($fname,$stext)
{
$fp = fopen($fname,"w");
fwrite($fp,$stext);
fclose($fp);
}

?>