<? session_start(); ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<?Php include("include/innerheadersection.php"); 







include('dbconnect.php'); 



 $user_id = $_SESSION['matriid'];



$userdata = mysql_query("SELECT subscribe FROM register where MatriID='$user_id'") 



or die(mysql_error()); 



$info = mysql_fetch_array( $userdata ); 



if($info['subscribe'] != 1) 



$disable = 'disabled="disabled"';











?>



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



    </script>



</head>







<body>



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



                  <td height="20" colspan="2">

				  <div align="left" class="hline3">

				  <table>

				  <tr><td nowrap="nowrap">

				  <span class="advsubtitle" style="color:#333;">Select Basic Information</span></td>

				  <td width="115"></td>

				  <td>

				  <table>

				  <tr><td>

				  <img src="images/question.gif" border="0" />

				  </td>

				  

				  <td style="padding-left:5px;">

				  <span>Note: If you want to get back your initial search criteria please <a href="simplesearch.php">Click Here</a></span>				  </td></tr></table>				  </td>
				  </tr>
				  </table>
				  </div>				  </td>
                </tr>



                <tr class="hline2">



                <td><div align="left">Looking for </div></td>



                <td><div align="left">



                    <input name="gender" type="radio" class="forminput" value="Male" <? if($_SESSION['gender']=='Female') {  ?>  checked="checked" <? } if(!isset($_SESSION['gender'] ) ) echo "checked"; ?>>



                    Male 



                    



                    &nbsp;



                    <input name="gender" type="radio" class="forminput" value="Female" <? if($_SESSION['gender']=='Male') {  ?>  checked="checked" <? } ?>>



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



                  </div></td>



              </tr>



			  <tr class="hline2">



                <td><div align="left">Mother Tongue</div></td>



                <td><div align="left">
                  <select onchange="do_request(this.value);" class="selectfield" style="width:215px;" size="1" id="Language" name="Language"><option selected="" value="0">-Select-</option><option value="1">Arunachali</option><option value="2">Assamese</option><option value="3">Awadhi</option><option value="4">Bengali</option><option value="5">Bhojpuri</option><option value="6">Brij</option><option value="7">Bihari</option><option value="53">Badaga</option><option value="8">Chatisgarhi</option><option value="9">Dogri</option><option value="10">English</option><option value="11">French</option><option value="12">Garhwali</option><option value="13">Garo</option><option value="14">Gujarati</option><option value="15">Haryanvi</option><option value="16">Himachali/Pahari</option><option value="17">Hindi</option><option value="18">Kanauji</option><option value="19">Kannada</option><option value="20">Kashmiri</option><option value="21">Khandesi</option><option value="22">Khasi</option><option value="23">Konkani</option><option value="24">Koshali</option><option value="25">Kumoani</option><option value="26">Kutchi</option><option value="27">Lepcha</option><option value="28">Ladacki</option><option value="29">Magahi</option><option value="30">Maithili</option><option value="31">Malayalam</option><option value="32">Manipuri</option><option value="33">Marathi</option><option value="34">Marwari</option><option value="35">Miji</option><option value="36">Mizo</option><option value="37">Monpa</option><option value="38">Nicobarese</option><option value="39">Nepali</option><option value="40">Oriya</option><option value="41">Punjabi</option><option value="42">Rajasthani</option><option value="43">Sanskrit</option><option value="44">Santhali</option><option value="45">Sindhi</option><option value="46">Sourashtra</option><option value="47">Tamil</option><option value="48">Telugu</option><option value="49">Tripuri</option><option value="50">Tulu</option><option value="51">Urdu</option></select>
                </div></td>
              </tr>



              <tr class="hline2">
                <td><div align="left" id="caste">Caste/Division </div></td>
                <td><div align="left" id="caste_rel"><select name="caste" class="forminput" id="caste" style="width:215px;" disabled="true" >

                        <option>Others</option>
                      </select></div></td>
              </tr>
              <tr class="hline2">



                <!--<td><div align="left"></div></td>



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



                    </div></td>-->
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



                <td><div align="left">Show <span class="Alert"></span></div></td>



                <td><div align="left">



                    <input name="photo" type="checkbox" id="photo" value="photo">



                    Profiles with Photo<br /><input name="txthoros" type="checkbox" id="txthoros" value="Show profiles with Horoscope">



                    Profiles with Horoscope </div></td>
              </tr>

















			  <!--<tr>



                  <td height="20" colspan="2"><div align="left" class="hline3"><span class="advsubtitle" style="color:#333;">Select Advanced Criteria</span></div></td>



              </tr>-->

