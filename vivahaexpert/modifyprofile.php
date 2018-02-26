<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
  $row = mysql_fetch_array($memcontrol)
?>
<script language="javascript" src="js/editprofile.js"></script>
<script>
function do_request()
{ 
 $.post('generateCaste3.php?lang=<?php echo $row['Language'] ?>&rel=<?php echo $row['Religion'] ?>&cast=<?php echo $row['Caste'] ?>', function(data) {
 
 
	if(data!=''){
	
	document.getElementById('caste_rel').innerHTML = data;
	}});

}

function do_request1()
{ 
 $.post('generateCaste3.php?lang=<?php echo $row['PE_MotherTongue'] ?>&rel=<?php echo $row['PE_Religion'] ?>&cast=<?php echo $row['PE_Caste'] ?>', function(data) {
 
 
	if(data!=''){
	
	document.getElementById('caste_rel1').innerHTML = data;
	}});

}
</script>
</head>

<body onload="do_request();do_request1();">

<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <!-- <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Modify My Profile</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	
	?>
  <div class="col-md-9">
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Modify My Profile</h3>
        </div>
        <div class="body" align="left">
          <!--<div align="center">
            <?php 

/*$StrAction=$_GET['action'];

if ($StrAction == "bisuccess")

{

	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}

else if ($StrAction == "emailtaken")

{

	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert  align='center'><strong>Email Id you entered already taken. Please enter a New Email.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}*/

?>
          </div>-->
          <div align="left">
            <h3 class="hline3"><strong>Basic Information</strong><a href="modify_basic.php"><img src="pics/edit.gif" alt="Modify Basic information" width="34" height="16" border="0"></a><span align="center"><?php 

$StrAction=$_GET['action'];

if ($StrAction == "bisuccess")

{
	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";

}

else if ($StrAction == "emailtaken")

{

	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Id you entered already taken. Please enter a New Email.</strong></span>";

}
 $Language =array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
				
$caste =array('-Select-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');		

?></h3>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td width="25%">Name</td>
              <td width="26%">:&nbsp; <? echo $row['Name']; ?></td>
              <td width="25%">Caste</td>
              <td width="25%" id="caste_rel">:&nbsp;</td>
            </tr>
            <tr>
              <td>Mother tongue</td>
              <td>:&nbsp; <? echo $Language[$row['Language']]; ?></td>
              <td>Sub Caste</td>
              <td>:&nbsp; <? echo $row['Subcaste']; ?></td>
            </tr>
            <tr>
              <td>Religion</td>
              <td>:&nbsp; <? echo $caste[$row['Religion']]; ?></td>
              <td>Email</td>
              <td>:&nbsp; <? echo $row['ConfirmEmail']; ?></td>
            </tr>
          </table>
          <div class="hline2"></div>
          <!--<div align="center"><span class="bodysg"><span class="h3r"><A name="q2" id="q2"></A></span>
            <?php 

/*$StrAction=$_GET['action'];

if ($StrAction == "srsuccess")

{

	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}
*/


?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>Socio Religious Attributes</strong><a href="modify_socio.php"><img src="pics/edit.gif" alt="Modify Socio Religious Attributes" width="34" height="16" border="0"></a><A name="q2" id="q2"></A><?php 

$StrAction=$_GET['action'];

if ($StrAction == "srsuccess")

{

	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";

}



?></h3>

          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td width="25%">Gothra(m) </td>
              <td width="26%">: &nbsp;<? echo $row['Gothram']; ?></td>
              <td width="25%">Manglik</td>
              <td width="26%">: &nbsp;<? echo $row['Manglik']; ?></td>
            </tr>
            <tr>
              <td>Star(Nakshatra)</td>
              <td>:&nbsp; <? echo $row['Star']; ?></td>
              <td><span class="bodywk">Place of Birth</span></td>
              <td>:&nbsp; <? echo $row['POB']; ?></td>
            </tr>
            <tr>
              <td>Moonsign</td>
              <td>: &nbsp;<? echo $row['Moonsign']; ?></td>
              <td><span class="bodywk">Time of Birth</span></td>
              <td>: &nbsp;<? echo $row['TOB']; ?></td>
            </tr>
            <tr>
              <td>Horoscope Match</td>
              <td>:&nbsp; <? echo $row['Horosmatch']; ?></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
          </table>
          <div class="hline2"></div>
          <!--<div align="center"><span class="bodysg"><span class="h3r"><A name="q3" id="q3"></A></span>
            <?php 
