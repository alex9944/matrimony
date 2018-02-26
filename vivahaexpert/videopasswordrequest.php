<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
$strmatriid = $_GET['MatriID'];

$strmsgid = $_GET['lev'];

?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Password Request Form</h3>
  </div>
  <div class="body" align="left">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
      <tr>
        <td><form action="videopass_send_request_submit.php" method="post" name="form">
            <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table width="472" border="0" align="left" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
                    <tr>
                      <td height="19" colspan="4"><em>Request Video Password from <span><? echo $strmatriid ?>
                        <input name="txthidid" type="hidden" id="txthidid" value="<? echo $strmatriid ?>" />
                        </span></em></td>
                    </tr>
                    <tr>
                      <td height="25" colspan="4" valign="middle"><div align="center">
                          <table width="388" border="0" cellspacing="2" cellpadding="2">
                            <tr>
                              <td><div align="left">
                                  <input name="reqmsg" type="radio" value="1" checked="checked" />
                                </div></td>
                              <td><div align="left">We found your profile to be a good match. Please send me Phone password to proceed further.</div></td>
                            </tr>
                            <tr>
                              <td width="28"><div align="left">
                                  <input name="reqmsg" type="radio" value="2" />
                                </div></td>
                              <td width="283"><div align="left">I am interested in your profile. I would like to view Phone now, send me password.</div></td>
                            </tr>
                          </table>
                        </div></td>
                    </tr>
                    <tr>
                      <td height="25" colspan="4" valign="middle"><div align="center" class="textnormal style8">
                          <div align="left"></div>
                        </div></td>
                    </tr>
                    <tr>
                      <td width="16">&nbsp;</td>
                      <td width="114"><div align="right">Your Matri ID : </div></td>
                      <td width="149"><input name="txtsendid1" type="text" class="forminput" id="txtsendid1" value="<? echo $_SESSION['matriid'] ?>" readonly="true" /></td>
                      <td width="191"><input name="Submit" type="image" value="Submit" src="pics/send-request.gif" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
              </tr>
            </table>
          </form></td>
      </tr>
    </table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>