<tr>



                  <td height="20" colspan="2">

				  <div align="left" class="hline3">

				  <table>

				  <tr><td>

				  <span class="advsubtitle" style="color:#333;">Select Advanced Criteria</span></td>

				  <td width="115"></td>

				  <td>

				  <table>

				  <tr><td>

				  <img src="images/question.gif" border="0" />

				  </td>

				  

				  <td style="padding-left:5px;">

				  <span>Hint: please hold <strong style="font-weight:normal; color:#A50050; font-size:12px;">CTRL-KEY</strong> and click to select more than one item</span>				  </td></tr></table>				  </td>
				  </tr>
				  </table>
				  </div>				  </td>
                </tr>
			  </table>



			  <table width="100%" cellpadding="0" cellspacing="0">



			  <tr>



                  <td height="20" colspan="2" valign="top"><div align="left">* [For paid members only - upgrade your membership now! - <a href="membershipform.php" style="text-decoration:underline;">Upgrade Now</a> ]</div></td>



              </tr>



              

			  <tr height="10"></tr>

			  <tr>



			  	<td>



				<tr class="hline2">



							<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[15]_checkbox"   class="criteriaCheckBox" 
                                                      <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[15]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?>
                            
                             style="border:none;"> Education</div></td>



							<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[16]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[16]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Occupation</div></td>



							<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[01]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[01]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Annual income</div></td>

							

							

							



				</tr>



						<tr>



						<td height="15">



						</td>



						</tr>

						

						



						<tr class="hline2">



							<td>



								<div id="additionalCriteriaIds[15]_div"   style="align:left;display:none;">

					<select multiple="multiple" size="10" id="eduset" style="width:215px; background-color: #FFEEDC;" <?=$disable?> name="eduset[]">



                     <option value="" selected="selected">Any</option>



						<option value="Not Important">Not Important</option>



						<option value="No education">No education</option>



						<option value="High School">High School</option>



						<option value="Bachelor's Degree: Engg., Comp., Arch.,">Bachelor's Degree: Engg., Comp., Arch.,</option>



						<option value="Master's Degree: Engg., Comp., Arch.,">Master's Degree: Engg., Comp., Arch.,</option>



						<option value="Bachelor's Degree: Medicine &amp; Surgery, Dentistry">Bachelor's Degree: Medicine &amp; Surgery, Dentistry</option>



						<option value="Master's Degree: Medicine &amp; Surgery, Dentistry">Master's Degree: Medicine &amp; Surgery, Dentistry</option>



						<option value="Bachelor's Degree: Nursing">Bachelor's Degree: Nursing</option>



						<option value="Master's Degree: Nursing">Master's Degree: Nursing</option>



						<option value="Bachelor's Degree: Law">Bachelor's Degree: Law</option>



						<option value="Master's Degree: Law">Master's Degree: Law</option>



						<option value="Bachelor's Degree: Arts, Science, Commerce">Bachelor's Degree: Arts, Science, Commerce</option>



						<option value="Master's Degree: Arts, Science, Commerce">Master's Degree: Arts, Science, Commerce</option>



						<option value="Bachelor's Degree: Management">Bachelor's Degree: Management</option>



						<option value="Master's Degree: Management">Master's Degree: Management</option>



						<option value="Doctorate PhD">Doctorate PhD</option>



						<option value="Accounting &amp; Fin.: CA, ICWAI">Accounting &amp; Fin.: CA, ICWAI</option>



						<option value="Indian Civil Service: IAS, IFoS, IPS, IRS">Indian Civil Service: IAS, IFoS, IPS, IRS</option>



						<option value="Vocational">Vocational</option>



						<option value="Diploma">Diploma</option>



						<option value="Other">Other</option>







                      </select>

									<!--<select name="eduset[]" size="10" multiple="multiple" id="eduset" style="width:150px; background-color: #FFEEDC;" <?=$disable?>>



									<option value="" selected="selected" >Any</option>



									<option value="Bachelors">Bachelors</option>



									<option value="Masters">Masters</option>



									<option value="Doctorate">Doctorate</option>



									<option value="Diploma">Diploma</option>



									<option value="Undergraduate">Undergraduate</option>



									<option value="Associates degree">Associates degree</option>



									<option value="Honours degree">Honours degree</option>



									<option value="Trade school">Trade school</option>



									<option value="High school">High school</option>



									<option value="Less than high school">Less than high school</option>



									</select>-->



								</div>



							</td>



							<td><div id="additionalCriteriaIds[16]_div"   style="align:left;display:none;">



                    <select name="occuset[]" size="10" multiple="multiple" id="occuset" style="width:215px;background-color: #FFEEDC;" <?=$disable?>>



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



                  </div></td>



				  <td>

				  <div id="additionalCriteriaIds[01]_div"   style="align:left;display:none;">

					<select multiple="multiple" size="10" id="annuals" style="width:215px; background-color: #FFEEDC;" <?=$disable?> name="annuals[]">

