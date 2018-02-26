<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>

<script language="javascript" src="js/educationsearch.js"></script>

<script language="javascript" src="js/edu_search_location.js" type="text/javascript"> </script>

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

 <!--  <div id="breadcrumb">

    <ul class="breadcrumbs">

      <li class="left"></li>

      <li class="center">

        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?></span> </div>

		<div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a>				        </div>

      </li>

      <li class="right"></li>

    </ul>

  </div>
 -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->

  
<div class="container">
  <div id="content_area" class="content-bg">

    <?php include("include/searchleftside.php"); ?>
<div class="col-md-9">
    <div id="inner_right"> 

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 

      <a name="top" id="top"></a>

      <div class="profile_block">

        <div class="header">

        <h2 class="float_left title">

          <span style="color:#333;" class="black">Matrimonial - </span>Educational Search

        </h2>

        </div>

        <div class="body">

          <table cellspacing="5" cellpadding="5" border="0" width="100%">

	        <tbody><tr>

    	        <td width="80" height="80"><img align="left" width="64" vspace="10" hspace="10" height="64" src="images/icons/search/education_srch.png"></td>

                <td>Search based on a Educationa criteria one would look for in a   partner. Results can be viewed as Thumbnail View, Full View. If you like a profile you can Express Interest or Send Mail.</td>

            </tr></tbody>

          </table>

          <form action="edusearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >

            <table width="100%" border="0" cellpadding="3" cellspacing="2" class="tbl_profiledetails">

				<tr>

                  <td height="20" colspan="2"><div align="right" class="hline3">Note: All fields marked <span class="Alert">*</span> are Optional</div></td>
                </tr>

              <tr class="hline2">

                <td><div align="left">Looking for </div></td>

                <td><div align="left">

                    <input name="txtGender" type="radio" value="Male" <? if($_SESSION['gender']=='Female') {  ?>  checked="checked" <? } if(!isset($_SESSION['gender'] ) ) echo "checked"; ?>>

                    Male 

                    

                    &nbsp;

                    <input name="txtGender" type="radio" value="Female" <? if($_SESSION['gender']=='Male') {  ?>  checked="checked" <? } ?>>

                    Female </div></td>
              </tr>

              <tr class="hline2">

                <td><div align="left">Age</div></td>

                <td><div align="left">From

                    <INPUT name="txtSAge" class="textbox1" id="txtSAge" value="18" size="2" maxLength="2" onKeyUp="check_Age('txtSAge')">

                    &nbsp; to &nbsp;

                    <INPUT name="txtEAge" class="textbox1" id="txtEAge" value="60" size="2" maxLength="2" onKeyUp="check_Age('txtEAge')" >

                    years </div></td>
              </tr>

              <tr class="hline2">
                <td><div align="left">Religion</div></td>
                <td><div align="left">
                    <select onchange="caste_resetRF(this.value)" class="selectfield" style="width:215px;" size="1" id="religion" name="religion">
                        <option selected="" value="0">-Select-</option>
						<option value="1" >Hindu</option>
						<option value="2" >Muslim - Shia</option>
						<option value="3" >Muslim - Sunni</option>
						<option value="4" >Muslim - Others</option>
						<option value="5" >Christian - Catholic</option>
						<option value="6" >Christian - Orthodox</option>
						<option value="7" >Christian - Protestant</option>
						<option value="8" >Christian - Others</option>
						<option value="9" >Sikh</option>
						<option value="10" >Jain - Digambar</option>
						<option value="11" >Jain - Shwetambar</option>
						<option value="12" >Jain - Others</option>
						<option value="13" >Parsi</option>
						<option value="14" >Buddhist</option>
						<option value="15" >Inter-Religion</option>
						<option value="16" >No Religious Belief</option></select>

                    </select>
                </div></td>
              </tr>
              <tr class="hline2">
                <td>Mother Tongue</td>
                <td><select onchange="do_request(this.value);" class="selectfield" style="width:215px;" size="1" id="Language" name="Language">
                    <option selected="selected" value="0">-Select-</option>
                    <option value="1">Arunachali</option>
                    <option value="2">Assamese</option>
                    <option value="3">Awadhi</option>
                    <option value="4">Bengali</option>
                    <option value="5">Bhojpuri</option>
                    <option value="6">Brij</option>
                    <option value="7">Bihari</option>
                    <option value="53">Badaga</option>
                    <option value="8">Chatisgarhi</option>
                    <option value="9">Dogri</option>
                    <option value="10">English</option>
                    <option value="11">French</option>
                    <option value="12">Garhwali</option>
                    <option value="13">Garo</option>
                    <option value="14">Gujarati</option>
                    <option value="15">Haryanvi</option>
                    <option value="16">Himachali/Pahari</option>
                    <option value="17">Hindi</option>
                    <option value="18">Kanauji</option>
                    <option value="19">Kannada</option>
                    <option value="20">Kashmiri</option>
                    <option value="21">Khandesi</option>
                    <option value="22">Khasi</option>
                    <option value="23">Konkani</option>
                    <option value="24">Koshali</option>
                    <option value="25">Kumoani</option>
                    <option value="26">Kutchi</option>
                    <option value="27">Lepcha</option>
                    <option value="28">Ladacki</option>
                    <option value="29">Magahi</option>
                    <option value="30">Maithili</option>
                    <option value="31">Malayalam</option>
                    <option value="32">Manipuri</option>
                    <option value="33">Marathi</option>
                    <option value="34">Marwari</option>
                    <option value="35">Miji</option>
                    <option value="36">Mizo</option>
                    <option value="37">Monpa</option>
                    <option value="38">Nicobarese</option>
                    <option value="39">Nepali</option>
                    <option value="40">Oriya</option>
                    <option value="41">Punjabi</option>
                    <option value="42">Rajasthani</option>
                    <option value="43">Sanskrit</option>
                    <option value="44">Santhali</option>
                    <option value="45">Sindhi</option>
                    <option value="46">Sourashtra</option>
                    <option value="47">Tamil</option>
                    <option value="48">Telugu</option>
                    <option value="49">Tripuri</option>
                    <option value="50">Tulu</option>
                    <option value="51">Urdu</option>
                  </select>
                </td>
              </tr>
              <tr class="hline2">
                <td><div align="left" id="caste">Caste/Division </div></td>
                <td><div align="left" id="caste_rel">
                    <select name="caste" class="forminput" id="caste" style="width:215px;" disabled="disabled" >
                      <option>Others</option>
                    </select>
                </div></td>
              </tr>


              <tr class="hline2">

                <td><div align="left">Country</div></td>

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

			  <!--<tr class="hline2">

                <td><div align="left">City</div></td>

                <td><div align="left">  <select name="City" class="forminput" id="select_city" style="width:215px;" onChange="javascript:enb('city');" >

                        <option value=" " selected="true">-- Select --</option>

                      </select>

                    </div></td>

              </tr>-->

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

                <td><div align="left">Education</div></td>

                <td><div align="left">

                    <select name="txtEdu" class="forminput" id="txtEdu" style="width:215px;">

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
                   </select>

                  </div></td>
              </tr>

              <tr class="hline2">

                <td><div align="left">Show *</div></td>

                <td><div align="left">

                    <input name="txtphoto" type="checkbox" id="txtphoto" value="Show profiles with Photo">

                    Profiles with Photo<br /><input name="txthoros" type="checkbox" id="txthoros" value="Show profiles with Horoscope">

                    Profiles with Horoscope </div></td>
              </tr>

              <tr class="hline2">

                <td><div align="left"></div></td>

                <td><div align="left">

                    <!--<input name="Submit" type="image" value="Submit" src="pics/search-button.gif">-->

					

					

					<input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:75px;" name="Submit" type="image" value="Search" >

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

            <td width="33%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">

              <tr>

                <td align="center"><h3><strong><a href="adv_search.php">Advanced Search</a></strong></h3></td>

              </tr>

              <tr>

                <td align="center"><a href="adv_search.php"><img src="images/icons/search/search_male_user.png" width="64" height="64" /></a></td>

              </tr>

              <tr>

                <td align="center">The most comprehensive search that searches across all   criteria.</td>

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

			<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">

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

  </div>
  </div>

  <!-- CONTENT AREA ENDS HERE ###################################################  --> 

  

  <!-- FOOTER STARTS HERE ###################################################  -->

  <?php include("include/footermenu.php") ?>

  <!-- FOOTER ENDS HERE ###################################################  --> 

  

</div>
<script>
function do_request(val) {

document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
 $.post('generateCaste.php?lang='+val+'&rel='+document.getElementById('religion').selectedIndex,'', function(data) {
	document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
	if(data!=''){
	
	document.getElementById('caste_rel').innerHTML = data;
	}});
	//return true;
	


}
</script>

<script>
function caste_resetRF(val){ 
alertdo(val);
document.getElementById('Language').selectedIndex = 0;
}

function alertdo(flag)  { 
if(flag == 1) {
document.getElementById("caste").innerHTML = 'Caste/Division ';
} else if(flag == 2  || flag == 10 || flag == 11) {
document.getElementById("caste").innerHTML = 'Sect/Division';
} else if(flag == 12 || flag == 13  || flag == 14 || flag == 3) {
document.getElementById("caste").innerHTML = 'Denomination/Division';
} else {
document.getElementById("caste").innerHTML = 'Caste/Division ';
}


}

</script>
</body>

</html>