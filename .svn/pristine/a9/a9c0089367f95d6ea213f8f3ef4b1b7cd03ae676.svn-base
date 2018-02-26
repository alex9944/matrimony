<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
$streiid = $_GET['MatriID'];

$streiidgen = $_GET['gen'];
?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

 <div class="profile_block">

        <div class="header">

          <h3 class="float_left title">Photo Upload Request </h3>

        </div>

        <div class="body" align="left">

          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

            <tr>

              <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td><form name="eiform" id="eiform" action="photo_req_int_send_submit.php"  method="post">

                        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">

                          <tbody>

                            <tr>

                              <td colspan="2" valign="center" bgcolor="#FFFFFF"><strong>Photo Upload Request  : <?php echo $streiid ?></span>

                                  <input name="txteiid" type="hidden" id="txteiid" value="<?php echo $streiid ?>">

                                <input name="txteiidgen" type="hidden" id="txteiidgen" value="<? echo $_SESSION['matriid'] ?>">
								

                                </strong></td>
                            </tr>

                            <tr>

                              <td valign="center"><input name="INTERESTMSG" type="radio" id="INTERESTMSG" value="1" checked="checked"/></td>

                              <td valign="center">I am interested in   your profile. Please upload your Photo. </td>
                            </tr>

                            <tr>

                              <td colspan="2" valign="center"> <input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:65px;" name="Submit" type="image" value="Submit"></td>
                            </tr>
                          </tbody>
                        </table>

                      </form></td>
                  </tr>

                  <tr>

                    <td><div align="right">Ready to take the next step?</div></td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                </table></td>

            </tr>

          </table>

          <div class="hline2"></div>

        </div>

      </div>

</body>
</html>