/*$StrAction=$_GET['action'];
if ($StrAction == "edusuccess")
{
	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}*/
?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>Education and Occupation </strong><a href="modify_edu.php"><img src="pics/edit.gif" alt="Modify Education and Occupation" width="34" height="16" border="0"></a><A name="q3" id="q3"></A><?php
            $StrAction=$_GET['action'];
if ($StrAction == "edusuccess")
{
	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";
}
			
			?></h3>
          </div>
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td width="25%">Education</td>
              <td width="26%">:&nbsp; <? echo $row['Education']; ?></td>
              <td width="25%">Occupation</td>
              <td>:&nbsp; <? echo $row['Occupation']; ?></td>
            </tr>
            <tr>
              <td>Edu Details</td>
              <td>:&nbsp; <? echo $row['EducationDetails']; ?></td>
              <td>Employed in</td>
              <td>:&nbsp; <? echo $row['Employedin']; ?></td>
            </tr>
            <tr>
              <td>Annual income</td>
              <td>:&nbsp; <? echo $row['Annualincome']; ?></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <div class="hline2"></div>
    <!--      <div align="center"><span class="bodysg"><span class="h3r"><A name="q4"></A></span>
            <?php 
/*$StrAction=$_GET['action'];
if ($StrAction == "physuccess")
{
	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}*/
?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>Physical Attributes</strong><a href="modify_phy.php"><img src="pics/edit.gif" alt="Modify Physical Attributes" width="34" height="16" border="0"></a><A name="q4" id="q4"></A><?php
            $StrAction=$_GET['action'];
if ($StrAction == "physuccess")
{
	echo "<span class='maroonsmallfont'>&nbsp;<strong>Profile Updated Successfully.</strong></span>";
}
?></h3>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td width="25%">Height</td>
              <td width="26%">:&nbsp;
                <?php  

$strheight = $row['Height'];
if($strheight =="1") { echo "4ft - 121 cm"; }

else if($strheight =="2") { echo "4ft 1in - 124cm"; }

else if($strheight =="3") { echo "4ft 2in - 127cm"; }

else if($strheight =="4") { echo "4ft 3in - 129cm"; }

else if($strheight =="5") { echo "4ft 4in - 132cm"; }

else if($strheight =="6") { echo "4ft 5in - 134cm"; }

else if($strheight =="7") { echo "4ft 6in - 137cm"; }

else if($strheight =="8") { echo "4ft 7in - 139cm"; }

else if($strheight =="9") { echo "4ft 8in - 142cm"; }

else if($strheight =="10") { echo "4ft 9in - 144cm"; }

else if($strheight =="11") { echo "4ft 10in - 147cm"; }

else if($strheight =="12") { echo "4ft 11in - 149cm"; }

else if($strheight =="13") { echo "5ft - 152cm"; }

else if($strheight =="14") { echo "5ft 1in - 154cm"; }

else if($strheight =="15") { echo "5ft 2in - 157cm"; }

else if($strheight =="16") { echo "5ft 3in - 160cm"; }

else if($strheight =="17") { echo "5ft 4in - 162cm"; }

else if($strheight =="18") { echo "5ft 5in - 165cm"; }

else if($strheight =="19") { echo "5ft 6in - 167cm"; }

else if($strheight =="20") { echo "5ft 7in - 170cm"; }

else if($strheight =="21") { echo "5ft 8in - 172cm"; }

else if($strheight =="22") { echo "5ft 9in - 175cm"; }

else if($strheight =="23") { echo "5ft 10in - 177cm"; }

else if($strheight =="24") { echo "5ft 11in - 180cm"; }

else if($strheight =="25") { echo "6ft - 182cm"; }

else if($strheight =="26") { echo "6ft 1in - 185cm"; }

else if($strheight =="27") { echo "6ft 2in - 187cm"; }

else if($strheight =="28") { echo "6ft 3in - 190cm"; }

else if($strheight =="29") { echo "6ft 4in - 193cm"; }

else if($strheight =="30") { echo "6ft 5in - 195cm"; }

else if($strheight =="31") { echo "6ft 6in - 198cm"; }

else if($strheight =="32") { echo "6ft 7in - 200cm"; }

