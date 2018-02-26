<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/regularsearch.js"></script>
<script language="javascript" src="js/advanced_search_locations.js" type="text/javascript"> </script>
<style type="text/css">
.advsubtitle {
	font-size:16px; font-weight:bold; }
</style>
<script language="javascript" type="text/javascript">

			 function loadvalues()
			 {
				enb('country');
				select_field('country','');
				select_field('state','');
				enb('state');
				select_field('city','');
			 }
				 function Validate()
				{
				/* -------- city part ends here ------- */
				}
//checks the fields that are compulsory namely state, city, terms of use
function CheckFields()
{
    var i = Validate();
    if(i==0)
        return false;
    return true;
}
    </script>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?></span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?php include("include/searchleftside.php"); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        <h2 class="float_left title">
          <span style="color:#333;" class="black">Matrimonial - </span>Advanced search       </h2>
        </div>
        <div class="body">
          <table cellspacing="5" cellpadding="5" border="0" width="100%">
	        <tbody><tr>
    	        <td width="80" height="80"><img align="left" width="64" vspace="10" hspace="10" height="64" src="images/icons/search/search_male_user.png"></td>
                <td>The most comprehensive search that searches across all criteria one would look for in a partner. This advanced criteria allows you to narrow search results to find that Special Someone.</td>
            </tr></tbody>
          </table>
          <form action="advsearch_results.php" method="get" name="MatriForm" id="MatriForm" >
            <table width="100%" border="0" cellpadding="3" cellspacing="3" class="tbl_profiledetails">
				<tr>
                  <td height="20" colspan="2"><div align="right" class="hline3">Note: All fields marked <span class="Alert">*</span> are Optional</div></td>
                </tr>
                <tr class="hline2">
                <td><div align="left">Looking for </div></td>
                <td><div align="left">
                    <input name="gender" type="radio" class="forminput" value="Male" checked>
                    Male 
                    
                    &nbsp;
                    <input name="gender" type="radio" class="forminput" value="Female">
                    Female </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Marital Status</div></td>
                <td><div align="left"><input name="ms" type="radio" class="forminput"  value="Unmarried" checked="checked" />
                  Unmarried
                  <input name="ms" type="radio" class="forminput"  value="Widow/Widower" />
                  Widow/Widower
                  <input name="ms" type="radio" class="forminput"  value="Divorcee" />
                  Divorcee
                  <input name="ms" type="radio" class="forminput"  value="Separated" />
                  Separated</div></td>
              </tr>
			<tr class="hline2">
                <td><div align="left">Age</div></td>
                <td><div align="left">From
                    <INPUT name="age1" class="textbox1" id="age1" value="18" size="2" maxLength="2" onKeyUp="check_Age('age1')">
                    &nbsp; to &nbsp;
                    <INPUT name="age2" class="textbox1" id="age2" value="60" size="2" maxLength="2" onKeyUp="check_Age('age2')" >
                    years</div></td>
              </tr>			  <tr class="hline2">
                <td><div align="left">Religion</div></td>
                <td><div align="left">
                    <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:215px;">
                      <option value="" selected>- Select -</option>
                      <option>Hindu</option>
                      <option>Christian</option>
                      <option>Muslim</option>
                      <option>Sikh</option>
                      <option>Jain</option>
                      <option>Parsi</option>
                      <option>Buddhist</option>
                      <option>Bahai</option>
                    </select>
                  </div></td>
              </tr>
			  <tr class="hline2">
                <td><div align="left">Caste</div></td>
                <td><div align="left">
                    <select name="caste" class="forminput" id="caste" style="width:215px;">
                      <option value="Any" selected="selected">Any</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Mother Tongue</div></td>
                <td><div align="left">
                    <select name="language" class="forminput" id="language" maxlength="2" style="width:215px;">
                      <option value="" selected="selected">Any</option>
                      <option value="Tamil">Tamil</option>
                      <option value="Hindi">Hindi</option>
                      <option value="Gujarati">Gujarati</option>
                      <option value="Urdu">Urdu</option>
                      <option value="English">English</option>
                      <option value="Punjabi">Punjabi</option>
                      <option value="Marathi">Marathi</option>
                      <option value="Telugu">Telugu</option>
                      <option value="Malayalam">Malayalam</option>
                      <option value="Bengali">Bengali</option>
                      <option value="Kannada">Kannada</option>
                      <option value="Sindhi">Sindhi</option>
                      <option value="Konkani">Konkani</option>
                      <option value="Oriya">Oriya</option>
                      <option value="Arabic">Arabic</option>
                      <option value="Marwari">Marwari</option>
                      <option value="Aka">Aka</option>
                      <option value="Assamese">Assamese</option>
                      <option value="Awadhi">Awadhi</option>
                      <option value="Bhojpuri">Bhojpuri</option>
                      <option value="Bhutia">Bhutia</option>
                      <option value="Chatlisgarhi">Chatlisgarhi</option>
                      <option value="Chinese">Chinese</option>
                      <option value="Dogri">Dogri</option>
                      <option value="French">French</option>
                      <option value="Garhwali">Garhwali</option>
                      <option value="Garo">Garo</option>
                      <option value="Haryanvi">Haryanvi</option>
                      <option value="Kakbarak">Kakbarak</option>
                      <option value="Kanauji">Kanauji</option>
                      <option value="Kashmiri">Kashmiri</option>
                      <option value="Khandesi">Khandesi</option>
                      <option value="Khasi">Khasi</option>
                      <option value="Koshali">Koshali</option>
                      <option value="Kumoani">Kumoani</option>
                      <option value="Kutchi">Kutchi</option>
                      <option value="Lepcha">Lepcha</option>
                      <option value="Magahi">Magahi</option>
                      <option value="Maithili">Maithili</option>
                      <option value="Malay">Malay</option>
                      <option value="Manipuri">Manipuri</option>
                      <option value="Miji">Miji</option>
                      <option value="Mizo">Mizo</option>
                      <option value="Monpa">Monpa</option>
                      <option value="Nepali">Nepali</option>
                      <option value="Persian">Persian</option>
                      <option value="Rajasthani">Rajasthani</option>
                      <option value="Russian">Russian</option>
                      <option value="Sanskrit">Sanskrit</option>
                      <option value="Santhali">Santhali</option>
                      <option value="Spanish">Spanish</option>
                      <option value="Swedish">Swedish</option>
                      <option value="Tagalog">Tagalog</option>
                      <option value="Tulu">Tulu</option>
                      <option value="Other">Other</option>
                    </select>
                    </div></td>
              </tr> 
             <tr class="hline2">
                <td>Country Living in </td>
                <td><div align="left">
                    <select name="country" class="forminput" id="select_country" style="width:215px;" onChange="javascript:enb('country');">
                        <option value=" " selected>-- Select --</option>
                        <option value="albania">Albania</option>
                        <option value="algeria">Algeria</option>
                        <option value="american samoa">American samoa</option>
                        <option value="andoria">Andoria</option>
                        <option value="andorra">Andorra</option>
                        <option value="angola">Angola</option>
                        <option value="anguilla">Anguilla</option>
                        <option value="anitgua">Anitgua</option>
                        <option value="antigua">Antigua</option>
                        <option value="argentina">Argentina</option>
                        <option value="armenia">Armenia</option>
                        <option value="aruba">Aruba</option>
                        <option value="australia">Australia</option>
                        <option value="austria">Austria</option>
                        <option value="azerbaijan">Azerbaijan</option>
                        <option value="azerbiajan">Azerbiajan</option>
                        <option value="bahamas">Bahamas</option>
                        <option value="bahrain">Bahrain</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="barbados">Barbados</option>
                        <option value="belarus">Belarus</option>
                        <option value="belgium">Belgium</option>
                        <option value="belize">Belize</option>
                        <option value="benin">Benin</option>
                        <option value="bermuda">Bermuda</option>
                        <option value="bhutan">Bhutan</option>
                        <option value="boliva">Boliva</option>
                        <option value="bolivia">Bolivia</option>
                        <option value="bonaire">Bonaire</option>
                        <option value="bosnia &amp; herzegovina">Bosnia &amp; herzegovina</option>
                        <option value="botswana">Botswana</option>
                        <option value="brazil">Brazil</option>
                        <option value="brunei">Brunei</option>
                        <option value="bulgaria">Bulgaria</option>
                        <option value="burkina faso">Burkina faso</option>
                        <option value="burundi">Burundi</option>
                        <option value="cambodia">Cambodia</option>
                        <option value="cameroon">Cameroon</option>
                        <option value="canada">Canada</option>
                        <option value="canary islands the">Canary islands the</option>
                        <option value="cape varde">Cape varde</option>
                        <option value="cape verde">Cape verde</option>
                        <option value="cayman islands">Cayman islands</option>
                        <option value="central african republic">Central african republic</option>
                        <option value="chad">Chad</option>
                        <option value="chile">Chile</option>
                        <option value="china">China</option>
                        <option value="china, peoples rep">China, peoples rep</option>
                        <option value="colombia">Colombia</option>
                        <option value="columbia">Columbia</option>
                        <option value="comoros">Comoros</option>
                        <option value="congo">Congo</option>
                        <option value="congo, the democratic rep of">Congo, the democratic rep of</option>
                        <option value="cook islands">Cook islands</option>
                        <option value="costa rica">Costa rica</option>
                        <option value="croatia">Croatia</option>
                        <option value="cuba">Cuba</option>
                        <option value="curacao">Curacao</option>
                        <option value="cyprus">Cyprus</option>
                        <option value="czech republic">Czech republic</option>
                        <option value="czech republic the">Czech republic the</option>
                        <option value="denmark">Denmark</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominica">Dominica</option>
                        <option value="dominican republic">Dominican republic</option>
                        <option value="ecuador">Ecuador</option>
                        <option value="egypt">Egypt</option>
                        <option value="el salvador">El salvador</option>
                        <option value="equatorial guinea">Equatorial guinea</option>
                        <option value="eritrea">Eritrea</option>
                        <option value="estonia">Estonia</option>
                        <option value="ethiopia">Ethiopia</option>
                        <option value="falkland islands">Falkland islands</option>
                        <option value="faroe islands">Faroe islands</option>
                        <option value="faroer islands">Faroer islands</option>
                        <option value="fiji">Fiji</option>
                        <option value="finland">Finland</option>
                        <option value="france">France</option>
                        <option value="french guana">French guana</option>
                        <option value="french guyana">French guyana</option>
                        <option value="french polynesia">French polynesia</option>
                        <option value="gabon">Gabon</option>
                        <option value="gambia">Gambia</option>
                        <option value="georgia">Georgia</option>
                        <option value="germany">Germany</option>
                        <option value="ghana">Ghana</option>
                        <option value="gibraltar">Gibraltar</option>
                        <option value="greece">Greece</option>
                        <option value="greenland">Greenland</option>
                        <option value="grenada">Grenada</option>
                        <option value="guadeloupe">Guadeloupe</option>
                        <option value="guadeluoupe">Guadeluoupe</option>
                        <option value="guam">Guam</option>
                        <option value="guatemala">Guatemala</option>
                        <option value="guernsey">Guernsey</option>
                        <option value="guinea">Guinea</option>
                        <option value="guinea republic">Guinea republic</option>
                        <option value="guinea-bissau">Guinea-bissau</option>
                        <option value="guyana">Guyana</option>
                        <option value="guyana (british)">Guyana (british)</option>
                        <option value="haiti">Haiti</option>
                        <option value="honduras">Honduras</option>
                        <option value="hong kong">Hong kong</option>
                        <option value="hungary">Hungary</option>
                        <option value="iceland">Iceland</option>
                        <option value="india">India</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="iran">Iran</option>
                        <option value="ireland">Ireland</option>
                        <option value="ireland republic of">Ireland republic of</option>
                        <option value="israel">Israel</option>
                        <option value="italy">Italy</option>
                        <option value="italy">Italy</option>
                        <option value="ivory coast">Ivory coast</option>
                        <option value="jamaica">Jamaica</option>
                        <option value="japan">Japan</option>
                        <option value="jersey">Jersey</option>
                        <option value="jordan">Jordan</option>
                        <option value="kazakhstan">Kazakhstan</option>
                        <option value="kenya">Kenya</option>
                        <option value="kiribati">Kiribati</option>
                        <option value="korea, republic of">Korea, republic of</option>
                        <option value="korea, south">Korea, south</option>
                        <option value="korea,d.pr of">Korea,d.pr of</option>
                        <option value="kuwait">Kuwait</option>
                        <option value="kyrgyzstan">Kyrgyzstan</option>
                        <option value="lao peoples democratic republic">Lao peoples democratic republic</option>
                        <option value="laos">Laos</option>
                        <option value="latvia">Latvia</option>
                        <option value="lebanon">Lebanon</option>
                        <option value="lesotho">Lesotho</option>
                        <option value="liberia">Liberia</option>
                        <option value="libya">Libya</option>
                        <option value="liechtenstein">Liechtenstein</option>
                        <option value="lithuania">Lithuania</option>
                        <option value="luxembourg">Luxembourg</option>
                        <option value="macao">Macao</option>
                        <option value="macau">Macau</option>
                        <option value="macedonia">Macedonia</option>
                        <option value="macedonia republic of (fyrom)">Macedonia republic of (fyrom)</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="malawi">Malawi</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="maldives">Maldives</option>
                        <option value="mali">Mali</option>
                        <option value="malta">Malta</option>
                        <option value="marinique">Marinique</option>
                        <option value="marshall islands">Marshall islands</option>
                        <option value="martinique">Martinique</option>
                        <option value="mauritania">Mauritania</option>
                        <option value="mauritiania">Mauritiania</option>
                        <option value="mauritius">Mauritius</option>
                        <option value="mexico">Mexico</option>
                        <option value="micronesia">Micronesia</option>
                        <option value="moldova">Moldova</option>
                        <option value="moldova republic of">Moldova republic of</option>
                        <option value="monaco">Monaco</option>
                        <option value="mongolia">Mongolia</option>
                        <option value="montserrat">Montserrat</option>
                        <option value="morocco">Morocco</option>
                        <option value="mozambique">Mozambique</option>
                        <option value="myanmar">Myanmar</option>
                        <option value="myanmar (burma)">Myanmar (burma)</option>
                        <option value="namibia">Namibia</option>
                        <option value="nauru republic of">Nauru republic of</option>
                        <option value="nepal">Nepal</option>
                        <option value="netherland antilles">Netherland antilles</option>
                        <option value="netherlands">Netherlands</option>
                        <option value="netherlands the">Netherlands the</option>
                        <option value="nevis">Nevis</option>
                        <option value="new caledonia">New caledonia</option>
                        <option value="new zealand">New zealand</option>
                        <option value="nicaragua">Nicaragua</option>
                        <option value="niger">Niger</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="niue">Niue</option>
                        <option value="norway">Norway</option>
                        <option value="oman">Oman</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="palau">Palau</option>
                        <option value="palestine authority">Palestine authority</option>
                        <option value="panama">Panama</option>
                        <option value="papua new guinea">Papua new guinea</option>
                        <option value="paraguay">Paraguay</option>
                        <option value="peru">Peru</option>
                        <option value="peru">Peru</option>
                        <option value="philippines">Philippines</option>
                        <option value="poland">Poland</option>
                        <option value="portugal">Portugal</option>
                        <option value="puerto rico">Puerto rico</option>
                        <option value="qatar">Qatar</option>
                        <option value="reunion">Reunion</option>
                        <option value="reunion island">Reunion island</option>
                        <option value="romania">Romania</option>
                        <option value="russia">Russia</option>
                        <option value="russian federation">Russian federation</option>
                        <option value="rwanda">Rwanda</option>
                        <option value="saint lucia">Saint lucia</option>
                        <option value="saint vincent">Saint vincent</option>
                        <option value="saipan">Saipan</option>
                        <option value="samoa">Samoa</option>
                        <option value="sao tome &amp; principe">Sao tome &amp; principe</option>
                        <option value="saudi arabia">Saudi arabia</option>
                        <option value="saudia arabia">Saudia arabia</option>
                        <option value="senegal">Senegal</option>
                        <option value="seychelles">Seychelles</option>
                        <option value="sierra leone">Sierra leone</option>
                        <option value="singapore">Singapore</option>
                        <option value="slovak republic">Slovak republic</option>
                        <option value="slovakia">Slovakia</option>
                        <option value="slovenia">Slovenia</option>
                        <option value="solomon islands">Solomon islands</option>
                        <option value="somalia">Somalia</option>
                        <option value="south africa">South africa</option>
                        <option value="spain">Spain</option>
                        <option value="sri lanka">Sri lanka</option>
                        <option value="st kitts and nevis">St kitts and nevis</option>
                        <option value="st lucia">St lucia</option>
                        <option value="st vincent">St vincent</option>
                        <option value="st. barthelemy">St. barthelemy</option>
                        <option value="st. eustatius">St. eustatius</option>
                        <option value="st. kitts">St. kitts</option>
                        <option value="st. maarten">St. maarten</option>
                        <option value="sudan">Sudan</option>
                        <option value="suriname">Suriname</option>
                        <option value="swaziland">Swaziland</option>
                        <option value="sweden">Sweden</option>
                        <option value="switzerland">Switzerland</option>
                        <option value="syria">Syria</option>
                        <option value="tahiti">Tahiti</option>
                        <option value="taiwan">Taiwan</option>
                        <option value="tajikistan">Tajikistan</option>
                        <option value="tanzania">Tanzania</option>
                        <option value="thailand">Thailand</option>
                        <option value="togo">Togo</option>
                        <option value="tonga">Tonga</option>
                        <option value="trinidad &amp; tobago">Trinidad &amp; tobago</option>
                        <option value="trinidad and tobago">Trinidad and tobago</option>
                        <option value="tunisia">Tunisia</option>
                        <option value="turkey">Turkey</option>
                        <option value="turkmenistan">Turkmenistan</option>
                        <option value="turks &amp; caicos islands">Turks &amp; caicos islands</option>
                        <option value="turks and caicos islands">Turks and caicos islands</option>
                        <option value="tuvalu">Tuvalu</option>
                        <option value="uganda">Uganda</option>
                        <option value="ukraine">Ukraine</option>
                        <option value="united arab emirates">United arab emirates</option>
                        <option value="united kingdom">United kingdom</option>
                        <option value="united states of america">United states of america</option>
                        <option value="uruguay">Uruguay</option>
                        <option value="uzbekistan">Uzbekistan</option>
                        <option value="vanuatu">Vanuatu</option>
                        <option value="vatican city">Vatican city</option>
                        <option value="venezuela">Venezuela</option>
                        <option value="vietnam">Vietnam</option>
                        <option value="virgin island (gb)">Virgin island (gb)</option>
                        <option value="virgin islands  british">Virgin islands british</option>
                        <option value="virgin islands  us">Virgin islands us</option>
                        <option value="virgin islands (usa)">Virgin islands (usa)</option>
                        <option value="wallis &amp; futuna">Wallis &amp; futuna</option>
                        <option value="yemen arab republic">Yemen arab republic</option>
                        <option value="yugloslavia">Yugloslavia</option>
                        <option value="zaire (dem rep of congo)">Zaire (dem rep of congo)</option>
                        <option value="zambia">Zambia</option>
                        <option value="zimbabwe">Zimbabwe</option>
                        <option value="Others">Other</option>
                      </select>
                    </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">State</div></td>
                <td><div align="left"> <select name="State" class="forminput" id="select_state" style="width:215px;" onChange="javascript:enb('state');">
                        <option value=" " >-- Select --</option>
                      </select>
                    </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">City</div></td>
                <td><div align="left">  <select name="City" class="forminput" id="select_city" style="width:215px;" onChange="javascript:enb('city');" >
                        <option value=" " selected="true">-- Select --</option>
                      </select>
                    </div></td>
              </tr>	
			    <tr class="hline2" style="display:none;">
                  <td><div align="left">&nbsp;Other Country </div></td>
                  <td><div align="left">
                      <input name="text3" type="text" id="country_text" disabled="true" style="position: static" />
                    </div></td>
                </tr>
                <tr class="hline2" style="display:none;">
                  <td><div align="left">&nbsp;Other State</div></td>
                  <td><div align="left">
                      <input name="text2" type="text" id="state_text" disabled="true" style="position: static" />
                    </div></td>
                </tr>
                <tr class="hline2" style="display:none;">
                  <td><div align="left">&nbsp;Other City </div></td>
                  <td><div align="left">
                      <input name="text" type="text" id="city_text" disabled="true" style="position: static" />
                      <input type="hidden" name="ddlSelectCountry" id="ddlSelectCountry" />
                      <input type="hidden" name="ddlSelectState" id="ddlSelectState" />
                      <input type="hidden" name="ddlSelectCity" id="ddlSelectCity" />
                    </div></td>
                </tr>	 
              <tr class="hline2">
                <td><div align="left">Show <span class="Alert">*</span></div></td>
                <td><div align="left">
                    <input name="photo" type="checkbox" id="photo" value="photo">
                    Profiles with Photo<br /><input name="txthoros" type="checkbox" id="txthoros" value="Show profiles with Horoscope">
                    Profiles with Horoscope </div></td>
              </tr>
			  <tr>
                  <td height="20" colspan="2"><div align="left" class="hline3"><span class="advsubtitle" style="color:#333;">Select Advanced Criteria *</span></div></td>
              </tr>
			  <tr>
                  <td height="20" colspan="2"><div align="left">* [For paid members only – upgrade your membership now!]</div></td>
              </tr>
             
			 
			 
			 
			 <!--starts-->
			  
			  
		

