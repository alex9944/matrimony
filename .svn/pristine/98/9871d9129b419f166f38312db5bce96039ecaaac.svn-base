<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script src="js/login.js" language="javascript"></script>
<script language="javascript" src="js/timepicker.js"></script>
<!--<script language="javascript" src="js/relcaste.js"></script>-->
<script language="javascript">



	var caste=new Array();

caste["Hindu"] = ["6000 Niyogi", "96K Kokanastha", "24 Manai Chettiar", "24 Manai Telugu-8 Veedu", "24 Manai Telugu-16 Veedu", "Ad Dharmi", "Adi Dravida", "Agarwal", "Agnikul Kshatriya", "Ambalavasi", "Andipandaram", "Arunthathiyar", "Arora", "Arya Vysya", "Arya Samaj", "Baduga", "Balija Naidu", "Baniya", "Bahi", "Bengali", "Besta", "Bhandari", "Boyer", "Brahmin", "Brahmin-Anavil", "Brahmin-Bhatt", "Brahmin-Bhumihar", "Brahmin-Dhiman", "Brahmin-Devadnya", "Brahmin-Dravida", "Brahmin-Garhwali", "Brahmin-Gaur", "Brahmin-Goswami", "Brahmin-Gurukkal", "Brahmin-Iyengar", "Brahmin-Iyer", "Brahmin-Kanyakubj", "Brahmin-Kumoani", "Brahmin-Madhwa", "Brahmin-Maithil", "Brahmin-Namboodiri", "Brahmin-Niyogi", "Brahmin-Pandit", "Brahmin-Sakaldwipi", "Brahmin-Sanadya", "Brahmin-Saraswat", "Brahmin-Saryuparin", "Brahmin-Smartha", "Brahmin-Sri Vishnava", "Brahmin-Tyagi", "Brahmin-Vaidiki", "Chamar", "Chandravanshi Kahar", "Chaudary", "Chaurasia", "Chettiar", "Chhetri", "Coorgi", "Devandra Kula Vellalar", "Devanga", "Devanga Chettiar", "Dheevara", "Dhobi", "Ezhava", "Ezhuthachan", "Gandla", "Garhwali", "Gavara Naidu", "Gavura Naidu", "Goan", "Goud", "Gounder", "Gowda", "Gupta", "Intercaste", "Jaiswal", "Jat", "Jangumar", "Kadava Patel", "Kalar", "Kalinga", "Kalwar", "Kamboj", "Kamma", "Kammavar Naidu", "Kapu", "Karuneegar", "Kashyap", "Kayastha", "Khandelwal", "Khatri", "Kongu Vellala Gounder", "Kori", "Kshatriya", "Kudumbi", "Kulalar", "Kumhar", "Kummari", "Kuravar", "Kumawat", "Kumbara", "Kunbi", "Kurmi Kshatriya", "Kuruba", "Kurumbar", "Leva Patel", "Lingayath", "Lohana", "Malayalee Variar", "Malayalee Namboodiri", "Madiga", "Mahajan", "Mahar", "Mahendra", "Maheshwari", "Mala", "Mali", "Malla", "Mapila", "Maratha", "Maruthuvar", "Meena", "Meenavar", "Mehra", "Meru Darji", "Mudaliyar", "Mudiraj", "Mukkulathor", "Munnuru Kapu", "Muthuraja", "Nagar Brahmin", "Nadar", "Nai", "Naicker", "Naidu", "Nair", "Nair Vaniya", "Nambiar", "Nepali", "Nus-Jat", "Oswal", "Others", "Padmasali", "Pal", "Pandaram", "Panicker", "Parkava Kulam", "Pasi", "Patel", "Patel Kadva", "Patel Leva", "Patnaick", "Perika", "Pillai", "Prajapati", "Rajaka", "Rajput", "Rawat", "Reddy", "Sahu", "Saini", "Saliya", "SC", "Senai Thalaivar", "Settibalija", "Sindhi", "Sindhi-Amil", "Sindhi-Baibhand", "Sindhi-Bhanusali", "Sindhi-Bhatia", "Sindhi-Brahmin", "Sindhi-Chhapru", "Sindhi-Dadu", "Sindhi-Hyderabadi", "Sindhi-Intercaste", "Sindhi-Larai", "Sindhi-Larkana", "Sindhi-Lohana", "Sindhi-Rohiri", "Sindhi-Sahiti", "Sindhi-Sakkhar", "Sindhi-Sehwani", "Sindhi-Shikarpuri", "Sindhi-Thatai", "Sonar", "Sozhiya Vellalar", "Sourashtra", "Sutar", "Swarnakar", "ST", "Tamil Yadava", "Teli", "Teluga", "Thevar", "Thakur", "Thiyya", "Udayar", "Uppara", "Vaddera", "Vaishnav", "Vaishnava", "Vaishya", "Valluvar", "Valmiki", "Vanjara", "Vannar", "Vannia Kula Kashatriyar", "Vanniar", "Vaniya chettiar", "Veera Saivam", "Velama", "Vellalar", "Veluthedathu Nair", "Vilakkithala Nair", "Viswabrahmin", "Viswakarma", "Vokkaliga", "Yadav", "Yogeeswarar"];