<option value="" selected="selected">Any</option>

                        

						



                        <optgroup label="Income in Indian Rupees"></optgroup>



                        <!--<optgroup label="Income in Indian Rupees">-->

						

						<!--<option value="" style="font-weight:bold; font-style:italic;"></option>-->



                        <option value="Under   MYR.50,000">Under   MYR.50,000</option>



                        <option value="MYR.50,001 - 1,00,000">MYR.50,001 - 1,00,000</option>



                        <option value="MYR.1,00,001 - 2,00,000">MYR.1,00,001 - 2,00,000</option>



                        <option value="MYR.2,00,001 -   3,00,000">MYR.2,00,001 -   3,00,000</option>



                        <option value="MYR.3,00,001 - 4,00,000">MYR.3,00,001 - 4,00,000</option>



                        <option value="MYR.4,00,001 - 5,00,000">MYR.4,00,001 - 5,00,000</option>



                        <option value="MYR.5,00,001 -   7,50,000">MYR.5,00,001 -   7,50,000</option>



                        <option value="MYR.7,50,001 - 10,00,000">MYR.7,50,001 - 10,00,000</option>



                        <option value="MYR.10,00,001 and above">MYR.10,00,001 and above</option>



                        <!--</optgroup>-->



                        <optgroup label=""></optgroup>



                        <optgroup label="Income in US Dollars"></optgroup>

<!--<option value="" style="font-weight:bold; font-style:italic;">Income in US Dollars</option>

-->                        <option value="Under $25,000">Under $25,000</option>



                        <option value="$25,001 - 50,000">$25,001 - 50,000</option>



                        <option value="$50,001 - 75,000">$50,001 - 75,000</option>



                        <option value="$75,001 - 100,000">$75,001 - 100,000</option>



                        <option value="$100,001 - 150,000">$100,001 - 150,000</option>



                        <option value="$150,001 -   200,000">$150,001 -   200,000</option>



                        <option value="$200,001 and above">$200,001 and above</option>



                        <!--</optgroup>-->



                        <!--<optgroup label=""></optgroup>-->



                        <option value="No Income">No Income</option>



                    </select>

				  

				  </div>

				  </td>



						</tr>



						<tr>



						<td height="15">



						</td>



						</tr>



						<tr class="hline2">

						<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[17]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[17]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Height</div></td>



						<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[18]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[18]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Weight</div></td>



						<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[19]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[19]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Appearance</div></td>



						



						</tr>



						<tr>



						<td height="15">



						</td>



						</tr>



						<tr class="hline2">

						<td>

<div id="additionalCriteriaIds[17]_div"   style="align:left;display:none;">



                  <select name="height1" class="forminput" id="height1"  multiple="multiple"  style="width:215px;height: 129px; background-color: #FFEEDC;" <?=$disable?>>



				



				<option value="0" selected="selected">Any</option><option value="12">&lt;4' 11" (150 cm)</option><option value="13">5' 0" (152 cm)</option><option value="14">5' 1" (155 cm)</option><option value="210">5' 2" (157 cm)</option><option value="212">5' 3" (160 cm)</option><option value="213">5' 4" (163 cm)</option><option value="214">5' 5" (165 cm)</option><option value="215">5' 6" (168 cm)</option><option value="216">5' 7" (170 cm)</option><option value="217">5' 8" (173 cm)</option><option value="218">5' 9" (175 cm)</option><option value="219">5' 10" (178 cm)</option><option value="220">5' 11" (180 cm)</option><option value="221">6' 0" (183 cm)</option><option value="222">6' 1" (185 cm)</option><option value="223">6' 2" (188 cm)</option><option value="224">6' 3" (191 cm)</option><option value="225">6' 4" (193 cm)</option><option value="226">6' 5" (196 cm)</option><option value="227">6' 6" (198 cm)</option><option value="228">6' 7" (200 cm)</option><option value="229">6' 8" (203 cm)</option><option value="230">6' 9" (206 cm)</option><option value="231">6' 10" (208 cm)</option><option value="232">6' 11" (211 cm)</option><option value="233">&gt;7' 0" (213 cm)</option>



                  </select>



				  



               



                  </div>

				  </td>

						<td><div id="additionalCriteriaIds[18]_div"   style="align:left;display:none;">



						<select name="Weight"  id="Weight" style="width:215px;height: 129px; background-color: #FFEEDC;" multiple="multiple" <?=$disable?>>



						<option value="0" selected="selected">Any</option>



