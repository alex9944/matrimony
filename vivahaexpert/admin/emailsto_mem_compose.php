<?php include('protect.php'); ?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Sending Email</title>

</head>

<link href="style.css" rel="stylesheet" type="text/css">

<script language="JavaScript" type="text/javascript" src="wysiwyg.js">

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

        <td width="80%"><table width="100%" height="400" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td>&nbsp;</td>

                <td class="headertext">&nbsp;</td>

              </tr>

              <tr>

                <td width="3%"><img src="images/icon21.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">Sending Email to Members </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                      <div align="left" class="smalltextred"> Below is the compose message box. You can   send the Email by clicking continue link </div>

                  </div></td>

                </tr>

              </table></td>

          </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>

            <form action="emailsto_mem_submit.php" method="get">

			  <table width="90%" border="0" align="center" cellpadding="5" cellspacing="0">

                <tr>

                  <td width="14%">To</td>

                  <td width="86%">

				  

				  <?

$plan = mysql_query("SELECT Distinct(Status) from register ");

echo( '<select name="status" class="formselect">' ); 

while($row = mysql_fetch_array($plan))

{ 
if( $row['Status'] != 'PLATINUM')
  echo  '<option value='.$row['Status'].'>'.$row['Status']. '</option>';

} 

echo '</select>';  

?>

                  <span class="formselect">Members</span></td>

                </tr>

                <tr>

                  <td>Subject</td>

                  <td><input name="Subject" type="text" class="formselect" id="Subject" value="Welcome to <?php echo $sitename; ?>" size="100" maxlength="230" /></td>

                </tr>

                <tr>

                  <td>Body</td>

                  <td>

				  <textarea id="textarea1" name="test1" style="height: 350px; width: 600px;">



</textarea>

<script language="javascript1.2">

  generate_wysiwyg('textarea1');

</script>









				  

				  </td>

                </tr>

                <tr>

                  <td>&nbsp;</td>

                  <td><input name="Submit" type="submit" class="green-button" value="Continue &gt;&gt;" /></td>

                </tr>

              </table>

			  </form>

              <p>&nbsp;</p>

              <p align="center">&nbsp;</p></td>

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