else if($strheight =="33") { echo "6ft 8in - 203cm"; }
else if($strheight =="34") { echo "6ft 9in - 205cm"; }
else if($strheight =="35") { echo "6ft 10in - 208cm"; }
else if($strheight =="36") { echo "6ft 11in - 210cm"; }
else if($strheight =="37") { echo "7ft - 213cm"; }
?></td>
              <td width="25%">Body type</td>
              <td>:&nbsp; <? echo $row['Bodytype']; ?></td>
            </tr>
            <tr>
              <td>Weight</td>
              <td>:&nbsp; <? echo $row['Weight']; ?></td>
              <td>Diet</td>
              <td>:&nbsp; <? echo $row['Diet']; ?></td>
            </tr>
            <tr>
              <td>Blood Group</td>
              <td>:&nbsp; <? echo $row['BloodGroup']; ?></td>
              <td>Habbits</td>
              <td>:&nbsp; <? echo $row['txtHabbits']; ?></td>
            </tr>
            <tr>
              <td>Complexion</td>
              <td>:&nbsp; <? echo $row['Complexion']; ?></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <div class="hline2"></div>
         <!-- <div align="center"><span class="bodysg"><span class="h3r"><A name="q5" id="q5"></A></span>
            <?php 
/*$StrAction=$_GET['action'];
if ($StrAction == "contsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}*/
?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>Contact Details</strong><a href="modify_con.php"><img src="pics/edit.gif" alt="Modify Contact Details" width="34" height="16" border="0"></a><A name="q5" id="q5"></A><?php
			$StrAction=$_GET['action'];
if ($StrAction == "contsuccess")
{
	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";
}
			
            ?></h3>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td width="25%">Address</td>
              <td width="26%">:&nbsp; <? echo $row['Address']; ?></td>
              <td width="25%">Phone</td>
              <td>:&nbsp; <? echo $row['Phone']; ?></td>
            </tr>
            <tr>
              <td>Country</td>
              <td>:&nbsp; <? echo $row['Country']; ?></td>
              <td>Mobile</td>
              <td>:&nbsp; <? echo $row['Mobile']; ?></td>
            </tr>
            <tr>
              <td>State</td>
              <td>:&nbsp; <? echo $row['State']; ?></td>
              <td>Residence in</td>
              <td>:&nbsp; <? echo $row['Residencystatus']; ?></td>
            </tr>
            <tr>
              <td>City</td>
              <td>:&nbsp; <? echo $row['City']; ?></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <div class="hline2"></div>
       <!--   <div align="center"><span class="bodysg"><span class="h3r"><A name="q6" id="q6"></A></span>
            <?php 

/*$StrAction=$_GET['action'];

if ($StrAction == "abousuccess")

{

	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}
*/


?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>About Me</strong><a href="modify_abo.php"><img src="pics/edit.gif" alt="Modify About me" width="34" height="16" border="0"></a><A name="q6" id="q6"></A><?php
			$StrAction=$_GET['action'];
if ($StrAction == "abousuccess")
{
	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";
}

            ?></h3>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td align="left">Profile :</td>
            </tr>
            <tr>
              <td><? echo $row['Profile']; ?></td>
            </tr>
          </table>
          <div class="hline2"></div>
          <!--<div align="center"><span class="bodysg"><span class="h3r"><A name="q7" id="q7"></A></span>
            <?php 
/*$StrAction=$_GET['action'];
if ($StrAction == "famsuccess")
{
	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}*/
?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>Family Details</strong><a href="modify_fam.php"><img src="pics/edit.gif" alt="Modify Family Details" width="34" height="16" border="0"></a><A name="q7" id="q7"></A><?php
			$StrAction=$_GET['action'];
if ($StrAction == "famsuccess")
{
	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";
}
            ?></h3>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td width="25%">Family Details</td>
              <td width="26%">:&nbsp; <? echo $row['FamilyDetails']; ?></td>
              <td width="25%">No of Sisters</td>
              <td>:&nbsp; <? echo $row['noofsisters']; ?></td>
            </tr>
            <tr>
              <td>Family Values</td>
              <td>:&nbsp; <? echo $row['Familyvalues']; ?></td>
              <td>Father Name</td>
              <td>:&nbsp; <? echo $row['Fathername']; ?></td>
            </tr>
            <tr>
              <td>Family Type</td>
              <td>:&nbsp; <? echo $row['FamilyType']; ?></td>
              <td>Father Occupation</td>
              <td>:&nbsp; <? echo $row['Fathersoccupation']; ?></td>
            </tr>
            <tr>
              <td>Family Status</td>
              <td>:&nbsp; <? echo $row['FamilyStatus']; ?></td>
              <td>Mother Name</td>
              <td>:&nbsp; <? echo $row['Mothersname']; ?></td>
            </tr>
            <tr>
              <td>Family Origin</td>
              <td>:&nbsp; <? echo $row['FamilyOrigin']; ?></td>
              <td>Mother Occupation</td>
              <td>:&nbsp; <? echo $row['Mothersoccupation']; ?></td>
            </tr>
            <tr>
              <td>No of Brothers</td>
              <td>:&nbsp; <? echo $row['noofbrothers']; ?></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <div class="hline2"></div>
          <!--<div align="center"><span class="bodysg"><span class="h3r"><A name="q8" id="q8"></A></span>
            <?php 
