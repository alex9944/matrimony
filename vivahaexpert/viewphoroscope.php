<?Php

include("memprotect.php");
?>
<?Php include("include/innerheadersection.php"); ?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<!--<script type="text/javascript">

  $(function() {
    //alert('hi');
    var myContent = $("#iFrame").contents().html();
	alert(myContent);
  });

</script> -->  

<script type="text/javascript">
function get_iframe(ifr_id) {
 //var frame = $('#'+ifr_id).contents().find("html").html();
 result = $("#iFrame").contents().html();
 alert(result);
}
</script>

<!--<a href="#" onclick="get_iframe('iFrame')">Retrieve /Modify IFrame</a>-->

<?php  
error_reporting(0);

$get_horos_detailg = "SELECT * FROM onlinehoroscope WHERE custid ='".$_SESSION['username']."'";
$get_horos_execg = mysql_query($get_horos_detailg);
$get_horos_fetchg = mysql_fetch_array($get_horos_execg);
$get_horos_countg = mysql_num_rows($get_horos_execg);

$horoscopememberid = $_REQUEST["id"];
$get_horos_detail = "SELECT * FROM onlinehoroscope WHERE custid ='".$horoscopememberid."'";
$get_horos_exec = mysql_query($get_horos_detail);
$get_horos_fetch = mysql_fetch_array($get_horos_exec);
$get_horos_count = mysql_num_rows($get_horos_exec);

$get_reg_detail = "SELECT ID,Photo1,Age,Maritalstatus,Religion,Gender,State,Country FROM register WHERE MatriID ='".$horoscopememberid."'";
$get_reg_exec = mysql_query($get_reg_detail);
$row = mysql_fetch_array($get_reg_exec);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"> View Horoscope</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Horoscope of - <strong><?=$get_horos_fetch["name"];?> (<?=$get_horos_fetch["custid"]; ?>) </strong></span></h2>
        </div>
        <div class="body">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                  <tr>
                    <td><div>
						<table>

<tr ><td style="padding:10px;" colspan="2"> Horoscope of - <?=$get_horos_fetch["name"];?> (<?=$get_horos_fetch["custid"]; ?>)<a href="javascript: window.print();" style="color:#0000FF;"> <u>Print Horoscope</u> </a>
<?php  $path = "http://".$_SERVER['SERVER_NAME']."/".$_SERVER['REQUEST_URI']; ?>
<?php /*?><form action="savefile.php" method="post"><input type="hidden" name="matri_id" value="<?php echo $_REQUEST['id']; ?>" /><input type="text" name="convert_url" value="<?php echo $path; ?>" /><input name="submit" type="submit" value="Save" /><textarea id="myContent"></textarea></form><?php */?>	
<?php /*?><a href="#" onclick="javascript:saveIt()" ><font color="#94663E">Save</font></a><?php */?>  </td>  </tr>
<tr><td valign="middle" align="center"  ><img src="memphoto1/<?php echo $row['Photo1']?>" width="110" height="110"/></td><td valign="top" style="padding:10px;">

					I am

                                  <?php  echo $row['Age']?>

                                  ,

                                  <?php  echo $row['Maritalstatus']?>

                                

                                  <?php  echo $row['Gender']?>

                                  living in<br />

                                  <?php  echo $row['State']?>

                                  ,

                                  <?php  echo $row['Country']?>
<a class="b " target="_blank" href="viewfullprofile1.php?id=<?=$get_horos_fetch["custid"]; ?>"><u><br />View Full Profile &gt;&gt;</u></a>
					</td></tr></table>

