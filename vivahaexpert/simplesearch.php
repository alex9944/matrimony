<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>

<script language="javascript" src="js/simplesearch.js"></script>

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

        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage;?></span> </div>

		

		<div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a>				        </div>

      </li>

      <li class="right"></li>

    </ul>

  </div> -->

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

          <span style="color:#333;" class="black">Matrimonial - </span>Simple Search

        </h2>

        </div>

        <div class="body">

          <table cellspacing="5" cellpadding="5" border="0" width="100%">

	        <tbody><tr>

    	        <td width="80" height="80"><img align="left" width="64" vspace="10" hspace="10" height="64" src="images/icons/search/search.png"></td>

                <td>This search is based on simple criteria (such as Age, Religion and Caste) one would look for in a prospective partner.</td>

            </tr></tbody>

          </table>

          <form action="simplesearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >

            <table width="100%" border="0" cellpadding="3" cellspacing="2" class="tbl_profiledetails">

				<tr>

                  <td height="20" colspan="2"><div align="right" class="hline3">Note: All fields marked <span class="Alert">*</span> are Optional</div></td>
                </tr>            <!--<tr>



        <td colspan="2"><p align="justify">Search based on a simple criteria one would look for in a   partner. Results can be viewed as Thumbnail View, Full View. If you like a profile you can Express Interest or Send Mail.</p></td>



      </tr>

        <tr>

                <td height="20" colspan="2"><strong>Reach out to your spouse with a click of the mouse</strong></td>

              </tr>-->

              <tr class="hline2">

                <td><div align="left">Looking for </div></td>

                <td><div align="left">
				<?php //echo $_SESSION['gender']; ?>

                    <input name="txtGender" type="radio" class="forminput" value="Male" <? if($_SESSION['gender']=='Female') {  ?>  checked="checked" <? } if(!isset($_SESSION['gender'] ) ) echo "checked"; ?>>

                    Male 

                    

                    &nbsp;

                    <input name="txtGender" type="radio" class="forminput" value="Female" <? if($_SESSION['gender']=='Male') {  ?>  checked="checked" <? } ?>>

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
					<option value="16" >No Religious Belief</option>
					</select>

                  </div></td>
              </tr>

              <tr class="hline2">
                <td>Mother tongue</td>
                <td><select onchange="do_request(this.value);" class="selectfield" style="width:215px;" size="1" id="Language" name="Language"><option selected="" value="0">-Select-</option><option value="1">Arunachali</option><option value="2">Assamese</option><option value="3">Awadhi</option><option value="4">Bengali</option><option value="5">Bhojpuri</option><option value="6">Brij</option><option value="7">Bihari</option><option value="53">Badaga</option><option value="8">Chatisgarhi</option><option value="9">Dogri</option><option value="10">English</option><option value="11">French</option><option value="12">Garhwali</option><option value="13">Garo</option><option value="14">Gujarati</option><option value="15">Haryanvi</option><option value="16">Himachali/Pahari</option><option value="17">Hindi</option><option value="18">Kanauji</option><option value="19">Kannada</option><option value="20">Kashmiri</option><option value="21">Khandesi</option><option value="22">Khasi</option><option value="23">Konkani</option><option value="24">Koshali</option><option value="25">Kumoani</option><option value="26">Kutchi</option><option value="27">Lepcha</option><option value="28">Ladacki</option><option value="29">Magahi</option><option value="30">Maithili</option><option value="31">Malayalam</option><option value="32">Manipuri</option><option value="33">Marathi</option><option value="34">Marwari</option><option value="35">Miji</option><option value="36">Mizo</option><option value="37">Monpa</option><option value="38">Nicobarese</option><option value="39">Nepali</option><option value="40">Oriya</option><option value="41">Punjabi</option><option value="42">Rajasthani</option><option value="43">Sanskrit</option><option value="44">Santhali</option><option value="45">Sindhi</option><option value="46">Sourashtra</option><option value="47">Tamil</option><option value="48">Telugu</option><option value="49">Tripuri</option><option value="50">Tulu</option><option value="51">Urdu</option></select>&nbsp;</td>
              </tr>
              <tr class="hline2">

                <td><div align="left" id="caste">Caste/Division </div></td>

                <td><div align="left" id="caste_rel">

                    <select name="caste" class="forminput" id="caste" style="width:215px;" disabled="true" >

                        <option>Others</option>
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

					

					<input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:75px;" name="Submit" type="image" value="Search" onclick="">

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

			<td>

			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">

              <tr>

                <td align="center"><h3><strong><a href="edu_search.php" class="bodylink style1">Educational  Search</a></strong></h3></td>

              </tr>

              <tr>

                <td align="center"><a href="edu_search.php"><img src="images/icons/search/education_srch.png" width="64" height="64" /></a></td>

              </tr>

              <tr>

                <td align="center">Search and locates members who are finished higher education that you would look for in a partner. </td>

              </tr>

            </table>

			</td>

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

			<td>

			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">

                <tr>

                  <td align="center"><h3><strong><a href="location_search.php" class="bodylink style1">Location Search </a></strong></h3></td>

                </tr>

                <tr>

                  <td align="center"><a href="location_search.php"><img src="images/icons/search/search_globe.png" width="64" height="64" /></a></td>

                </tr>

                <tr>

                  <td align="center">Search based on the Location criteria that you   would look for in a partner.</td>

                </tr>

              </table>

			</td>

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