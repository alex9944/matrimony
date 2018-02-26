<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<?Php 

include("dbconnect.php");



include("include/innerheadersection.php"); ?>



<script src="js/login.js" language="javascript"></script>



<script language="javascript" src="js/timepicker.js"></script>



<script language="javascript" src="js/advanced_search_locations.js" type="text/javascript"> </script>







<!--<script language="javascript" src="js/relcaste.js"></script>-->



<script language="javascript">

function check_phone(field_name)







{







	var i, max, field_info







	field_info = eval("document.MatriForm." + field_name);







	max = field_info.value.length;







	







	for (i = 0; i < max; i++)







	{







		if(isNaN(field_info.value.charAt(i)))







		{







			alert("You Must Enter A Number.");







			field_info.value = "";







			field_info.focus();







			return false;







		}







	}







			return true;







}















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







 function loadvalues()



			 {



				enb('country');



				select_field('country','');



				select_field('state','');



				enb('state');



				select_field('city','');



			 }





function chkmail()

{
if(document.getElementById('EMAIL').value!=''){
mail=document.getElementById('EMAIL').value;

$.post('functions.php?target=chk_mail',{mail:mail}, function(data) {
if(data!=''){
//  document.getElementById('msg').innerHTML=data;
alert(data);
document.getElementById('EMAIL').focus( );
return false;
}
});
}else{
return true;
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



                      <input name="txtName" type="text" class="textbox1"  id="txtName" onkeyup="nospaces(this)" size="40" maxlength="40" style="width:219px;" />



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



                      <select name="dobMonth" class="forminput" style="width:82px;">



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



                      <select  name="dobDay" class="forminput" style="width:57px;">



                        <option value="1" selected="selected">-Date-</option>



                        <?php for($date=1;$date<=31;$date++) { ?>



                        <option value="<?php echo $date;?>"><?php echo $date;?></option>



                        <?php } ?>



                      </select>



                      <select name="dobYear" class="forminput" style="width:76px;" onChange="updateDay('year','MatriForm','dobYear','dobMonth','dobDay');">



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



                      <!--<input name="NOOFCHILDREN" id="NOOFCHILDREN" size="40" maxlength="40" onkeyup="nospaces(this)" type="text" class="textbox1" />-->



					  <select style="width:220px;"  class="forminput" name="NOOFCHILDREN">



                                    <option selected="" value="">- Select -</option>



                                    <option value="0">None</option>



                                    <option value="One">1</option>



                                    <option value="Two">2</option>



                                    <option value="Three">3</option>



                                    <option value="Four and above">4 and above</option>



                                  </select>



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



                      <input name="txtSubcaste" id="txtSubcaste" size="40" maxlength="50" onblur="javascript:this.value=this.value.toLowerCase();" type="text" class="textbox1" style="width:219px;"/>



                    </div>



                    <div align="left"></div></td>



                </tr>



				<!----added by Arunkumar on 28-11-2011-->



				<tr class="hline2">



                <td><div align="left">&nbsp;&nbsp;Country Living in </div></td>



                <td><div align="left">



                    <select name="country" class="forminput" id="select_country" style="width:220px;" onChange="javascript:enb('country');">



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



                <td><div align="left">&nbsp;&nbsp;State</div></td>



                <td><div align="left"> <select name="State" class="forminput" id="select_state" style="width:220px;" onChange="javascript:enb('state');">



                        <option value=" " >-- Select --</option>



                      </select>



                    </div></td>



              </tr>



              <tr class="hline2">



                <td><div align="left">&nbsp;&nbsp;City</div></td>



                <td><div align="left">  <select name="City" class="forminput" id="select_city" style="width:220px;" onChange="javascript:enb('city');" >



                        <option value=" " selected="true">-- Select --</option>



                      </select>



                    </div></td>



              </tr>	

			<tr class="hline2">

                  <td><div align="left">* Phone</div></td>

                  <td><div align="left">

                      <input name="txtCC" type="text" class="forminput" id="txtCC" style="width:30px;" onFocus="if (this.value == '91') this.value = '';" onKeyUp="check_phone('txtCC')" value="+91" size="10" maxlength="10">

                      -

                      <input name="txtAC" type="text" class="forminput" id="txtAC" size="10" maxlength="10" style="width:40px;" onFocus="if (this.value == 'Area Code') this.value = '';" value="Area Code" onKeyUp="check_phone('txtAC')">

                      -

                      <input name="txtPhone" type="text" class="forminput" id="txtPhone" size="10" maxlength="10" style="width:123px;" onKeyUp="check_phone('txtPhone')">

                    </div></td>

                </tr>

                <tr class="hline2">

                  <td><div align="left">&nbsp;&nbsp;Mobile </div></td>

                  <td><div align="left">

                      <input name="txtMobile" type="text" class="textbox1" id="txtMobile" size="40" maxlength="40" style="width:217px;" onKeyUp="check_phone('txtMobile')">

                    </div></td>

                </tr>

			    <tr class="hline2" style="display:none;">



                  <td><div align="left">&nbsp;Other Country </div></td>



                  <td><div align="left">



                      <input name="text3" type="text" id="country_text" disabled="true" style="position: static" style="width:219px;"/>



                    </div></td>



                </tr>



                <tr class="hline2" style="display:none;">



                  <td><div align="left">&nbsp;Other State</div></td>



                  <td><div align="left">



                      <input name="text2" type="text" id="state_text" disabled="true" style="position: static" style="width:219px;" />



                    </div></td>



                </tr>



                <tr class="hline2" style="display:none;">



                  <td><div align="left">&nbsp;Other City </div></td>



                  <td><div align="left">



                      <input name="text" type="text" id="city_text" disabled="true" style="position: static"  style="width:219px;"/>



                      <input type="hidden" name="ddlSelectCountry" id="ddlSelectCountry" />



                      <input type="hidden" name="ddlSelectState" id="ddlSelectState" />



                      <input type="hidden" name="ddlSelectCity" id="ddlSelectCity" />



                    </div></td>



                </tr>	 







				<!-- ends here --->



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



                      <input name="EMAIL" id="EMAIL" size="40" maxlength="40"  onblur="javascript:this.value=this.value.toLowerCase();" type="text" class="textbox1" style="width:219px;" /><span id="msg" style="color:#CC0000"></span>



                    </div></td>



                </tr>



                <tr class="hline2">



                  <td ><div align="left">* Confirm Email</div></td>



                  <td ><div align="left">



                      <input name="EMAILconfirm" id="EMAILconfirm" size="40" maxlength="40" onblur="javascript:this.value=this.value.toLowerCase();" type="text" style="width:219px;" class="textbox1" />



                    </div></td>



                </tr>



                <tr class="hline2">



                  <td align="left" ><div align="left">* Password</div></td>



                  <td ><div align="left">



                      <input name="txtp" id="txtp" size="40" maxlength="10" onkeyup="nospaces(this)"  style="width:219px;height:18px;" type="password" />



                    </div></td>



                </tr>



                <tr class="hline2">



                  <td ><div align="left">* Confirm Password</div></td>



                  <td ><div align="left">



                      <input name="txtcp" id="txtcp" size="40" maxlength="10" onkeyup="nospaces(this)" type="password"  style="width:219px; height:18px;" />



                    </div></td>



                </tr>



                



                <tr>



                  <td ><div align="left"></div></td>



                  <td>

				  <table cellpadding="0" cellspacing="0">

				  <tr><td>



                      <input name="txtAccept" id="txtAccept" value="I Accept  the Terms and Conditions" type="checkbox" />

</td><td width="5"></td><td>

                      <a href="terms_con.php" target="_blank">I Accept the terms and Conditions </a></td>

					  </tr>

					  </table>

					  



</td>

                </tr>



                <tr>



                  <td   valign="center">&nbsp;</td>



                  <td   valign="top" width="500">&nbsp;</td>



                </tr>



                <tr>



                  <td colspan="3"   height="7"><div align="center">



                      <div align="center"><!-- <a href="#" class="button-small square-orange uppercase float_right" style="float:none; clear:both; margin:5px auto;"><span></span> Continue </a>--><span class=" span"></span>



                        <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Continue" alt="Continue" onclick="return chkmail();">



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



