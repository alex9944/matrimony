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
function Search_Array(ArrayObj, SearchFor){
  var Found = false;
  for (var i = 0; i < ArrayObj.length; i++){
    if (ArrayObj[i] == SearchFor){
     
	  var Found = true;
	  
	  return i;
     
      break;
    }
    else if ((i == (ArrayObj.length - 1)) && (!Found)){
      if (ArrayObj[i] != SearchFor){
        return false;
      }
    }
  }
}


function update_range(ele_from,ele_to)
{
	var sel = ele_to.value;
	ele_to.options.length =0;
	var val = ele_from.value;
	for(i=0;i<ele_from.options.length;i++)
	{
		var optn = document.createElement("OPTION");
		optn.value = ele_from.options[i].value;
		if(optn.value >= val)
		{			
			optn.text = ele_from.options[i].text;			
			ele_to.options.add(optn);
		}
	}
	if((sel - ele_from.value) > 0)	ele_to.value = sel;
	//else ele_to.options[1].selected = true;	
}

function Validate()
{


var e = document.getElementById("height_range_frm");
var stvalue = e.options[e.selectedIndex].text;

var e = document.getElementById("height_range_to");
var endvalue = e.options[e.selectedIndex].text;
	
var ddlArray= new Array();
var ddl = document.getElementById('height_range_frm');
for (i = 0; i < ddl.options.length; i++) {
   ddlArray[i] = ddl .options[i].value;
}
	
var sttart=	Search_Array(ddlArray, stvalue);

var endd = Search_Array(ddlArray, endvalue);


var ddlArray2= new Array();
j=0;
for (i =0; i <= endd; i++) {
	
if (i >= sttart ){
   ddlArray2[j] = ddlArray[i];
   j++;
   }
}

document.getElementById("txtPHeight").value=ddlArray2;
return true;
}

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

function do_request(val) {



document.getElementById('caste_rel1').innerHTML = "<img src='loading.gif'>";

 $.post('generateCaste.php?lang='+val+'&rel='+document.getElementById('religion').selectedIndex,'', function(data) {

	document.getElementById('caste_rel1').innerHTML = "<img src='loading.gif'>";

	if(data!=''){

	document.getElementById('caste_rel1').innerHTML = data;

	}});

	//return true;
}

</script>
<script>





function do_reques22t()

{ 

 $.post('generateCaste4.php?lang=<?php echo $row['PE_MotherTongue'] ?>&rel=<?php echo $row['PE_Religion'] ?>&cast=<?php echo $row['PE_Caste'] ?>', function(data) {

 

 

	if(data!=''){

	

	document.getElementById('caste_rel1').innerHTML = data;

	

	}});



}



function do_request1()

{ 


//alert(document.getElementById('Language').selectedIndex+'&rel='+document.getElementById('religion').selectedIndex); return false;

document.getElementById('caste_rel1').innerHTML = "<img src='loading.gif'>";



 $.post('generateCaste.php?lang='+document.getElementById('Language').selectedIndex+'&rel='+document.getElementById('religion').selectedIndex, function(data) {

//document.getElementById('Language').selectedIndex=47;

// $.post('generateCaste.php?lang=47&rel='+document.getElementById('religion').selectedIndex, function(data) {

	document.getElementById('caste_rel1').innerHTML = "<img src='loading.gif'>";



	if(data!=''){ 

	document.getElementById('caste_rel1').innerHTML = data;



	}});



}



