<?php 
include('protect.php'); ?>
<?php 

include '../dbconnect.php'; 

$strmid=$_GET['ID']; 

$result = mysql_query("SELECT * from pages WHERE parent = 0");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<SCRIPT LANGUAGE="JavaScript">

<!-- Begin

var win = null;

function newWindow(mypage,myname,w,h,features) {

  var winl = (screen.width-w)/2;

  var wint = (screen.height-h)/2;

  if (winl < 0) winl = 0;

  if (wint < 0) wint = 0;

  var settings = 'height=' + h + ',';

  settings += 'width=' + w + ',';

  settings += 'top=' + wint + ',';

  settings += 'left=' + winl + ',';

  settings += features;

  win = window.open(mypage,myname,settings);

  win.window.focus();

}

//  End -->

</script>

<title>Edit Pages</title>

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

        <td width="80%" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

          <tr>

            <td>&nbsp;</td>

            <td class="headertext">&nbsp;</td>

          </tr>

          <tr>

            <td width="3%"><img src="images/members.gif" width="16" height="16" /></td>

            <td width="97%" class="headertext">EDIT PAGES</td>

          </tr>

        </table>

          <br />

          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

            <tr>

              <td><div align="center" class="smalltextgrey">

                  <div align="left" class="smalltextred"> Below is the list of all pages. You can edit and delete the pages here. </div>

              </div></td>

            </tr>

          </table>

          <p>&nbsp;</p>

		  

        

		  <table width="95%" height="30" border="0" align="center" cellpadding="3" cellspacing="0" class="blackbox">

            <tr>

              <td bgcolor="#ECECEC" class="paratext">Page ID</td>

              <td bgcolor="#ECECEC" class="paratext">Page Name</td>

              <td bgcolor="#ECECEC" class="paratext">Status</td>
              <td bgcolor="#ECECEC" class="paratext">Edit Page</td>

            </tr>

			 <?php  
			 $psno = 1;
			 while($row = mysql_fetch_array($result)){ ?>

			 

		   

			 <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">

              <td class="Partext1"><?php  echo $psno;?></td>

              <td class="Partext1"><?php  echo $row['pName']?></td>

              <td class="Partext1"><?php  echo $row['status']?></td>

              <td class="Partext1">			  <a href="#null" title="Edit <?php  echo $row['pName']?>" onClick="newWindow('edit_page_go.php?id=<?php  echo $row['pId']?>','','550','575')">

			  <img src="images/edit.gif" width="14" height="14" border="0" />

			  </a>
</td>
            </tr>

			<tr>

              <td colspan="7" background="images/dot.gif" height="2"></td>

              </tr>
              <?Php
              $childpages = mysql_query("SELECT * from pages WHERE parent = ".$row['pId']);
			  while($childpages_exec = mysql_fetch_array($childpages))
			  {
				  $psno++;
?>
			 <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">

              <td class="Partext1"><?php  echo $psno;?></td>

              <td class="Partext1"> &dagger;__ <?php  echo $childpages_exec['pName']?></td>

              <td class="Partext1"><?php  echo $childpages_exec['status']?></td>

              <td class="Partext1">			  <a href="#null" title="Edit <?php  echo $childpages_exec['pName']?>" onClick="newWindow('edit_page_go.php?id=<?php  echo $childpages_exec['pId']?>','','550','575')">

			  <img src="images/edit.gif" width="14" height="14" border="0" />

			  </a>
</td>
            </tr>

			<tr>

              <td colspan="7" background="images/dot.gif" height="2"></td>

              </tr>
			<?Php }
			$psno++;} ?>

          </table>

		  

		   

		  

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

