<?php session_start();
ob_start();
include("config/error.php");
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

$id=$_SESSION['userid'];
//echo "select * from lak_register where `reg_id`='$id'";
$regsql=mysql_query("select * from `class_register` where `reg_id`='$id'");
$View_fetch=mysql_fetch_array($regsql);
$view_name=$View_fetch['reg_name'];
$view_email=$View_fetch['reg_email'];
$view_phone=$View_fetch['reg_phone'];
$view_lastview=$View_fetch['last_visit'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ClickOne.com</title>
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
</head>

<body>
<div align="center">
  <table width="870" border="0" cellpadding="0" cellspacing="0" id="maintable">
    <tr>
      <td width="932" align="left" valign="top"><table width="717" border="0" cellpadding="0" cellspacing="0" style="width:802px;">
        <tr>
      <td width="926" align="left" valign="top"><img src="../images/top_border.jpg" width="925" height="6"></td>
    </tr>
        <tr>
		<td><?php include("includes/innerheader.php");?></td></tr>
         <tr bgcolor="#FFFFFF">
          <td ><br />
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4%" align="right" valign="bottom"><img src="../images/box_left_top.jpg" width="17" height="17" /></td>
                <td width="92%" background="../images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
                <td width="4%" align="left" valign="bottom"><img src="../images/box_right_top.jpg" width="17" height="17" /></td>
              </tr>
              <tr>
                <td background="../images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
                <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="450">
                        <tr>
                          <td align="left" valign="top"  ><form id="form1" name="indexform" method="post" action="" onsubmit="return regCheck();">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                               
                                <tr>
                                  <td height="26" colspan="4" align="left" class="welcome_head">Membership Statistics:</td>
                                </tr>
								<tr>
								<td align="center" class="bold">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td class="sub_title" >&nbsp;</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td class="sub_title" >Free</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold" >&nbsp;</td>
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
                                  <td align="left" class="company_directory"><?php echo $memsql['postads']; ?></td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold">Amount</td>
                                  <td align="center" class="bold">:</td>
                                  <td align="left" class="company_directory"><?php echo $memsql['payment']; ?></td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold">&nbsp;</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="left" class="bold"><span class="sub_title">Payment</span></td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold">Max No. Of Ads</td>
                                  <td align="center" class="bold">:</td>
                                  <td align="left"><span class="company_directory"><?php echo $memsql1['postads']; ?></span></td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold">Amount</td>
                                  <td align="center" class="bold">:</td>
                                  <td align="left"><span class="company_directory"><?php echo $memsql1['payment']."$"; ?>&nbsp;(<?php echo $memsql1['payduration']; ?>) </span></td>
                                  </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" align="center" class="bold">&nbsp;</td>
                                  <td align="center" class="bold">&nbsp;</td>
                                  <td align="center">&nbsp;</td>
                                  </tr>
								  </table>
								  </td>
								  </tr>
								  
                                <tr>
                                  <td height="30" colspan="4" align="center" class="bold"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                <td background="../images/box_right_center.jpg" style="background-position:left; background-repeat:repeat-y;">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><img src="../images/box_left_bottom.jpg" width="17" height="17" /></td>
                <td background="../images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
                <td align="left" valign="top"><img src="../images/box_right_bottom.jpg" width="17" height="17" /></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td  align="left" valign="top" bgcolor="#FFFFFF"><table style="width:802px;" border="0" cellspacing="0" cellpadding="0">
            
          </table></td>
        </tr>
       
        
      </table></td>
    </tr>
	
  </table>  <div id="footer"><?php include("includes/footer.php");?></div>
</div>
</body>
</html>
