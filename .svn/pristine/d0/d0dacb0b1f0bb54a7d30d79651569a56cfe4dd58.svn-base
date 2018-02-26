<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="modifyprofile.php">Modify My Profile</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Edit Socio Religious Attributes</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Edit - Socio Religious Attributes</h3>
        </div>
        <div class="body" align="left">
          <form action="edit_socio.php" method="post">
            <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Gothra(m)</div></td>
                <td><div align="left"><input name="txtGothra" type="text" class="textbox1" id="txtGothra" value="<? echo $row['Gothram']; ?>" size="40" maxlength="40"></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Star(Nakshatra)</div></td>
                <td><div align="left"><span style="DISPLAY: block">
				<?php $txtStar =array('Does not matter', 'ASHWINI', 'BHARANI', 'KRITIKA','ROHINI','MRIGASHIRA','AARDRA','PUNARVASU','PUSHYA','AASLESHA','MAGHA','PURVA PHALGUNI','UTTARA PHALGUNI','HASTA','CHITRA','SWATI','VISHAKHA','ANURADHA','JYESHTHA','MOOLA','POORVAASHADHA','UTTARAASHADHA','SHRAVANI','DHANISTHA','SHATABHISHA','PURVA BHADRAPADA','UTTARA BHADRAPADA','REVATI');
			 ?>
                  <select name="txtStar" class="forminput" id="txtStar">
                   	<?php
						foreach ($txtStar as $castes) {
						 if ($row['Star']==$castes) { ?>
                    <option value="<? echo $row['Star']; ?>" selected><? echo $row['Star']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                 
                  </select>
                  </span></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Moonsign</div></td>
                <td><div align="left">
				<?php $txtMoon =array('Does not matter', 'Mesh (Aries)', 'Vrishabh (Taurus)', 'Mithun (Gemini)','Karka (Cancer)','Simha (Leo)','Kanya (Virgo)','Tula (Libra)','Vrischika (Scorpio)','Dhanu (Sagittarious)','Makar (Capricorn)','Kumbha (Aquarious)','Meen (Pisces)');
			 ?>
				
				<select name="txtMoon" id="txtMoon">
                   	<?php
						foreach ($txtMoon as $castes) {
						 if ($row['Moonsign']==$castes) { ?>
                    <option value="<? echo $row['Moonsign']; ?>" selected><? echo $row['Moonsign']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                 
                  
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Horoscope Match</div></td>
                <td><div align="left">
				<?php $txtHorosMatch =array('No', 'Yes', 'Does not matter');
			 ?>
				<select name="txtHorosMatch" id="txtHorosMatch">
                  
                    <?php
						foreach ($txtHorosMatch as $castes) {
						 if ($row['Horosmatch']==$castes) { ?>
                    <option value="<? echo $row['Horosmatch']; ?>" selected><? echo $row['Horosmatch']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Manglik</div></td>
                <td><div align="left">
				<?php $txtManglik =array('No', 'Yes', 'Do not know','Not applicable');
			 ?>
				<select name="txtManglik" id="txtManglik">
                 
                  <?php
						foreach ($txtManglik as $castes) {
						 if ($row['Manglik']==$castes) { ?>
                    <option value="<? echo $row['Manglik']; ?>" selected><? echo $row['Manglik']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Place of Birth</div></td>
                <td><div align="left"><input name="txtPb" type="text" class="textbox1" id="txtPb" value="<? echo $row['POB']; ?>" size="40" maxlength="40"></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Time of Birth(24 Hours):</div></td>
                <td><!--<table cellpadding="0" cellspacing="0">
                    <tr valign=center>
                      <td><div align="left">
                          <input name="txtTb" type='text' class="textbox1" id='timepicker1' onBlur="validateDatePicker(this)" value='<? echo $row['TOB']; ?>' size=8 maxlength=8>
                        </div></td>
                      <td><div align="left"><img src="timePickerImages/timepicker.gif" alt="Pick a Time!" width="30" height="20" border="0" style="cursor:hand" onClick="selectTime(this,timepicker1)"></div></td>
                    </tr>
                  </table>--><table>
                  <?php
				   //echo $row['TOB'];
				   $explode_time=explode('-',$row['TOB']);
				   $explode_hours=explode(':',$explode_time[0]);
				   $explode_min=explode(':',$explode_time[1]);
				   $explode_sec=explode(':',$explode_time[2]);
					  //print_r($explode_hours);
					   //print_r($explode_min);
					  //print_r($explode_sec);
				   ?>
                  <tr id="map2">
  <td style="color:#000000;padding:0 215px 0 0;"> Hour(s)
    <select class="w80" name="hour_horo" id="hour_horo">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
    </select>
    <script>
	document.getElementById('hour_horo').value="<?php echo $explode_hours['1'];?>";
	</script>
    Minute(s)
    <select class="w80" name="minute_horo" id="minute_horo">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>
      <option value="43">43</option>
      <option value="44">44</option>
      <option value="45">45</option>
      <option value="46">46</option>
      <option value="47">47</option>
      <option value="48">48</option>
      <option value="49">49</option>
      <option value="50">50</option>
      <option value="51">51</option>
      <option value="52">52</option>
      <option value="53">53</option>
      <option value="54">54</option>
      <option value="55">55</option>
      <option value="56">56</option>
      <option value="57">57</option>
      <option value="58">58</option>
      <option value="59">59</option>
    </select>
     <script>
	document.getElementById('minute_horo').value="<?php echo $explode_min['1'];?>";
	</script>
    Second(s)
    <select class="w80" name="second_horo" id="second_horo">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>
      <option value="43">43</option>
      <option value="44">44</option>
      <option value="45">45</option>
      <option value="46">46</option>
      <option value="47">47</option>
      <option value="48">48</option>
      <option value="49">49</option>
      <option value="50">50</option>
      <option value="51">51</option>
      <option value="52">52</option>
      <option value="53">53</option>
      <option value="54">54</option>
      <option value="55">55</option>
      <option value="56">56</option>
      <option value="57">57</option>
      <option value="58">58</option>
      <option value="59">59</option>
    </select> <script>
	document.getElementById('second_horo').value="<?php echo $explode_sec['1'];?>";
	</script></td>
</tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
                <table align="left">
                	<tr>
                    	<td><div align="center"><span class=" span"></span>
                  <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit"></div></td>
                  		<td>&nbsp;</td>
                    	<td><div align="center"><span class=" span"></span>
                  <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';"></div></td>
                    </tr>
                 </table>
                <!--<div align="left">
                  <input name="Submit" type="submit" value="Submit" src="pics/save.gif" align="absmiddle">
                  <a href="modifyprofile.php"><img src="pics/cancel.gif" width="57" height="18" border="0"></a></div>--></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
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