<script language="JavaScript" type="text/JavaScript">

var selected_criteria = new Array();

var COUNTRY_ID   = "seekingCountryId";
var COUNTY_ID    = "seekingCountyId";
var COUNTY_BLOCK = "seekingCountyIdBlock";

function onCountryChange(countriesList) {

	var cities = $('seekingCityId');
	var regionsList = document.getElementById('seekingRegionId');
	cities.options.length = 0;
	cities.clear();
	var countryId = $(countriesList).getValue(null);

	if (countryId){
		hideCounties();
		regionsList.options.length = 0;

		var callbackRegions = function (regionsCount){		
			if (regionsCount > 1) {
				insertFirstOption(regionsList,'All regions',0,false,true);
				regionsList.selectedIndex = 0;
			}

			if (regionsCount == 1){
				regionsList.selectedIndex = 0;					
			}
			regionsList.onchange();
			checkAllSelect();
		}
		var callbackCities = function(citiesCount){
			if (citiesCount > 1) {
				insertFirstOption(cities,'All cities',0,false,true);
				cities.selectedIndex = 0;				
			}
						
		}
		getRegionsListByCountryId(countryId,regionsList, callbackRegions, cities, callbackCities); 
	}
}

// added by vmikhalets DPE-1080#action_22872
function moveValueFromField_1_ToField_2(field_1_id, field_2_id) {
  var field_1 = document.getElementById(field_1_id);
  var field_2 = document.getElementById(field_2_id);
  field_2.value = field_1.value;
}

