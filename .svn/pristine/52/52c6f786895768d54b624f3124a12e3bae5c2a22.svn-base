<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}


include "includes/Quick_CSV_import.php";

$csv = new Quick_CSV_import();

$arr_encodings = $csv->get_encodings(); //take possible encodings list
$arr_encodings["default"] = "[default database encoding]"; //set a default (when the default database encoding should be used)

if(!isset($_POST["encoding"]))
  $_POST["encoding"] = "default"; //set default encoding for the first page show (no POST vars)

if(isset($_POST["Go"]) && ""!=$_POST["Go"]) //form was submitted
{
  $csv->file_name = $_FILES['file_source']['tmp_name'];
  
  //optional parameters
/*  $csv->use_csv_header = isset($_POST["use_csv_header"]);
  $csv->field_separate_char = $_POST["field_separate_char"][0];
  $csv->field_enclose_char = $_POST["field_enclose_char"][0];
  $csv->field_escape_char = $_POST["field_escape_char"][0];
  $csv->encoding = $_POST["encoding"];*/
  $csv->table_name = "class_postclassified";
  
  //start import now
  $imp_status=$csv->import();
  if($imp_status=='suss')
  {
  header("Location:import_export.php?suss");
  }
  else
  {
  header("Location:import_export.php?err");
  }
}
else
  $_POST["use_csv_header"] = 1;



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo $adminsitename;?></title>

</head>

<body>
<table width="98%" cellpadding="3" cellspacing="1" align="center">
	<tr>
		<td height="26" colspan="9">
			<?php include("includes/adminheader.php");?>		</td>
	</tr>
	<tr><td height="10" colspan="9">&nbsp;</td>
	</tr>
	
	<tr>
	  <td height="20" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  
  	
	<tr >
		<td height="223"  colspan="2" >
			 
  <form method="post" enctype="multipart/form-data">
    <table border="0" align="center" style="border:solid 1px #0F507F;" bgcolor="#faf3f7" width="75%">
	
	<tr valign="top">
	  <td height="20" colspan="3"> <h2 align="center" style="background-color:#edcfde" >CSV import</h2></td>
  </tr>
      <tr>
      	<td>Source CSV file to import:</td>
      	<td rowspan="30" width="10px">&nbsp;</td>
      	<td><input type="file" name="file_source" id="file_source" class="edt" value="<?=$file_source?>"></td>
      </tr>
      <!--<tr>
      	<td>Use CSV header:</td>
      	<td><input type="checkbox" name="use_csv_header" id="use_csv_header" <?=(isset($_POST["use_csv_header"])?"checked":"")?>/></td>
      </tr>
      <tr>
      	<td>Separate char:</td>
      	<td><input type="text" name="field_separate_char" id="field_separate_char" class="edt_30"  maxlength="1" value="<?=(""!=$_POST["field_separate_char"] ? htmlspecialchars($_POST["field_separate_char"]) : ",")?>"/></td>
      </tr>
      <tr>
      	<td>Enclose char:</td>
      	<td><input type="text" name="field_enclose_char" id="field_enclose_char" class="edt_30"  maxlength="1" value="<?=(""!=$_POST["field_enclose_char"] ? htmlspecialchars($_POST["field_enclose_char"]) : htmlspecialchars("\""))?>"/></td>
      </tr>
      <tr>
      	<td>Escape char:</td>
      	<td><input type="text" name="field_escape_char" id="field_escape_char" class="edt_30"  maxlength="1" value="<?=(""!=$_POST["field_escape_char"] ? htmlspecialchars($_POST["field_escape_char"]) : "\\")?>"/></td>
      </tr>
      <tr>
      	<td>Encoding:</td>
      	<td>
          <select name="encoding" id="encoding" class="edt">
          <?
            if(!empty($arr_encodings))
              foreach($arr_encodings as $charset=>$description):
          ?>
            <option value="<?=$charset?>"<?=($charset == $_POST["encoding"] ? "selected=\"selected\"" : "")?>><?=$description?></option>
          <? endforeach;?>
          </select>
        </td>
      </tr>-->
      <tr>
      	<td colspan="3">&nbsp;</td>
      </tr>
      <tr>
      	<td colspan="3" align="center"><input type="Submit" name="Go" value="Import it" onClick=" var s = document.getElementById('file_source'); if(null != s && '' == s.value) {alert('Define file name'); s.focus(); return false;}"></td>
      </tr>
    </table>
  </form>	  </td>
	</tr>
</table>
</body>
</html>