/*$StrAction=$_GET['action'];
if ($StrAction == "parsuccess")
{
	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}*/
?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>Partner Preference</strong><a href="modify_par.php"><img src="pics/edit.gif" alt="Modify Partner Preference" width="34" height="16" border="0"></a><A name="q8" id="q8"></A>
            <?php
			$StrAction=$_GET['action'];
if ($StrAction == "parsuccess")
{
	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";
}


?>
            </h3>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td width="25%">Looking for</td>
              <td width="26%">:&nbsp; <? echo $row['Looking']; ?></td>
              <td width="25%">Complexion</td>
              <td>:&nbsp; <? echo $row['PE_Complexion']; ?></td>
            </tr>
            <tr>
              <td>Age</td>
              <td>:&nbsp; From <? echo $row['PE_FromAge']; ?>&nbsp; to&nbsp; <? echo $row['PE_ToAge']; ?></td>
              <td>Education</td>
              <td>:&nbsp; <? echo $row['PE_Education']; ?></td>
            </tr>
            <tr>
              <td>Expectations</td>
              <td>:&nbsp; <? echo $row['PartnerExpectations']; ?></td>
              <td>Religion</td>
              <td>:&nbsp; <? echo $caste[$row['PE_Religion']]; ?></td>
            </tr>
            <tr>
              <td>Country Living in</td>
              <td>:&nbsp; <? echo $row['PE_Countrylivingin']; ?></td>
              <td>Caste</td>
              <td id="caste_rel1">:&nbsp; <? echo $row['PE_Caste'] ?></td>
            </tr>
            <tr>
              <td>Height</td>
              <td>:&nbsp; <? echo $row['PE_Height']; ?></td>
              <td>Resident Status</td>
              <td>:&nbsp; <? echo $row['PE_Residentstatus']; ?></td>
            </tr>
			
			<tr>
              <td>Mother tongue</td>
              <td>:&nbsp; <? echo $Language[$row['PE_MotherTongue']]; ?></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
			
          </table>
          <div class="hline2"></div>
        <!--  <div align="center"><span class="bodysg"><span class="h3r"><A name="q9" id="q9"></A></span>
            <?php 
/*$StrAction=$_GET['action'];
if ($StrAction == "hobsuccess")
{
	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert align='center'><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}*/
?>
            </span></div>-->
          <div align="left">
            <h3 class="hline3"><strong>Hobbies and Interest</strong><a href="modify_hob.php"><img src="pics/edit.gif" alt="Modify Hobbies and Interest" width="34" height="16" border="0"></a><A name="q9" id="q9"></A><?php
            $StrAction=$_GET['action'];
if ($StrAction == "hobsuccess")
{
	echo "<span class='maroonsmallfont'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profile Updated Successfully.</strong></span>";
}
?></h3>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
            <tr>
              <td width="25%" valign=top>Hobbies</td>
              <td width="25%" valign=top>: <? $hobbies=explode(",", $row['Hobbies']) ; 
foreach($hobbies as $hobbie){ echo $hobbie."</BR>&nbsp;&nbsp;"; }

?></td>
              <td width="25%" valign=top>Interests</td>
              <td valign=top>: <? $Interests=explode(",", $row['Interests']);
foreach($Interests as $Interest){ echo $Interest."</BR>&nbsp;&nbsp;"; }
?></td>
            </tr>
            <tr>
              <td>Other Hobby</td>
              <td>:&nbsp; <? echo $row['OtherHobbies']; ?></td>
              <td>Other Interest</td>
              <td>:&nbsp; <? echo $row['OtherInterests']; ?></td>
            </tr>
          </table>
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