</script>
</head>
<body>
<?php include("config.php"); ?>
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
          <h3 class="float_left title">Edit - Partner Preference</h3>
           </div>
        <div class="body" align="left">
          <FORM action="edit_par.php" class="form-horizontal" role="form" method="post" style="margin-left:15%;" name="MatriForm" id="MatriForm" onSubmit="return Validate()">
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Looking for</label>
                </div>
                <div class="col-md-10">
                  <?php

        $looking= array('Unmarried','Widowed','Divorcee','Separated');

         ?>
                    <select name="txtLooking" class="form-control" id="txtLooking" style="width:60%;">
                      <?php

            foreach ($looking as $castes) {

             if ($row['Looking']==$castes) { ?>
                      <option value="<? echo $row['Looking']; ?>" selected><? echo $row['Looking']; ?></option>
                      <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
                      <?php }  }?>
                    </select>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Age</label>
                </div>
                <div class="col-md-10">
                  From
                    <input name="Fromage" type="text" class="textbox1" id="Fromage"  value="<? echo $row['PE_FromAge']; ?>" size="2" maxlength="5">
                    &nbsp;to
                    <input name="Toage" type="text" class="textbox1" id="Toage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="<? echo $row['PE_ToAge']; ?>" size="2" maxlength="5" >
                  
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Expectations</label>
                </div>
                <div class="col-md-10">
                  <textarea name="txtPPE" class="form-control" cols="30" rows="4" id="txtPPE" style="width:60%" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}"><? echo $row['PartnerExpectations']; ?></textarea>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Country Living in</label>
                </div>
                <div class="col-md-10">
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
                    <select name="txtPcountry" id="txtPcountry" class="form-control" style="width:60%;">
                      <option value="Does not Matter" selected>- Does not Matter -</option>
                      <?php

            foreach ($countries as $castes) {

             if ($row['PE_Countrylivingin']==$castes) { ?>
                      <option value="<? echo $row['PE_Countrylivingin']; ?>" selected><? echo $row['PE_Countrylivingin']; ?></option>
                      <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
                      <?php }  }?>
                    </select>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Height</label>
                </div>
                <div class="col-md-10">
                  <?php $height= array("4ft 6in","4ft 7in","4ft 8in",'4ft 9in','4ft 10in','4ft 11in','5ft','5ft 1in','5ft 2in','5ft 3in','5ft 4in','5ft 5in','5ft 6in','5ft 7in','5ft 8in','5ft 9in','5ft 10in','5ft 11in','6ft','6ft 1in','6ft 2in','6ft 3in','6ft 4in','6ft 5in','6ft 6in','6ft 7in','6ft 8in','6ft 9in','6ft 10in','6ft 11in','7ft','Above 7ft');
            $hei = split(",",$row['PE_Height']);
      
        //echo $hei[0];
        //echo $hei[(count($hei)-1)];
          
           ?>
                    <input type="hidden"  size="10" name="txtPHeight[]" id="txtPHeight" style="width:60%;" value="">
                    <? $hei = explode(' to ', $row['PE_Height']);
          $hei_from = $hei[0];
          $hei_to   = $hei[1];  ?>
          
          <select name="height_range_frm" id="height_range_frm"  style="width:92px;" >
                     
            <option value="0" <?php if($hei_from == '0') echo "selected"; ?>>Select</option>
            <option value="4ft - 121 cm" <?php if($hei_from == '4ft - 121 cm') echo "selected"; ?>>4ft - 121 cm</option>
            <option value="4ft 1in - 124cm" <?php if($hei_from == '4ft 1in - 124cm') echo "selected"; ?>>4ft 1in - 124cm</option>
            <option value="4ft 2in - 127cm" <?php if($hei_from == '4ft 2in - 127cm') echo "selected"; ?>>4ft 2in - 127cm</option>
            <option value="4ft 3in - 129cm" <?php if($hei_from == '4ft 3in - 129cm') echo "selected"; ?>>4ft 3in - 129cm</option>
            <option value="4ft 4in - 132cm" <?php if($hei_from == '4ft 4in - 132cm') echo "selected"; ?>>4ft 4in - 132cm</option>
            <option value="4ft 5in - 134cm" <?php if($hei_from == '4ft 5in - 134cm') echo "selected"; ?>>4ft 5in - 134cm</option>
            <option value="4ft 6in - 137cm" <?php if($hei_from == '4ft 6in - 137cm') echo "selected"; ?>>4ft 6in - 137cm</option>
            <option value="4ft 7in - 139cm" <?php if($hei_from == '4ft 7in - 139cm') echo "selected"; ?>>4ft 7in - 139cm</option>
            <option value="4ft 8in - 142cm" <?php if($hei_from == '4ft 8in - 142cm') echo "selected"; ?>>4ft 8in - 142cm</option>
            <option value="4ft 9in - 144cm" <?php if($hei_from == '4ft 9in - 144cm') echo "selected"; ?>>4ft 9in - 144cm</option>
            <option value="4ft 10in - 147cm" <?php if($hei_from == '4ft 10in - 147cm') echo "selected"; ?>>4ft 10in - 147cm</option>
            <option value="4ft 11in - 149cm" <?php if($hei_from == '4ft 11in - 149cm') echo "selected"; ?>>4ft 11in - 149cm</option>
            <option value="5ft - 152cm" <?php if($hei_from == '5ft - 152cm') echo "selected"; ?>>5ft - 152cm</option>
            <option value="5ft 1in - 154cm" <?php if($hei_from == '5ft 1in - 154cm') echo "selected"; ?>>5ft 1in - 154cm</option>
            <option value="5ft 2in - 157cm" <?php if($hei_from == '5ft 2in - 157cm') echo "selected"; ?>>5ft 2in - 157cm</option>
            <option value="5ft 3in - 160cm" <?php if($hei_from == '5ft 3in - 160cm') echo "selected"; ?>>5ft 3in - 160cm</option>
            <option value="5ft 4in - 162cm" <?php if($hei_from == '5ft 4in - 162cm') echo "selected"; ?>>5ft 4in - 162cm</option>
            <option value="5ft 5in - 165cm" <?php if($hei_from == '5ft 5in - 165cm') echo "selected"; ?>>5ft 5in - 165cm</option>
            <option value="5ft 6in - 167cm" <?php if($hei_from == '5ft 6in - 167cm') echo "selected"; ?>>5ft 6in - 167cm</option>
            <option value="5ft 7in - 170cm" <?php if($hei_from == '5ft 7in - 170cm') echo "selected"; ?>>5ft 7in - 170cm</option>
            <option value="5ft 8in - 172cm" <?php if($hei_from == '5ft 8in - 172cm') echo "selected"; ?>>5ft 8in - 172cm</option>
            <option value="5ft 9in - 175cm" <?php if($hei_from == '5ft 9in - 175cm') echo "selected"; ?>>5ft 9in - 175cm</option>
            <option value="5ft 10in - 177cm" <?php if($hei_from == '5ft 10in - 177cm') echo "selected"; ?>>5ft 10in - 177cm</option>
            <option value="5ft 11in - 180cm" <?php if($hei_from == '5ft 11in - 180cm') echo "selected"; ?>>5ft 11in - 180cm</option>
            <option value="6ft - 182cm" <?php if($hei_from == '6ft - 182cm') echo "selected"; ?>>6ft - 182cm</option>
            <option value="6ft 1in - 185cm" <?php if($hei_from == '6ft 1in - 185cm') echo "selected"; ?>>6ft 1in - 185cm</option>
            <option value="6ft 2in - 187cm" <?php if($hei_from == '6ft 2in - 187cm') echo "selected"; ?>>6ft 2in - 187cm</option>
            <option value="6ft 3in - 190cm" <?php if($hei_from == '6ft 3in - 190cm') echo "selected"; ?>>6ft 3in - 190cm</option>
            <option value="6ft 4in - 193cm" <?php if($hei_from == '6ft 4in - 193cm') echo "selected"; ?>>6ft 4in - 193cm</option>
            <option value="6ft 5in - 195cm" <?php if($hei_from == '6ft 5in - 195cm') echo "selected"; ?>>6ft 5in - 195cm</option>
            <option value="6ft 6in - 198cm" <?php if($hei_from == '6ft 6in - 198cm') echo "selected"; ?>>6ft 6in - 198cm</option>
            <option value="6ft 7in - 200cm" <?php if($hei_from == '6ft 7in - 200cm') echo "selected"; ?>>6ft 7in - 200cm</option>
            <option value="6ft 8in - 203cm" <?php if($hei_from == '6ft 8in - 203cm') echo "selected"; ?>>6ft 8in - 203cm</option>
            <option value="6ft 9in - 205cm" <?php if($hei_from == '6ft 9in - 205cm') echo "selected"; ?>>6ft 9in - 205cm</option>
            <option value="6ft 10in - 208cm" <?php if($hei_from == '6ft 10in - 208cm') echo "selected"; ?>>6ft 10in - 208cm</option>
            <option value="6ft 11in - 210cm" <?php if($hei_from == '6ft 11in - 210cm') echo "selected"; ?>>6ft 11in - 210cm</option>
            <option value="7ft - 213cm" <?php if($hei_from == '7ft - 213cm') echo "selected"; ?>>7ft - 213cm</option>
           
            
     
                    </select>
                    to
                    <select name="height_range_to"  id="height_range_to"  style="width:20%;">
                     
                        <option value="0" <?php if($hei_to == '0') echo "selected"; ?>>Select</option>
            <option value="4ft - 121 cm" <?php if($hei_to == '4ft - 121 cm') echo "selected"; ?>>4ft - 121 cm</option>
            <option value="4ft 1in - 124cm" <?php if($hei_to == '4ft 1in - 124cm') echo "selected"; ?>>4ft 1in - 124cm</option>
            <option value="4ft 2in - 127cm" <?php if($hei_to == '4ft 2in - 127cm') echo "selected"; ?>>4ft 2in - 127cm</option>
            <option value="4ft 3in - 129cm" <?php if($hei_to == '4ft 3in - 129cm') echo "selected"; ?>>4ft 3in - 129cm</option>
            <option value="4ft 4in - 132cm" <?php if($hei_to == '4ft 4in - 132cm') echo "selected"; ?>>4ft 4in - 132cm</option>
            <option value="4ft 5in - 134cm" <?php if($hei_to == '4ft 5in - 134cm') echo "selected"; ?>>4ft 5in - 134cm</option>
            <option value="4ft 6in - 137cm" <?php if($hei_to == '4ft 6in - 137cm') echo "selected"; ?>>4ft 6in - 137cm</option>
            <option value="4ft 7in - 139cm" <?php if($hei_to == '4ft 7in - 139cm') echo "selected"; ?>>4ft 7in - 139cm</option>
            <option value="4ft 8in - 142cm" <?php if($hei_to == '4ft 8in - 142cm') echo "selected"; ?>>4ft 8in - 142cm</option>
            <option value="4ft 9in - 144cm" <?php if($hei_to == '4ft 9in - 144cm') echo "selected"; ?>>4ft 9in - 144cm</option>
            <option value="4ft 10in - 147cm" <?php if($hei_to == '4ft 10in - 147cm') echo "selected"; ?>>4ft 10in - 147cm</option>
            <option value="4ft 11in - 149cm" <?php if($hei_to == '4ft 11in - 149cm') echo "selected"; ?>>4ft 11in - 149cm</option>
            <option value="5ft - 152cm" <?php if($hei_to == '5ft - 152cm') echo "selected"; ?>>5ft - 152cm</option>
            <option value="5ft 1in - 154cm" <?php if($hei_to == '5ft 1in - 154cm') echo "selected"; ?>>5ft 1in - 154cm</option>
            <option value="5ft 2in - 157cm" <?php if($hei_to == '5ft 2in - 157cm') echo "selected"; ?>>5ft 2in - 157cm</option>
            <option value="5ft 3in - 160cm" <?php if($hei_to == '5ft 3in - 160cm') echo "selected"; ?>>5ft 3in - 160cm</option>
            <option value="5ft 4in - 162cm" <?php if($hei_to == '5ft 4in - 162cm') echo "selected"; ?>>5ft 4in - 162cm</option>
            <option value="5ft 5in - 165cm" <?php if($hei_to == '5ft 5in - 165cm') echo "selected"; ?>>5ft 5in - 165cm</option>
            <option value="5ft 6in - 167cm" <?php if($hei_to == '5ft 6in - 167cm') echo "selected"; ?>>5ft 6in - 167cm</option>
            <option value="5ft 7in - 170cm" <?php if($hei_to == '5ft 7in - 170cm') echo "selected"; ?>>5ft 7in - 170cm</option>
            <option value="5ft 8in - 172cm" <?php if($hei_to == '5ft 8in - 172cm') echo "selected"; ?>>5ft 8in - 172cm</option>
            <option value="5ft 9in - 175cm" <?php if($hei_to == '5ft 9in - 175cm') echo "selected"; ?>>5ft 9in - 175cm</option>
            <option value="5ft 10in - 177cm" <?php if($hei_to == '5ft 10in - 177cm') echo "selected"; ?>>5ft 10in - 177cm</option>
            <option value="5ft 11in - 180cm" <?php if($hei_to == '5ft 11in - 180cm') echo "selected"; ?>>5ft 11in - 180cm</option>
            <option value="6ft - 182cm" <?php if($hei_to == '6ft - 182cm') echo "selected"; ?>>6ft - 182cm</option>
            <option value="6ft 1in - 185cm" <?php if($hei_to == '6ft 1in - 185cm') echo "selected"; ?>>6ft 1in - 185cm</option>
            <option value="6ft 2in - 187cm" <?php if($hei_to == '6ft 2in - 187cm') echo "selected"; ?>>6ft 2in - 187cm</option>
            <option value="6ft 3in - 190cm" <?php if($hei_to == '6ft 3in - 190cm') echo "selected"; ?>>6ft 3in - 190cm</option>
            <option value="6ft 4in - 193cm" <?php if($hei_to == '6ft 4in - 193cm') echo "selected"; ?>>6ft 4in - 193cm</option>
            <option value="6ft 5in - 195cm" <?php if($hei_to == '6ft 5in - 195cm') echo "selected"; ?>>6ft 5in - 195cm</option>
            <option value="6ft 6in - 198cm" <?php if($hei_to == '6ft 6in - 198cm') echo "selected"; ?>>6ft 6in - 198cm</option>
            <option value="6ft 7in - 200cm" <?php if($hei_to == '6ft 7in - 200cm') echo "selected"; ?>>6ft 7in - 200cm</option>
            <option value="6ft 8in - 203cm" <?php if($hei_to == '6ft 8in - 203cm') echo "selected"; ?>>6ft 8in - 203cm</option>
            <option value="6ft 9in - 205cm" <?php if($hei_to == '6ft 9in - 205cm') echo "selected"; ?>>6ft 9in - 205cm</option>
            <option value="6ft 10in - 208cm" <?php if($hei_to == '6ft 10in - 208cm') echo "selected"; ?>>6ft 10in - 208cm</option>
            <option value="6ft 11in - 210cm" <?php if($hei_to == '6ft 11in - 210cm') echo "selected"; ?>>6ft 11in - 210cm</option>
            <option value="7ft - 213cm" <?php if($hei_to == '7ft - 213cm') echo "selected"; ?>>7ft - 213cm</option>
           
            
     
                    </select>
                    <script type="text/javascript">
