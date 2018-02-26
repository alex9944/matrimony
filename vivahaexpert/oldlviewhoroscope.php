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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">View Horoscope</span> </div>
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
$horoscopememberid = $_REQUEST["id"];
$get_horos_detail = "SELECT * FROM onlinehoroscope WHERE custid ='".$horoscopememberid."'";
$get_horos_exec = mysql_query($get_horos_detail);
$get_horos_fetch = mysql_fetch_array($get_horos_exec);
$get_horos_count = mysql_num_rows($get_horos_exec);



if($get_horos_count != 0 &&  ($_SESSION['status'] != "Active" || $get_horos_fetch['custid'] ==  $_SESSION['matriid'] )) 
{
	/*if($get_horos_fetch["horos_html"] != "")
	{
		//$url = "../numinousmatch/Reports/".$get_horos_fetch["horos_html"];
	}
	else
	{*/
	

	
			$url = 'http://www.astrovisiononline.com/avservices/singlepagehoro/inserttolsdb.php?data=<DATA><BIRTHDATA><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><SEX>'.$get_horos_fetch["sex"].'</SEX><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$get_horos_fetch["dob_date"].'</DAY><MONTH>'.$get_horos_fetch["dob_month"].'</MONTH><YEAR>'.$get_horos_fetch["dob_year"].'</YEAR><TIME24HR>'.$get_horos_fetch["tob_hour"].'.'.$get_horos_fetch["tob_minute"].'.'.$get_horos_fetch["tob_second"].'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>076.14</LONG><LAT>09.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>'.$get_horos_fetch["timezone"].'</TZONE><TZONEDIR>E</TZONEDIR></BIRTHDATA><OPTIONS><CHARTSTYLE>'.$get_horos_fetch["chartstyle"].'</CHARTSTYLE><LANGUAGE>'.$get_horos_fetch["language"].'</LANGUAGE><REPTYPE>LS-SP</REPTYPE><REPDMN>'.$sitename.'</REPDMN><HSETTINGS><AYANAMSA>1</AYANAMSA><DASASYSTEM>1</DASASYSTEM><GULIKATYPE>1</GULIKATYPE><PARYANTHARSTART>0</PARYANTHARSTART><PARYANTHAREND>25</PARYANTHAREND><FAVMARPERIOD>50</FAVMARPERIOD><BHAVABALAMETHOD>1</BHAVABALAMETHOD><ADVANCEDOPTION1>0</ADVANCEDOPTION1><ADVANCEDOPTION2>0</ADVANCEDOPTION2><ADVANCEDOPTION3>0</ADVANCEDOPTION3><ADVANCEDOPTION4>0</ADVANCEDOPTION4></HSETTINGS></OPTIONS></DATA>';
			//echo $url; die;
			
	
		
			echo '<script>
					window.location.href ="'.$url.'";
				  </script>';	
}
else {
?>    
<center>Paid member only view horoscope of this member.</center>
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