<?Php

include("memprotect.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<META http-equiv="Content-Type" content="text/html; charset=UTF-8">  



<head>



<?Php include("include/innerheadersection.php"); ?>



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

function get_position(place)

{



$.post('functions.php?target=logitude',{place:place}, function(data) {

result=data.split("|")



document.getElementById('txtlongitude').value=result[0];

document.getElementById('txtlatitude').value=result[1];



});

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

	 $place = $_REQUEST["city"];  

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
		<?php  $select_country_query = "SELECT country_name FROM citydata GROUP BY country_name ORDER BY country_name ASC"; 
		$select_country_query_exe = mysql_query($select_country_query);
		?>

	<td><div align="left" id="country_aj">
	<select name="country" class="forminput" id="select_country" style="width:220px;" onChange="javascript:get_state(this.value);">
	<option value=" " selected>-- Select --</option>
	<?php while($country = mysql_fetch_array($select_country_query_exe)) { ?>
	<option value="<?=$country["country_name"]?>"><?=$country["country_name"]?></option>
	<?php } ?>
	</select>
	</div></td>















              </tr>

			  <tr class="hline2">















                <td><div align="left">&nbsp;&nbsp;State</div></td>















                <td><div align="left" id="state_aj"> 
<select onchange="javascript:get_city(this.value);" style="width:220px;" id="select_state" class="forminput" name="State">
<option value=" " selected>-- Select --</option>
</select>
                   </div></td>















              </tr>

			  <tr class="hline2">















                <td><div align="left">&nbsp;&nbsp;City</div></td>















                <td><div align="left" id="city_aj">  <select name="City" class="forminput" id="select_city" style="width:220px;" onChange="get_position(this.value);" >
				
				</select>















                    </div></td>















              </tr>

              <!--<tr class="hline2">

                <td><div align="left">* Place</div></td>

                <td><div align="left"> :

                    <input type="text" name="txtplace" id="txtplace" class="textbox1" size="45" maxlength="20" value="<?php echo $get_horos_fetch["place"]; ?>" />

                  </div></td>

              </tr>-->

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

              <!--<tr class="hline2">

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

              </tr>-->

              <tr class="hline2">

                <td><div align="left">* Time Zone</div></td>

                <td><div align="left"> :

                    <input type="text" name="txttimezone" id="txttimezone" class="textbox1" size="45" value="<?php echo $get_horos_fetch["timezone"]; ?>" />

                    (Ex : 05.30)</div></td>

              </tr>

              <tr class="hline2">

                <td><div align="left">Time Zone Dir</div></td>

                <td><div align="left"> :

                    <select name="stimezonedir" id="stimezonedir" disabled="disabled">

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

				 <input type="hidden" name="ddlSelectCountry" id="ddlSelectCountry" />

                 <input type="hidden" name="ddlSelectState" id="ddlSelectState" />

                 <input type="hidden" name="ddlSelectCity" id="ddlSelectCity" />

                  <!--  <input type="submit" name="submit" id="submit" value="submit"  /> -->

					<input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:65px;" name="Submit" type="image" value="Submit" onclick="return validatehoros();">

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
<script>


function get_state(country) {
document.getElementById('state_aj').innerHTML='<img src="loading.gif" >';
$.post(encodeURI('get_state.php?country='+country),'', function(data) {
if(data!=''){
 document.getElementById('state_aj').innerHTML=data;
return false;

}



});


}



function get_city(state) {
document.getElementById('city_aj').innerHTML='<img src="loading.gif" >';
$.post(encodeURI('get_city.php?state='+state),'', function(data) {

if(data!=''){
 document.getElementById('city_aj').innerHTML=data;
return false;

}



});


}

</script>