function caste_resetRF(val){ 

document.getElementById('Language').selectedIndex = 0;

}
</script>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Complexion</label>
                </div>
                <div class="col-md-10">
                  <?php

        $complexion= array('Does not Matter','Very Fair','Fair','Wheatish','Wheatish Medium','Wheatish Brown','Dark');

         ?>
                    <select name="txtPComplexion" id="txtPComplexion" class="form-control" style="width:60%;">
                      <?php

            foreach ($complexion as $castes) {

             if ($row['PE_Complexion']==$castes) { ?>
                      <option value="<? echo $row['PE_Complexion']; ?>" selected><? echo $row['PE_Complexion']; ?></option>
                      <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
                      <?php }  }?>
                    </select>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Education</label>
                </div>
                <div class="col-md-10">
                  <?php

        $txtPEdu= array('Any','Not Important','No education','High School','Bachelor’s Degree: Engg., Comp., Arch.,','Master’s Degree: Engg., Comp., Arch.,','Bachelor’s Degree: Medicine & Surgery, Dentistry','Master’s Degree: Medicine & Surgery, Dentistry ','Bachelor’s Degree: Nursing','Master’s Degree: Nursing','Bachelor’s Degree: Law','Master’s Degree: Law','Bachelor’s Degree: Arts, Science, Commerce','Master’s Degree: Arts, Science, Commerce','Bachelor’s Degree: Management','Master’s Degree: Management','Doctorate PhD','Accounting & Fin.: CA, ICWAI','Indian Civil Service: IAS, IFoS, IPS, IRS','Vocational','Diploma','Other');

         ?>
                    &nbsp;
                    <select name="txtPEdu" class="form-control" id="txtPEdu" style="width:60%;">
                      <?php

            foreach ($txtPEdu as $castes) {

             if ($row['PE_Education']==$castes) { ?>
                      <option value="<? echo $row['PE_Education']; ?>" selected><? echo $row['PE_Education']; ?></option>
                      <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
                      <?php }  }?>
                    </select>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Religion</label>
                </div>
                <div class="col-md-10">
                  <?php $caste =array('-Select-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');

      

       

       ?>
                    <select onchange="caste_resetRF(this.value);" class="form-control" style="width:60%;" size="1" id="religion" name="religion">
                      <option selected="" value="0">-Select-</option>
                      <option value="1" <?php if($row['PE_Religion'] == 1) { ?> selected="selected" <? } ?>>Hindu</option>
                      <option value="10" <?php if($row['PE_Religion'] == 10) { ?> selected="selected" <? } ?>>Muslim - Shia</option>
                      <option value="11" <?php if($row['PE_Religion'] == 11) { ?> selected="selected" <? } ?>>Muslim - Sunni</option>
                      <option value="2" <?php if($row['PE_Religion'] == 2) { ?> selected="selected" <? } ?>>Muslim - Others</option>
                      <option value="12" <?php if($row['PE_Religion'] == 12) { ?> selected="selected" <? } ?>>Christian - Catholic</option>
                      <option value="13" <?php if($row['PE_Religion'] == 13) { ?> selected="selected" <? } ?>>Christian - Orthodox</option>
                      <option value="14" <?php if($row['PE_Religion'] == 14) { ?> selected="selected" <? } ?>>Christian - Protestant</option>
                      <option value="3" <?php if($row['PE_Religion'] == 3) { ?> selected="selected" <? } ?>>Christian - Others</option>
                      <option value="4" <?php if($row['PE_Religion'] == 4) { ?> selected="selected" <? } ?>>Sikh</option>
                      <option value="15" <?php if($row['PE_Religion'] == 15) { ?> selected="selected" <? } ?>>Jain - Digambar</option>
                      <option value="16" <?php if($row['PE_Religion'] == 16) { ?> selected="selected" <? } ?>>Jain - Shwetambar</option>
                      <option value="5" <?php if($row['PE_Religion'] == 5) { ?> selected="selected" <? } ?>>Jain - Others</option>
                      <option value="6" <?php if($row['PE_Religion'] == 6) { ?> selected="selected" <? } ?>>Parsi</option>
                      <option value="7" <?php if($row['PE_Religion'] == 7) { ?> selected="selected" <? } ?>>Buddhist</option>
                      <option value="8" <?php if($row['PE_Religion'] == 8) { ?> selected="selected" <? } ?>>Inter-Religion</option>
                      <option value="9" <?php if($row['PE_Religion'] == 9) { ?> selected="selected" <? } ?>>No Religious Belief</option>
                    </select>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Mother tongue </label>
                </div>
                <div class="col-md-10">
                  <?php $Language =array('-Select-','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Badaga','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu');

        echo $row[' PE_MotherTongue'];

       ?>
                    <select onchange="do_request(this.value);" class="form-control" style="width:60%;" size="1" id="Language" name="Language">
                      <option selected="" value="0">-Select-</option>
                      <option value="1" <?php if($row['PE_MotherTongue'] == 1) { ?> selected="selected" <? } ?>>Arunachali</option>
                      <option value="2"<?php if($row['PE_MotherTongue'] == 2) { ?> selected="selected" <? } ?>>Assamese</option>
                      <option value="3"<?php if($row['PE_MotherTongue'] == 3) { ?> selected="selected" <? } ?>>Awadhi</option>
                      <option value="4"<?php if($row['PE_MotherTongue'] ==4) { ?> selected="selected" <? } ?>>Bengali</option>
                      <option value="5"<?php if($row['PE_MotherTongue'] == 5) { ?> selected="selected" <? } ?>>Bhojpuri</option>
                      <option value="6"<?php if($row['PE_MotherTongue'] == 6) { ?> selected="selected" <? } ?>>Brij</option>
                      <option value="7"<?php if($row['PE_MotherTongue'] == 7) { ?> selected="selected" <? } ?>>Bihari</option>
                      <option value="53"<?php if($row['PE_MotherTongue'] == 53) { ?> selected="selected" <? } ?>>Badaga</option>
                      <option value="8"<?php if($row['PE_MotherTongue'] == 8) { ?> selected="selected" <? } ?>>Chatisgarhi</option>
                      <option value="9"<?php if($row['PE_MotherTongue'] == 9) { ?> selected="selected" <? } ?>>Dogri</option>
                      <option value="10"<?php if($row['PE_MotherTongue'] == 10) { ?> selected="selected" <? } ?>>English</option>
                      <option value="11"<?php if($row['PE_MotherTongue'] == 11) { ?> selected="selected" <? } ?>>French</option>
                      <option value="12"<?php if($row['PE_MotherTongue'] == 12) { ?> selected="selected" <? } ?>>Garhwali</option>
                      <option value="13"<?php if($row['PE_MotherTongue'] == 13) { ?> selected="selected" <? } ?>>Garo</option>
                      <option value="14"<?php if($row['PE_MotherTongue'] == 14) { ?> selected="selected" <? } ?>>Gujarati</option>
                      <option value="15"<?php if($row['PE_MotherTongue'] == 15) { ?> selected="selected" <? } ?>>Haryanvi</option>
                      <option value="16"<?php if($row['PE_MotherTongue'] == 16) { ?> selected="selected" <? } ?>>Himachali/Pahari</option>
                      <option value="17"<?php if($row['PE_MotherTongue'] == 17) { ?> selected="selected" <? } ?>>Hindi</option>
                      <option value="18"<?php if($row['PE_MotherTongue'] == 18) { ?> selected="selected" <? } ?>>Kanauji</option>
                      <option value="19"<?php if($row['PE_MotherTongue'] == 19) { ?> selected="selected" <? } ?>>Kannada</option>
                      <option value="20"<?php if($row['PE_MotherTongue'] == 20) { ?> selected="selected" <? } ?>>Kashmiri</option>
                      <option value="21"<?php if($row['PE_MotherTongue'] == 221) { ?> selected="selected" <? } ?>>Khandesi</option>
                      <option value="22"<?php if($row['PE_MotherTongue'] == 22) { ?> selected="selected" <? } ?>>Khasi</option>
                      <option value="23"<?php if($row['PE_MotherTongue'] == 23) { ?> selected="selected" <? } ?>>Konkani</option>
                      <option value="24"<?php if($row['PE_MotherTongue'] == 24) { ?> selected="selected" <? } ?>>Koshali</option>
                      <option value="25"<?php if($row['PE_MotherTongue'] == 25) { ?> selected="selected" <? } ?>>Kumoani</option>
                      <option value="26"<?php if($row['PE_MotherTongue'] == 26) { ?> selected="selected" <? } ?>>Kutchi</option>
                      <option value="27"<?php if($row['PE_MotherTongue'] == 27) { ?> selected="selected" <? } ?>>Lepcha</option>
                      <option value="28"<?php if($row['PE_MotherTongue'] == 28) { ?> selected="selected" <? } ?>>Ladacki</option>
                      <option value="29"<?php if($row['PE_MotherTongue'] == 29) { ?> selected="selected" <? } ?>>Magahi</option>
                      <option value="30"<?php if($row['PE_MotherTongue'] == 30) { ?> selected="selected" <? } ?>>Maithili</option>
                      <option value="31"<?php if($row['PE_MotherTongue'] == 31) { ?> selected="selected" <? } ?>>Malayalam</option>
                      <option value="32"<?php if($row['PE_MotherTongue'] == 32) { ?> selected="selected" <? } ?>>Manipuri</option>
                      <option value="33"<?php if($row['PE_MotherTongue'] == 33) { ?> selected="selected" <? } ?>>Marathi</option>
                      <option value="34"<?php if($row['PE_MotherTongue'] == 34) { ?> selected="selected" <? } ?>>Marwari</option>
                      <option value="35"<?php if($row['PE_MotherTongue'] == 35) { ?> selected="selected" <? } ?>>Miji</option>
                      <option value="36"<?php if($row['PE_MotherTongue'] == 36) { ?> selected="selected" <? } ?>>Mizo</option>
                      <option value="37"<?php if($row['PE_MotherTongue'] == 37) { ?> selected="selected" <? } ?>>Monpa</option>
                      <option value="38"<?php if($row['PE_MotherTongue'] == 38) { ?> selected="selected" <? } ?>>Nicobarese</option>
                      <option value="39"<?php if($row['PE_MotherTongue'] == 39) { ?> selected="selected" <? } ?>>Nepali</option>
                      <option value="40"<?php if($row['PE_MotherTongue'] == 40) { ?> selected="selected" <? } ?>>Oriya</option>
                      <option value="41"<?php if($row['PE_MotherTongue'] == 41) { ?> selected="selected" <? } ?>>Punjabi</option>
                      <option value="42"<?php if($row['PE_MotherTongue'] == 42) { ?> selected="selected" <? } ?>>Rajasthani</option>
                      <option value="43"<?php if($row['PE_MotherTongue'] == 43) { ?> selected="selected" <? } ?>>Sanskrit</option>
                      <option value="44"<?php if($row['PE_MotherTongue'] == 44) { ?> selected="selected" <? } ?>>Santhali</option>
                      <option value="45"<?php if($row['PE_MotherTongue'] == 45) { ?> selected="selected" <? } ?>>Sindhi</option>
                      <option value="46"<?php if($row['PE_MotherTongue'] == 46) { ?> selected="selected" <? } ?>>Sourashtra</option>
                      <option value="47"<?php if($row['PE_MotherTongue'] == 47) { ?> selected="selected" <? } ?>>Tamil</option>
                      <option value="48"<?php if($row['PE_MotherTongue'] == 48) { ?> selected="selected" <? } ?>>Telugu</option>
                      <option value="49"<?php if($row['PE_MotherTongue'] == 49) { ?> selected="selected" <? } ?>>Tripuri</option>
                      <option value="50"<?php if($row['PE_MotherTongue'] == 50) { ?> selected="selected" <? } ?>>Tulu</option>
                      <option value="51"<?php if($row['PE_MotherTongue'] == 51) { ?> selected="selected" <? } ?>>Urdu</option>
                    </select>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Caste</label>
                </div>
                <div class="col-md-10">
                   <select id="caste_rel1" class="form-control" name="caste[]" multiple="multiple" style="width:60%;">
                  </select>
                  <?php
        if($row['PE_Religion'] && $row['PE_MotherTongue'])
        {
        ?>
                  <script type="text/javascript">
          do_request('<?php echo $row['PE_MotherTongue']; ?>');
          </script>
                  <?php
        }
        ?>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-10">
                  <label>Resident Status</label>
                </div>
                <div class="col-md-10">
                  <?php

        $txtPReS= array('Does not Matter','Citizen','Fair','Permanent Resident','Student Visa','Temporary Visa','Work permit');

         ?>
                    &nbsp;
                    <select name="txtPReS" id="txtCitizen" class="form-control"  style="width:60%;">
                      <?php

            foreach ($txtPReS as $castes) {

             if ($row['PE_Residentstatus']==$castes) { ?>
                      <option value="<? echo $row['PE_Residentstatus']; ?>" selected><? echo $row['PE_Residentstatus']; ?></option>
                      <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
                      <?php }  }?>
                    </select>
                </div>
              </div>
              <div claSS="form-group">
                <div class="col-md-2">
                  <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit">
                </div>
                <div class="col-md-2">
                  <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';">
                </div>
              </div>
       
           
              
             
					
					
              <tr class="hline2">
                <td>&nbsp;</td>
                <td><table align="left">
                    <tr>
                      <td><div align="center"><span class=" span"></span>
                          
                        </div></td>
                      <td>&nbsp;</td>
                      <td><div align="center"><span class=" span"></span>
                          
                        </div></td>
                    </tr>
                  </table>
                  <!--<div align="left">

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
  </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  -->
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  -->
</div>
</body>
</html>