// added by vmikhalets DPE-1080#action_22872
function showTheRightTab()
{    
  var strCurrentUrl=window.location.search.substr(1, window.location.search.length);
  
    if (strCurrentUrl.indexOf("&postCode=") == -1)  {
    // parameter "postCode" is not present in the URL
    // show TAB "by country"
    hide_element('block_Area_postCode'); 
    show_element('tipAboutCity');
    show_element('searchByCity'); 
    delValue('locationDistance'); 
    moveValueFromField_1_ToField_2('postCode', 'hiddenPostCode');
    delValue('postCode');
    e_post();         
  }
  else {
      if (strCurrentUrl.indexOf("&postCode=&") != -1) {
        // parameter "postCode" is present in the URL but is EMPTY
        // show TAB "by country"
        hide_element('block_Area_postCode'); 
        show_element('tipAboutCity');
        show_element('searchByCity'); 
        delValue('locationDistance'); 
        moveValueFromField_1_ToField_2('postCode', 'hiddenPostCode');
        delValue('postCode');
        e_post();         
      } 
      else {
        // parameter "postCode" is present in the URL and is not EMPTY
        // show TAB "by zip code"       
        hide_element('searchByCity'); 
        show_element('block_Area_postCode'); 
        hide_element('tipAboutCity'); 
        e_city();
      }
  }
}

