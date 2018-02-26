<?php session_start();include('protect.php'); ?>

<?php

// Database Connection 

include '../dbconnect.php'; 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>EDIT PAGE</title>
<!-- WYSIWYG EDTIOR -->
<link rel="stylesheet" href="docs/style.css" type="text/css">
<script type="text/javascript" src="scripts/wysiwyg.js"></script>
<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
<script type="text/javascript">
			WYSIWYG.attach('content', full); // full featured setup
		</script>
<!-- WYSIWYG EDTIOR -->

<link href="style.css" rel="stylesheet" type="text/css">

</head>

<script language="javascript1.1">
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
<SCRIPT language=JavaScript>

<!-- 

function win(){

self.close();

//-->

}

</SCRIPT>
<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
 <script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		
    	plugins : "style,layer,save,paste,advlist,autosave",
		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull",
		theme_advanced_buttons2 : "pastetext,pasteword,|,search,replace,|,bullist,numlist,link,unlink,anchor",
		
		theme_advanced_buttons3 : "formatselect,fontselect,fontsizeselect",
		
			// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

	});
	</script>
<body>
<?Php
if($_REQUEST["txtpgn"] != "")
{
	$pId =$_REQUEST['id']; 
	$pName = $_REQUEST["txtpgn"];
	$pLink = $_REQUEST["txtpgl"];
	$parent = $_REQUEST["txtpa"];
	$hmenu = $_REQUEST["txthmenu"];
	$content = addslashes($_REQUEST["content"]);
	$status = $_REQUEST["txtstatus"];
	
	/*$count_pages = "SELECT COUNT(*) AS pagecount FROM pages WHERE  pId != ".$pId." AND pName ='".$pName."' AND menucategory ='".$hmenu."'";
	$count_pages_exec = mysql_query($count_pages);
	$count_pages_fetch = mysql_fetch_array($count_pages_exec);*/
	
	//if($count_pages_fetch["pagecount"])
	if(true)
	{
		$insert_page = "UPDATE pages SET pName='".$pName."',pLink='".$pLink."',parent='".$parent."',menucategory='".$hmenu."',content='".$content."',status='".$status."' WHERE pId=".$pId;
		mysql_query($insert_page);
		echo "<script>
				alert('Successfully Updated.');
				opener.window.location.href='admin-edit-page.php';
				self.close();
			  </script>";
	}
	/*else
	{
		$msg = "<font class='smalltextred'>Pagename Already Exist.</font>";
	}*/
}
 
$strpid=$_REQUEST['id'];
$presult = mysql_query("SELECT * FROM pages where pId='$strpid' ");

?>
<table width="550" height="" border="0" cellpadding="0" cellspacing="0" class="GreenBox">

  <tr>

    <td>

	<form action="edit_page_go.php" method="post" name="form1" id="form1">

	

	<table width="100%" height="" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

	<?php while($row = mysql_fetch_array($presult)){ ?>

      <tr>

        <td width="3%">&nbsp;</td>

        <td colspan="2"><div align="center">EDIT THIS PAGE</div></td>

        </tr>
      <tr>

       <td colspan="3" height="5">&nbsp;</td>

        </tr>
            <?php
			if(isset($msg))
			{
				?>
                      <tr>

       <td colspan="3" height="20" align="center" valign="middle"><?php echo $msg;?></td>
       </tr>
                <?Php
			}
			?>

      <tr>

        <td>&nbsp;</td>

        <td width="33%" class="Partext1">Page Name </td>

        <td width="64%"><!--<input name="txtpgn" type="text" class="forminput" id="txtpgn" value="<? //echo $row['pName'] ?>" maxlength="50" onblur="forpagelink()" />--><input name="txtpgn" type="text" class="forminput" id="txtpgn" value="<? echo $row['pName'] ?>" maxlength="50" readonly="" />

          <input name="id" type="hidden" id="id" value="<? echo $row['pId'] ?>" /></td>

      </tr>
                <tr>
                  <td colspan="3" height="5"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Page Link</td>
                  <td><input name="txtpgl" type="text" class="forminput" id="txtpgl" value="<? echo $row['pLink'] ?>" /></td>
                </tr>
                <tr>
                  <td colspan="3" height="5"></td>
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
	                      <option value="<?php echo $parentlink_fetch["pId"];?>" <?php if($row['parent'] == $parentlink_fetch["pId"]) echo "selected='selected'"; ?>><?php echo $parentlink_fetch["pName"];?></option>
                      <?Php
						}
					  ?>	
                    </select></td>
                </tr>
                <tr>
                  <td colspan="3" height="5"></td>
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
	                      <option value="<?php echo $category_fetch["catId"];?>" <?php if($row['menucategory'] == $category_fetch["catId"]) echo "selected='selected'"; ?>><?php echo $category_fetch["catName"];?></option>
                      <?Php
						}
					  ?>	
                    </select></td>
                </tr>
                <tr>
                  <td colspan="3" height="5"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Content</td>
                  <td><textarea name="content" id="content" rows="8" cols="15"><?Php echo stripslashes($row['content']); ?></textarea></td>
                </tr>
                <tr>
                  <td colspan="3" height="5"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Status</td>
                  <td><select name="txtstatus" id="txtstatus" class="formselect">
                      <option value="Active" <?php if($row['status'] == 'Active') echo "selected='selected'"; ?>>Active</option>
                      <option value="Inactive" <?php if($row['status'] == 'Inactive') echo "selected='selected'"; ?>>Inactive</option>
                    </select></td>
                </tr>
                <tr>
                  <td colspan="3" height="5"></td>
                </tr>

      <tr>

        <td>&nbsp;</td>

        <td colspan="2"><div align="center">

          <input name="Submit" type="submit" class="formselect" value="Edit Page" />

          <input name="Submit2" type="reset" class="formselect" value="Reset" />

</div></td>

        </tr>

      <tr>

        <td height="5">&nbsp;</td>

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

       <td colspan="3" height="5">&nbsp;</td>

        </tr>

		<? } ?>

    </table>

	

	</form>

	</td>

  </tr>

</table>



</body>

</html>

