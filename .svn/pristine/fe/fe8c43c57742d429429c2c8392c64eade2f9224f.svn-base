<?Php
include("memprotect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

<script src="js/login.js" language="javascript"></script>
<script language="javascript" src="js/timepicker.js"></script>
<script language="javascript" src="js/manage_horo_country.js" type="text/javascript"> </script>
<script language="javascript">
function validatehoros()
{
	if(document.getElementById("txtplace").value == "")
	{
		alert("Kindly enter place.");
		document.getElementById("txtplace").focus();
		return false;
	}
	if(document.getElementById("txtlongitude").value == "")
	{
		alert("Kindly enter longitude.");
		document.getElementById("txtlongitude").focus();
		return false;
	}
	if(document.getElementById("txtlatitude").value == "")
	{
		alert("Kindly enter latitude.");
		document.getElementById("txtlatitude").focus();
		return false;
	}
	if(document.getElementById("txttimezone").value == "")
	{
		alert("Kindly enter time zone.");
		document.getElementById("txttimezone").focus();
		return false;
	}
	return true;
}

function loadvalues()







			 {







				enb('country');







				select_field('country','');







				select_field('state','');







				enb('state');







				select_field('city','');







			 }

</script>
</head>

<body>
<?php
if($_REQUEST["chkhorosfrm"] != "")
{
	$custid = $_REQUEST["txtcustid"];
	$sex = $_REQUEST["txtsex"];
	$name = $_REQUEST["txtname"];
	$date = $_REQUEST["sdate"];
	$month = $_REQUEST["smonth"];
	$year = $_REQUEST["syear"];
	$hour = $_REQUEST["shour"];
	$minute = $_REQUEST["sminute"];
	$second = $_REQUEST["ssecond"];
	$timecorrection = $_REQUEST["stimecorrection"];
	$place = $_REQUEST["txtplace"];
	$longitude = $_REQUEST["txtlongitude"]; 
	$latitude = $_REQUEST["txtlatitude"];
	$longdir = $_REQUEST["slongdir"];
	$latdir = $_REQUEST["slatdir"];
	$timezone = $_REQUEST["txttimezone"];
	$timezonedir = $_REQUEST["stimezonedir"];
	$chartstyle = $_REQUEST["schartstyle"];
	$language = $_REQUEST["slanguage"];
	
	$count_horoscope_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$_SESSION['matriid']."'";
	$count_horoscope_exec = mysql_query($count_horoscope_sql);
	$count_horoscope_fetch = mysql_fetch_array($count_horoscope_exec);
	
	if($count_horoscope_fetch["horoscount"] == 0)
	{
		$insert_horoscope_sql = "INSERT INTO onlinehoroscope(custid, sex, name, dob_date, dob_month, dob_year, tob_hour, tob_minute, tob_second, timecorrection, place, longitude, latitude, longdir, latdir, timezone, timezonedir, chartstyle, language) VALUES('".$custid."', '".$sex."', '".$name."', '".$date."', '".$month."', '".$year."', '".$hour."', '".$minute."', '".$second."', '".$timecorrection."', '".$place."', '".$longitude."', '".$latitude."', '".$longdir."', '".$latdir."', '".$timezone."', '".$timezonedir."', '".$chartstyle."', '".$language."')";
		mysql_query($insert_horoscope_sql);
		$msg = "Insert Successfully.";
	}
	else
	{
		$update_horoscope_sql = "UPDATE onlinehoroscope SET sex ='".$sex."', name ='".$name."', dob_date ='".$date."', dob_month ='".$month."', dob_year ='".$year."', tob_hour ='".$hour."', tob_minute ='".$minute."', tob_second ='".$second."', timecorrection ='".$timecorrection."', place ='".$place."', longitude ='".$longitude."', latitude ='".$latitude."', longdir ='".$longdir."', latdir ='".$latdir."', timezone ='".$timezone."', timezonedir ='".$timezonedir."' ,chartstyle ='".$chartstyle."', language ='".$language."' WHERE custid ='".$custid."'"; 
		mysql_query($update_horoscope_sql);
		$msg = "Update Successfully.";
	}
}

	$count_horos_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$_SESSION['matriid']."'";
	$count_horos_exec = mysql_query($count_horos_sql);
	$count_horos_fetch = mysql_fetch_array($count_horos_exec);
	
	if($count_horos_fetch["horoscount"] != 0)
	{
		$get_horos_detail = "SELECT * FROM onlinehoroscope WHERE custid ='".$_SESSION['matriid']."'";
		$get_horos_exec = mysql_query($get_horos_detail);
		$get_horos_fetch = mysql_fetch_array($get_horos_exec);
		$get_horos_det = 1;
	}
?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Manage Horoscope</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	?>
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Manage Horoscope</h3>
        </div>
        <div class="body" align="left">
          <form name="horoscopefrm" id="horoscopefrm" method="post">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <?php if($msg != "") { ?>
            <tr><td colspan="2"><div align="center"><strong><?php echo $msg; ?></strong></div></td></tr>
            <?php } ?> 
            <?Php if(isset($get_horos_det)) { ?>
            <tr><td colspan="2"><div align="right"><a href="viewhoroscope.php?id=<?php echo $_SESSION['matriid'];?>" target="_blank"><strong>View Horoscope</strong></a></div></td></tr>
            <?php } ?> 
              <tr class="hline2">
                <td><div align="left">Cust Id</div></td>
                <td><div align="left"> :
                    <input type="text" name="txtcustid" id="txtcustid" class="textbox1" size="45" readonly="readonly" value="<?php echo $_SESSION['matriid'];?>" />
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Sex</div></td>
                <td><div align="left"> :
                    <input type="text" name="txtsex" id="txtsex" class="textbox1" size="45" readonly="readonly" value="<?php echo $_SESSION['gender'];?>" />
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Name</div></td>
                <td><div align="left"> :
                    <input type="text" name="txtname" id="txtname" class="textbox1" size="45" readonly="readonly" value="<?php echo $_SESSION['name'];?>" />
                  </div></td>
              </tr>
              <tr class="hline2">
                <td valign="top"><div align="left">DOB</div></td>
                <td><div align="left">
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td rowspan="2" valign="top"> : </td>
                        <td width="50">DD</td>
                        <td width="50">MM</td>
                        <td>YYYY</td>
                      </tr>
                      <tr>
                        <td><select name="sdate" id="sdate">
                            <?php for($date=1; $date <= 31;$date++)
		{
			if(strlen($date) == 1)
				$date = "0".$date;
		?>
                            <option value="<?Php echo $date;?>" <?php if($get_horos_fetch["dob_date"] == $date) { echo 'selected="selected"'; } ?>><?Php echo $date;?></option>
                            <?Php	
		}
		?>
                          </select></td>
                        <td><select name="smonth" id="smonth">
                            <?php for($month=1; $month <= 12;$month++)
		{
			if(strlen($month) == 1)
				$month = "0".$month;
		?>
                            <option value="<?Php echo $month;?>" <?php if($get_horos_fetch["dob_month"] == $month) { echo 'selected="selected"'; } ?>><?Php echo $month;?></option>
                            <?Php	
		}
		?>
                          </select></td>
                        <td><select name="syear" id="syear">
                            <?php for($year=1925; $year <= 2025;$year++)
		{
		?>
                            <option value="<?Php echo $year;?>" <?php if($get_horos_fetch["dob_year"] == $year) { echo 'selected="selected"'; } ?>><?Php echo $year;?></option>
                            <?Php	
		}
		?>
                          </select></td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">TOB</div></td>
                <td><div align="left">
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td rowspan="2" valign="top"> : </td>
                        <td width="50">HH</td>
                        <td width="50">MM</td>
                        <td width="50">SS</td>
                      </tr>
                      <tr>
                        <td><select name="shour" id="shour">
                            <?php for($hour=0; $hour <= 23;$hour++)
		{
			if(strlen($hour) == 1)
				$hour = "0".$hour;
		?>
                            <option value="<?Php echo $hour;?>" <?php if($get_horos_fetch["tob_hour"] == $hour) { echo 'selected="selected"'; } ?>><?Php echo $hour;?></option>
                            <?Php	
		}
		?>
                          </select></td>
                        <td><select name="sminute" id="sminute">
                            <?php for($minute=0; $minute <= 59;$minute++)
		{
			if(strlen($minute) == 1)
				$minute = "0".$minute;
		?>
                            <option value="<?Php echo $minute;?>" <?php if($get_horos_fetch["tob_minute"] == $minute) { echo 'selected="selected"'; } ?>><?Php echo $minute;?></option>
                            <?Php	
		}
		?>
                          </select></td>
                        <td><select name="ssecond" id="ssecond">
                            <?php for($second=0; $second <= 59;$second++)
		{
			if(strlen($second) == 1)
				$second = "0".$second;
		?>
                            <option value="<?Php echo $second;?>" <?php if($get_horos_fetch["tob_second"] == $second) { echo 'selected="selected"'; } ?>><?Php echo $second;?></option>
                            <?Php	
		}
		?>
                          </select></td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Time Correction</div></td>
                <td><div align="left"> :
                    <select name="stimecorrection" id="stimecorrection">
                      <option value="1" <?php if($get_horos_fetch["timecorrection"] == "1") { echo 'selected="selected"'; } ?>>Standard Time</option>
                      <option value="2" <?php if($get_horos_fetch["timecorrection"] == "2") { echo 'selected="selected"'; } ?>>Summer time</option>
                      <option value="3" <?php if($get_horos_fetch["timecorrection"] == "3") { echo 'selected="selected"'; } ?>>Double summer time</option>
                      <option value="4" <?php if($get_horos_fetch["timecorrection"] == "4") { echo 'selected="selected"'; } ?>>War time</option>
                    </select>                    
                  </div></td>
              </tr>
			  <tr class="hline2">







                <td><div align="left">&nbsp;&nbsp;Country Living in </div></td>







                <td><div align="left">







                    <select name="country" class="forminput" id="select_country" style="width:220px;" onChange="javascript:enb('country');">







                        <option value=" " selected>-- Select --</option>







                        <option value="albania">Albania</option>







                        <option value="algeria">Algeria</option>







                        <option value="american samoa">American samoa</option>







                        <option value="andoria">Andoria</option>







                        <option value="andorra">Andorra</option>







                        <option value="angola">Angola</option>







                        <option value="anguilla">Anguilla</option>







                        <option value="anitgua">Anitgua</option>







                        <option value="antigua">Antigua</option>







                        <option value="argentina">Argentina</option>







                        <option value="armenia">Armenia</option>







                        <option value="aruba">Aruba</option>







                        <option value="australia">Australia</option>







                        <option value="austria">Austria</option>







                        <option value="azerbaijan">Azerbaijan</option>







                        <option value="azerbiajan">Azerbiajan</option>







                        <option value="bahamas">Bahamas</option>







                        <option value="bahrain">Bahrain</option>







                        <option value="bangladesh">Bangladesh</option>







                        <option value="barbados">Barbados</option>







                        <option value="belarus">Belarus</option>







                        <option value="belgium">Belgium</option>







                        <option value="belize">Belize</option>







                        <option value="benin">Benin</option>







                        <option value="bermuda">Bermuda</option>







                        <option value="bhutan">Bhutan</option>







                        <option value="boliva">Boliva</option>







                        <option value="bolivia">Bolivia</option>







                        <option value="bonaire">Bonaire</option>







                        <option value="bosnia &amp; herzegovina">Bosnia &amp; herzegovina</option>







                        <option value="botswana">Botswana</option>







                        <option value="brazil">Brazil</option>







                        <option value="brunei">Brunei</option>







                        <option value="bulgaria">Bulgaria</option>







                        <option value="burkina faso">Burkina faso</option>







                        <option value="burundi">Burundi</option>







                        <option value="cambodia">Cambodia</option>







                        <option value="cameroon">Cameroon</option>







                        <option value="canada">Canada</option>







                        <option value="canary islands the">Canary islands the</option>







                        <option value="cape varde">Cape varde</option>







                        <option value="cape verde">Cape verde</option>







                        <option value="cayman islands">Cayman islands</option>







                        <option value="central african republic">Central african republic</option>







                        <option value="chad">Chad</option>







                        <option value="chile">Chile</option>







                        <option value="china">China</option>







                        <option value="china, peoples rep">China, peoples rep</option>







                        <option value="colombia">Colombia</option>







                        <option value="columbia">Columbia</option>







                        <option value="comoros">Comoros</option>







                        <option value="congo">Congo</option>







                        <option value="congo, the democratic rep of">Congo, the democratic rep of</option>







                        <option value="cook islands">Cook islands</option>







                        <option value="costa rica">Costa rica</option>







                        <option value="croatia">Croatia</option>







                        <option value="cuba">Cuba</option>







                        <option value="curacao">Curacao</option>







                        <option value="cyprus">Cyprus</option>







                        <option value="czech republic">Czech republic</option>







                        <option value="czech republic the">Czech republic the</option>







                        <option value="denmark">Denmark</option>







                        <option value="djibouti">Djibouti</option>







                        <option value="dominica">Dominica</option>







                        <option value="dominican republic">Dominican republic</option>







                        <option value="ecuador">Ecuador</option>







                        <option value="egypt">Egypt</option>







                        <option value="el salvador">El salvador</option>







                        <option value="equatorial guinea">Equatorial guinea</option>







                        <option value="eritrea">Eritrea</option>







                        <option value="estonia">Estonia</option>







                        <option value="ethiopia">Ethiopia</option>







                        <option value="falkland islands">Falkland islands</option>







                        <option value="faroe islands">Faroe islands</option>







                        <option value="faroer islands">Faroer islands</option>







                        <option value="fiji">Fiji</option>







                        <option value="finland">Finland</option>







                        <option value="france">France</option>







                        <option value="french guana">French guana</option>







                        <option value="french guyana">French guyana</option>







                        <option value="french polynesia">French polynesia</option>







                        <option value="gabon">Gabon</option>







                        <option value="gambia">Gambia</option>







                        <option value="georgia">Georgia</option>







                        <option value="germany">Germany</option>







                        <option value="ghana">Ghana</option>







                        <option value="gibraltar">Gibraltar</option>







                        <option value="greece">Greece</option>







                        <option value="greenland">Greenland</option>







                        <option value="grenada">Grenada</option>







                        <option value="guadeloupe">Guadeloupe</option>







                        <option value="guadeluoupe">Guadeluoupe</option>







                        <option value="guam">Guam</option>







                        <option value="guatemala">Guatemala</option>







                        <option value="guernsey">Guernsey</option>







                        <option value="guinea">Guinea</option>







                        <option value="guinea republic">Guinea republic</option>







                        <option value="guinea-bissau">Guinea-bissau</option>







                        <option value="guyana">Guyana</option>







                        <option value="guyana (british)">Guyana (british)</option>







                        <option value="haiti">Haiti</option>







                        <option value="honduras">Honduras</option>







                        <option value="hong kong">Hong kong</option>







                        <option value="hungary">Hungary</option>







                        <option value="iceland">Iceland</option>







                        <option value="india">India</option>







                        <option value="indonesia">Indonesia</option>







                        <option value="iran">Iran</option>







                        <option value="ireland">Ireland</option>







                        <option value="ireland republic of">Ireland republic of</option>







                        <option value="israel">Israel</option>







                        <option value="italy">Italy</option>







                        <option value="italy">Italy</option>







                        <option value="ivory coast">Ivory coast</option>







                        <option value="jamaica">Jamaica</option>







                        <option value="japan">Japan</option>







                        <option value="jersey">Jersey</option>







                        <option value="jordan">Jordan</option>







                        <option value="kazakhstan">Kazakhstan</option>







                        <option value="kenya">Kenya</option>







                        <option value="kiribati">Kiribati</option>







                        <option value="korea, republic of">Korea, republic of</option>







                        <option value="korea, south">Korea, south</option>







                        <option value="korea,d.pr of">Korea,d.pr of</option>







                        <option value="kuwait">Kuwait</option>







                        <option value="kyrgyzstan">Kyrgyzstan</option>







                        <option value="lao peoples democratic republic">Lao peoples democratic republic</option>







                        <option value="laos">Laos</option>







                        <option value="latvia">Latvia</option>







                        <option value="lebanon">Lebanon</option>







                        <option value="lesotho">Lesotho</option>







                        <option value="liberia">Liberia</option>







                        <option value="libya">Libya</option>







                        <option value="liechtenstein">Liechtenstein</option>







                        <option value="lithuania">Lithuania</option>







                        <option value="luxembourg">Luxembourg</option>







                        <option value="macao">Macao</option>







                        <option value="macau">Macau</option>







                        <option value="macedonia">Macedonia</option>







                        <option value="macedonia republic of (fyrom)">Macedonia republic of (fyrom)</option>







                        <option value="madagascar">Madagascar</option>







                        <option value="malawi">Malawi</option>







                        <option value="malaysia">Malaysia</option>







                        <option value="maldives">Maldives</option>







                        <option value="mali">Mali</option>







                        <option value="malta">Malta</option>







                        <option value="marinique">Marinique</option>







                        <option value="marshall islands">Marshall islands</option>







                        <option value="martinique">Martinique</option>







                        <option value="mauritania">Mauritania</option>







                        <option value="mauritiania">Mauritiania</option>







                        <option value="mauritius">Mauritius</option>







                        <option value="mexico">Mexico</option>







                        <option value="micronesia">Micronesia</option>







                        <option value="moldova">Moldova</option>







                        <option value="moldova republic of">Moldova republic of</option>







                        <option value="monaco">Monaco</option>







                        <option value="mongolia">Mongolia</option>







                        <option value="montserrat">Montserrat</option>







                        <option value="morocco">Morocco</option>







                        <option value="mozambique">Mozambique</option>







                        <option value="myanmar">Myanmar</option>







                        <option value="myanmar (burma)">Myanmar (burma)</option>







                        <option value="namibia">Namibia</option>







                        <option value="nauru republic of">Nauru republic of</option>







                        <option value="nepal">Nepal</option>







                        <option value="netherland antilles">Netherland antilles</option>







                        <option value="netherlands">Netherlands</option>







                        <option value="netherlands the">Netherlands the</option>







                        <option value="nevis">Nevis</option>







                        <option value="new caledonia">New caledonia</option>







                        <option value="new zealand">New zealand</option>







                        <option value="nicaragua">Nicaragua</option>







                        <option value="niger">Niger</option>







                        <option value="nigeria">Nigeria</option>







                        <option value="niue">Niue</option>







                        <option value="norway">Norway</option>







                        <option value="oman">Oman</option>







                        <option value="pakistan">Pakistan</option>







                        <option value="palau">Palau</option>







                        <option value="palestine authority">Palestine authority</option>







                        <option value="panama">Panama</option>







                        <option value="papua new guinea">Papua new guinea</option>







                        <option value="paraguay">Paraguay</option>







                        <option value="peru">Peru</option>







                        <option value="peru">Peru</option>







                        <option value="philippines">Philippines</option>







                        <option value="poland">Poland</option>







                        <option value="portugal">Portugal</option>







                        <option value="puerto rico">Puerto rico</option>







                        <option value="qatar">Qatar</option>







                        <option value="reunion">Reunion</option>







                        <option value="reunion island">Reunion island</option>







                        <option value="romania">Romania</option>







                        <option value="russia">Russia</option>







                        <option value="russian federation">Russian federation</option>







                        <option value="rwanda">Rwanda</option>







                        <option value="saint lucia">Saint lucia</option>







                        <option value="saint vincent">Saint vincent</option>







                        <option value="saipan">Saipan</option>







                        <option value="samoa">Samoa</option>







                        <option value="sao tome &amp; principe">Sao tome &amp; principe</option>







                        <option value="saudi arabia">Saudi arabia</option>







                        <option value="saudia arabia">Saudia arabia</option>







                        <option value="senegal">Senegal</option>







                        <option value="seychelles">Seychelles</option>







                        <option value="sierra leone">Sierra leone</option>







                        <option value="singapore">Singapore</option>







                        <option value="slovak republic">Slovak republic</option>







                        <option value="slovakia">Slovakia</option>







                        <option value="slovenia">Slovenia</option>







                        <option value="solomon islands">Solomon islands</option>







                        <option value="somalia">Somalia</option>







                        <option value="south africa">South africa</option>







                        <option value="spain">Spain</option>







                        <option value="sri lanka">Sri lanka</option>







                        <option value="st kitts and nevis">St kitts and nevis</option>







                        <option value="st lucia">St lucia</option>







                        <option value="st vincent">St vincent</option>







                        <option value="st. barthelemy">St. barthelemy</option>







                        <option value="st. eustatius">St. eustatius</option>







                        <option value="st. kitts">St. kitts</option>







                        <option value="st. maarten">St. maarten</option>







                        <option value="sudan">Sudan</option>







                        <option value="suriname">Suriname</option>







                        <option value="swaziland">Swaziland</option>







                        <option value="sweden">Sweden</option>







                        <option value="switzerland">Switzerland</option>







                        <option value="syria">Syria</option>







                        <option value="tahiti">Tahiti</option>







                        <option value="taiwan">Taiwan</option>







                        <option value="tajikistan">Tajikistan</option>







                        <option value="tanzania">Tanzania</option>







                        <option value="thailand">Thailand</option>







                        <option value="togo">Togo</option>







                        <option value="tonga">Tonga</option>







                        <option value="trinidad &amp; tobago">Trinidad &amp; tobago</option>







                        <option value="trinidad and tobago">Trinidad and tobago</option>







                        <option value="tunisia">Tunisia</option>







                        <option value="turkey">Turkey</option>







                        <option value="turkmenistan">Turkmenistan</option>







                        <option value="turks &amp; caicos islands">Turks &amp; caicos islands</option>







                        <option value="turks and caicos islands">Turks and caicos islands</option>







                        <option value="tuvalu">Tuvalu</option>







                        <option value="uganda">Uganda</option>







                        <option value="ukraine">Ukraine</option>







                        <option value="united arab emirates">United arab emirates</option>







                        <option value="united kingdom">United kingdom</option>







                        <option value="united states of america">United states of america</option>







                        <option value="uruguay">Uruguay</option>







                        <option value="uzbekistan">Uzbekistan</option>







                        <option value="vanuatu">Vanuatu</option>







                        <option value="vatican city">Vatican city</option>







                        <option value="venezuela">Venezuela</option>







                        <option value="vietnam">Vietnam</option>







                        <option value="virgin island (gb)">Virgin island (gb)</option>







                        <option value="virgin islands  british">Virgin islands british</option>







                        <option value="virgin islands  us">Virgin islands us</option>







                        <option value="virgin islands (usa)">Virgin islands (usa)</option>







                        <option value="wallis &amp; futuna">Wallis &amp; futuna</option>







                        <option value="yemen arab republic">Yemen arab republic</option>







                        <option value="yugloslavia">Yugloslavia</option>







                        <option value="zaire (dem rep of congo)">Zaire (dem rep of congo)</option>







                        <option value="zambia">Zambia</option>







                        <option value="zimbabwe">Zimbabwe</option>







                        <option value="Others">Other</option>







                      </select>







                    </div></td>







              </tr>
			  <tr class="hline2">







                <td><div align="left">&nbsp;&nbsp;State</div></td>







                <td><div align="left"> <select name="State" class="forminput" id="select_state" style="width:220px;" onChange="javascript:enb('state');">







                        <option value=" " >-- Select --</option>







                      </select>







                    </div></td>







              </tr>
              <tr class="hline2">
                <td><div align="left">* Place</div></td>
                <td><div align="left"> :
                    <input type="text" name="txtplace" id="txtplace" class="textbox1" size="45" maxlength="20" value="<?php echo $get_horos_fetch["place"]; ?>" />
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">* Longitude</div></td>
                <td><div align="left"> :
                    <input type="text" name="txtlongitude" id="txtlongitude" class="textbox1" size="45" value="<?php echo $get_horos_fetch["longitude"]; ?>" />
                    (Ex : 076.18)</div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">* Latitude</div></td>
                <td><div align="left"> :
                    <input type="text" name="txtlatitude" id="txtlatitude" class="textbox1" size="45" value="<?php echo $get_horos_fetch["latitude"]; ?>" />
                    (Ex : 09.59)</div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Longdir</div></td>
                <td><div align="left"> :
                    <select name="slongdir" id="slongdir">
                      <option value="E" <?php if($get_horos_fetch["longdir"] == "E") { echo 'selected="selected"'; } ?>>East</option>
                      <option value="W" <?php if($get_horos_fetch["longdir"] == "W") { echo 'selected="selected"'; } ?>>West</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Latdir</div></td>
                <td><div align="left"> :
                    <select name="slatdir" id="slatdir">
                      <option value="N" <?php if($get_horos_fetch["latdir"] == "N") { echo 'selected="selected"'; } ?>>North</option>
                      <option value="S" <?php if($get_horos_fetch["latdir"] == "S") { echo 'selected="selected"'; } ?>>South</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">* Time Zone</div></td>
                <td><div align="left"> :
                    <input type="text" name="txttimezone" id="txttimezone" class="textbox1" size="45" value="<?php echo $get_horos_fetch["timezone"]; ?>" />
                    (Ex : 05.30)</div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Time Zone Dir</div></td>
                <td><div align="left"> :
                    <select name="stimezonedir" id="stimezonedir">
                      <option value="E" <?php if($get_horos_fetch["timezonedir"] == "E") { echo 'selected="selected"'; } ?>>East</option>
                      <option value="W" <?php if($get_horos_fetch["timezonedir"] == "W") { echo 'selected="selected"'; } ?>>West</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Chart Style</div></td>
                <td><div align="left"> :
                    <select name="schartstyle" id="schartstyle">
                      <option value="0" <?php if($get_horos_fetch["chartstyle"] == "0") { echo 'selected="selected"'; } ?>>South Indian</option>
                      <option value="1" <?php if($get_horos_fetch["chartstyle"] == "1") { echo 'selected="selected"'; } ?>>North Indian</option>
                      <option value="2" <?php if($get_horos_fetch["chartstyle"] == "2") { echo 'selected="selected"'; } ?>>East Indian</option>
                      <option value="3" <?php if($get_horos_fetch["chartstyle"] == "3") { echo 'selected="selected"'; } ?>>Kerala</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">LANGUAGE</div></td>
                <td><div align="left"> : <select name="slanguage" id="slanguage">
                <option value="ENG" <?php if($get_horos_fetch["language"] == "ENG") { echo 'selected="selected"'; } ?>>English</option>
                <option value="MAL" <?php if($get_horos_fetch["language"] == "MAL") { echo 'selected="selected"'; } ?>>Malayalam</option>
                <option value="TAM" <?php if($get_horos_fetch["language"] == "TAM") { echo 'selected="selected"'; } ?>>Tamil</option>
                <option value="HIN" <?php if($get_horos_fetch["language"] == "HIN") { echo 'selected="selected"'; } ?>>Hindi</option>
                <option value="KAN" <?php if($get_horos_fetch["language"] == "KAN") { echo 'selected="selected"'; } ?>>Kannada</option>
                <option value="TEL" <?php if($get_horos_fetch["language"] == "TEL") { echo 'selected="selected"'; } ?>>Telugu</option>
                <option value="GUJ" <?php if($get_horos_fetch["language"] == "GUJ") { echo 'selected="selected"'; } ?>>Gujarati</option>
                <option value="BEN" <?php if($get_horos_fetch["language"] == "BEN") { echo 'selected="selected"'; } ?>>Bengali</option>
                <option value="MAR" <?php if($get_horos_fetch["language"] == "MAR") { echo 'selected="selected"'; } ?>>Marathi</option>
                </select></div></td>
              </tr>
              <tr class="hline2">
                <td>&nbsp;</td>
                <td><div align="left">
                <input type="hidden" name="chkhorosfrm" id="chkhorosfrm" value="true" />
                    <input type="submit" name="submit" id="submit" value="submit" onclick="return validatehoros();" />
                  </div></td>
              </tr>
            </table>
          </form>
          <div class="hline2"></div>
        </div>
      </div>
      <?php include("include/afterloginmenu_active.php"); ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
              <tr>
                <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td class="pg_right"></td>
        </tr>
      </table>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>