function showCounties(){
	var countyId = $(COUNTY_ID);
	var countyBlock = $(COUNTY_BLOCK);
	countyId.style.display = "";
	countyBlock.style.display = "";
}

function hideCounties(){
	var countyId = $(COUNTY_ID);
	var countyBlock = $(COUNTY_BLOCK);
	var countiesList = document.getElementById(countyId);
	if (countiesList != null){
		countiesList.options.length = 0;
		countiesList.clear();
	}
	countyId.style.display = "none";
	countyBlock.style.display = "none";
}

function onRegionChange() {
	var countryId = $('seekingCountryId').getValue(null);
	var regionId  = $('seekingRegionId').getValue(null);
	var cities    = $('seekingCityId');
	var counties  = $(COUNTY_ID);
	counties.clear();
	cities.clear();
	counties.options.length = 0;
	cities.options.length = 0;
	if(regionId) {
		
		var callback = function (citiesCount) {
			// This will add option "All Cities" if number of cities more than 1
			if (citiesCount > 1) {
				insertFirstOption(cities, 'All cities', 0, false, false);
			}
		}
		
		var callback2 = function (countiesCount) {
			// This will add option "All Counties" if number of counties more than 1
			if (countiesCount > 1) {
				showCounties();
				insertFirstOption(counties, 'Choose county', 0, false, false);
			}else{
				hideCounties();
				getCitiesListByRegionIdWithGeoInfo(regionId, cities, callback);
			}
		}
	
		getCountiesList(countryId, regionId, counties, callback2);
	}
	else{
		hideCounties();
	}
}

function onCountyChange(){

	var	countyId  = $(COUNTY_ID).getValue(null);
	var cities    = $('seekingCityId');
	
	cities.clear();
	cities.options.length = 0;
	
	if(countyId) {

		var callback = function (citiesCount) {
			// This will add option "All Cities" if number of cities more than 1
			if (citiesCount > 1) {
				insertFirstOption(cities, 'All cities', 0, false, false);
			}

		}
		
		getCitiesListByCountyIdWithGeoInfo(countyId, cities, callback);		
	}
}

function onCityChange(citySelectControl) {

  var areaRangeCityControl = document.getElementById('searchAreaRangeCity');
  var readOnly =true;

  if( (citySelectControl.selectedIndex >= 0) ) {

    var countOfSelectedOptions = 0;

    for (var i = 0; i < citySelectControl.length; i++) {

      if (citySelectControl.options[i].selected) {

        if(++countOfSelectedOptions > 1) {
          //more then 1 city is selected
          citySelectControl.readOnly=true;
                
          break;
        }
        
      }
    }
    
    if(countOfSelectedOptions == 1) {

    readOnly=false;
    areaRangeCityControl.readOnly = readOnly;
      var selectedCityOption = citySelectControl.options[citySelectControl.selectedIndex];
      if (selectedCityOption.getAttribute('hasGeoInformation')=1) {  readOnly=true;}
      
      
    }   
  }
  areaRangeCityControl.readOnly = readOnly;
  //areaRangeCityControl.value="";
  
}
function delValue(id){
var el = document.getElementById(id);
 el.value="";
   
}
function enable_element(elementID){

  var t=document.getElementById(elementID).className = "tabEnabled";
}
function disable_element(elementID){
  var t=document.getElementById(elementID).className = "tabDisabled";
}

function e_post(){


  var t=document.getElementById('byPostCode').className = "tabEnabled";
    var d=document.getElementById('byCity').className = "tabDisabled";
}
function e_city(){
  var t=document.getElementById('byPostCode').className = "tabDisabled";
  var d=document.getElementById('byCity').className = "tabEnabled";
}

function hide_element(elementID){
  var t=document.getElementById(elementID);
  t.style.display= "none";
}
function show_element(elementID){
  var t=document.getElementById(elementID);
  t.style.display= "";
}
  function show_select(elementID) {
    var t=document.getElementById(elementID+'_checkbox');
    if (t.checked == 1) {
    var t2 =document.getElementById(elementID+'_div');
    t2.style.display= "";
    } else {
    var t3=document.getElementById(elementID+'_div');
    t3.style.display = 'none';
    var t4 =document.getElementById(elementID);
    t4.selectedIndex =0;
  }
}

