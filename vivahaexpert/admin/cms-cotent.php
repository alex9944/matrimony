<?php include('protect.php'); ?>

<?php

include('../dbconnect.php'); 



$row = mysql_fetch_array(mysql_query("SELECT * FROM cms_contents where id= '1' "));

  

 if(isset($_REQUEST['Submit']))
 {
 	$abut=mysql_real_escape_string($_REQUEST['aboutus']);
	$priv=mysql_real_escape_string($_REQUEST['privacy']);
	$terms=mysql_real_escape_string($_REQUEST['terms']);
	$tips=mysql_real_escape_string($_REQUEST['securitytips']);
	
 	$sel=mysql_query("select * from cms_contents where id='1'");
	$selcount=mysql_num_rows($sel); 
	if($selcount > 0)
	{
		
		$up=mysql_query("update cms_contents set about_us='$abut',privacy='$priv',terms='$terms',security_tips='$tips' where id='1'");
	}
	else
	{
		$ins=mysql_query("insert into cms_contents(about_us,privacy,terms,security_tips) values('$abut','$priv','$terms','$tips')");
	}
	
	echo "<script> window.location='cms-cotent.php?suc'; </script>";
 }



?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>

Admin - Site Configuraion

</title>

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
</head>

<link href="style.css" rel="stylesheet" type="text/css">

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#FCECD6" width="20%" valign="top"><?php include("adminleft.php");?></td>

        <td width="80%"><table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="3%"><img src="images/052407-ektron-pmsa-wiki.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">CMS CONTENTS SETTINGS </td>

              </tr>

            </table></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">

			

			<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">

			
              <table width="553" border="0" align="left" cellpadding="2" cellspacing="1">

                <tr>

                 <!-- <td class="Partext1"><strong class="paratext">WebSite</strong></td>-->

                  <td>&nbsp;</td>

                </tr>
				 <tr><td colspan="2">&nbsp;</td></tr>  

                <tr>

                  <td width="142" class="Partext1">About Us </td>

                  <td width="397"><textarea name="aboutus" cols="25" rows="5"><?php echo $row['about_us']; ?></textarea>

                    </td>

                </tr>
				 <tr><td colspan="2">&nbsp;</td></tr>  

                <tr>

                  <td class="Partext1">Privacy and Policy</td>

<td><textarea name="privacy" cols="25" rows="5"><?php echo $row['privacy']; ?></textarea>

                    </td>

                </tr>
				 <tr><td colspan="2">&nbsp;</td></tr>  

                <tr>

                  <td class="Partext1">Terms and Conditions</td>

<td><textarea name="terms" cols="25" rows="5"><?php echo $row['terms']; ?></textarea>

                    </td>
                </tr>
				 <tr><td colspan="2">&nbsp;</td></tr>  

                <tr>

                   <td class="Partext1">Security Tips</td>

<td><textarea name="securitytips" cols="25" rows="5"><?php echo $row['security_tips']; ?></textarea>

                    </td>

                </tr>

                <tr><td colspan="2">&nbsp;</td></tr>              
				
				
				
                <tr>

                  <td>&nbsp;</td>

                  <td><input name="Submit" type="submit" class="green-button" value="Submit" /></td>

                </tr>
				<tr><td colspan="2">&nbsp;</td></tr>  
				<tr><td colspan="2">&nbsp;</td></tr>  

              </table>



            </form>

			

			

			</td>

            </tr>

          

        </table></td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

