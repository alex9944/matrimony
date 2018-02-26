<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}



if(isset($_POST["Go"]) && ""!=$_POST["Go"]) //form was submitted
{

unset($_SESSION['class_id']);

  	 $file=$_FILES['file_source']['name'];
	if(!$_FILES['file_source']['name']) return;
	$handle = fopen($_FILES['file_source']['tmp_name'],'r');
	if(!$handle) die('Cannot open uploaded file.');
	
		$target="files_import/".$file;
		if(!move_uploaded_file($_FILES['file_source']['tmp_name'], $target))
			{
				$a1 = "File Could Not Be Uploaded";
			}
			else
			{
				
 			
	
			
	$handlec = fopen("$target", "r");
	if(!$handlec)
	{
	$a1 = "Could Not Open File For Reading";
	}
/*	$loopvar=1;
	$loopdt=1;*/
	$_SESSION['class_id']='';
	
	while (($datac = fgetcsv($handlec, 2000, ",")) !== FALSE)
	{  
	
	 $cat_id='';
	 $subcat_id='';
	 $country_id='';
	 $state_id='';
	
	if(($datac[0]!=""))
	{ 

	//echo $loopvar;
		if($loopvar!=1)
		{
		 $p_category=strtolower(mysql_real_escape_string(trim($datac[0])));
		 $p_subcategory=strtolower(mysql_real_escape_string(trim($datac[1])));
		 $p_title=mysql_real_escape_string(trim($datac[2]));
		 $p_price=mysql_real_escape_string(trim($datac[3]));
		 $p_country=strtolower(mysql_real_escape_string(trim($datac[4])));
		 $p_state=strtolower(mysql_real_escape_string(trim($datac[5]))); 
		 $p_city=mysql_real_escape_string(trim($datac[6]));
		 $p_description=strtolower(mysql_real_escape_string(trim($datac[7])));
		 $p_conname=mysql_real_escape_string(trim($datac[8]));
		 $p_conemail=mysql_real_escape_string(trim($datac[9])); 
		 $p_conno=mysql_real_escape_string(trim($datac[10]));
		 $p_date=date('Y-m-d');
		}
	}
	
	if($p_category!='')
	{
	$sel_cat = mysql_query("select * from class_category");
	if(mysql_num_rows($sel_cat) > 0)
	{
		while($fet_cat = mysql_fetch_array($sel_cat))
		{
		  if(strtolower(trim($fet_cat['c_name']))==$p_category)
		  {
		   $cat_id = $fet_cat['c_id'];
		  }
		}
	
	}
	if($cat_id=='')
	{
	  mysql_query("insert into class_category (c_id, c_name ) values ('','$p_category' ) ");
	  $cat_id = mysql_insert_id();
	}
	}
	
	
	if($p_subcategory!='')
	{
	$sel_subcat = mysql_query("select * from class_subcategory");
	if(mysql_num_rows($sel_subcat) > 0)
	{
		while($fet_subcat = mysql_fetch_array($sel_subcat))
		{
		  if(strtolower(trim($fet_subcat['subcategoryname']))==$p_subcategory)
		  {
		   $subcat_id = $fet_subcat['sid'];
		  }
		}
	
	}
	if($subcat_id=='')
	{
	  mysql_query("insert into class_subcategory (sid, cid, subcategoryname ) values ('','$cat_id','$p_subcategory' ) ");
	  $subcat_id = mysql_insert_id();
	}
	}


	if($p_country!='')
	{
	$sel_country = mysql_query("select * from class_country");
	if(mysql_num_rows($sel_country) > 0)
	{
		while($fet_country = mysql_fetch_array($sel_country))
		{
		  if(strtolower(trim($fet_country['country']))==$p_country)
		  {
		   $country_id = $fet_country['countryid'];
		  }
		}
	
	}
	if($country_id=='')
	{
	  mysql_query("insert into class_country (countryid, country ) values ('','$p_country' ) ");
	  $country_id = mysql_insert_id();
	}
	}


	if($p_state!='')
	{
	$sel_state = mysql_query("select * from class_state");
	if(mysql_num_rows($sel_state) > 0)
	{
		while($fet_state = mysql_fetch_array($sel_state))
		{
		  if(strtolower(trim($fet_state['state_name']))==$p_state)
		  {
		   $state_id = $fet_state['stateid'];
		  }
		}
	
	}
	if($state_id=='')
	{
	  mysql_query("insert into class_state (stateid, countryid, state_name ) values ('', '$country_id', '$p_state' ) ");
	  $state_id = mysql_insert_id();
	}
	}
/*echo "insert into class_postclassified (p_category,p_subcategory,p_title,p_price,p_country,p_state,p_city,p_description,p_conname,p_conemail,p_conno,p_date) values ('$cat_id','$subcat_id','$p_title','$p_price','$country_id','$state_id','$p_city','$p_description','$p_conname','$p_conemail','$p_conno','$p_date')";*/

$qry=mysql_query("insert into class_postclassified (p_category,p_subcategory,p_title,p_price,p_country,p_state,p_city,p_description,p_conname,p_conemail,p_conno,p_date) values ('$cat_id','$subcat_id','$p_title','$p_price','$country_id','$state_id','$p_city','$p_description','$p_conname','$p_conemail','$p_conno','$p_date')");

	 $classified=mysql_insert_id();
	 
	 $_SESSION['class_id'].= $classified.",";




	}
	
if($_SESSION['class_id']!='')
{
header("location:view_import.php");
}
else
{
header("location:import_classifieds.php?err");
}

}
}



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