function idEscape(string){
  
  reg = /([\[\]])/g;
  string=string.replace(reg,"\\\\$1");

 return string;
}
function hideUnselected(){


  hide_element('additionalCriteriaButtonOn');
  hide_element('block_Area_postCode');
  var count =0;
  var select_el= $A(document.getElementsByClassName('criteriaSelect'));   
  var i=0;
  var controlIDs =new Array(select_el.size);
  select_el.each(function(s) {
  
     var selectedInd = s.selectedIndex; 
     if(selectedInd<=0)
       {
        controlIDs[count]=s.id; 
        var t=document.getElementById(s.id+'_div'); 
      t.style.display = 'none';         
       } 
     else { 
         var t2= document.getElementById(s.id+'_checkbox');
      t2.checked= 'checked';
      selected_criteria[i]=s.id; i++;
          }
      
    count++; }
   ); 
   var button= document.getElementById('resetButton');   
   button.style.display= "";
   
 }

function resetFormF(){
var ttt=document.getElementById("searchFormHtml"); 
$('seekingCityId').clear();
	$('seekingCityId').options.length = 0;
ttt.reset();
var count =0;
var select_el= $A(document.getElementsByClassName('criteriaSelect'));   
var i=0;
var controlIDs =new Array(select_el.size);
  select_el.each(function(s) {

       var selectedInd = s.selectedIndex;
     if(selectedInd>0)
       {  
        controlIDs[count]=s.id; 
        var t=document.getElementById(s.id+'_div'); 
    
      t.style.display= '';
     var t2= document.getElementById(s.id+'_checkbox');
          t2.checked= 'checked';  
       } else {  var t=document.getElementById(s.id+'_div');  t.style.display = 'none'; }
    count++; }
   );

 }


function hideAllCriteria()
{
  show_element('additionalCriteriaButtonOn'); 
  hide_element('additionalCriteriaButtonOff');      
  hide_element('additionalCriteriasButtons');
  hide_element('additionalCriteriaTable');
}

function showAllCriteria()
{   
  hide_element('additionalCriteriaButtonOn'); 
  show_element('additionalCriteriaTable');
  show_element('additionalCriteriaButtonOff');
  show_element('additionalCriteriasButtons');
}

function reset_criteris(){
var count =0;
var select_el= $A(document.getElementsByClassName('criteriaSelect'));   

var controlIDs =new Array(select_el.size);
  select_el.each(function(s) {
        var t=document.getElementById(s.id+'_div'); 
    var d=document.getElementById(s.id);
    var c=document.getElementById(s.id+'_checkbox');
    d.selectedIndex =0;
    t.style.display = 'none';
        c.checked= '';
    count++; 
  }
   );
 }
Singles.Lib.onLoad(function() { hideUnselected(); showTheRightTab(); });
</script>




