<?php include('protect.php'); ?>

<?php
include('../dbconnect.php'); 

$result = mysql_query("SELECT * FROM siteconfig where ID= '1' ")

  or die("Could not retrieve data because ".mysql_error());

 



?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>

Admin - Site Configuraion

</title></head>

<link href="style.css" rel="stylesheet" type="text/css">

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

                <td width="3%"><img src="images/icon24.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">SITE CONFIGURATION SETTINGS </td>

              </tr>

            </table></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">

			

			<form id="form1" name="form1" method="post" action="siteconfig_update.php" enctype="multipart/form-data">

			<?php 

			while($row = mysql_fetch_array($result))

			{ ?>





              <table width="553" border="0" align="left" cellpadding="2" cellspacing="1">

                <tr>

                  <td class="Partext1"><strong class="paratext">WebSite</strong></td>

                  <td>&nbsp;</td>

                </tr>

                <tr>

                  <td width="142" class="Partext1">Website Name <span class="smalltextred">*</span> </td>

                  <td width="397"><input name="txtwebsitename" type="text" id="txtwebsitename" value="<?php echo $row['Webname'];?>" maxlength="50" />

                    <span class="smalltextred">(http://www.example.com) </span></td>

                </tr>

                <tr>

                  <td class="Partext1">Website Friendly Name  <span class="smalltextred">*</span></td>

<td><input name="txtwebsitefriendlyname" type="text" id="txtwebsitefriendlyname" value="<?php echo $row['WebFriendlyname'];?>" maxlength="50" />

                    <span class="smalltextred">(Example.Com) </span></td>

                </tr>

                <tr>

                  <td class="Partext1">Website URL <span class="smalltextred">*</span></td>

                  <td><input name="txtwebsitelogopath" type="text" id="txtwebsitelogopath" value="<?php echo $row['Weblogopath'];?>" />

                    <span class="smalltextred">(http://www.example.com/images/logo.jpg) </span></td>

                </tr>

                <tr>

                  <td class="Partext1">Website title <span class="smalltextred">*</span></td>

                  <td><input name="txtwebtitle" type="text" id="txtwebtitle" size="50" maxlength="100" value="<?php echo $row['Title']; ?>" />

                    <br />

                    <span class="smalltextred">(Example.com Matrimonials &ndash; Indian Matrimonial)</span></td>

                </tr>

                <tr>

                  <td class="Partext1">Meta Description </td>

                  <td><textarea name="txtwebmetadesc" cols="40" rows="3" id="txtwebmetadesc"><?php echo $row['Description'];?>

                  </textarea></td>

                </tr>

                <tr>

                  <td class="Partext1">Meta Keywords </td>

                  <td><textarea name="txtwebmetakeywords" cols="40" rows="3" id="txtwebmetakeywords"><?php echo $row['Keywords']; ?></textarea></td>

                </tr>

                <tr>

                  <td class="Partext1">Website Footer <span class="smalltextred">*</span></td>

<td><input name="txtwebfooter" type="text" id="txtwebfooter" size="50" maxlength="100" value="<?php echo  $row['Footer']; ?>" />

                      <br />

                      <span class="smalltextgrey">Copyright &copy; 2006-2007 Example.com Matrimonials -  All Rights Reserved</span>.</td>

                </tr>
				
				<tr>

                  <td class="Partext1">Current Website Logo <span class="smalltextred">*</span></td>

<td> <img src="<?php echo $sitelogo; ?>" alt="phpmatrimonial" width="309" height="64" />

                     </td>

                </tr>
				
				<tr>

                  <td class="Partext1">Website Logo <span class="smalltextred">*</span></td>

<td> <input type="file" name="sitelogo"/>

                     </td>

                </tr>
				<tr>

                  <td class="Partext1">Profile Prefix  <span class="smalltextred">*</span></td>

                  <td><input name="txtdbprefix" type="text" id="txtdbprefix" value="<?php echo $row['profile_prefix']; ?>" />
					</td>
                  </tr>
                <tr>

               <td class="Partext1">&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr>

                  <td class="Partext1"><strong class="paratext">Mail Server Settings</strong></td>

                  <td>&nbsp;</td>

                </tr>

                <tr>

                  <td class="Partext1">SMTP Server  <span class="smalltextred">*</span></td>

                  <td><input name="txtdbserver" type="text" id="txtdbserver" value="<?php echo $row['smtp_server']; ?>" />

                    <span class="smalltextred">(mail.yourdomainname.com)</span> </td>

                </tr>

                <tr>

                  <td class="Partext1">SMTP User  <span class="smalltextred">*</span></td>

                  <td><input name="txtdbusername" type="text" id="txtdbusername" value="<?php echo $row['smtp_user']; ?>" />

                    <span class="smalltextred">(info@yourdomainname.com)</span></td>

                </tr>

                <tr>

                  <td class="Partext1">SMTP Password  <span class="smalltextred">*</span></td>

                  <td><input name="txtdbpassword" type="text" id="txtdbpassword" value="<?php echo $row['smtp_password']; ?>" /></td>

                </tr>
				
				
				 <tr>

                  <td class="Partext1">Paypal Id<span class="smalltextred">*</span></td>

            <td>
	<input  type="text" name="paypalid" id="paypalid" value="<?php echo $row['paypal']; ?>" />
	</td>

                </tr>

               

                <tr>

                  <td class="Partext1">&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr>

                  <td class="paratext"><strong>Contacts Settings </strong></td>

                  <td>&nbsp;</td>

                </tr>

                             

                <tr>

                  <td class="Partext1">Contact Us Email </td>

                  <td><input name="txtContactusemail" type="text" id="txtContactusemail" value="<?php echo  $row['ContactEmail']; ?>" />

                    <span class="smalltextred">(enquiry@example.com)</span></td>

                </tr>

                <tr>

                  <td class="Partext1">Contact Number </td>

                  <td><input name="contactnum" type="text" id="contactnum" value="<?php echo $row['contact_num']; ?>" />

                    <span class="smalltextred">(044-2853655)</span></td>

                </tr>
				<tr>

                  <td class="Partext1">Contact Address </td>

                  <td><textarea rows="5" cols="20" name="contactaddress"><?php echo $row['address']; ?></textarea>

                   </td>

                </tr>
				<tr>

                  <td class="Partext1">Bank Details </td>

                  <td><textarea rows="5" cols="20" name="bankdetails" id="bankdetails"><?php echo $row['bank']; ?></textarea>

                   </td>

                </tr>
                <tr>

                  <td>&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr>

                  <td>&nbsp;</td>

                  <td><input name="Submit" type="submit" class="green-button" value="Submit" /></td>

                </tr>

              </table>

<?php } ?>

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