<option value="234">&lt;100 lbs (45 kg)</option>



<option value="235">105 lbs (48 kg)</option>



<option value="236">110 lbs (50 kg)</option>



<option value="237">115 lbs (52 kg)</option>



<option value="238">120 lbs (54 kg)</option>



<option value="239">125 lbs (57 kg)</option>



<option value="240">130 lbs (59 kg)</option>



<option value="241">135 lbs (61 kg)</option>



<option value="242">140 lbs (64 kg)</option>



<option value="243">145 lbs (66 kg)</option>



<option value="244">150 lbs (68 kg)</option>



<option value="245">155 lbs (70 kg)</option>



<option value="246">160 lbs (73 kg)</option>



<option value="247">165 lbs (75 kg)</option>



<option value="248">170 lbs (77 kg)</option>



<option value="249">175 lbs (79 kg)</option>



<option value="250">180 lbs (82 kg)</option>



<option value="251">185 lbs (84 kg)</option>



<option value="252">190 lbs (86 kg)</option>



<option value="253">195 lbs (88 kg)</option>



<option value="254">200 lbs (91 kg)</option>



<option value="255">205 lbs (93 kg)</option>



<option value="256">210 lbs (95 kg)</option>



<option value="257">215 lbs (98 kg)</option>



<option value="258">220 lbs (100 kg)</option>



<option value="259">230 lbs (104 kg)</option>



<option value="260">240 lbs (109 kg)</option>



<option value="261">250 lbs (113 kg)</option>



<option value="262">260 lbs (118 kg)</option>



<option value="263">270 lbs (122 kg)</option>



<option value="264">280 lbs (127 kg)</option>



<option value="265">290 lbs (132 kg)</option>



<option value="266">300 lbs (136 kg)</option>



<option value="267">310 lbs (141 kg)</option>



<option value="268">320 lbs (145 kg)</option>



<option value="269">330 lbs (150 kg)</option>



<option value="270">340 lbs (154 kg)</option>



<option value="271">&gt;350 lbs (159 kg)</option>



						</select>



						



                </div></td>



						<td><div id="additionalCriteriaIds[19]_div"   style="align:left;display:none;"><select name="appearanceset[]" size="10" multiple="multiple" style="width:215px;background-color: #FFEEDC;" id="appearanceset" <?=$disable?>>



                <option value="" selected="selected">Any</option>



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



                </div></td>



				



						</tr>



						<tr>



						<td height="15">



						</td>



						</tr>



						<tr class="hline2">

<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[20]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[20]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Lifestyle</div></td>



						<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[21]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[21]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Habits</div></td>



						<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[22]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[22]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Music</div></td>



						



						</tr>



						<tr>



						<td height="15">



						</td>



						</tr>



						<tr class="hline2">

<td><div id="additionalCriteriaIds[20]_div"   style="align:left;display:none;"><SELECT name="lifestyle" size="10" multiple="multiple" style="width:215px;background-color: #FFEEDC;" id="lifestyle" <?=$disable?>>



                <option value="" selected="selected">Any</option>



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



                </select>



                </div></td>

						<td><div id="additionalCriteriaIds[21]_div"   style="align:left;display:none;"><SELECT name="habits" size="10" multiple="multiple" style="width:215px;background-color: #FFEEDC;" id="habits" <?=$disable?>>



                <option value="" selected="selected">Any</option>



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



                </SELECT>



                </div></td>



				<td><div id="additionalCriteriaIds[22]_div"   style="align:left;display:none;"><SELECT name="music" size="10" multiple="multiple" style="width:215px;background-color: #FFEEDC;" id="music" <?=$disable?>>



                <option value="" selected="selected">Any</option>



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



                </SELECT>



                </div></td>



				



						</tr>

						

						<tr>



						<td height="15">



						</td>



						</tr>





<tr class="hline2">

<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[23]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[23]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;"> Sports</div></td>



						<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[24]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[24]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?>style="border:none;"> Star Sign</div></td>







<td width="221"><div align="left"><INPUT type="checkbox" id="additionalCriteriaIds[02]_checkbox"   class="criteriaCheckBox"   <? if($_SESSION['payment_status']!="") { ?>onclick="show_select('additionalCriteriaIds[02]')" <? } else {  ?>                           
                            onclick="alert('This feature is only for paid members')" <? } ?> style="border:none;">Chovva Dosham / Manglik</div></td>



				</tr>



						<tr>



						<td height="15">



						</td>



						</tr>

						<tr class="hline2">

						

