<?php session_start();include('protect.php'); ?>
<?php 
include '../dbconnect.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Pages</title>

<!-- WYSIWYG EDTIOR -->
<link rel="stylesheet" href="docs/style.css" type="text/css">
<script type="text/javascript" src="scripts/wysiwyg.js"></script>
<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
<script type="text/javascript">
			WYSIWYG.attach('content', full); // full featured setup
		</script>
<!-- WYSIWYG EDTIOR -->
<script language="javascript" type="text/javascript">
function validateaddpage()
{
	if(document.form1.txtpgn.value == "")
	{
		alert("Please enter the page name.");
		document.form1.txtpgn.focus();
		return false;
	}
		return true;
}
/*function forpagelink()
{
	pagename = document.form1.txtpgn.value;
	pagelink = pagename.toLowerCase();
	pagelink1 = pagelink.replace("&","and");
	pagelink2 = pagelink1.replace(" ","_");
	document.form1.txtpgl.value = pagelink2;
}*/
</script>
</head>
<link href="style.css" rel="stylesheet" type="text/css">

<body>
<?Php
if($_REQUEST["txtpgn"] != "")
{
	$pName = $_REQUEST["txtpgn"];
	$pLink = $_REQUEST["txtpgl"];
	$parent = $_REQUEST["txtpa"];
	$hmenu = $_REQUEST["txthmenu"];
	$content = addslashes($_REQUEST["content"]);
	$status = $_REQUEST["txtstatus"];
	
	$count_pages = "SELECT COUNT(*) AS pagecount FROM pages WHERE pName ='".$pName."' AND menucategory ='".$hmenu."'";
	$count_pages_exec = mysql_query($count_pages);
	$count_pages_fetch = mysql_fetch_array($count_pages_exec);
	if($count_pages_fetch["pagecount"] == 0)
	{
		$insert_page = "INSERT INTO pages(pName,pLink,parent,menucategory,content,status) VALUES('".$pName."','".$pLink."','".$parent."','".$hmenu."','".$content."','".$status."')";
		mysql_query($insert_page);
		$msg = "<font class='smalltextgreen'>Successfully Inserted.</font>";
	}
	else
	{
		$msg = "<font class='smalltextred'>Pagename Already Exist.</font>";
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
                <td width="97%" class="headertext">ADD PAGES</td>
              </tr>
            </table>
            <br />
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center" class="smalltextgrey">
                    <div align="left" class="smalltextred">Please fill the form to add pages. </div>
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
                  <td width="10%" class="Partext1">Page Name </td>
                  <td><!--<input name="txtpgn" type="text" class="forminput" id="txtpgn" value="" maxlength="50" onblur="forpagelink()" />--><input name="txtpgn" type="text" class="forminput" id="txtpgn" value="" maxlength="50" /></td>
                </tr>
                <tr>
                  <td colspan="3" height="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Page Link</td>
                  <td><input name="txtpgl" type="text" class="forminput" id="txtpgl" value="" /></td>
                </tr>
                <tr>
                  <td colspan="3" height="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Parent</td>
                  <td><select name="txtpa" id="txtpa" class="formselect">
                      <option value="0">--None--</option>
                      <?Php
					  	$parentlink = "SELECT pId,pName FROM pages WHERE parent = 0 AND status = 'Active'";
						$parentlink_exec = mysql_query($parentlink);
						while($parentlink_fetch = mysql_fetch_array($parentlink_exec))
						{
					  ?>
	                      <option value="<?php echo $parentlink_fetch["pId"];?>"><?php echo $parentlink_fetch["pName"];?></option>
                      <?Php
						}
					  ?>	
                    </select></td>
                </tr>
                <tr>
                  <td colspan="3" height="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Menu Category</td>
                  <td><select name="txthmenu" id="txthmenu" class="formselect">
                      <option value="">--None--</option>
                      <?Php
					  	$category = "SELECT catName,catId FROM category";
						$category_exec = mysql_query($category);
						while($category_fetch = mysql_fetch_array($category_exec))
						{
					  ?>
	                      <option value="<?php echo $category_fetch["catId"];?>"><?php echo $category_fetch["catName"];?></option>
                      <?Php
						}
					  ?>	
                    </select></td>
                </tr>
                <tr>
                  <td colspan="3" height="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Content</td>
                  <td><textarea name="content" id="content"></textarea></td>
                </tr>
                <tr>
                  <td colspan="3" height="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Status</td>
                  <td><select name="txtstatus" id="txtstatus" class="formselect">
                      <option value="Active">Active</option>
                      <option value="Inactive">Inactive</option>
                    </select></td>
                </tr>
                <tr>
                  <td colspan="3" height="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="2"><div align="left">
                      <input name="Submit" type="submit" class="green-button" value="Add Page" onclick="return validateaddpage();" />
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
