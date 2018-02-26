<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/partner.js"></script>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
  $row = mysql_fetch_array($memcontrol)
?>
<script type="text/javascript">
function caste()
{
	for (var i = 0; i < document.getElementById("caste").options.length; i++)
	{
		if(document.getElementById("caste").options[i].selected == 'true'){
		document.getElementById("caste").options[i].selected = true;
		}
	}
	return true;
}
function txtPHeight()
{
	for (var i = 0; i < document.getElementById("txtPHeight").options.length; i++)
	{
		if(document.getElementById("txtPHeight").options[i].selected == 'true'){
		document.getElementById("txtPHeight").options[i].selected = true;
		}
	}
	return true;
}
</script>

<script>
function do_request()
{ 
 $.post('generateCaste4.php?lang=<?php echo $row['PE_MotherTongue'] ?>&rel=<?php echo $row['PE_Religion'] ?>&cast=<?php echo $row['PE_Caste'] ?>', function(data) {
 
 
	if(data!=''){
	
	document.getElementById('caste_rel1').innerHTML = data;
	
	}});

}

function do_request1()
{ 


document.getElementById('caste_rel1').innerHTML = "<img src='loading.gif'>";

 $.post('generateCaste4.php?lang='+document.getElementById('Language').selectedIndex+'&rel='+document.getElementById('religion').selectedIndex, function(data) {

	document.getElementById('caste_rel1').innerHTML = "<img src='loading.gif'>";

	if(data!=''){

	

	document.getElementById('caste_rel1').innerHTML = data;

	}});

}

</script>
</head>

