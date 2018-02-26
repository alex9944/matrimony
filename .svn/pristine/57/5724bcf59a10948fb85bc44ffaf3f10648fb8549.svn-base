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

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#FCECD6" width="20%" valign="top"><?php include("adminleft.php");?></td>

        <td width="80%" style="vertical-align:top;"><table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="3%"><img src="images/icon24.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">Set Global Password </td>

              </tr>

            </table></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">

			<?php
			if(isset($_REQUEST['Submit']))
			{
			   $new_password  =  trim($_REQUEST['new_password']);
			   $update_sql    =  "update register set adminlogin = '$new_password' ";
			   mysql_query($update_sql);
			   echo "<p style='color:green; text-align:center;'>New Password Updated Successfully.</p>";
			}
			?>

			<form id="form1" name="form1" method="post" action="">

			<table>
			  <tr><td><b>New Password :</b></td><td><input type="text" name="new_password" value="" /></td></tr>
			  <tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="Submit" /></td></tr>
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

