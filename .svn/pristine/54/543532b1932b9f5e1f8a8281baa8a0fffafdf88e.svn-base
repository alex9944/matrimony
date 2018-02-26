<?php session_start();
ob_start();
include "../config/error.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
$editid=$_REQUEST['editid'];
$membership_select=mysql_query("select * from `membership` where `id`='$editid'");
$membership_fetch=mysql_fetch_array($membership_select);

if(isset($_REQUEST['Submit']))
{
if($membership_fetch['member']==Free)
{

$duration=$_REQUEST['duration'];
$postads=$_REQUEST['postads'];
//echo "update `membership` set `duration`='$duration',`postads`='$postads' where `id`='$editid'";
mysql_query("update `membership` set `duration`='$duration',`postads`='$postads' where `id`='$editid'");
header("location:manageamount.php?msg=1");
}
else if($membership_fetch['member']==Payment)
{
$payment=$_REQUEST['payment'];
$duration1=$_REQUEST['duration1'];
$postads1=$_REQUEST['postads1'];
$paymentduration=$_REQUEST['paymentduration'];
//echo "update `membership` set `payment`='$payment',`duration`='$duration1',`postads`='$postads1',`payduration`='$paymentduration' where `id`='$editid'";
mysql_query("update `membership` set `payment`='$payment',`duration`='$duration1',`postads`='$postads1',`payduration`='$paymentduration' where `id`='$editid'");
header("location:manageamount.php?msg=1");
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $adminsitename;?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="98%" border="0" cellpadding="3" cellspacing="1" valign="top" align="center">
  <tr>
    <td colspan="9"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td width="100%" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  
  
 
        
        
         <tr bgcolor="#FFFFFF">
          <td height="746" valign="top"  ><br />
            <table width="60%" border="0" align="center" valign="top" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4%" align="right" valign="bottom"><img src="../images/box_left_top.jpg" width="17" height="17" /></td>
                <td width="92%" background="../images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
                <td width="4%" align="left" valign="bottom"><img src="../images/box_right_top.jpg" width="17" height="17" /></td>
              </tr>
              <tr>
                <td background="../images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
                <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="top">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center" valign="top"><table width="100%" border="0" align="center" valign="top" cellpadding="0" cellspacing="0">
                              <tr>
                                <td  align="left" valign="top" ><form action="" method="post" enctype="multipart/form-data" name="postForm" id="form1" onsubmit="return postCheck();">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="top">
                                      <tr>
                                        <td colspan="3" align="center" >
										 
										
										</td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" class="head_bg"><strong>Edit Membership Details: </strong></td>
                                      </tr>
                                      <tr>
                                        <td width="37%" valign="top" class="bold">Membership Type </td>
                                        <td width="2%" align="center" class="bold"><strong>:</strong></td>
                                        <td width="61%"><?php echo $membership_fetch['member'];?></td>
                                      </tr>
									  <?php 
									  if($membership_fetch['member']==Free)
									  {
									  ?>
                                      <tr>
                                        <td class="bold">Duration<font color="#FF0000" size="-4">&nbsp;</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><input name="duration" type="text" id="duration" value="<?php echo $membership_fetch['duration'];?>"/></td>
                                      </tr>
                                     <tr>
                                        <td class="bold">Post Ad's </td>
                                        <td align="center" class="bold">:</td>
                                        <td><input name="postads" type="text" id="postads" value="<?php echo $membership_fetch['postads'];?>"/></td>
                                      </tr>
									  <?php } else { ?>
									  <tr>
                                        <td class="bold">Payment<font color="#FF0000" size="-4">&nbsp;</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><input name="payment" type="text" id="payment" value="<?php echo $membership_fetch['payment'];?>"/></td>
                                      </tr>
									  <tr>
                                        <td class="bold">Duration<font color="#FF0000" size="-4">&nbsp;</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><input name="duration1" type="text" id="duration1" value="<?php echo $membership_fetch['duration'];?>"/></td>
                                      </tr>
									  <tr>
                                        <td class="bold">Post Ad's<font color="#FF0000" size="-4">&nbsp;</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><input name="postads1" type="text" id="postads1" value="<?php echo $membership_fetch['postads'];?>"/></td>
                                      </tr>
									  <tr>
                                        <td class="bold">Payment Duration<font color="#FF0000" size="-4">&nbsp;</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><input name="paymentduration" type="text" id="paymentduration" value="<?php echo $membership_fetch['payduration'];?>"/></td>
                                      </tr>
									  <?php } ?>
									  
                                      <tr>
                                        <td colspan="3" align="center"><input type="button" onclick="alert('This Feature Is Disabled In The Demo Version...');
return false;" name="Submit" value="update" /></td>
                                      </tr>
                                      
                                      <tr>
                                        <td align="right" colspan="3"><span class="ad_text_color"><a href="manageclassified.php"></a></span></td>
                                      </tr>
                                    </table>
                                </form></td>
                              </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
                <td background="../images/box_right_center.jpg" style="background-position:left; background-repeat:repeat-y;">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><img src="../images/box_left_bottom.jpg" width="17" height="17" /></td>
                <td valign="top" background="../images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
                <td align="left" valign="top"><img src="../images/box_right_bottom.jpg" width="17" height="17" /></td>
              </tr>
           </table></td>
        </tr>
      
  
  
  
</table>
</body>
</html>
