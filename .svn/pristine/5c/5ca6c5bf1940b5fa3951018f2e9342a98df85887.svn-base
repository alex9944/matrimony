<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
$update1 = mysql_query("update register set Photoprotect='',PhotoprotectPassword='' WHERE MatriID='".$_SESSION['username']."' OR ConfirmEmail = '".$_SESSION['username']."'");
?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Remove Photo Protect</h3>
  </div>
  <div class="body" align="left">
    <form action="#" method="post" name="form" id="form">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
        <tr>
          <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">If the photo is protected is removed, then other members can visible your photo. </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">
                    <table width="374" border="0" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
                      <tr>
                        <td width="312" height="19"><div align="center">Photo Protect has been removed Successfully. </div></td>
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
    </form>
    
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>