<?php include('protect.php'); ?>

<?php

// Database Connection 

include '../dbconnect.php'; 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>EDIT CATEGORY</title>

<link href="style.css" rel="stylesheet" type="text/css">

</head>

<script language="javascript1.1">
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
<SCRIPT language=JavaScript>

<!-- 

function win(){

self.close();

//-->

}

</SCRIPT>

<body>
<?Php

if($_REQUEST["txtcatn"] != "")
{
	$catName = $_REQUEST["txtcatn"];
	$catId = $_REQUEST["id"];
	
	$count_category = "SELECT COUNT(*) AS categorycount FROM category WHERE catId !='".$catId."' AND catName= '".$catName."'";
	$count_category_exec = mysql_query($count_category);
	$count_category_fetch = mysql_fetch_array($count_category_exec);
	if($count_category_fetch["categorycount"] == 0)
	{
		$insert_page = "UPDATE category SET catName= '".$catName."' WHERE catId ='".$catId."'";
		mysql_query($insert_page);
		echo "<script>
				alert('Successfully Updated.');
				opener.window.location.href='admin-edit-category.php';
				self.close();
			  </script>";
	}
	else
	{
		$msg = "<font class='smalltextred'>Category Name Already Exist.</font>";
	}
}
 
$strpid=$_REQUEST['id'];
$presult = mysql_query("SELECT * FROM category where catId='$strpid' ");

?>
<table width="400" height="" border="0" cellpadding="0" cellspacing="0" class="GreenBox">

  <tr>

    <td>

	<form action="edit_category_go.php" method="post" name="form1" id="form1">

	

	<table width="100%" height="" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

	<? while($row = mysql_fetch_array($presult)){ ?>

      <tr>

        <td width="3%">&nbsp;</td>

        <td colspan="2"><div align="center">EDIT THIS CATEGORY </div></td>

        </tr>
      <tr>

       <td colspan="3" height="30">&nbsp;</td>

        </tr>
            <?php
			if(isset($msg))
			{
				?>
                      <tr>

       <td colspan="3" height="30" align="center" valign="middle"><?php echo $msg;?></td>
       </tr>
                <?Php
			}
			?>

      <tr>

        <td>&nbsp;</td>

        <td width="33%" class="Partext1">Category Name </td>

        <td width="64%"><input name="txtcatn" type="text" class="forminput" id="txtcatn" value="<? echo $row['catName'] ?>" maxlength="50" />

          <input name="id" type="hidden" id="id" value="<? echo $row['catId'] ?>" /></td>

      </tr>
      <tr>

      <td colspan="3" height="20">&nbsp;</td>

        </tr>

      <tr>

        <td>&nbsp;</td>

        <td colspan="2"><div align="center">

          <input name="Submit" type="submit" class="formselect" value="Edit Category" />

          <input name="Submit2" type="reset" class="formselect" value="Reset" />

</div></td>

        </tr>

      <tr>

        <td height="20">&nbsp;</td>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td colspan="3"><div align="center">

          <div align="center">

            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />

          </div>

        </div></td>

        </tr>
      <tr>

       <td colspan="3" height="20">&nbsp;</td>

        </tr>

		<? } ?>

    </table>

	

	</form>

	</td>

  </tr>

</table>



</body>

</html>

