<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
$_POST['ppwd'] = strip_tags($_POST['txtppwd']);



$update1 = mysql_query("update register set Photoprotect='Yes',PhotoprotectPassword='".$_POST['ppwd']."' WHERE MatriID='".$_SESSION['username']."' OR ConfirmEmail = '".$_SESSION['username']."'");
?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Protect my Photo</h3>
  </div>
  <div class="body" align="left">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
      <tr>
        <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="center">
                  <table width="374" border="0" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
                    <tr>
                      <td width="312" height="19"><div align="center">Photo has been Protected Successfully. </div></td>
                    </tr>
                  </table>
                </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="center"><a href="javascript:window.close()">X Close Window</a></div></td>
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