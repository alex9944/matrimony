<?php include("memprotect.php"); ?>

<?php include("config.php"); ?>



<?

include('dbconnect.php');





$str_fage= strip_tags($_POST['Fromage']);

$str_tage= strip_tags($_POST['Toage']); 

//$str_hei= implode(",",$_POST['txtPHeight']);

$height_range[]  = $_REQUEST['height_range_frm'];
$height_range[]  = $_REQUEST['height_range_to'];
$str_hei         = implode(" to ",$height_range);

$str_com= strip_tags($_POST['txtPComplexion']);

$str_par= strip_tags($_POST['txtPPE']); 

$str_lag= strip_tags($_POST['Language']);  

$str_rel= strip_tags($_POST['religion']);  

$str_cas= implode(",",$_POST['caste']);

$str_edu =strip_tags($_POST['txtPEdu']); 

$str_cou= strip_tags($_POST['txtPcountry']); 

$str_res= strip_tags($_POST['txtPReS']); 

$strid = strip_tags($_SESSION['matriid']);



//echo "update register set PE_FromAge ='$str_fage',PE_ToAge  ='$str_tage',PE_Height  ='$str_hei',PE_Complexion  ='$str_com',PartnerExpectations  ='$str_par',PE_Religion  ='$str_rel',PE_Caste ='$str_cas',PE_Education  ='$str_edu',PE_Countrylivingin  ='$str_cou', PE_Residentstatus ='$str_res' WHERE MatriID= '$strid' ";



$update1 = mysql_query("update register set PE_FromAge ='$str_fage',PE_ToAge  ='$str_tage',PE_Height  ='$str_hei',PE_Complexion  ='$str_com',PartnerExpectations  ='$str_par',PE_MotherTongue ='$str_lag',PE_Religion ='$str_rel',PE_Caste='$str_cas',PE_Education  ='$str_edu',PE_Countrylivingin  ='$str_cou',PE_Residentstatus ='$str_res' WHERE MatriID= '$strid' ") or die("Could not update data because ".mysql_error());





	print "<script>";

  print " self.location='modifyprofile.php?action=parsuccess&#q8';"; // Comment this line if you don't want to redirect

  print "</script>";





?>



