<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
$_POST['txtTo']= strip_tags($_POST['txtTo']);
$_POST['txtreply']= strip_tags($_POST['txtreply']);
$strdate = date('d-M-Y'); 
//////////////////STORE REPLY MESSAGE/////////////////////////////////////
$insert = mysql_query("insert into sendmessage (receiver,subject, sender,message,date_sent) values ('".$_POST['txtTo']."','".$_POST['subject']."','".$_SESSION['matriid']."','".$_POST['txtreply']."','$strdate ')")
or die("Could not insert data because ".mysql_error());
///////////////////////////////////////////
?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Reply</h3>
  </div>
  <div class="body" align="left">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
      <tr>
        <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="center">Reply has been sent Sucessful. </div></td>
            </tr>
            <tr>
              <td><div align="left"></div></td>
            </tr>
            <tr>
              <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
    </table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>