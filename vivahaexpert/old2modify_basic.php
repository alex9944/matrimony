<?php include("memprotect.php");

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/ajax-dynamic-content.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/ajax-tooltip.js">
<script src="js/login.js" language="javascript"></script>
<script language="javascript" src="js/timepicker.js"></script>
<script language="javascript" src="js/advanced_search_locations.js" type="text/javascript"> </script>
<?Php include("include/innerheadersection.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
  $row = mysql_fetch_array($memcontrol)
?>

<script language="javascript" src="js/editprofile.js"></script>
<script>
function do_request()
{ 
 $.post('generateCaste2.php?lang=<?php echo $row['Language'] ?>&rel=<?php echo $row['Religion'] ?>&cast=<?php echo $row['Caste'] ?>', function(data) {
 
 
	if(data!=''){
	
	document.getElementById('caste_rel').innerHTML = data;
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="modifyprofile.php">Modify My Profile</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Edit Basic Information</span> </div>
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
				<?php $Language =array('-Select-','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Badaga','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu');
				
			 ?>
                    <select name="Language" id="Language" maxlength="2">
                      	<?php
						for($i=0;$i<=51;$i++) {
						 if ($row['Language']==$i) { ?>
                    <option value="<? echo $i; ?>" selected><? echo $Language[$i]; ?></option>
						<?php } else { ?>
                      <option value="<? echo $i ?>" ><? echo $Language[$i] ?></option>
					  <?php }  }?> 
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Religion</div></td>
                <td><div align="left">
					<?php $caste =array('-Select-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');
			 ?>
                    <select name="religion" id="religion" onChange="return caste_disable(document.MatriForm.religion);">
                   <?php
						for($i=0;$i<=16;$i++)  {
						 if ($row['Religion']==$i) { ?>
                    <option value="<? echo $i; ?>" selected><? echo  $caste[$i] ?></option>
						<?php } else { ?>
                      <option value="<? echo $i; ?>" ><? echo $caste[$i] ?></option>
					  <?php }  }?> 
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left" >Caste</div></td>
                <td><div align="left" id="caste_rel">
	
                    <select name="caste" class="forminput" id="caste" style="width:220px;" disabled="true" >

                        <option>Others</option>

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