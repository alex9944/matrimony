<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $adminsitename;?></title>
</head>
<style type="text/css">
<!--
@import url("../css/style.css"); 
-->
</style>

<link href="../css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FF0000}
.style3 {color: #003399}
-->
</style>
<body>
<table width="98%" border="0" cellpadding="3" cellspacing="1" align="center">
  <tr>
    <td width="95%"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="100%" align="center"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
          <td ><br />
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4%" align="right" valign="bottom"><img src="images/box_left_top.jpg" width="17" height="17" /></td>
                <td width="92%" background="images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
                <td width="4%" align="left" valign="bottom"><img src="images/box_right_top.jpg" width="17" height="17" /></td>
              </tr>
              <tr>
                <td background="images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
                <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="450">
                        <tr>
                          <td align="left" valign="top"  ><form id="form1" name="indexform" method="post" action="" onsubmit="return regCheck();">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                               
                                <tr>
                                  <td height="26" colspan="7" align="left" class="welcome_head">Membership Statistics:</td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td class="sub_title" >&nbsp;</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td class="sub_title">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td class="sub_title" >Free</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td class="sub_title">Payment</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold" >&nbsp;</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                </tr>
                                <?php $memsql=mysql_fetch_array(mysql_query("select * from membership limit 0,1"));
								$memsql1=mysql_fetch_array(mysql_query("select * from membership limit 1,1"));
								?>
                                <tr>
                                  <td width="2%" class="bold">&nbsp;</td>
                                  <td width="24%" height="30" align="center" class="bold" >Max No. Of Ads</td>
                                  <td width="5%" align="center" class="bold"><strong class="bold">:</strong></td>
                                  <td width="16%" align="left" class="company_directory"><?php echo $memsql['postads']; ?></td>
                                  <td width="27%" align="center"><span class="bold">Max No. Of Ads</span></td>
                                  <td width="3%" align="center" class="bold">:</td>
                                  <td width="23%" align="left" class="company_directory"><?php echo $memsql1['postads']; ?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold">Amount</td>
                                  <td align="center" class="bold">:</td>
                                  <td align="left" class="company_directory"><?php echo $memsql['payment']; ?></td>
                                  <td align="center"><span class="bold">Amount</span></td>
                                  <td align="center" class="bold">:</td>
                                  <td align="left" class="company_directory"><?php echo $memsql1['payment']."$"; ?>&nbsp;(<?php echo $memsql1['payduration']; ?>)	</td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold">&nbsp;</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="30" colspan="7" align="center" class="bold"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td align="left" class="welcome_head">Membership Info</td>
                                    </tr>
                                    <tr>
                                      <td align="center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td align="center"><table width="50%" border="0" cellspacing="0" cellpadding="0">
                                       
                                       <?php $countuser=mysql_query("select * from memberregister where userid='$id' and status='1'"); 
									   $memsql11=mysql_fetch_array(mysql_query("select * from  class_membership  where userid='$id'"));
									   ?>
                                       <?php if(mysql_num_rows($countuser)== 0)
									   {
									   
									   $memsql12=mysql_fetch_array(mysql_query("select * from membership where id='$memsql11[memshiptype]'"));
									   
									   
									   ?>
                                        <tr>
                                          <td width="44%" class="sub_title">Member Type</td>
                                          <td width="4%" align="center" class="bold">:</td>
                                          <td width="52%" class="company_directory"><?php echo $memsql12['member']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">Max No Of Ads</td>
                                          <td align="center" class="bold">:</td>
                                          <td class="company_directory"><?php echo $memsql11['maxnoads']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">Avaliable No. Of Ads</td>
                                          <td align="center" class="bold">:</td>
                                          <td class="company_directory"><?php echo $memsql11['avabfree']; ?></td>
                                        </tr>
                                        <?php }else
										{
										$memsql12=mysql_fetch_array(mysql_query("select * from membership where id='$memsql11[memshiptype]'"));
										 ?>
                                        <tr>
                                          <td width="44%" class="sub_title">Member Type</td>
                                          <td width="4%" align="center" class="bold">:</td>
                                          <td width="52%" class="company_directory"><?php echo $memsql12['member']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">Max No Of Ads</td>
                                          <td align="center" class="bold">:</td>
                                          <td class="company_directory"><?php echo $memsql11['maxnoads']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">Free Ads</td>
                                          <td align="center" class="bold">:</td>
                                          <td class="company_directory"><?php echo $memsql11['freeads']; ?></td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">&nbsp;</td>
                                          <td align="center" class="bold">&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">Payment Ads</td>
                                          <td align="center" class="bold">:</td>
                                          <td class="company_directory"><?php echo $memsql11['paymentads']; ?></td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">&nbsp;</td>
                                          <td align="center" class="bold">&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">Avaliable Free  Ads</td>
                                          <td align="center" class="bold">:</td>
                                          <td class="company_directory"><?php echo $memsql11['avabfree']; ?></td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">&nbsp;</td>
                                          <td align="center" class="bold">&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="sub_title">avaliable Payment Ads</td>
                                          <td align="center" class="bold">:</td>
                                          <td class="company_directory"><?php echo $memsql11['avabpayment']; ?></td>
                                        </tr>
                                        
                                        <?php } ?>
                                      </table></td>
                                    </tr>
                                  </table></td>
                                  </tr>
                              </table>
                          </form></td>
                        </tr>
                      </table></td>
                    </tr>
                </table></td>
                <td background="images/box_right_center.jpg" style="background-position:left; background-repeat:repeat-y;">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><img src="images/box_left_bottom.jpg" width="17" height="17" /></td>
                <td background="images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
                <td align="left" valign="top"><img src="images/box_right_bottom.jpg" width="17" height="17" /></td>
              </tr>
            </table></td>
        </tr>
  
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>












