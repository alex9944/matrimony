<?php include('protect.php'); ?>
<?php 
include '../dbconnect.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Pages</title>

<script language="javascript" type="text/javascript">
function validateaddcategory()
{
	if(document.form1.txtcatn.value == "")
	{
		alert("Please enter category name.");
		document.form1.txtcatn.focus();
		return false;
	}
		return true;
}
</script>
</head>
<link href="style.css" rel="stylesheet" type="text/css">

<body>
<?Php
if($_REQUEST["txtcatn"] != "")
{
	$catName = $_REQUEST["txtcatn"];
	
	$count_category = "SELECT COUNT(*) AS categorycount FROM category WHERE catName ='".$catName."'";
	$count_category_exec = mysql_query($count_category);
	$count_category_fetch = mysql_fetch_array($count_category_exec);
	if($count_category_fetch["categorycount"] == 0)
	{
		$insert_page = "INSERT INTO category(catName) VALUES('".$catName."')";
		mysql_query($insert_page);
		$msg = "<font class='smalltextgreen'>Successfully Inserted.</font>";
	}
	else
	{
		$msg = "<font class='smalltextred'>Category Name Already Exist.</font>";
	}
}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">
        <tr>
          <td colspan="2"><?php include("adminheader.php");?></td>
        </tr>
        <tr>
          <td bgcolor="#FCECD6" width="20%" valign="top"><?php include("adminleft.php");?></td>
          <td width="80%" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%">&nbsp;</td>
                <td width="97%" class="headertext">ADD CATEGORY</td>
              </tr>
            </table>
            <br />
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center" class="smalltextgrey">
                    <div align="left" class="smalltextred">Please fill the form to add category. </div>
                  </div></td>
              </tr>
            </table>
            <?php
			if(isset($msg))
			{
				echo '<p align="center">'.$msg.'</p>';
			}
			?>
            <p>&nbsp;</p>
            <form action="" method="post" name="form1" id="form1">
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                <tr>
                  <td width="3%">&nbsp;</td>
                  <td width="10%" class="Partext1">Category Name </td>
                  <td><input name="txtcatn" type="text" class="forminput" id="txtcatn" value="" maxlength="50" /></td>
                </tr>
                <tr>
                  <td colspan="3" height="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="2"><div align="left">
                      <input name="Submit" type="submit" class="green-button" value="Add Category" onclick="return validateaddcategory();" />
                      <input name="Submit2" type="reset" class="green-button" value="Reset" />
                    </div></td>
                </tr>
              </table>
            </form>
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td colspan="2"><?php include("adminfooter.php");?></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