caste["Muslim"] = ["Ansari", "Arain", "Awan", "Bohra", "Dekkani", "Dudekula", "Hanafi", "Intercaste", "Jat", "Khoja", "Lebbai", "Malik", "Mapila", "Maraicar", "Memon", "Mughal", "Others", "Pathan", "Qureshi", "Rajput", "Rowther", "Shafi", "Sheikh", "Shia", "Siddiqui", "Sunni Syed", "Unspecified"];

caste["Christian"] = ["Born Again", "Bretheren", "Catholic CMS", "CSI", "Evangelist", "Intercaste", "Jacobite", "Knanaya", "Knanaya Catholic", "Knanaya Jacobite", "Latin Catholic", "Malankara", "Marthoma", "Nadar", "Others", "Pentacost", "Protestant", "Roman Catholic", "Syrian", "Syrian Catholic", "Syrian Jacobite", "Syrian Orthodox", "Syro Malabar", "Unspecified"];

caste["Jain"] = ["Agarwal", "Bania", "Intercaste", "Intercate", "Jaiswal", "Khandelwal", "Kutchi", "No Bar", "Oswal", "Others", "Porwal", "Unspecified", "Vaishya"];

caste["Sikh"] = ["Ahluwalia", "Arora", "Bhatia", "Clean Shaven", "Ghumar", "Gursikh", "Intercaste", "Intercaste", "Jat", "Kamboj", "Khatri", "Kshatriya", "Lubana", "Majabi", "Ramgharia", "No Bar"];

