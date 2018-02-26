<?php include('protect.php'); ?>

<?php

include('../dbconnect.php'); 

if($_FILES['sitelogo']['name']!='')
				{
					$newfilename=basename($_FILES['sitelogo']['name']);
					$tmpfilename=$_FILES['sitelogo']['tmp_name'];
					$uploadpath1="../images/".$newfilename;
					move_uploaded_file($tmpfilename,$uploadpath1); 
					$photofile='';
					if($newfilename!="")
						{
	$photofile=" ,site_logo='$newfilename' ";
						}
				}




$update = mysql_query("UPDATE siteconfig set Webname = '".$_POST['txtwebsitename']."',WebFriendlyname ='".$_POST['txtwebsitefriendlyname']."',Weblogopath = '".$_POST['txtwebsitelogopath']."',Title ='".$_POST['txtwebtitle']."',Description ='".$_POST['txtwebmetadesc']."',Keywords ='".$_POST['txtwebmetakeywords']."',Footer='".$_POST['txtwebfooter']."',smtp_server='".$_POST['txtdbserver']."',smtp_user = '".$_POST['txtdbusername']."',smtp_password = '".$_POST['txtdbpassword']."',address='".$_POST['contactaddress']."',ContactEmail = '".$_POST['txtContactusemail']."',paypal='".$_POST['paypalid']."',profile_prefix='".$_POST['txtdbprefix']."',bank='".$_POST['bankdetails']."',contact_num= '".$_POST['contactnum']."'$photofile WHERE ID='1' ")

or die("Could not insert data because ".mysql_error());

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>

Admin - Site Configuraion

</title>

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

        <td width="80%"><table width="100%" height="450" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="3%"><img src="images/icon24.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">SITE CONFGURATION SETTINGS </td>

              </tr>

            </table></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>

              <p>&nbsp;</p>

              <table width="500" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC" class="GreenBox">

                <tr>

                  <form name="form1" id="form1" method="post" action="login_submit.php" onsubmit="return memloginvalidate()">

                    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

                        <tr>

                          <td colspan="3" class="smalltextgrey"><div align="center"><strong>WEBSITE SETTINGS  CONFIRMATION </strong></div></td>

                        </tr>

                        <tr>

                          <td width="3">&nbsp;</td>

                          <td width="464" class="HeadText1">&nbsp;</td>

                          <td width="5">&nbsp;</td>

                        </tr>

                        <tr>

                          <td>&nbsp;</td>

                          <td><div align="center"><span class="smalltextred">Website Configuration Settings Successful. </span></div></td>

                          <td>&nbsp;</td>

                        </tr>

                        <tr>

                          <td>&nbsp;</td>

                          <td>&nbsp;</td>

                          <td>&nbsp;</td>

                        </tr>

                    </table></td>

                  </form>

                </tr>

              </table>              <p align="center">&nbsp;</p></td>

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

