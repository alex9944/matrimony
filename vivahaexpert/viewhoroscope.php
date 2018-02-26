<?Php
include("memprotect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Horoscope</span> </div>
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
          <h3 class="float_left title">View Horoscope</h3>
        </div>
        <div class="body" align="left">
<?php  

$get_horos_detailg = "SELECT * FROM onlinehoroscope WHERE custid ='".$_SESSION['username']."'";
$get_horos_execg = mysql_query($get_horos_detailg);
$get_horos_fetchg = mysql_fetch_array($get_horos_execg);
$get_horos_countg = mysql_num_rows($get_horos_execg);

$horoscopememberid = $_REQUEST["id"];
$get_horos_detail = "SELECT * FROM onlinehoroscope WHERE custid ='".$horoscopememberid."'";
$get_horos_exec = mysql_query($get_horos_detail);
$get_horos_fetch = mysql_fetch_array($get_horos_exec);
$get_horos_count = mysql_num_rows($get_horos_exec);

$sql  =  "SELECT MatriID,Horoscheck FROM register where MatriID='$horoscopememberid' and HorosApprove = 'Yes' ";
//echo $sql; 
$horoschk = mysql_query($sql);
$horocount = mysql_affected_rows();
//echo $horocount; 
if($horocount > 0)
{
   $photoclass = "prof_complete";
   $horolink   = "viewhoroscope.php?id=".$strid;
}

 

if($get_horos_count != 0 &&  ($_SESSION['status'] != "Active" || $get_horos_fetch['custid'] ==  $_SESSION['matriid'] )) 
{
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
		
	$timezone = $get_horos_fetch["timezone"];	
	if($timezone=="") {$timezone ="05.30"; } 
	//echo 'http://www.astrovisiononline.com/avservices/singlepagehoro/inserttolsdb.php?data=<DATA><BIRTHDATA><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><SEX>'.$get_horos_fetch["sex"].'</SEX><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$dob_date.'</DAY><MONTH>'.$dob_month.'</MONTH><YEAR>'.$dob_year.'</YEAR><TIME24HR>'.$tob_hour.'.'.$tob_minute.'.'.$tob_second.'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>076.14</LONG><LAT>09.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>'.$timezone.'</TZONE><TZONEDIR>E</TZONEDIR></BIRTHDATA><OPTIONS><CHARTSTYLE>'.$get_horos_fetch["chartstyle"].'</CHARTSTYLE><LANGUAGE>'.$get_horos_fetch["language"].'</LANGUAGE><REPTYPE>LS-SP</REPTYPE><REPDMN>numinousmatch</REPDMN><HSETTINGS><AYANAMSA>1</AYANAMSA><DASASYSTEM>1</DASASYSTEM><GULIKATYPE>1</GULIKATYPE><PARYANTHARSTART>0</PARYANTHARSTART><PARYANTHAREND>25</PARYANTHAREND><FAVMARPERIOD>50</FAVMARPERIOD><BHAVABALAMETHOD>1</BHAVABALAMETHOD><ADVANCEDOPTION1>0</ADVANCEDOPTION1><ADVANCEDOPTION2>0</ADVANCEDOPTION2><ADVANCEDOPTION3>0</ADVANCEDOPTION3><ADVANCEDOPTION4>0</ADVANCEDOPTION4></HSETTINGS></OPTIONS></DATA>';
	
	?>
	
	<!-- <iframe src="<? echo 'http://www.astrovisiononline.com/avservices/singlepagehoro/inserttolsdb.php?data=<DATA><BIRTHDATA><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><SEX>'.$get_horos_fetch["sex"].'</SEX><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$dob_date.'</DAY><MONTH>'.$dob_month.'</MONTH><YEAR>'.$dob_year.'</YEAR><TIME24HR>'.$tob_hour.'.'.$tob_minute.'.'.$tob_second.'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>076.14</LONG><LAT>09.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>'.$timezone.'</TZONE><TZONEDIR>E</TZONEDIR></BIRTHDATA><OPTIONS><CHARTSTYLE>'.$get_horos_fetch["chartstyle"].'</CHARTSTYLE><LANGUAGE>'.$get_horos_fetch["language"].'</LANGUAGE><REPTYPE>LS-SP</REPTYPE><REPDMN>'.$sitename.'</REPDMN><HSETTINGS><AYANAMSA>1</AYANAMSA><DASASYSTEM>1</DASASYSTEM><GULIKATYPE>1</GULIKATYPE><PARYANTHARSTART>0</PARYANTHARSTART><PARYANTHAREND>25</PARYANTHAREND><FAVMARPERIOD>50</FAVMARPERIOD><BHAVABALAMETHOD>1</BHAVABALAMETHOD><ADVANCEDOPTION1>0</ADVANCEDOPTION1><ADVANCEDOPTION2>0</ADVANCEDOPTION2><ADVANCEDOPTION3>0</ADVANCEDOPTION3><ADVANCEDOPTION4>0</ADVANCEDOPTION4></HSETTINGS></OPTIONS></DATA>'; ?>" width="666" height="1300" ></iframe>-->  
	
	
	
<!--
<form action="matchhoroscopes.php" method="post">
<table>
<tr><td>Check Your Horoscope Match with <? echo $get_horos_fetch["name"]; ?></td></tr>
  <tr>
    <td align="left" valign="top">Language</td>
    <td align="left" valign="top">
		<select name="language">
			
				<option value='Mal' ''>Malayalam</option><option value='Eng' selected>English</option><option value='Tam' ''>Tamil</option><option value='Tel' ''>Telugu</option><option value='Kan' ''>Kannada</option><option value='Hin' ''>Hindi</option><option value='Mar' ''>Marathi</option><option value='Guj' ''>Gujarathi</option>		</select>
   </td>
  </tr>
  <tr>
    <td align="left" valign="top">Chart Format</td>
    <td align="left" valign="top">
		<SELECT NAME="chartformat"> 
			
			<option value="0"  selected>South Indian</option>
			<option value="1"  >North Indian</option>
			<option value="2"  >East Indian</option>
			<option value="3"  >Kerala</option> 
		</SELECT>
    </td>
  </tr>
  <tr><td>
  <input type="hidden" name="gmatchid" value="<? echo $get_horos_fetch["custid"];?>" />
  <input type="hidden" name="matchid" value="<? echo $_SESSION['username'];?>" />
  <input type="submit" name="check your match" /></td></tr>
  </table>
</form>
	-->
	<?
	 //echo $url; die;
			 
			/* echo '<script>
					window.location.href ="'.$url.'";
				  </script>'; */	
	}  
if($horocount > 0)
{  
	 
	
 while($row = mysql_fetch_array($horoschk)){ 
 	 
	// var_dump($row['Horoscheck']);
 ?>
   <div align="center" style="padding-top:20px;"><img src="horosphotos/<?php  echo $row['Horoscheck']?>"  hspace="1" vspace="1" border="0" class="submenubox" width="" height="" style="max-width:600px; height:100%;"  > </div>
   
   <?php 
   }
}

if($get_horos_count == 0 and $horocount == 0 )  {
?>    
<center>Sorry! Horoscope is not generated. Please update your horoscope or generate your horoscope.
<a href="manage_horoscope.php">Manage Horoscope</a>
</center>
<?php
}
?>
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
                <td>
 </td>
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