caste["Parsi"]=["Parsi", "Intercaste", "Irani"];





	function get_caste(obj,show_default){



		var sel_caste = '';



		var sel_religion	= obj.options[obj.selectedIndex].text;

		var caste_obj		= obj.form.elements["caste"];

		//CLEAN CASTE SELECT BOX

		while ( caste_obj.options.length ) caste_obj.options[0] = null;



		//ADD FIRST SELECT OPTION

		caste_obj.options[0]=new Option("Does not matter","Does not matter",true);





		//ADD CASTE OPTIONS FOR SELECTED RELIGION

		//if(obj.selectedIndex>0){

			for(j=0;j<caste[sel_religion].length;j++){

				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES

				if(caste[sel_religion][j]!=""){

					var caste_val = caste[sel_religion][j]=="Does not matter"?"Does not matter":caste[sel_religion][j];

					var def_sel   = (sel_caste == caste_val) ? true : false;

                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);



				}

			}

		//}



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
        <div id="breadcrumb_text">You are Here: <span class="pathway">  <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Register Free</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include("include/registersidebar.php"); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Find your suitable life partner - </span>Register Free</h2>
        </div>
        <div class="body">
          <form action="registration2.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >
            <table width="100%" border="0" cellpadding="5" cellspacing="5" class="tbl_profiledetails">
              <tbody>
                <tr>
                  <td colspan="2" width="719"><div align="left"><br />
                      <ul class="ddlist list-tick">
					  <li>This site is dedicated to creating marriages for legal Indian resident or non-resident Indians. If you are interested in creating marriage, welcome, this is the right place! Enter the details of the person intending to get married. However, if you are married, listing yourself as single or otherwise, please avoid the embarrassment and the legal liability of committing fraud. We exercise our rights within the law to protect our members.</li>
                        <li>Please mention accurate information in this form or your profile may be declined.</li>
                        <li>Here is the place where you tell the world how good you look. Spend a bit of time in here and the world will be your oyster. No one really reads bad profiles so put the effort in and you will be rewarded for your time. Trust us it works.</li>
                        <li>When you have finished, you can review your own profile and change anything if it doesn't look good.</li>
                      </ul>
                      <br />
                    </div></td>
                </tr>
                <tr>
                  <td colspan="2"><img src="pics/trans.gif" height="1" /></td>
                </tr>
                <tr>
                  <td colspan="2" ><div align="left">
                      <h3 class="hline3"><strong>Basic Information </strong></h3>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="2" ><img src="pics/blank%281%29.gif" height="1" /></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">* Name</div></td>
                  <td ><div align="left">
                      <input name="txtName" type="text" class="textbox1"  id="txtName" onkeyup="nospaces(this)" size="40" maxlength="40" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">* Gender</div></td>
                  <td ><div align="left">
                      <input name="txtGender" value="Male" type="radio" />
                      Male   					&nbsp;
                      <input name="txtGender" value="Female" type="radio" />
                      Female </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">* Date of Birth</div></td>
                  <td ><div align="left">
                      <select name="dobMonth" class="forminput">
                        <option value="" selected="selected">-Month-</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                      <select  name="dobDay" class="forminput">
                        <option value="1" selected="selected">-Date-</option>
                        <?php for($date=1;$date<=31;$date++) { ?>
                        <option value="<?php echo $date;?>"><?php echo $date;?></option>
                        <?php } ?>
                      </select>
                      <select name="dobYear" class="forminput" onChange="updateDay('year','MatriForm','dobYear','dobMonth','dobDay');">
                        <option value="0" selected="selected">-Year-</option>
                        <?php for($year=1950;$year<=(date("Y")+1);$year++) { ?>
                        <option value="<?php echo $year;?>"><?php echo $year;?></option>
                        <?php } ?>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td   valign="center"><div align="left">* Marital Status</div></td>
                  <td ><div align="left">
                      <input name="MARITAL_STATUS" onclick="return HaveChildnp(this)" value="1" type="radio" />
                      Unmarried &nbsp;
                      <input name="MARITAL_STATUS" onclick="return HaveChildnp(this)" value="2" type="radio" />
                      Widow/Widower &nbsp;
                      <input name="MARITAL_STATUS" onclick="return HaveChildnp(this)" value="3" type="radio" />
                      Divorcee &nbsp;
                      <input name="MARITAL_STATUS" onclick="return HaveChildnp(this)" value="4" type="radio" />
                      Separated </div></td>
                </tr>
                <tr class="hline2">
                  <td   width="210"><div align="left"> &nbsp;&nbsp;No. of Children</div></td>
                  <td   valign="top"><div align="left">
                      <input name="NOOFCHILDREN" id="NOOFCHILDREN" size="40" maxlength="40" onkeyup="nospaces(this)" type="text" class="textbox1" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">&nbsp;&nbsp;Children Living Status</div></td>
                  <td ><div align="left">
                      <input name="CHILDLIVINGWITHME" value="Yes" type="radio" />
                      Living with me &nbsp;
                      <input name="CHILDLIVINGWITHME" onfocus="if(disabled)blur();" value="No" type="radio" />
                      Not living with me </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">* Mother tongue</div></td>
                  <td ><div align="left">
                      <select name="Language" class="forminput" id="Language" maxlength="2" style="width:220px;">
                        <option value="- Select -">- Select -</option>
						<option value="Malayalam">Malayalam</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="Urdu">Urdu</option>
                        <option value="English">English</option>
                        <option value="Punjabi">Punjabi</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Telugu">Telugu</option>
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
                  <td ><div align="left">* Religion</div></td>
                  <td ><div align="left">
                      <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:220px;">
                        <option value="---" selected>- Select -</option>
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
                  <td ><div align="left">* Caste</div></td>
                  <td ><div align="left">
                      <select name="caste" class="forminput" id="caste" style="width:220px;" disabled="true" >
                        <option>Others</option>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">&nbsp;&nbsp;Sub Caste </div></td>
                  <td ><div align="left">
                      <input name="txtSubcaste" id="txtSubcaste" size="40" maxlength="50" onblur="javascript:this.value=this.value.toLowerCase();" type="text" class="textbox1" />
                    </div>
                    <div align="left"></div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">&nbsp;&nbsp;Profile Created by </div></td>
                  <td ><div align="left">
                      <select name="txtPC" class="forminput" id="txtPC" style="width:220px;">
                        <option value="Self">Self</option>
                        <option value="Parents">Parents</option>
                        <option value="Guardian">Guardian</option>
                        <option value="Friends">Friends</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Relatives">Relatives</option>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">&nbsp;&nbsp;Reference by </div></td>
                  <td ><div align="left">
                      <select name="txtRef" class="forminput" id="txtRef" style="width:220px;">
                        <option value="Advertisements">Advertisements</option>
                        <option value="Friends">Friends</option>
                        <option value="Searh Engines">Searh Engines</option>
                        <option value="Others">Others</option>
                      </select>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="2" align="left" ><div align="left">
                      <h3 class="hline3"><strong><br />
                        New Account Information </strong></h3>
                    </div>
                    <div align="left"></div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">* Email</div></td>
                  <td ><div align="left">
                      <input name="EMAIL" id="EMAIL" size="40" maxlength="40" onblur="javascript:this.value=this.value.toLowerCase();" type="text" class="textbox1" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">* Confirm Email</div></td>
                  <td ><div align="left">
                      <input name="EMAILconfirm" id="EMAILconfirm" size="40" maxlength="40" onblur="javascript:this.value=this.value.toLowerCase();" type="text" class="textbox1" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td align="left" ><div align="left">* Password</div></td>
                  <td ><div align="left">
                      <input name="txtp" id="txtp" size="10" maxlength="10" onkeyup="nospaces(this)" type="password" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">* Confirm Password</div></td>
                  <td ><div align="left">
                      <input name="txtcp" id="txtcp" size="10" maxlength="10" onkeyup="nospaces(this)" type="password" />
                    </div></td>
                </tr>
                <tr>
                  <td colspan="2" ><div align="left">
                      <h3 class="hline3"><br />
                        <strong>Socio Religious Attributes </strong></h3>
                    </div>
                    <div align="left"></div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">Gothra(m)</div></td>
                  <td ><div align="left">
                      <input name="txtGothra" id="txtGothra" size="40" maxlength="40" onkeyup="nospaces(this)" type="text" class="textbox1" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">Star (Nakshatra)</div></td>
                  <td ><div align="left">
                      <select name="txtStar" class="forminput" id="txtStar" style="width:220px;">
                        <option value="Does not matter">Does not matter</option>
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
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">Moon Sign / Sun Sign</div></td>
                  <td ><div align="left">
                      <select name="txtMoon" class="forminput" id="txtMoon" style="width:220px;">
                        <option value="Does not matter">Does not matter</option>
                        <option value="Mesha (Medam) / Aries">Mesha (Medam) / Aries</option>
                        <option value="Vrishaba (Edavam) / Taurus">Vrishaba (Edavam) / Taurus</option>
                        <option value="Mithuna (Mithunam) / Gemini">Mithuna (Mithunam) / Gemini</option>
                        <option value="Karkata (Karkatam) / Cancer">Karkata (Karkatam) / Cancer</option>
                        <option value="Simha (Chingam) / Leo">Simha (Chingam) / Leo</option>
                        <option value="Kanya (Kanni) / Virgo">Kanya (Kanni) / Virgo</option>
                        <option value="Thula (Thulam) / Libra">Thula (Thulam) / Libra</option>
                        <option value="Vrichika (Vrichikam) / Scorpio">Vrichika (Vrichikam) / Scorpio</option>
                        <option value="Dhanu / Sagittarius">Dhanu / Sagittarius</option>
                        <option value="Makara  (Makaram)/ Capricorn">Makara  (Makaram)/ Capricorn</option>
                        <option value="Kumbha (Kumbham) / Aquarius">Kumbha (Kumbham) / Aquarius</option>
                        <option value="Meena (Meenam) / Pisces">Meena (Meenam) / Pisces</option>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">Horoscope Match </div></td>
                  <td ><div align="left">
                      <input name="txtHorosMatch" onclick="return HaveChildnp(this)" value="No" type="radio" />
                      No                                    &nbsp;
                      <input name="txtHorosMatch" onclick="return HaveChildnp(this)" value="Yes" type="radio" />
                      Yes                                    &nbsp;
                      <input name="txtHorosMatch" value="Does not matter" type="radio" />
                      Does not matter&nbsp;</div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">Manglik</div></td>
                  <td ><div align="left">
                      <input name="txtManglik" onclick="return HaveChildnp(this)" value="No" type="radio" />
                      No                                    &nbsp;
                      <input name="txtManglik" onclick="return HaveChildnp(this)" value="Yes" type="radio" />
                      Yes                                    &nbsp;
                      <input name="txtManglik" onclick="return HaveChildnp(this)" value="Do" not="" know="" type="radio" />
                      Do not know &nbsp;
                      <input name="txtManglik" onclick="return HaveChildnp(this)" value="Not" applicable="" type="radio" />
                      Not applicable </div></td>
                </tr>
                <tr class="hline2">
                  <td ><div align="left">Place of Birth </div></td>
                  <td ><div align="left">
                      <input name="txtPb" id="txtPb" size="40" maxlength="40" type="text" class="textbox1" />
                    </div></td>
                </tr>
                <tr>
                  <td ><div align="left">Time of Birth </div></td>
                  <td ><div align="left">
                      <table cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr valign="center">
                            <td><div align="left">
                                <input name="txtTb" id="timepicker1" onblur="validateDatePicker(this)" value="9:00 am" size="8" maxlength="8" type="text" class="textbox1" />
                              </div></td>
                            <td><div align="left"><img src="timePickerImages/timepicker.gif" alt="Pick a Time!" onclick="selectTime(this,timepicker1)" border="0" height="20" width="30" /></div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
                <tr>
                  <td ><div align="left"></div></td>
                  <td ><div align="left">
                      <input name="txtAccept" id="txtAccept" value="I Accept  the Terms and Conditions" type="checkbox" />
                      <a href="terms_con.php" target="_blank">I Accept the terms and Conditions </a></div></td>
                </tr>
                <tr>
                  <td   valign="center">&nbsp;</td>
                  <td   valign="top" width="500">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3"   height="7"><div align="center">
                      <div align="center"><!-- <a href="#" class="button-small square-orange uppercase float_right" style="float:none; clear:both; margin:5px auto;"><span></span> Continue </a>--><span class=" span"></span>
                        <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Continue" alt="Continue">
                      </div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
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
