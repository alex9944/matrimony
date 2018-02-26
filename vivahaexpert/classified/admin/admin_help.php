<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

if(isset($_REQUEST['description']))
{
$descr=mysql_real_escape_string($_REQUEST['term']);
$select_text=mysql_query("SELECT * FROM sitesetting");
$count=mysql_num_rows($select_text);
if($count!=0)
{
mysql_query("update sitesetting set help_content='$descr'");
}
else
{
if(mysql_query("INSERT INTO sitesetting(help_content)values('$descr')"))
{
echo "<font>('Your Description added successfully');</font>";
}
else
{
echo "failed to add Help content";
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


<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<script language="javascript1.1">
function validate()
{
 tinyMCE.triggerSave();
if(document.termtext.term.value=="")
{
alert("Please Enter The Text");
document.termtext.term.focus();
return false;
}
}
</script>

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
	
	<tr>
		<td height="223" colspan="2">
			<table width="83%" align="center" cellspacing="0" style="border:solid 1px #669966;">
				<tr>
				  <td height="27" bgcolor="#edcfde" class="link1">Help content  </td>
				   <td align="right" bgcolor="#edcfde" class="ad_text_color"><a href="javascript:history.back()">Back</a></td
				></tr>
				<tr>
				  <td align="right" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="termtext" action="" method="post" onsubmit="return validate();"><table width="372" height="79" align="center" cellspacing="0" style="border:0px solid #D8F1E4;">
					
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="95%" align="center">
						  <?php $select_text=mysql_query("SELECT `help_content` FROM sitesetting"); 
						  $fetch_text=mysql_fetch_array($select_text);
						  ?>
						    <textarea name="term" id="term" rows="25" cols="80"><?php echo stripslashes($fetch_text['help_content']) ?></textarea>
						  </td>
						</tr>
						<tr>
							<td>&nbsp;
								
							</td>
						</tr>
						<tr><td align="center" bgcolor="#faf3f7">
					<!--	<input name="description" type="submit" id="description" value="ADD" disabled="disabled" />This feature is disabled in the demo version... -->
					<input name="description" type="submit" id="description" value="SUBMIT" class="but_bg" />
						  &nbsp;&nbsp;<input type="button" name="Submit" value="Back" class="but_bg" onclick="javascript:history.back();"/></td></tr>
						
				  </table></form>
				</td></tr>
				<tr bgcolor="#faf3f7"><td>&nbsp;</td></tr>
		  </table>	  </td>
	</tr>
</table>
</body>
</html>
