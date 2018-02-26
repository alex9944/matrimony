<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/editprofile.js"></script>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="modifyprofile.php">Modify My Profile</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Edit Basic Information</span> </div>
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
          <h3 class="float_left title">Edit - Basic Information</h3>
        </div>
        <div class="body" align="left">
          <form action="edit_basic.php" method="post" name="MatriForm" id="MatriForm" class="tbl_profiledetails" >
            <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="2"><div align="center"><span class="bodysg"> <span class="h3r"><A name="q1" id="q1"></A></span>
                    <?php 

$StrAction=$_GET['action'];

if ($StrAction == "bisuccess")

{

	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}

else if ($StrAction == "emailtaken")

{

	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert><strong>Email Id you entered already taken. Please enter a New Email.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}

?>
                    </span></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Name</div></td>
                <td><div align="left">
                    <input name="txtName" type="text" class="textbox1" id="txtName" style="width:215px;" value="<? echo $row['Name']; ?>" size="40" maxlength="40">
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Mother tongue </div></td>
                <td><div align="left">
				<?php $Language =array('Tamil', 'Hindi', 'Gujarati', 'Urdu','English','Punjabi','Marathi','Telugu','Malayalam','Bengali','Kannada','Sindhi','Konkani','Oriya','Arabic','Marwari','Aka','Assamese','Awadhi','Bhojpuri','Bhutia','Chatlisgarhi','Chinese','Dogri','French','Garhwali','Garo','Haryanvi','Kakbarak','Kanauji','Kashmiri','Khandesi','Khasi','Koshali','Kumoani','Kutchi','Lepcha','Magahi','Maithili','Malay','Manipuri','Miji','Mizo','Monpa','Nepali','Persian','Rajasthani','Russian','Sanskrit','Santhali','Spanish','Swedish','Tagalog','Tulu','Other');
			 ?>
                    <select name="Language" id="Language" maxlength="2">
                      	<?php
						foreach ($Language as $castes) {
						 if ($row['Language']==$castes) { ?>
                    <option value="<? echo $row['Language']; ?>" selected><? echo $row['Language']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Religion</div></td>
                <td><div align="left">
					<?php $caste =array('Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh  Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');
			 ?>
                    <select name="religion" id="religion" onChange="return caste_disable(document.MatriForm.religion);">
                   <?php
						foreach ($caste as $castes) {
						 if ($row['Religion']==$castes) { ?>
                    <option value="<? echo $row['Religion']; ?>" selected><? echo $row['Religion']; ?></option>
						<?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
					  <?php }  }?> 
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Caste</div></td>
                <td><div align="left">
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
?>
                    <select name="caste" class="forminput" id="caste">
                      <option value="<? echo $row['Caste']; ?>" selected><? echo $row['Caste']; ?></option>
					  <?php	foreach ($slesubcaste as $subcastes) {
						 if ($row['Caste']==$subcastes) { ?>
						 
                    <option value="<? echo $subcastes ?>" selected><? echo $subcastes ?></option>
						<?php } else { ?>
                      <option value="<? echo $subcastes ?>" ><? echo $subcastes ?></option>
					  <?php }  }?> 
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Sub Caste </div></td>
                <td><div align="left">
                    <input name="txtSubcaste" type="text" class="textbox1" id="txtSubcaste" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();" value="<? echo $row['Subcaste']; ?>" size="40" maxlength="50">
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Email</div></td>
                <td><div align="left">
                    <input name="EMAIL" type="text" class="textbox1" id="EMAIL" style="width:215px;"  value="<? echo $row['ConfirmEmail']; ?>" size="40" maxlength="40">
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Confirm Email</div></td>
                <td><div align="left">
                    <input name="EMAILconfirm" type="text" class="textbox1" id="EMAILconfirm" style="width:215px;"  value="<? echo $row['ConfirmEmail']; ?>" size="40" maxlength="40">
                  </div></td>
              </tr>
              <tr class="hline2">
                <td>&nbsp;</td>
                <td><div align="left">
                  <!--  <input name="Submit" type="submit" value="Submit" src="pics/save.gif" align="absmiddle" onclick="return Validate()">-->
					
						 <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return Validate();">
						 
                    <a href="modifyprofile.php"> <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Cancel" type="image" value="Cancel" alt="Cancel" onclick=""> <!--<img src="pics/cancel.gif" width="57" height="18" border="0">--></a></div></td>
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