<body onload="do_request()">
<?php include("config.php"); ?>

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
                <td><div align="left">: &nbsp; 
				<?php
				$looking= array('Unmarried','Widowed','Divorcee','Separated');
				 ?>
				<select name="txtLooking" id="txtLooking" style="width:200px;">
                   
                    <?php
						foreach ($looking as $castes) {
						 if ($row['Looking']==$castes) { ?>
                    <option value="<? echo $row['Looking']; ?>" selected><? echo $row['Looking']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
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
                <td><div align="left">: &nbsp;
				<?php
				$countries = array(
  "GB" => "United Kingdom",
  "US" => "United States",
  "AF" => "Afghanistan",
  "AL" => "Albania",
  "DZ" => "Algeria",
  "AS" => "American Samoa",
  "AD" => "Andorra",
  "AO" => "Angola",
  "AI" => "Anguilla",
  "AQ" => "Antarctica",
  "AG" => "Antigua And Barbuda",
  "AR" => "Argentina",
  "AM" => "Armenia",
  "AW" => "Aruba",
  "AU" => "Australia",
  "AT" => "Austria",
  "AZ" => "Azerbaijan",
  "BS" => "Bahamas",
  "BH" => "Bahrain",
  "BD" => "Bangladesh",
  "BB" => "Barbados",
  "BY" => "Belarus",
  "BE" => "Belgium",
  "BZ" => "Belize",
  "BJ" => "Benin",
  "BM" => "Bermuda",
  "BT" => "Bhutan",
  "BO" => "Bolivia",
  "BA" => "Bosnia And Herzegowina",
  "BW" => "Botswana",
  "BV" => "Bouvet Island",
  "BR" => "Brazil",
  "IO" => "British Indian Ocean Territory",
  "BN" => "Brunei Darussalam",
  "BG" => "Bulgaria",
  "BF" => "Burkina Faso",
  "BI" => "Burundi",
  "KH" => "Cambodia",
  "CM" => "Cameroon",
  "CA" => "Canada",
  "CV" => "Cape Verde",
  "KY" => "Cayman Islands",
  "CF" => "Central African Republic",
  "TD" => "Chad",
  "CL" => "Chile",
  "CN" => "China",
  "CX" => "Christmas Island",
  "CC" => "Cocos (Keeling) Islands",
  "CO" => "Colombia",
  "KM" => "Comoros",
  "CG" => "Congo",
  "CD" => "Congo, The Democratic Republic Of The",
  "CK" => "Cook Islands",
  "CR" => "Costa Rica",
  "CI" => "Cote D'Ivoire",
  "HR" => "Croatia (Local Name: Hrvatska)",
  "CU" => "Cuba",
  "CY" => "Cyprus",
  "CZ" => "Czech Republic",
  "DK" => "Denmark",
  "DJ" => "Djibouti",
  "DM" => "Dominica",
  "DO" => "Dominican Republic",
  "TP" => "East Timor",
  "EC" => "Ecuador",
  "EG" => "Egypt",
  "SV" => "El Salvador",
  "GQ" => "Equatorial Guinea",
  "ER" => "Eritrea",
  "EE" => "Estonia",
  "ET" => "Ethiopia",
  "FK" => "Falkland Islands (Malvinas)",
  "FO" => "Faroe Islands",
  "FJ" => "Fiji",
  "FI" => "Finland",
  "FR" => "France",
  "FX" => "France, Metropolitan",
  "GF" => "French Guiana",
  "PF" => "French Polynesia",
  "TF" => "French Southern Territories",
  "GA" => "Gabon",
  "GM" => "Gambia",
  "GE" => "Georgia",
  "DE" => "Germany",
  "GH" => "Ghana",
  "GI" => "Gibraltar",
  "GR" => "Greece",
  "GL" => "Greenland",
  "GD" => "Grenada",
  "GP" => "Guadeloupe",
  "GU" => "Guam",
  "GT" => "Guatemala",
  "GN" => "Guinea",
  "GW" => "Guinea-Bissau",
  "GY" => "Guyana",
  "HT" => "Haiti",
  "HM" => "Heard And Mc Donald Islands",
  "VA" => "Holy See (Vatican City State)",
  "HN" => "Honduras",
  "HK" => "Hong Kong",
  "HU" => "Hungary",
  "IS" => "Iceland",
  "IN" => "India",
  "ID" => "Indonesia",
  "IR" => "Iran (Islamic Republic Of)",
  "IQ" => "Iraq",
  "IE" => "Ireland",
  "IL" => "Israel",
  "IT" => "Italy",
  "JM" => "Jamaica",
  "JP" => "Japan",
  "JO" => "Jordan",
  "KZ" => "Kazakhstan",
  "KE" => "Kenya",
  "KI" => "Kiribati",
  "KP" => "Korea, Democratic People's Republic Of",
  "KR" => "Korea, Republic Of",
  "KW" => "Kuwait",
  "KG" => "Kyrgyzstan",
  "LA" => "Lao People's Democratic Republic",
  "LV" => "Latvia",
  "LB" => "Lebanon",
  "LS" => "Lesotho",
  "LR" => "Liberia",
  "LY" => "Libyan Arab Jamahiriya",
  "LI" => "Liechtenstein",
  "LT" => "Lithuania",
  "LU" => "Luxembourg",
  "MO" => "Macau",
  "MK" => "Macedonia, Former Yugoslav Republic Of",
  "MG" => "Madagascar",
  "MW" => "Malawi",
  "MY" => "Malaysia",
  "MV" => "Maldives",
  "ML" => "Mali",
  "MT" => "Malta",
  "MH" => "Marshall Islands",
  "MQ" => "Martinique",
  "MR" => "Mauritania",
  "MU" => "Mauritius",
  "YT" => "Mayotte",
  "MX" => "Mexico",
  "FM" => "Micronesia, Federated States Of",
  "MD" => "Moldova, Republic Of",
  "MC" => "Monaco",
  "MN" => "Mongolia",
  "MS" => "Montserrat",
  "MA" => "Morocco",
  "MZ" => "Mozambique",
  "MM" => "Myanmar",
  "NA" => "Namibia",
  "NR" => "Nauru",
  "NP" => "Nepal",
  "NL" => "Netherlands",
  "AN" => "Netherlands Antilles",
  "NC" => "New Caledonia",
  "NZ" => "New Zealand",
  "NI" => "Nicaragua",
  "NE" => "Niger",
  "NG" => "Nigeria",
  "NU" => "Niue",
  "NF" => "Norfolk Island",
  "MP" => "Northern Mariana Islands",
  "NO" => "Norway",
  "OM" => "Oman",
  "PK" => "Pakistan",
  "PW" => "Palau",
  "PA" => "Panama",
  "PG" => "Papua New Guinea",
  "PY" => "Paraguay",
  "PE" => "Peru",
  "PH" => "Philippines",
  "PN" => "Pitcairn",
  "PL" => "Poland",
  "PT" => "Portugal",
  "PR" => "Puerto Rico",
  "QA" => "Qatar",
  "RE" => "Reunion",
  "RO" => "Romania",
  "RU" => "Russian Federation",
  "RW" => "Rwanda",
  "KN" => "Saint Kitts And Nevis",
  "LC" => "Saint Lucia",
  "VC" => "Saint Vincent And The Grenadines",
  "WS" => "Samoa",
  "SM" => "San Marino",
  "ST" => "Sao Tome And Principe",
  "SA" => "Saudi Arabia",
  "SN" => "Senegal",
  "SC" => "Seychelles",
  "SL" => "Sierra Leone",
  "SG" => "Singapore",
  "SK" => "Slovakia (Slovak Republic)",
  "SI" => "Slovenia",
  "SB" => "Solomon Islands",
  "SO" => "Somalia",
  "ZA" => "South Africa",
  "GS" => "South Georgia, South Sandwich Islands",
  "ES" => "Spain",
  "LK" => "Sri Lanka",
  "SH" => "St. Helena",
  "PM" => "St. Pierre And Miquelon",
  "SD" => "Sudan",
  "SR" => "Suriname",
  "SJ" => "Svalbard And Jan Mayen Islands",
  "SZ" => "Swaziland",
  "SE" => "Sweden",
  "CH" => "Switzerland",
  "SY" => "Syrian Arab Republic",
  "TW" => "Taiwan",
  "TJ" => "Tajikistan",
  "TZ" => "Tanzania, United Republic Of",
  "TH" => "Thailand",
  "TG" => "Togo",
  "TK" => "Tokelau",
  "TO" => "Tonga",
  "TT" => "Trinidad And Tobago",
  "TN" => "Tunisia",
  "TR" => "Turkey",
  "TM" => "Turkmenistan",
  "TC" => "Turks And Caicos Islands",
  "TV" => "Tuvalu",
  "UG" => "Uganda",
  "UA" => "Ukraine",
  "AE" => "United Arab Emirates",
  "UM" => "United States Minor Outlying Islands",
  "UY" => "Uruguay",
  "UZ" => "Uzbekistan",
  "VU" => "Vanuatu",
  "VE" => "Venezuela",
  "VN" => "Viet Nam",
  "VG" => "Virgin Islands (British)",
  "VI" => "Virgin Islands (U.S.)",
  "WF" => "Wallis And Futuna Islands",
  "EH" => "Western Sahara",
  "YE" => "Yemen",
  "YU" => "Yugoslavia",
  "ZM" => "Zambia",
  "ZW" => "Zimbabwe"
);
			
				 ?>
					 <select name="txtPcountry" id="txtPcountry" style="width:200px;">
                     <option value="Does not Matter" selected>- Does not Matter -</option>
                    <?php
						foreach ($countries as $castes) {
						 if ($row['PE_Countrylivingin']==$castes) { ?>
                    <option value="<? echo $row['PE_Countrylivingin']; ?>" selected><? echo $row['PE_Countrylivingin']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                  </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td valign="top"><div align="left">Height</div></td>
                <td><div align="left">: &nbsp; 
					<?php $height= array('Does not Matter','Below 4ft',"4ft 6in","4ft 7in","4ft 8in",'4ft 9in','4ft 10in','4ft 11in','5ft','5ft 1in','5ft 2in','5ft 3in','5ft 4in','5ft 5in','5ft 6in','5ft 7in','5ft 8in','5ft 9in','5ft 10in','5ft 11in','6ft','6ft 1in','6ft 2in','6ft 3in','6ft 4in','6ft 5in','6ft 6in','6ft 7in','6ft 8in','6ft 9in','6ft 10in','6ft 11in','7ft','Above 7ft') ?>
				<select multiple="multiple" size="10" name="txtPHeight[]" id="txtPHeight" style="width:200px;" onchange="txtPHeight()">
                    <?php 
					$hei = split(",",$row['PE_Height']);
					foreach ($height as $heights) {
						$valu =	array_search($heights,$hei);
			  	 if (trim($valu) != ""  ) { ?>
                    <option value="<? echo $heights; ?>" selected><? echo $heights; ?></option>
						<?php } else { ?>
                      <option value="<? echo $heights ?>" ><? echo $heights ?></option>
					  <?php } 
					     }?>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Complexion</div></td>
                <td><div align="left">: &nbsp; 
					<?php
				$complexion= array('Does not Matter','Very Fair','Fair','Wheatish','Wheatish Medium','Wheatish Brown','Dark');
				 ?>
				<select name="txtPComplexion" id="txtPComplexion" style="width:200px;">
                
                  <?php
						foreach ($complexion as $castes) {
						 if ($row['PE_Complexion']==$castes) { ?>
                    <option value="<? echo $row['PE_Complexion']; ?>" selected><? echo $row['PE_Complexion']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Education</div></td>
                <td><div align="left">: 
				<?php
				$txtPEdu= array('Any','Not Important','No education','High School','Bachelor’s Degree: Engg., Comp., Arch.,','Master’s Degree: Engg., Comp., Arch.,','Bachelor’s Degree: Medicine & Surgery, Dentistry','Master’s Degree: Medicine & Surgery, Dentistry ','Bachelor’s Degree: Nursing','Master’s Degree: Nursing','Bachelor’s Degree: Law','Master’s Degree: Law','Bachelor’s Degree: Arts, Science, Commerce','Master’s Degree: Arts, Science, Commerce','Bachelor’s Degree: Management','Master’s Degree: Management','Doctorate PhD','Accounting & Fin.: CA, ICWAI','Indian Civil Service: IAS, IFoS, IPS, IRS','Vocational','Diploma','Other');
				 ?>
				&nbsp; <select name="txtPEdu" id="txtPEdu" style="width:200px;">
                 
                <?php
						foreach ($txtPEdu as $castes) {
						 if ($row['PE_Education']==$castes) { ?>
                    <option value="<? echo $row['PE_Education']; ?>" selected><? echo $row['PE_Education']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 

					
                  </select></div></td>
              </tr>
			   <tr class="hline2">
                <td><div align="left">Mother tongue </div></td>
                <td><div align="left">:&nbsp;
				<?php $Language =array('-Select-','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Badaga','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu');
				echo $row['	PE_MotherTongue'];
			 ?>
                    <select name="Language" id="Language" maxlength="2"  style="width:200px;">
                      	<?php
						for($i=0;$i<=51;$i++) {
						 if ($row['PE_MotherTongue']==$i) { ?>
                    <option value="<? echo $i; ?>" selected><? echo $Language[$i]; ?></option>
						<?php } else { ?>
                      <option value="<? echo $i ?>" ><? echo $Language[$i] ?></option>
					  <?php }  }?> 
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Religion</div></td>
                <td><div align="left">: &nbsp; 
				
				<?php $caste =array('-Select-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');
			
			 
			 ?>
				<select name="religion" id="religion"  onchange="do_request1(this.value);"  style="width:200px;">
                   	<?php
						for($i=0;$i<=16;$i++){
						 if ($row['PE_Religion']==$i) { ?>
                    <option value="<? echo $i; ?>" selected><? echo $caste[$i]; ?></option>
						<?php } else { ?>
                      <option value="<? echo $i; ?>" ><? echo $caste[$i] ?></option>
					  <?php }  }?> 
                  </select>
				 </div></td>
				  
              </tr>
              <tr class="hline2">
                <td><div align="left">Caste</div></td>
                <td><div align="left" id="caste_rel1">: &nbsp; <select id= "caste" name="caste[]" multiple="multiple" size="10" id="caste" style="width:200px;">
				<?php 	$hei = split(",",$row['PE_Caste']); ?>
				<?php 
$castevar["Hindu"] = array("6000 Niyogi", "96K Kokanastha", "24 Manai Chettiar", "24 Manai Telugu-8 Veedu", "24 Manai Telugu-16 Veedu", "Ad Dharmi", "Adi Dravida", "Agarwal", "Agnikul Kshatriya", "Ambalavasi", "Andipandaram", "Arunthathiyar", "Arora", "Arya Vysya", "Arya Samaj", "Baduga", "Balija Naidu", "Baniya", "Bahi", "Bengali", "Besta", "Bhandari", "Boyer", "Brahmin", "Brahmin-Anavil", "Brahmin-Bhatt", "Brahmin-Bhumihar", "Brahmin-Dhiman", "Brahmin-Devadnya", "Brahmin-Dravida", "Brahmin-Garhwali", "Brahmin-Gaur", "Brahmin-Goswami", "Brahmin-Gurukkal", "Brahmin-Iyengar", "Brahmin-Iyer", "Brahmin-Kanyakubj", "Brahmin-Kumoani", "Brahmin-Madhwa", "Brahmin-Maithil", "Brahmin-Namboodiri", "Brahmin-Niyogi", "Brahmin-Pandit", "Brahmin-Sakaldwipi", "Brahmin-Sanadya", "Brahmin-Saraswat", "Brahmin-Saryuparin", "Brahmin-Smartha", "Brahmin-Sri Vishnava", "Brahmin-Tyagi", "Brahmin-Vaidiki", "Chamar", "Chandravanshi Kahar", "Chaudary", "Chaurasia", "Chettiar", "Chhetri", "Coorgi", "Devandra Kula Vellalar", "Devanga", "Devanga Chettiar", "Dheevara", "Dhobi", "Ezhava", "Ezhuthachan", "Gandla", "Garhwali", "Gavara Naidu", "Gavura Naidu", "Goan", "Goud", "Gounder", "Gowda", "Gupta", "Intercaste", "Jaiswal", "Jat", "Jangumar", "Kadava Patel", "Kalar", "Kalinga", "Kalwar", "Kamboj", "Kamma", "Kammavar Naidu", "Kapu", "Karuneegar", "Kashyap", "Kayastha", "Khandelwal", "Khatri", "Kongu Vellala Gounder", "Kori", "Kshatriya", "Kudumbi", "Kulalar", "Kumhar", "Kummari", "Kuravar", "Kumawat", "Kumbara", "Kunbi", "Kurmi Kshatriya", "Kuruba", "Kurumbar", "Leva Patel", "Lingayath", "Lohana", "Malayalee Variar", "Malayalee Namboodiri", "Madiga", "Mahajan", "Mahar", "Mahendra", "Maheshwari", "Mala", "Mali", "Malla", "Mapila", "Maratha", "Maruthuvar", "Meena", "Meenavar", "Mehra", "Meru Darji", "Mudaliyar", "Mudiraj", "Mukkulathor", "Munnuru Kapu", "Muthuraja", "Nagar Brahmin", "Nadar", "Nai", "Naicker", "Naidu", "Nair", "Nair Vaniya", "Nambiar", "Nepali", "Nus-Jat", "Oswal", "Others", "Padmasali", "Pal", "Pandaram", "Panicker", "Parkava Kulam", "Pasi", "Patel", "Patel Kadva", "Patel Leva", "Patnaick", "Perika", "Pillai", "Prajapati", "Rajaka", "Rajput", "Rawat", "Reddy", "Sahu", "Saini", "Saliya", "SC", "Senai Thalaivar", "Settibalija", "Sindhi", "Sindhi-Amil", "Sindhi-Baibhand", "Sindhi-Bhanusali", "Sindhi-Bhatia", "Sindhi-Brahmin", "Sindhi-Chhapru", "Sindhi-Dadu", "Sindhi-Hyderabadi", "Sindhi-Intercaste", "Sindhi-Larai", "Sindhi-Larkana", "Sindhi-Lohana", "Sindhi-Rohiri", "Sindhi-Sahiti", "Sindhi-Sakkhar", "Sindhi-Sehwani", "Sindhi-Shikarpuri", "Sindhi-Thatai", "Sonar", "Sozhiya Vellalar", "Sourashtra", "Sutar", "Swarnakar", "ST", "Tamil Yadava", "Teli", "Teluga", "Thevar", "Thakur", "Thiyya", "Udayar", "Uppara", "Vaddera", "Vaishnav", "Vaishnava", "Vaishya", "Valluvar", "Valmiki", "Vanjara", "Vannar", "Vannia Kula Kashatriyar", "Vanniar", "Vaniya chettiar", "Veera Saivam", "Velama", "Vellalar", "Veluthedathu Nair", "Vilakkithala Nair", "Viswabrahmin", "Viswakarma", "Vokkaliga", "Yadav", "Yogeeswarar");
$castevar["Muslim"] = array("Ansari", "Arain", "Awan", "Bohra", "Dekkani", "Dudekula", "Hanafi", "Intercaste", "Jat", "Khoja", "Lebbai", "Malik", "Mapila", "Maraicar", "Memon", "Mughal", "Others", "Pathan", "Qureshi", "Rajput", "Rowther", "Shafi", "Sheikh", "Shia", "Siddiqui", "Sunni Syed", "Unspecified");
$castevar["Christian"] =array("Born Again", "Bretheren", "Catholic CMS", "CSI", "Evangelist", "Intercaste", "Jacobite", "Knanaya", "Knanaya Catholic", "Knanaya Jacobite", "Latin Catholic", "Malankara", "Marthoma", "Nadar", "Others", "Pentacost", "Protestant", "Roman Catholic", "Syrian", "Syrian Catholic", "Syrian Jacobite", "Syrian Orthodox", "Syro Malabar", "Unspecified");
$castevar["Jain"] = array("Agarwal", "Bania", "Intercaste", "Intercate", "Jaiswal", "Khandelwal", "Kutchi", "No Bar", "Oswal", "Others", "Porwal", "Unspecified", "Vaishya");
$castevar["Sikh"] = array("Ahluwalia", "Arora", "Bhatia", "Clean Shaven", "Ghumar", "Gursikh", "Intercaste", "Intercaste", "Jat", "Kamboj", "Khatri", "Kshatriya", "Lubana", "Majabi", "Ramgharia", "No Bar");
$castevar["Parsi"]= array("Parsi", "Intercaste", "Irani");

switch ($row['PE_Religion']){ 
case "Hindu":
	$slesubcaste = $castevar["Hindu"];
	break;
case "Muslim":
$slesubcaste = $castevar["Muslim"];
	break;
case "Christian":
$slesubcaste = $castevar["Christian"];
	break;
case "Jain":
$slesubcaste = $castevar["Jain"];
	break;
case "Sikh":
$slesubcaste = $castevar["Sikh"];
	break;
case "Parsi":
$slesubcaste = $castevar["Parsi"];
	break;
}

//print_r($slesubcaste);


						foreach ($slesubcaste as $subcastes) {
						$valu =	array_search($subcastes,$hei);
						 if (trim($valu) != ""  ) { ?>
                    <option value="<? echo $subcastes ?>" selected><? echo $subcastes ?></option>
						<?php } else { ?>
                      <option value="<? echo $subcastes ?>" ><? echo $subcastes ?></option>
					  <?php }  }?> 
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Resident Status</div></td>
                <td><div align="left">: 
				<?php
				$txtPReS= array('Does not Matter','Citizen','Fair','Permanent Resident','Student Visa','Temporary Visa','Work permit');
				 ?>
				&nbsp; <select name="txtPReS" id="txtCitizen" style="width:200px;">
                 
                  	<?php
						foreach ($txtPReS as $castes) {
						 if ($row['PE_Residentstatus']==$castes) { ?>
                    <option value="<? echo $row['PE_Residentstatus']; ?>" selected><? echo $row['PE_Residentstatus']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                  </select>
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