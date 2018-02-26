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
<!-- <div id="breadcrumb"> 
<ul class="breadcrumbs">
		<li class="left"></li>
        
      <li class="center">
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Additional Detail</span>
</div>
      </li>
        
        <li class="right"></li>
</ul>
</div> -->
<!-- BREADCRUMBS ENDS HERE ########################################  -->
<div class="container">
  <div id="content_area" class="content-bg">
  
 
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
  <div class="col-md-9">
    <div id="inner_right" >

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong><?php  echo $row['Name']?></strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">My Additional Detail</h3>
        </div>
        <div class="body" align="left">
<div align="left">
                      <h3 class="hline3"><strong>Basic Information</strong></h3>
          </div>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Name</td>
            <td width="25%">:&nbsp; <? echo $row['Name']; ?></td>
            <td width="25%">Caste</td>
            <td width="25%">:&nbsp; <? echo $row['Caste']; ?></td>
          </tr>
          <tr>
            <td>Mother tongue</td>
            <td>:&nbsp; <? echo $row['Language']; ?></td>
            <td>Sub Caste</td>
            <td>:&nbsp; <? echo $row['Subcaste']; ?></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:&nbsp; <? echo $row['Religion']; ?></td>
            <td>Email</td>
            <td>:&nbsp; <? echo $row['ConfirmEmail']; ?></td>
          </tr>
        </table>
        <div class="hline2"></div>
<div align="left">
                      <h3 class="hline3"><strong>Socio Religious Attributes</strong></h3>
          </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Gothra(m) </td>
            <td width="25%">: &nbsp;<? echo $row['Gothram']; ?></td>
            <td width="25%">Manglik</td>
            <td width="25%">: &nbsp;<? echo $row['Manglik']; ?></td>
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
<div align="left">
                      <h3 class="hline3"><strong>Education and Occupation </strong></h3>
          </div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Education</td>
            <td width="25%">:&nbsp; <? echo $row['Education']; ?></td>
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
<div align="left">
                      <h3 class="hline3"><strong>Physical Attributes</strong></h3>
          </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Height</td>
            <td width="25%">:&nbsp; <?php  

$strheight = $row['Height'];

if($strheight =="1") { echo "Below 4ft"; }

else if($strheight =="2") { echo "4ft 6in"; }

else if($strheight =="3") { echo "4ft 7in"; }

else if($strheight =="4") { echo "4ft 8in"; }

else if($strheight =="5") { echo "4ft 9in"; }

else if($strheight =="6") { echo "4ft 10in"; }

else if($strheight =="7") { echo "4ft 11in"; }

else if($strheight =="8") { echo "5ft"; }

else if($strheight =="9") { echo "5ft 1in"; }

else if($strheight =="10") { echo "5ft 2in"; }

else if($strheight =="11") { echo "5ft 3in"; }

else if($strheight =="12") { echo "5ft 4in"; }

else if($strheight =="13") { echo "5ft 5in"; }

else if($strheight =="14") { echo "5ft 6in"; }

else if($strheight =="15") { echo "5ft 7in"; }

else if($strheight =="16") { echo "5ft 8in"; }

else if($strheight =="17") { echo "5ft 9in"; }

else if($strheight =="18") { echo "5ft 10in"; }

else if($strheight =="19") { echo "5ft 11in"; }

else if($strheight =="20") { echo "6ft"; }

else if($strheight =="21") { echo "6ft 1in"; }

else if($strheight =="22") { echo "6ft 2in"; }

else if($strheight =="23") { echo "6ft 3in"; }

else if($strheight =="24") { echo "6ft 4in"; }

else if($strheight =="25") { echo "6ft 5in"; }

else if($strheight =="26") { echo "6ft 6in"; }

else if($strheight =="27") { echo "6ft 7in"; }

else if($strheight =="28") { echo "6ft 8in"; }

else if($strheight =="29") { echo "6ft 9in"; }

else if($strheight =="30") { echo "6ft 10in"; }

else if($strheight =="31") { echo "6ft 11in"; }

else if($strheight =="32") { echo "7ft"; }

else if($strheight =="33") { echo "Above 7ft"; }

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
            <td>Smoke</td>
            <td>:&nbsp; <? echo $row['Smoke']; ?></td>
          </tr>
          <tr>
            <td>Complexion</td>
            <td>:&nbsp; <? echo $row['Complexion']; ?></td>
            <td>Drink</td>
            <td>:&nbsp; <? echo $row['Drink']; ?></td>
          </tr>
        </table>
        <div class="hline2"></div>
<div align="left">
                      <h3 class="hline3"><strong>Contact Details</strong></h3>
          </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Address</td>
            <td width="25%">:&nbsp; <? echo $row['Address']; ?></td>
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
<div align="left">
                      <h3 class="hline3"><strong>About Me</strong></h3>
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
<div align="left">
                      <h3 class="hline3"><strong>Family Details</strong></h3>
          </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Family Details</td>
            <td width="25%">:&nbsp; <? echo $row['FamilyDetails']; ?></td>
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
<div align="left">
                      <h3 class="hline3"><strong>Partner Preference</strong></h3>
          </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Looking for</td>
            <td width="25%">:&nbsp; <? echo $row['Looking']; ?></td>
            <td width="25%">Complexion</td>
            <td>:&nbsp; <? echo $row['PE_Complexion']; ?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td>:&nbsp; From  <? echo $row['PE_FromAge']; ?>&nbsp; to&nbsp; <? echo $row['PE_ToAge']; ?></td>
            <td>Education</td>
            <td>:&nbsp; <? echo $row['PE_Education']; ?></td>
          </tr>
          <tr>
            <td>Expectations</td>
            <td>:&nbsp; <? echo $row['PartnerExpectations']; ?></td>
            <td>Religion</td>
            <td>:&nbsp; <? echo $row['PE_Religion']; ?></td>
          </tr>
          <tr>
            <td>Country Living in</td>
            <td>:&nbsp; <? echo $row['PE_Countrylivingin']; ?></td>
            <td>Caste</td>
            <td>:&nbsp; <? echo $row['PE_Caste']; ?></td>
          </tr>
          <tr>
            <td>Height</td>
            <td>:&nbsp; <? echo $row['PE_Height']; ?></td>
            <td>Resident Status</td>
            <td>:&nbsp; <? echo $row['PE_Residentstatus']; ?></td>
          </tr>
        </table>
        <div class="hline2"></div>
<div align="left">
                      <h3 class="hline3"><strong>Hobbies and Interest</strong></h3>
          </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Hobbies</td>
            <td width="25%">:&nbsp; <? echo $row['Hobbies']; ?></td>
            <td width="25%">Interests</td>
            <td>:&nbsp; <? echo $row['Interests']; ?></td>
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