<td><div id="additionalCriteriaIds[23]_div"   style="align:left;display:none;"><SELECT name="sports" size="10" multiple="multiple" style="width:215px;background-color: #FFEEDC;" id="sports" <?=$disable?> >



                <option value="" selected="selected">Any</option>



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



                <option value="Yoga">Yoga</option></SELECT>



                </div></td>

				

						<td><div id="additionalCriteriaIds[24]_div"   style="align:left;display:none;"><SELECT name="habits" size="10" multiple="multiple" style="width:215px;background-color: #FFEEDC;" id="habits" <?=$disable?>>

						<option value="" selected="selected">Any</option>

						



                        <option value="Ashwini (ASHWATHY)">Ashwini (ASHWATHY)</option>



                        <option value="BHARANI">BHARANI</option>



                        <option value="Krittika (KARTHIKA)">Krittika (KARTHIKA)</option>



                        <option value="ROHINI">ROHINI</option>



                        <option value="Mrigashira (MAKAYIRAM)">Mrigashira (MAKAYIRAM)</option>



                        <option value="Ardra (THIRUVATHIRA)">Ardra (THIRUVATHIRA)</option>



                        <option value="Punarvasu (PUNARTHAM)">Punarvasu (PUNARTHAM)</option>



                        <option value="Pushya (POOYAM)">Pushya (POOYAM)</option>



                        <option value="Ashlesha (AYILYAM)">Ashlesha (AYILYAM)</option>



                        <option value="Makha (MAKAM)">Makha (MAKAM)</option>



                        <option value="Purva Phalguni (POORAM)">Purva Phalguni (POORAM)</option>



                        <option value="Uttara Phalguni (UTRAM)">Uttara Phalguni (UTRAM)</option>



                        <option value="Hasta (ATHAM)">Hasta (ATHAM)</option>



                        <option value="Chitra (CHITHIRA)">Chitra (CHITHIRA)</option>



                        <option value="Swati (CHOTHY)">Swati (CHOTHY)</option>



                        <option value="Vishaka (VISHAKAM)">Vishaka (VISHAKAM)</option>



                        <option value="Anuradha (ANIZHAM)">Anuradha (ANIZHAM)</option>



                        <option value="Jyeshta (TRIKETTA)">Jyeshta (TRIKETTA)</option>



                        <option value="Mula (MOOLAM)">Mula (MOOLAM)</option>



                        <option value="Purva Ashada (POORADAM)">Purva Ashada (POORADAM)</option>



                        <option value="Uttara Ashada (UTTARADAM)">Uttara Ashada (UTTARADAM)</option>



						<option value="Shravana (THIRUVONAM)">Shravana (THIRUVONAM)</option>



						<option value="Dhanista (AVITTAM)">Dhanista (AVITTAM)</option>



						<option value="Sathabhisha (CHATAYAM)">Sathabhisha (CHATAYAM)</option>



						<option value="Purva Bhadrapada (PURURUTTATHY)">Purva Bhadrapada (PURURUTTATHY)</option>



						<option value="Uttara Bhadrapada (UTHRITTATHY)">Uttara Bhadrapada (UTHRITTATHY)</option>



						<option value="Revati (REVATHI)">Revati (REVATHI)</option>



                      </select></div></td>

					  

					  

					  

					  <td>

					  <div id="additionalCriteriaIds[02]_div"   style="align:left;display:none;"><SELECT name="manglik" size="10" multiple="multiple" style="width:215px;background-color: #FFEEDC;" id="manglik" <?=$disable?>>



                <option value="" selected="selected">Any</option>



                <option value="Yes">Yes</option>



                <option value="No">No</option>

				</SELECT>

                </div>

					  

					  </td>

					 



						</tr>













						<tr>



						<td height="15">



						</td>



						</tr>



						<tr>



               



				



                <td align="center"  colspan="3"><div align="center">



                    <!--<input name="Submit" type="image" value="Submit" src="pics/search-button.gif" onClick="return validate3();">-->

					<table cellpadding="0" cellspacing="0">

					<tr><td>

<input class="button-small square-orange uppercase" style="text-align:center; width:65px; padding-top:6px;" name="Submit" type="image" value="Search" onClick="return validate3();">

</td><td>

<input type="reset" name="reset" value="Reset Criteria" style=" height:29px; text-align:center;" class="button-small square-orange uppercase">

                  

				  </td></tr></table>

				  </div></td>



				   <!--<td><div align="left"></div></td>-->



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
</div></div>


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