<?

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
//	echo 'http://www.astrovisiononline.com/avservices/singlepagehoro/inserttolsdb.php?data=<DATA><BIRTHDATA><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><SEX>'.$get_horos_fetch["sex"].'</SEX><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$dob_date.'</DAY><MONTH>'.$dob_month.'</MONTH><YEAR>'.$dob_year.'</YEAR><TIME24HR>'.$tob_hour.'.'.$tob_minute.'.'.$tob_second.'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>076.14</LONG><LAT>09.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>'.$timezone.'</TZONE><TZONEDIR>E</TZONEDIR></BIRTHDATA><OPTIONS><CHARTSTYLE>'.$get_horos_fetch["chartstyle"].'</CHARTSTYLE><LANGUAGE>'.$get_horos_fetch["language"].'</LANGUAGE><REPTYPE>LS-SP</REPTYPE><REPDMN>numinousmatch</REPDMN><HSETTINGS><AYANAMSA>1</AYANAMSA><DASASYSTEM>1</DASASYSTEM><GULIKATYPE>1</GULIKATYPE><PARYANTHARSTART>0</PARYANTHARSTART><PARYANTHAREND>25</PARYANTHAREND><FAVMARPERIOD>50</FAVMARPERIOD><BHAVABALAMETHOD>1</BHAVABALAMETHOD><ADVANCEDOPTION1>0</ADVANCEDOPTION1><ADVANCEDOPTION2>0</ADVANCEDOPTION2><ADVANCEDOPTION3>0</ADVANCEDOPTION3><ADVANCEDOPTION4>0</ADVANCEDOPTION4></HSETTINGS></OPTIONS></DATA>';
	
	?>
	
	<!--<iframe style="border:thin" id="iFrame" src="<? echo 'http://www.astrovisiononline.com/avservices/singlepagehoro/inserttolsdb.php?data=<DATA><BIRTHDATA><CUSTID>'.$get_horos_fetch["custid"].'</CUSTID><SEX>'.$get_horos_fetch["sex"].'</SEX><NAME>'.$get_horos_fetch["name"].'</NAME><DAY>'.$dob_date.'</DAY><MONTH>'.$dob_month.'</MONTH><YEAR>'.$dob_year.'</YEAR><TIME24HR>'.$tob_hour.'.'.$tob_minute.'.'.$tob_second.'</TIME24HR><CORR>'.$get_horos_fetch["timecorrection"].'</CORR><PLACE>'.$get_horos_fetch["place"].'</PLACE><LONG>076.14</LONG><LAT>09.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>'.$timezone.'</TZONE><TZONEDIR>E</TZONEDIR></BIRTHDATA><OPTIONS><CHARTSTYLE>'.$get_horos_fetch["chartstyle"].'</CHARTSTYLE><LANGUAGE>'.$get_horos_fetch["language"].'</LANGUAGE><REPTYPE>LS-SP</REPTYPE><REPDMN>'.$sitename.'</REPDMN><HSETTINGS><AYANAMSA>1</AYANAMSA><DASASYSTEM>1</DASASYSTEM><GULIKATYPE>1</GULIKATYPE><PARYANTHARSTART>0</PARYANTHARSTART><PARYANTHAREND>25</PARYANTHAREND><FAVMARPERIOD>50</FAVMARPERIOD><BHAVABALAMETHOD>1</BHAVABALAMETHOD><ADVANCEDOPTION1>0</ADVANCEDOPTION1><ADVANCEDOPTION2>0</ADVANCEDOPTION2><ADVANCEDOPTION3>0</ADVANCEDOPTION3><ADVANCEDOPTION4>0</ADVANCEDOPTION4></HSETTINGS></OPTIONS></DATA>'; ?>" width="670" height="1300" ></iframe>--> 


<?php //echo $_SESSION['status'];
$show_match  = false;
$matri_id    = $_SESSION['matriid'];
//horoscope_remaining
if(isset($_SESSION['status']) and $_SESSION['status'] != 'Active')
 {
    $sql_qry  = "select horoscope_remaining from register where MatriID = '$matri_id' ";
	$result   = mysql_query($sql_qry);
	$counts   = mysql_affected_rows();
	if($counts > 0)
	 {
	   while($ress = mysql_fetch_array($result))
	    {
	       $horoscope_remaining  =  $ress['horoscope_remaining'];
		}  
	 }
	if($horoscope_remaining > 0) 
	 {
	   $show_match  = true;
	 }
 }

?>
<?php
if($show_match == true)
{ ?>
   <form action="matchhoroscopes.php" method="post">
<table border="0">
<tr>
<td>Like <?php echo $get_horos_fetch["name"]?>?</td>
  <td ><?php if(isset($_SESSION['matriid'])) { ?>
    <a href="express_int.php?MatriID=<?php echo $horoscopememberid; ?>" class="icon btn_services btn_expressInterest" > Express Interest</a> 
 <a href="view_phonenumber.php?ID=<? echo $row['ID']; ?>"  class="btn_services btn_viewPhone" >Call Now</a>
 <a href="sendmessage.php?matriid=<? echo $row['MatriID']; ?>"  class="btn_services btn_message" title="Send Message" > Send Message</a>
  <?php } ?></td>
  </tr>
<!--<tr><td colspan="2"><span style="color:#FF9900;">Check Your Horoscope Match with</span> <? echo $get_horos_fetch["name"]; ?></td></tr>
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
  <input class="button-small square-orange uppercase" type="image" value="Submit" name="Submit" /></td></tr>-->
  </table>
</form>  <?php
} else
{ ?>
  <p><br /></p>
  <p style="font-size:18px;"><span style="color:#00B0F0;">Want to Check Your Horoscope with Name of member?</span> <a href="astromatch.php">Buy Astromatch for Online Horoscope Matching Here!</a></p>
  <?php /*?><p><a href="astromatch.php">Click here</a> to purchase Astromatch.</p><?php */?> <br /><br /><?php 
} ?>
	
						
					</div></td>
                  </tr>
                </table>
                
                
                <!--<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="50%"><p><strong>Address: </strong><?php echo $sitename; ?>&nbsp;</p>
           <p> <?php echo $address; ?></p></td>
              <td width="50%"><p align="right">
                      
                    
                    <strong>Follow  us on <a href="http://www.facebook.com"> <img src="facebook_large.png"></a>  &nbsp; <a href="http://www.twitter.com"><img src="twitter-large.png" width="100px" height="30px"></a>  </strong> </p></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                 
                  <tr>
                  <td colspan="3">
                                 </td>
                  </tr>
              </table>--></td>
            </tr>
          </table>
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
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
