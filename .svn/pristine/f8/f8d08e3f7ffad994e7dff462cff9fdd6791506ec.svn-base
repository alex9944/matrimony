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
//echo "SELECT * FROM register where MatriID='$strid'";
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
  <div class="col-md-9">
    <div id="inner_right" > 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Edit - Socio Religious Attributes</h3>
        </div>
        <div class="body" align="left">
          
            <FORM action="edit_socio.php" class="form-horizontal" role="form" method="post" style="margin-left:15%;">
              <div class="form-group">
              <div class="col-md-10">
                 <label>Gothra(m)</label>
                </div>
                    <div class="col-md-10">
                      <input name="txtGothra" placeholder="Gothra(m)" type="text" class="form-control" id="txtGothra" value="<? echo $row['Gothram']; ?>" size="40" maxlength="40" style="width:65%;  float: left;">
                   </div>
                </div>
                <div class="form-group">
                <div class="col-md-10">
                 <label>Star(Nakshatra)</label>
                </div>
                  <div class="col-md-10">
                    <span style="DISPLAY: block">
        <?php $txtStar =array('Does not matter - Star(Nakshatra)', 'Ashwini (ASHWATHY)', 'BHARANI', 'Krittika (KARTHIKA)','ROHINI','Mrigashira (MAKAYIRAM)','Ardra (THIRUVATHIRA)','Punarvasu (PUNARTHAM)','Pushya (POOYAM)','Ashlesha (AYILYAM)','Makha (MAKAM)','Purva Phalguni (POORAM)','Uttara Phalguni (UTRAM)','Hasta (ATHAM)','Chitra (CHITHIRA)','Swati (CHOTHY)','Vishaka (VISHAKAM)','Anuradha (ANIZHAM)','Jyeshta (TRIKETTA)','Mula (MOOLAM)','Purva Ashada (POORADAM)','Uttara Ashada (UTTARADAM)','Shravana (THIRUVONAM)','Dhanista (AVITTAM)','Sathabhisha (CHATAYAM)','Purva Bhadrapada (PURURUTTATHY)','Uttara Bhadrapada (UTHRITTATHY)','Revati (REVATHI)');
       ?>
                  <select name="txtStar" class="form-control" id="txtStar" style="width:65%;">
                    <?php
            foreach ($txtStar as $castes) {
             if ($row['Star']==$castes) { ?>
                    <option value="<? echo $row['Star']; ?>" selected><? echo $row['Star']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                 
                  </select>
                  </span>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-md-10">
                 <label>Moon Sign</label>
                </div>
                  <div class="col-md-10">
                    <?php $txtMoon =array('Does not matter', 'Mesha (Medam) / Aries', 'Vrishaba (Edavam) / Taurus', 'Mithuna (Mithunam) / Gemini','Karkata (Karkatam) / Cancer','Simha (Chingam) / Leo','Kanya (Kanni) / Virgo','Thula (Thulam) / Libra','Vrichika (Vrichikam) / Scorpio','Dhanu / Sagittarius','Makara  (Makaram)/ Capricorn','Kumbha (Kumbham) / Aquarius','Meena (Meenam) / Pisces');
           ?>
        
        <select name="txtMoon" id="txtMoon" class="form-control" style="width:65%;">
                    <?php
          
            foreach ($txtMoon as $castes) {
             if ($row['Moonsign']==$castes) { ?>
                    <option value="<? echo $row['Moonsign']; ?>" selected><? echo $row['Moonsign']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                 
                  
                  </select>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-md-10">
                 <label>Horoscope Match</label>
                </div>
                  <div class="col-md-10">
                    <?php $txtHorosMatch =array('Required', 'Not Required', 'Does not matter');
       ?>
        <select name="txtHorosMatch" class="form-control" id="txtHorosMatch" style="width:65%;">
                  
                    <?php
            foreach ($txtHorosMatch as $castes) {
             if ($row['Horosmatch']==$castes) { ?>
                    <option value="<? echo $row['Horosmatch']; ?>" selected><? echo $row['Horosmatch']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-md-10">
                 <label>Manglik</label>
                </div>
                  <div class="col-md-10">
                    <?php $txtManglik =array('No', 'Yes', 'Do not know','Not applicable');
       ?>
        <select name="txtManglik" id="txtManglik" class="form-control" style="width:65%;">
                 
                  <?php
            foreach ($txtManglik as $castes) {
             if ($row['Manglik']==$castes) { ?>
                    <option value="<? echo $row['Manglik']; ?>" selected><? echo $row['Manglik']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-md-10">
                 <label>Place of Birth</label>
                </div>
                  <div class="col-md-10">
                    <input name="txtPb" type="text" placeholder="Place of Birth" class="form-control" id="txtPb" value="<? echo $row['POB']; ?>" size="40" maxlength="40" style="width:65%">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    Time of Birth(24 Hours):
                  </div>
                  <div class="form-group">
                    <?php
           //echo $row['TOB'];
           $explode_time=explode('-',$row['TOB']);
           $explode_hours=explode(':',$explode_time[0]);
           $explode_min=explode(':',$explode_time[1]);
           $explode_sec=explode(':',$explode_time[2]);
            //print_r($explode_hours);
             //print_r($explode_min);
            //print_r($explode_sec);
           ?> Hour(s)
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
  </script>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit">
                  </div>
                  <div class="col-md-2">
                    <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';">
                  </div>
                </div>
            
         
                    	<td><div align="center"><span class=" span"></span>
                  </div></td>
                  		<td>&nbsp;</td>
                    	<td><div align="center"><span class=" span"></span>
                  </div></td>
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
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>