<?php include("memprotect.php");

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?Php include("include/innerheadersection.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
  $row = mysql_fetch_array($memcontrol)
?>

<script language="javascript" src="js/editprofile2.js"></script>
<script>
function do_request()
{ 
 $.post('generateCaste2.php?lang=<?php echo $row['Language'] ?>&rel=<?php echo $row['Religion'] ?>&cast=<?php echo $row['Caste'] ?>', function(data) {
 
 
	if(data!=''){
	
	document.getElementById('caste_rel1').innerHTML = data;
	}});

}

function do_request1()
{ 
document.getElementById('caste_rel1').innerHTML = "<img src='loading.gif'>";

 $.post('generateCaste2.php?lang='+document.getElementById('Language').selectedIndex+'&rel='+document.getElementById('religion1').selectedIndex, function(data) {

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
  
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	
	?>
  <div class="col-md-9">
    <div id="inner_right" > 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $row['Name']?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Edit - Basic Information</h3>
        </div>
        <div class="body" align="left">
         
          <FORM action="edit_basic.php" class="form-horizontal" role="form" method="post" name="MatriForm" id="MatriForm" style="margin-left:30%;">
          
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

                <div class="form-group">
                <div class="col-md-10">
                 <label> Name</label>
                </div>
                    <div class="col-md-10">
                    <input type="text" name="txtName" class="form-control" id="email" placeholder="" style="width:50%;  float: left;" value="<? echo $row['Name']; ?>" size="40" maxlength="40">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-10">
                 <label>Mother tongue</label>
                </div>
                  <div class="col-md-10">
                    <?php $Language =array('-Select Mother tongue -','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
        
       ?>
                    <select name="Language" class="form-control" id="Language" maxlength="2" style="width:50%;">
                        <?php
            for($i=0;$i<=53;$i++) {
             if ($row['Language']==$i and $row['Language'] != '') { ?>
                    <option value="<? echo $i; ?>" selected><? echo $Language[$i]; ?></option>
            <?php } else { ?>
                      <option value="<? echo $i ?>" ><? echo $Language[$i] ?></option>
            <?php }  }?> 
                    </select>
                  </div>
                </div>
				        <div class="form-group">
                <div class="col-md-10">
                 <label>Religion</label>
                </div>
                  <div class="col-md-10">          
                   <?php $caste =array('-Select Religion-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');
       ?>
                    <select name="religion" id="religion1"   class="form-control" onchange="do_request1(this.value);" style="width:50%;">
                   <?php
            for($i=0;$i<=16;$i++)  {
             if ($row['Religion']==$i) { ?>
                    <option value="<? echo $i; ?>" selected><? echo  $caste[$i] ?></option>
            <?php } else { ?>
                      <option value="<? echo $i; ?>" ><? echo $caste[$i] ?></option>
            <?php }  }?> 
                    </select> 
                  </div>
                </div>
                <div class="form-group">
                <div class="col-md-10">
                 <label>Caste</label>
                </div>
                  <div class="col-md-10" id="caste_rel1" style="width:50%;">
                    <select name="caste" class="forminput" id="caste" style="width:50%;"  >

                        <option>Others</option>

                      </select>
                  </div>
                </div> 
                <div class="form-group">
                <div class="col-md-10">
                 <label>Sub Caste</label>
                </div>
                  <div class="col-md-10">
                    <input name="txtSubcaste" placeholder="Sub Caste" type="text" class="form-control" id="txtSubcaste" style="width:50%;" onBlur="javascript:this.value=this.value.toLowerCase();" value="<? echo $row['Subcaste']; ?>" size="40" maxlength="50">
                  </div>
                </div>    
                
              <div class="form-group">
              <div class="col-md-10">
                 <label>Email</label>
                </div>
                <div class="col-md-10">
                  <input name="EMAIL" placeholder="Email" type="hidden" class="form-control" id="EMAIL" style="width:50%;"  value="<? echo $row['ConfirmEmail']; ?>" size="40" maxlength="40"><? echo $row['ConfirmEmail']; ?>
                </div>
              </div>          
              <div class="form-group">
                <div class="col-md-2">
                   <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit" onclick="return Validate();">
                </div>
                <div class="col-md-2">
                   <a href="modifyprofile.php"> <button class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Cancel" type="image" value="Cancel" alt="Cancel" onclick="">Cancel</button><!--<img src="pics/cancel.gif" width="57" height="18" border="0">--></a></div></td>
                </div>
              </div>           
                  <!--  <input name="Submit" type="submit" value="Submit" src="pics/save.gif" align="absmiddle" onclick="return Validate()">-->
					
						  
           
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