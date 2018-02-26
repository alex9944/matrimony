<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/partner.js"></script>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="modifyprofile.php">Modify My Profile</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Edit Partner Preference</span> </div>
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
          <h3 class="float_left title">Edit - Partner Preference</h3>
        </div>
        <div class="body" align="left">
          <form action="edit_par.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()">
            <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
              <tr class="hline2">
                <td><div align="left">Looking for</div></td>
                <td><div align="left">: &nbsp; <select name="txtLooking" id="txtLooking" style="width:200px;">
                    <option value="<? echo $row['Looking']; ?>"><? echo $row['Looking']; ?></option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Widow/Widower">Widow/Widower</option>
                    <option value="Divorcee">Divorcee</option>
                    <option value="Separated">Separated</option>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Age</div></td>
                <td><div align="left">: &nbsp; From
                  <input name="Fromage" type="text" class="textbox1" id="Fromage"  value="<? echo $row['PE_FromAge']; ?>" size="2" maxlength="5">
                  &nbsp;to
                  <input name="Toage" type="text" class="textbox1" id="Toage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="<? echo $row['PE_ToAge']; ?>" size="2" maxlength="5" ></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Expectations</div></td>
                <td><div align="left">: &nbsp; <textarea name="txtPPE" cols="30" rows="5" id="txtPPE"><? echo $row['PartnerExpectations']; ?></textarea></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Country Living in</div></td>
                <td><div align="left">: &nbsp; <select name="txtPcountry" id="txtPcountry" style="width:200px;">
                    <option value="<? echo $row['PE_Countrylivingin']; ?>">&lt;? echo $row['PE_Countrylivingin']; ?&gt;</option>
                    <option value="Does not Matter" selected>- Does not Matter -</option>
                    <option>Pakistan</option>
                    <option>USA</option>
                    <option>United Kingdom</option>
                    <option>United Arab Emirates</option>
                    <option>Canada</option>
                    <option>Australia</option>
                    <option selected>India</option>
                    <option>Saudi Arabia</option>
                    <option>Kuwait</option>
                    <option>South Africa</option>
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>American Samoa</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antigua &amp; Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Bermuda</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia and Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burundi</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Cape Verde</option>
                    <option>Cayman Islands</option>
                    <option>Central African Republic</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo</option>
                    <option>Congo (DRC)</option>
                    <option>Cook Islands</option>
                    <option>Costa Rica</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia (Hrvatska)</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Ethiopia</option>
                    <option>Falkland Islands</option>
                    <option>Faroe Islands</option>
                    <option>Fiji Islands</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>French Guiana</option>
                    <option>French Polynesia</option>
                    <option>Gabon</option>
                    <option>Gambia</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Greece</option>
                    <option>Greenland</option>
                    <option>Grenada</option>
                    <option>Guadeloupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hong Kong SAR</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Macao SAR</option>
                    <option>Macedonia</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Martinique</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mayotte</option>
                    <option>Mexico</option>
                    <option>Micronesia</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montserrat</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Myanmar</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>Netherlands Antilles</option>
                    <option>New Caledonia</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>Niue</option>
                    <option>Norfolk Island</option>
                    <option>North Korea</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Pitcairn Islands</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Reunion</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome and Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia and Montenegro</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>St. Helena</option>
                    <option>St. Kitts and Nevis</option>
                    <option>St. Lucia</option>
                    <option>St. Pierre and Miquelon</option>
                    <option>St. Vincent &amp; Grenadines</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Swaziland</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tokelau</option>
                    <option>Tonga</option>
                    <option>Trinidad and Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Turks and Caicos Islands</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>Uruguay</option>
                    <option>USA</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Virgin Islands</option>
                    <option>Virgin Islands (British)</option>
                    <option>Wallis and Futuna</option>
                    <option>Yemen</option>
                    <option>Yugoslavia</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                  </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Height</div></td>
                <td><div align="left">: &nbsp; <select name="txtPHeight" id="txtPHeight" style="width:200px;">
                    <option value="<? echo $row['PE_Height']; ?>"><? echo $row['PE_Height']; ?></option>
                    <option value="Does not Matter" selected>- Does not Matter -</option>
                    <option value="Below 4ft">Below 4ft</option>
                    <option value="4-6">4ft 6in</option>
                    <option value="4-7">4ft 7in</option>
                    <option value="4-8">4ft 8in</option>
                    <option value="4-9">4ft 9in</option>
                    <option value="4-10">4ft 10in</option>
                    <option value="4-11">4ft 11in</option>
                    <option value="5">5ft</option>
                    <option value="5-1">5ft 1in</option>
                    <option value="5-2">5ft 2in</option>
                    <option value="5-3">5ft 3in</option>
                    <option value="5-4">5ft 4in</option>
                    <option value="5-5">5ft 5in</option>
                    <option value="5-6">5ft 6in</option>
                    <option value="5-7">5ft 7in</option>
                    <option value="5-8">5ft 8in</option>
                    <option value="5-9">5ft 9in</option>
                    <option value="5-10">5ft 10in</option>
                    <option value="5-11">5ft 11in</option>
                    <option value="6">6ft</option>
                    <option value="6-1">6ft 1in</option>
                    <option value="6-2">6ft 2in</option>
                    <option value="6-3">6ft 3in</option>
                    <option value="6-4">6ft 4in</option>
                    <option value="6-5">6ft 5in</option>
                    <option value="6-6">6ft 6in</option>
                    <option value="6-7">6ft 7in</option>
                    <option value="6-8">6ft 8in</option>
                    <option value="6-9">6ft 9in</option>
                    <option value="6-10">6ft 10in</option>
                    <option value="6-11">6ft 11in</option>
                    <option value="7">7ft</option>
                    <option value="Above 7ft">Above 7ft</option>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Complexion</div></td>
                <td><div align="left">: &nbsp; <select name="txtPComplexion" id="txtPComplexion" style="width:200px;">
                    <option value="<? echo $row['PE_Complexion']; ?>"><? echo $row['PE_Complexion']; ?></option>
                    <option value="Does not Matter" selected>- Does not Matter -</option>
                    <option value="Very Fair">Very Fair</option>
                    <option value="Fair">Fair</option>
                    <option value="Wheatish">Wheatish</option>
                    <option value="Wheatish Medium">Wheatish Medium</option>
                    <option value="Wheatish Brown">Wheatish Brown</option>
                    <option value="Dark">Dark</option>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Education</div></td>
                <td><div align="left">: &nbsp; <select name="txtPEdu" id="txtPEdu" style="width:200px;">
                    <option value="<? echo $row['PE_Education']; ?>"><? echo $row['PE_Education']; ?></option>
                 <option value="" selected>Any</option>
						<option value="Not Important">Not Important</option>
						<option value="No education">No education</option>
						<option value="High School">High School</option>
						<option value="Bachelor’s Degree: Engg., Comp., Arch.,">Bachelor’s Degree: Engg., Comp., Arch.,</option>
						<option value="Master’s Degree: Engg., Comp., Arch.,">Master’s Degree: Engg., Comp., Arch.,</option>
						<option value="Bachelor’s Degree: Medicine & Surgery, Dentistry">Bachelor’s Degree: Medicine & Surgery, Dentistry</option>
						<option value="Master’s Degree: Medicine & Surgery, Dentistry">Master’s Degree: Medicine & Surgery, Dentistry</option>
						<option value="Bachelor’s Degree: Nursing">Bachelor’s Degree: Nursing</option>
						<option value="Master’s Degree: Nursing">Master’s Degree: Nursing</option>
						<option value="Bachelor’s Degree: Law">Bachelor’s Degree: Law</option>
						<option value="Master’s Degree: Law">Master’s Degree: Law</option>
						<option value="Bachelor’s Degree: Arts, Science, Commerce">Bachelor’s Degree: Arts, Science, Commerce</option>
						<option value="Master’s Degree: Arts, Science, Commerce">Master’s Degree: Arts, Science, Commerce</option>
						<option value="Bachelor’s Degree: Management">Bachelor’s Degree: Management</option>
						<option value="Master’s Degree: Management">Master’s Degree: Management</option>
						<option value="Doctorate PhD">Doctorate PhD</option>
						<option value="Accounting & Fin.: CA, ICWAI">Accounting & Fin.: CA, ICWAI</option>
						<option value="Indian Civil Service: IAS, IFoS, IPS, IRS">Indian Civil Service: IAS, IFoS, IPS, IRS</option>
						<option value="Vocational">Vocational</option>
						<option value="Diploma">Diploma</option>
						<option value="Other">Other</option>

                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Religion</div></td>
                <td><div align="left">: &nbsp; <select name="religion" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:200px;">
                    <option value="---">- Select -</option>
                    <option value="<? echo $row['PE_Religion']; ?>" selected><? echo $row['PE_Religion']; ?></option>
                    <option>Hindu</option>
                    <option>Christian</option>
                    <option>Muslim</option>
                    <option>Sikh</option>
                    <option>Jain</option>
                    <option>Parsi</option>
                    <option>Buddhist</option>
                    <option>Bahai</option>
                    <option>Inter-Religion</option>
                    <option>Others</option>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Caste</div></td>
                <td><div align="left">: &nbsp; <select name="caste" id="caste" style="width:200px;">
                    <option value="<? echo $row['PE_Caste']; ?>"><? echo $row['PE_Caste']; ?></option>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Resident Status</div></td>
                <td><div align="left">: &nbsp; <select name="txtPReS" id="txtCitizen" style="width:200px;">
                    <option value="<? echo $row['PE_Residentstatus']; ?>"><? echo $row['PE_Residentstatus']; ?></option>
                    <option value="Does not Matter" selected>- Does not Matter -</option>
                    <option value="Citizen">Citizen</option>
                    <option value="Permanent Resident">Permanent Resident</option>
                    <option value="Student Visa">Student Visa</option>
                    <option value="Temporary Visa">Temporary Visa</option>
                    <option value="Work permit">Work permit</option>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td>&nbsp;</td>
                <td><table align="left">
                	<tr>
                    	<td><div align="center"><span class=" span"></span>
                  <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit"></div></td>
                  		<td>&nbsp;</td>
                    	<td><div align="center"><span class=" span"></span>
                  <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';"></div></td>
                    </tr>
                 </table><!--<div align="left">
                  <input name="Submit" type="image" value="Submit" src="pics/save.gif" align="absmiddle">
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