<table id="additionalCriteriaTable" width="100%">
                
        
          
      <tbody><tr>
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input id="additionalCriteriaIds[15]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[15]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[15]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Education</label></div>
    </td>
        
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input checked="Unchecked" id="additionalCriteriaIds[13]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[13]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[13]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Occupation</label></div>
    </td>
        
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input  id="additionalCriteriaIds[17]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[17]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[17]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Height</label></div>
    </td>
        
        
    </tr>
        <tr>
    <td align="left" valign="top" width="33%">
          
        <div id="additionalCriteriaIds[15]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
         
                    <select name="eduset[]" size="10" multiple="multiple" id="eduset"  disabled="disabled">
                      <option value="" selected>Any</option>
                      <option value="Not Important">Not Important</option>
                      <option value="No education">No education</option>
                      <option value="High School">High School</option>
                      <option value="Bachelors Degree: Engg., Comp., Arch.,">Bachelor’s Degree: Engg., Comp., Arch.,</option>
                      <option value="Masters Degree: Engg., Comp., Arch.,">Master’s Degree: Engg., Comp., Arch.,</option>
                      <option value="Bachelors Degree: Medicine & Surgery, Dentistry">Bachelor’s Degree: Medicine & Surgery, Dentistry</option>
                      <option value="Masters Degree: Medicine & Surgery, Dentistry">Master’s Degree: Medicine & Surgery, Dentistry</option>
                      <option value="Bachelors Degree: Nursing">Bachelor’s Degree: Nursing</option>
                      <option value="Masters Degree: Nursing">Master’s Degree: Nursing</option>
                      <option value="Bachelors Degree: Law">Bachelor’s Degree: Law</option>
					  
					  <option value="Masters Degree: Law">Master’s Degree: Law</option>
					  <option value="Bachelors Degree: Arts, Science, Commerce">Bachelor’s Degree: Arts, Science, Commerce</option>
					  <option value="Masters Degree: Arts, Science, Commerce">Master’s Degree: Arts, Science, Commerce</option>
					  <option value="Masters Degree: Management">Master’s Degree: Management</option>
					  <option value="Doctorate PhD">Doctorate PhD</option>
					  
					   <option value="Accounting & Fin.: CA, ICWAI">Accounting & Fin.: CA, ICWAI</option>
					    <option value="Indian Civil Service: IAS, IFoS, IPS, IRS">Indian Civil Service: IAS, IFoS, IPS, IRS</option>
						 <option value="Vocational">Vocational</option>
						  <option value="Diploma">Diploma</option>
					     <option value="Other">Other</option>
					   
					  
					  
					  
					  
					  
					  
					  
					  
					  
                    </select>
		 
		 
		 
		 
        </div>
        
    </td>
    <td align="left" valign="top" width="33%">
          
                  <div id="additionalCriteriaIds[13]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">

		  
		  
		  
		<select name="occuset[]" size="10" multiple="multiple" id="occuset" style="width:215px;" disabled="disabled">
                      <option value="" selected="selected">Any</option>
                      <option value="Not working">Not working</option>
                      <option value="Non-mainstream professional">Non-mainstream professional</option>
                      <option value="Accountant">Accountant</option>
                      <option value="Acting Professional">Acting Professional</option>
                      <option value="Actor">Actor</option>
                      <option value="Administration Professional">Administration Professional</option>
                      <option value="Advertising Professional">Advertising Professional</option>
                      <option value="Air Hostess">Air Hostess</option>
                      <option value="Architect">Architect</option>
                      <option value="Artisan">Artisan</option>
                      <option value="Audiologist">Audiologist</option>
                      <option value="Banker">Banker</option>
                      <option value="Beautician">Beautician</option>
                      <option value="Biologist / Botanist">Biologist / Botanist</option>
                      <option value="Business Person">Business Person</option>
                      <option value="Chartered Accountant">Chartered Accountant</option>
                      <option value="Civil Engineer">Civil Engineer</option>
                      <option value="Clerical Official">Clerical Official</option>
                      <option value="Commercial Pilot">Commercial Pilot</option>
                      <option value="Company Secretary">Company Secretary</option>
                      <option value="Computer Professional">Computer Professional</option>
                      <option value="Consultant">Consultant</option>
                      <option value="Contractor">Contractor</option>
                      <option value="Cost Accountant">Cost Accountant</option>
                      <option value="Creative Person">Creative Person</option>
                      <option value="Customer Support Professional">Customer Support Professional</option>
                      <option value="Defense Employee">Defense Employee</option>
                      <option value="Dentist">Dentist</option>
                      <option value="Designer">Designer</option>
                      <option value="Doctor">Doctor</option>
                      <option value="Economist">Economist</option>
                      <option value="Engineer">Engineer</option>
                      <option value="Engineer (Mechanical)">Engineer (Mechanical)</option>
                      <option value="Engineer (Project)">Engineer (Project)</option>
                      <option value="Entertainment Professional">Entertainment Professional</option>
                      <option value="Event Manager">Event Manager</option>
                      <option value="Executive">Executive</option>
                      <option value="Factory worker">Factory worker</option>
                      <option value="Farmer">Farmer</option>
                      <option value="Fashion Designer">Fashion Designer</option>
                      <option value="Finance Professional">Finance Professional</option>
                      <option value="Flight Attendant">Flight Attendant</option>
                      <option value="Government Employee">Government Employee</option>
                      <option value="Health Care Professional">Health Care Professional</option>
                      <option value="Home Maker">Home Maker</option>
                      <option value="Hotel & Restaurant Professional">Hotel & Restaurant Professional</option>
                      <option value="Human Resources Professional">Human Resources Professional</option>
                      <option value="Interior Designer">Interior Designer</option>
                      <option value="Investment Professional">Investment Professional</option>
                      <option value="IT / Telecom Professional">IT / Telecom Professional</option>
                      <option value="Journalist">Journalist</option>
                      <option value="Lawyer">Lawyer</option>
                      <option value="Lecturer">Lecturer</option>
                      <option value="Legal Professional">Legal Professional</option>
                      <option value="Manager">Manager</option>
                      <option value="Marketing Professional">Marketing Professional</option>
                      <option value="Media Professional">Media Professional</option>
                      <option value="Medical Professional">Medical Professional</option>
                      <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                      <option value="Merchant Naval Officer">Merchant Naval Officer</option>
                      <option value="Nurse">Nurse</option>
                      <option value="Occupational Therapist">Occupational Therapist</option>
                      <option value="Optician">Optician</option>
                      <option value="Pharmacist">Pharmacist</option>
                      <option value="Physician Assistant">Physician Assistant</option>
                      <option value="Physicist">Physicist</option>
                      <option value="Physiotherapist">Physiotherapist</option>
                      <option value="Pilot">Pilot</option>
                      <option value="Politician">Politician</option>
                      <option value="Production professional">Production professional</option>
                      <option value="Professor">Professor</option>
                      <option value="Psychologist">Psychologist</option>
                      <option value="Public Relations Professional">Public Relations Professional</option>
                      <option value="Real Estate Professional">Real Estate Professional</option>
                      <option value="Research Scholar">Research Scholar</option>
                      <option value="Retired Person">Retired Person</option>
                      <option value="Retail Professional">Retail Professional</option>
                      <option value="Sales Professional">Sales Professional</option>
                      <option value="Scientist">Scientist</option>
                      <option value="Self-employed Person">Self-employed Person</option>
                      <option value="Social Worker">Social Worker</option>
                      <option value="Software Consultant">Software Consultant</option>
                      <option value="Sportsman">Sportsman</option>
                      <option value="Student">Student</option>
                      <option value="Teacher">Teacher</option>
                      <option value="Technician">Technician</option>
                      <option value="Training Professional">Training Professional</option>
                      <option value="Transportation Professional">Transportation Professional</option>
                      <option value="Veterinary Doctor">Veterinary Doctor</option>
                      <option value="Volunteer">Volunteer</option>
                      <option value="Writer">Writer</option>
                      <option value="Zoologist">Zoologist</option>
                    </select>  
		  
		  
		  
		  
        </div>
        
    </td>
    <td align="left" valign="top" width="33%">
          
                  <div id="additionalCriteriaIds[17]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
		
         <select name="height1" size="4" multiple="multiple" id="additionalCriteriaIds[13]" class="criteriaSelect" disabled="disabled" style="margin:0px; font-family:Arial, Helvetica, sans-serif;width:160px; margin-left:4px;">
            
      <option selected="selected" value="0">Not important</option><option value="12">&lt;4' 11" (150 cm)</option><option value="13">5' 0" (152 cm)</option><option value="14">5' 1" (155 cm)</option><option value="210">5' 2" (157 cm)</option><option value="212">5' 3" (160 cm)</option><option value="213">5' 4" (163 cm)</option><option value="214">5' 5" (165 cm)</option><option value="215">5' 6" (168 cm)</option><option value="216">5' 7" (170 cm)</option><option value="217">5' 8" (173 cm)</option><option value="218">5' 9" (175 cm)</option><option value="219">5' 10" (178 cm)</option><option value="220">5' 11" (180 cm)</option><option value="221">6' 0" (183 cm)</option><option value="222">6' 1" (185 cm)</option><option value="223">6' 2" (188 cm)</option><option value="224">6' 3" (191 cm)</option><option value="225">6' 4" (193 cm)</option><option value="226">6' 5" (196 cm)</option><option value="227">6' 6" (198 cm)</option><option value="228">6' 7" (200 cm)</option><option value="229">6' 8" (203 cm)</option><option value="230">6' 9" (206 cm)</option><option value="231">6' 10" (208 cm)</option><option value="232">6' 11" (211 cm)</option><option value="233">&gt;7' 0" (213 cm)</option>
          </select> </div>
        
    </td>
        
    </tr>
        
          
                
        
          
      <tr>
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input id="additionalCriteriaIds[1]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[1]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[1]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Weight</label></div>
    </td>
        
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input id="additionalCriteriaIds[2]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[2]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[2]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Apperance</label></div>
    </td>
        
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input id="additionalCriteriaIds[3]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[3]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[3]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Lifestyle</label></div>
    </td>
        
        
    </tr>
        <tr>
    <td align="left" valign="top" width="33%">
          
        <div id="additionalCriteriaIds[1]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
          <select name="Weight" size="4" multiple="multiple" id="additionalCriteriaIds[17]" class="criteriaSelect" disabled="disabled" style="margin:0px; font-family:Arial, Helvetica, sans-serif;width:160px; margin-left:4px;">
            
      <option value="0">Not important</option><option value="234">&lt;100 lbs (45 kg)</option><option value="235">105 lbs (48 kg)</option><option value="236">110 lbs (50 kg)</option><option value="237">115 lbs (52 kg)</option><option value="238">120 lbs (54 kg)</option><option value="239">125 lbs (57 kg)</option><option value="240">130 lbs (59 kg)</option><option value="241">135 lbs (61 kg)</option><option value="242">140 lbs (64 kg)</option><option value="243">145 lbs (66 kg)</option><option value="244">150 lbs (68 kg)</option><option value="245">155 lbs (70 kg)</option><option value="246">160 lbs (73 kg)</option><option value="247">165 lbs (75 kg)</option><option value="248">170 lbs (77 kg)</option><option value="249">175 lbs (79 kg)</option><option value="250">180 lbs (82 kg)</option><option value="251">185 lbs (84 kg)</option><option value="252">190 lbs (86 kg)</option><option value="253">195 lbs (88 kg)</option><option value="254">200 lbs (91 kg)</option><option value="255">205 lbs (93 kg)</option><option value="256">210 lbs (95 kg)</option><option value="257">215 lbs (98 kg)</option><option value="258">220 lbs (100 kg)</option><option value="259">230 lbs (104 kg)</option><option value="260">240 lbs (109 kg)</option><option value="261">250 lbs (113 kg)</option><option value="262">260 lbs (118 kg)</option><option value="263">270 lbs (122 kg)</option><option value="264">280 lbs (127 kg)</option><option value="265">290 lbs (132 kg)</option><option value="266">300 lbs (136 kg)</option><option value="267">310 lbs (141 kg)</option><option value="268">320 lbs (145 kg)</option><option value="269">330 lbs (150 kg)</option><option value="270">340 lbs (154 kg)</option><option value="271">&gt;350 lbs (159 kg)</option>
          </select>
		  
		  
		  
        </div>
        
    </td>
    <td align="left" valign="top" width="33%">
          
        <div id="additionalCriteriaIds[2]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
          
		  <select name="appearanceset[]" size="10" multiple="multiple" style="width:215px;" id="appearanceset" disabled="disabled">
                <option value="" selected="selected">Not Important</option>
                <option value="Attractive">Attractive</option>
                <option value="Very Good Looking">Very Good Looking</option>
                <option value="Big and beautiful">Big and beautiful</option>
                <option value="Inner beauty">Inner beauty</option>
                <option value="Short">Short</option>
                <option value="Slim">Slim</option>
                <option value="Tall">Tall</option>
                <option value="Athletic">Athletic</option>
                <option value="Voluptuous">Voluptuous</option>
                </select>
		  
        </div>
        
    </td>
    <td align="left" valign="top" width="33%">
          
        <div id="additionalCriteriaIds[3]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
         
		 <SELECT name="lifestyle" size="10" multiple="multiple" style="width:215px;" id="lifestyle" disabled="disabled">
                <option value="" selected="selected">Not Important</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Antiques">Antiques</option>
                <option value="Archaeology">Archaeology</option>
                <option value="Arts">Arts</option>
                <option value="Astrology">Astrology</option>
                <option value="Beer">Beer</option>
                <option value="Bikes">Bikes</option>
                <option value="Body art">Body art</option>
                <option value="Bonsai">Bonsai</option>
                <option value="Botanical artists">Botanical artists</option>
                <option value="Botany">Botany</option>
                <option value="Camping">Camping</option>
                <option value="Caravanning">Caravanning</option>
                <option value="Cars">Cars</option>
                <option value="Cat Lovers">Cat Lovers</option>
                <option value="Clubbing">Clubbing</option>
                <option value="Collecting">Collecting</option>
                <option value="Computers">Computers</option>
                <option value="Crafts">Crafts</option>
                <option value="Cuisine">Cuisine</option>
                <option value="Cooking">Cooking</option>
                <option value="Dancing">Dancing</option>
                <option value="Dieting">Dieting</option>
                <option value="Dining Out">Dining Out</option>
                <option value="Dog Lovers">Dog Lovers</option>
                <option value="Drinking">Drinking</option>
                <option value="Eco Issues">Eco Issues</option>
                <option value="Education">Education</option>
                <option value="Exploring">Exploring</option>
                <option value="Farming">Farming</option>
                <option value="Fashion">Fashion</option>
                <option value="Feng Shui">Feng Shui</option>
                <option value="Films">Films</option>
                <option value="Floral Design">Floral Design</option>
                <option value="Flower Shows">Flower Shows</option>
                <option value="Food">Food</option>
                <option value="Garden Design">Garden Design</option>
                <option value="Garden Tours">Garden Tours</option>
                <option value="Gardening">Gardening</option>
                <option value="History">History</option>
                <option value="Holidays">Holidays</option>
                <option value="Homes">Homes</option>
                <option value="Horses">Horses</option>
                <option value="Horticulture">Horticulture</option>
                <option value="Housing">Housing</option>
                <option value="Landscaping">Landscaping</option>
                <option value="Languages">Languages</option>
                <option value="Literature">Literature</option>
                <option value="Motorcycles">Motorcycles</option>
                <option value="Movies & Cinemas">Movies & Cinemas</option>
                <option value="Natural Living">Natural Living</option>
                <option value="Nature">Nature</option>
                <option value="Orchids">Orchids</option>
                <option value="Organics">Organics</option>
                <option value="Outdoor activities">Outdoor activities</option>
                <option value="Performing Arts">Performing Arts</option>
                <option value="Pet Lovers">Pet Lovers</option>
                <option value="Photography">Photography</option>
                <option value="Poetry">Poetry</option>
                <option value="Politics">Politics</option>
                <option value="Psychology">Psychology</option>
                <option value="Radio">Radio</option>
                <option value="Religion">Religion</option>
                <option value="Science">Science</option>
                <option value="Shopping">Shopping</option>
                <option value="Singing">Singing</option>
                <option value="Sports">Sports</option>
                <option value="Television">Television</option>
                <option value="The Countryside">The Countryside</option>
                <option value="Theatre">Theatre</option>
                <option value="Travelling">Travelling</option>
                <option value="Vegans">Vegans</option>
                <option value="Vegetarians">Vegetarians</option>
                <option value="Wildlife">Wildlife</option>
                <option value="Wine enthusiasts">Wine enthusiasts</option>
                <option value="Writing">Writing</option>
                </select>*
		 
		 
		 
		 
		         </div>
        
    </td>
        
    </tr>
        
          
                
        
          
      <tr>
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input id="additionalCriteriaIds[4]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[4]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[4]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Habits</label></div>
    </td>
        
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input id="additionalCriteriaIds[23]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[23]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[23]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Music</label></div>
    </td>
        
    <td align="left" valign="top" width="33%">
      <div style="float:left; "><input id="additionalCriteriaIds[43]_checkbox" class="criteriaCheckBox" onClick="show_select('additionalCriteriaIds[43]')" style="border: medium none;" type="checkbox"></div>
          <div class="memberCriteriaName" style="float:left; padding-bottom:5px;"><label class="criteriaLabel" for="additionalCriteriaIds[43]_checkbox" style=" display: block; margin:0px; font-size:12px; font-size:12px; ">Sports</label></div>
    </td>
        
        
    </tr>
        <tr>
    <td align="left" valign="top" width="33%">
          
        <div id="additionalCriteriaIds[4]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
          
		  <SELECT name="habits" size="10" multiple="multiple" style="width:215px;" id="habits" disabled="disabled">
                <option value="" selected="selected">Not Important</option>
                <option value="Non-drinker">Non-drinker</option>
                <option value="Occasional drinker">Occasional drinker</option>
                <option value="Enjoy drinking">Enjoy drinking</option>
                <option value="Drink to excess">Drink to excess</option>
                <option value="Non-smoker">Non-smoker</option>
                <option value="Quitting smoking">Quitting smoking</option>
                <option value="Smoke occasionally">Smoke occasionally</option>
                <option value="Smoke frequently">Smoke frequently</option>
                <option value="Use drugs">Use drugs</option>
                <option value="Hate drugs">Hate drugs</option>
                </SELECT>*
		  
		  
		  
		          </div>
        
    </td>
    <td align="left" valign="top" width="33%">
          
        <div id="additionalCriteriaIds[23]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
          <SELECT name="music" size="10" multiple="multiple" style="width:215px;" id="music" disabled="disabled">
                <option value="" selected="selected">Not important</option>
                <option value="Rock- Top 40">Rock- Top 40</option>
                <option value="rock-Heavy metal">rock-Heavy metal</option>
                <option value="Rock-Punk">Rock-Punk</option>
                <option value="Rock – Alternative">Rock – Alternative</option>
                <option value="Brit rock">Brit rock</option>
                <option value="Hip hop">Hip hop</option>
                <option value="Rap">Rap</option>
                <option value="Jazz">Jazz</option>
                <option value="Techno">Techno</option>
                <option value="Dance">Dance</option>
                <option value="Disco">Disco</option>
                <option value="Pop">Pop</option>
                <option value="Progressive house">Progressive house</option>
                <option value="House">House</option>
                <option value="New Country">New Country</option>
                <option value="World music mix">World music mix</option>
                <option value="Traditional">Traditional</option>
                <option value="Folk">Folk</option>
                <option value="Blues">Blues</option>
                <option value="Funk">Funk</option>
                <option value="Classical">Classical</option>
                <option value="Easy listening">Easy listening</option>
                <option value="Others">Others</option>
                </SELECT>*
        </div>
        
    </td>
    <td align="left" valign="top" width="33%">
          
        <div id="additionalCriteriaIds[43]_div" style="width: 150px; clear: both; text-align: left; padding-left: 0px; padding-bottom: 15px; display: none;">
         <SELECT name="sports" size="10" multiple="multiple" style="width:215px;" id="sports" disabled="disabled" >
                <option value="" selected="selected">Not Important</option>
                <option value="Aerobics">Aerobics</option>
                <option value="Adventure Racing">Adventure Racing</option>
                <option value="Archery">Archery</option>
                <option value="Athletics">Athletics</option>
                <option value="Auto Racing">Auto Racing</option>
                <option value="Badminton">Badminton</option>
                <option value="Baseball">Baseball</option>
                <option value="Basketball">Basketball</option>
                <option value="Biathlon">Biathlon</option>
                <option value="Bicycling">Bicycling</option>
                <option value="Billiards">Billiards</option>
                <option value="Bodybuilding">Bodybuilding</option>
                <option value="Bowling">Bowling</option>
                <option value="Boxing">Boxing</option>
                <option value="Cheerleading">Cheerleading</option>
                <option value="Cricket">Cricket</option>
                <option value="Croquet">Croquet</option>
                <option value="Curling">Curling</option>
                <option value="Cycling">Cycling</option>
                <option value="Equestrian">Equestrian</option>
                <option value="Extreme Sports">Extreme Sports</option>
                <option value="Fencing">Fencing</option>
                <option value="Fishing">Fishing</option>
                <option value="Fitness">Fitness</option>
                <option value="Football">Football</option>
                <option value="Gambling">Gambling</option>
                <option value="Golf">Golf</option>
                <option value="Gymnaatics">Gymnaatics</option>
                <option value="Hockey">Hockey</option>
                <option value="Horse Racing">Horse Racing</option>
                <option value="Hunting">Hunting</option>
                <option value="Jogging">Jogging</option>
                <option value="Martial Arts">Martial Arts</option>
                <option value="MotorcycleRacing">MotorcycleRacing</option>
                <option value="Netball">Netball</option>
                <option value="Polo">Polo</option>
                <option value="Rowing">Rowing</option>
                <option value="Rugby">Rugby</option>
                <option value="Running">Running</option>
                <option value="Sailing">Sailing</option>
                <option value="Shooting">Shooting</option>
                <option value="Skateboarding">Skateboarding</option>
                <option value="Skating">Skating</option>
                <option value="Skiing">Skiing</option>
                <option value="Snowboarding">Snowboarding</option>
                <option value="Softball">Softball</option>
                <option value="Squash">Squash</option>
                <option value="Surfing">Surfing</option>
                <option value="Swimming and Diving">Swimming and Diving</option>
                <option value="Table Tennis">Table Tennis</option>
                <option value="Tennis">Tennis</option>
                <option value="Track and Field">Track and Field</option>
                <option value="Triathlon">Triathlon</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Walking">Walking</option>
                <option value="Water Polo waterskiing">Water Polo waterskiing</option>
                <option value="Weightlifting">Weightlifting</option>
                <option value="Windsurfing">Windsurfing</option>
                <option value="Winter Sports">Winter Sports</option>
                <option value="Wrestling">Wrestling</option>
                <option value="Yoga">Yoga</option></SELECT>*
        </div>
        
    </td>
        
    </tr>
        
          
                
        
          
        
          
        
        
</tbody></table>	  
			  
			  
			  
			  
			  
			  
			  
			<!--ends--> 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
              <tr class="hline2">
                <td><div align="left"></div></td>
                <td><div align="left">
                    <input name="Submit" type="image" value="Submit" src="pics/search-button.gif" onClick="return validate3();">
                  </div></td>
              </tr>
            </table>
          </form>
        </div>
			
		<!--end left and right div here-->
		
		
		
		<table width="90%" border="0" cellpadding="0" cellspacing="0" class="table_srch" style=" border:none;" >
          <tr >
            <td width="33%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="simplesearch.php">Simple Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="simplesearch.php"><img src="images/icons/search/search.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Search based on the Minimal important criteria that you   would look for in a partner fastest way</td>
              </tr>
            </table></td>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="keyword_search.php">Keyword Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="keyword_search.php"><img src="images/icons/search/search_page.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Enter a word related to your search. For e.g. enter<strong> Software Professional </strong>.</td>
              </tr>
            </table></td>
			<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="edu_search.php" class="bodylink style1">Educational  Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="edu_search.php"><img src="images/icons/search/education_srch.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Search and locates members who are finished higher education that you would look for in a partner. </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="occu_search.php" class="bodylink style1">Occupational Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="occu_search.php"><img src="images/icons/search/prof_srch.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Search based on the Occupation criteria that you   would look for in a partner.</td>
              </tr>
            </table></td>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="id_search.php" class="bodylink style1">Matrimony ID Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="id_search.php"><img src="images/icons/search/id_srch.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Enter Matrimony ID directly helps you to view the profile of a particular ID.</td>
              </tr>
            </table></td>
			<td width="33%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
                <tr>
                  <td align="center"><h3><strong><a href="location_search.php" class="bodylink style1">Location Search </a></strong></h3></td>
                </tr>
                <tr>
                  <td align="center"><a href="location_search.php"><img src="images/icons/search/search_globe.png" width="64" height="64" /></a></td>
                </tr>
                <tr>
                  <td align="center">Search based on the Location criteria that you   would look for in a partner.</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            
			
			
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
  
  
  
  <!--end small menu links-->
		
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
<?php
if(isset($_SESSION['matriid']))
{
	echo '<script type="text/javascript" runat="server">
			document.getElementById("eduset").disabled = false;
			document.getElementById("occuset").disabled = false;
			document.MatriForm.height1.disabled = false;
			document.MatriForm.height2.disabled = false;
			document.MatriForm.Weight.disabled = false;
			document.getElementById("appearanceset").disabled = false;
			document.MatriForm.lifestyle.disabled = false;
			document.MatriForm.habits.disabled = false;
			document.MatriForm.music.disabled = false;
			document.MatriForm.sports.disabled = false;
		</script>';
}
?>  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>
